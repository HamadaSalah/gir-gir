<?php

namespace App\Http\Controllers\Provider;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackagesController extends Controller
{
    public function index(Request $request)
    {
        $provider = auth('provider')->user();

        $categoryId = $request->input('category');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');

        // Validate inputs
        $request->validate([
            'min_price' => 'nullable|numeric',
            'max_price' => 'nullable|numeric',
        ]);

        // Start with the base query for categories
        $categoriesQuery = Category::whereHas('packages', function ($query) use ($provider, $minPrice, $maxPrice) {
            $query->where('provider_id', $provider->id);

            // Apply price filtering to packages
            if ($minPrice !== null) {
                $query->where('cost', '>=', $minPrice);
            }
            if ($maxPrice !== null) {
                $query->where('cost', '<=', $maxPrice);
            }
        })
        ->withCount(['packages' => function ($query) use ($provider) {
            $query->where('provider_id', $provider->id);
        }])
        ->with(['packages' => function ($query) use ($provider, $minPrice, $maxPrice) {
            $query->where('provider_id', $provider->id);

            // Apply the same price filtering here to the packages
            if ($minPrice !== null) {
                $query->where('cost', '>=', $minPrice);
            }
            if ($maxPrice !== null) {
                $query->where('cost', '<=', $maxPrice);
            }

            $query->with('files'); // Keep files relationship loading
        }]);

        // Filter categories by the selected category ID, if provided
        if ($categoryId) {
            $categoriesQuery->where('id', $categoryId);
        }

        $categories = $categoriesQuery->get();
        $allcategories = Category::all();

        return view('provider-panel.packages.index', compact('categories', 'allcategories'));
    }


    public function show(Category $category, $packageId)
    {
        $provider = auth('provider')->user();

        $package = $provider->packages()
            ->with(['provider', 'services', 'orders'])
            ->findOrFail($packageId);

        $orderingCount = $package->orders()->count();

        return view('provider-panel.packages.show', compact('package', 'orderingCount'));
    }


    public function create()
    {
        $categories = Category::all();

        return view('provider-panel.packages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'cost' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'files.*' => 'file|mimes:jpg,jpeg,png,pdf,docx,doc|max:2048',
            'service_name' => 'required|array|min:1',
            'service_name.*' => 'required|string|max:255',
            'service_cost.*' => 'required|numeric',
            'service_image.*' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        $provider = auth('provider')->user();

        $package = $provider->packages()->create($request->only(['name', 'description', 'cost', 'category_id']));

        if ($request->hasFile('files')) {
            $paths = collect($request->file('files'))->map(function ($file) {
                return [
                    'path' => $file->store('uploads/packages', 'public'),
                    'name' => $file->getClientOriginalName(),
                ];
            });
            $package->files()->createMany($paths->toArray());
        }

        collect($data['service_name'])->each(function ($serviceName, $index) use ($data, $request, $provider, $package) {
            $service = $package->services()->create([
                'name' => $serviceName,
                'cost' => $data['service_cost'][$index],
                'provider_id' => $provider->id,
            ]);

            if ($request->hasFile("service_image.{$index}")) {
                $image = $request->file("service_image.{$index}");
                $service->files()->create([
                    'name' => "{$serviceName} Image",
                    'path' => $image->store('uploads/service_images', 'public'),
                ]);
            }
        });

        return redirect()->route('provider-panel.packages.index')->with('success', 'Package created successfully.');
    }


    public function edit(Category $category, $package)
    {
        $provider = auth('provider')->user();

        $categories = Category::all();

        $package = $provider->packages()->where('id', $package)->with('files')->first();

        return view('provider-panel.packages.edit', compact('package' , 'categories'));
    }

    public function update(Request $request, Category $category, $package)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'cost' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);
        $provider = auth('provider')->user();

        $package = $provider->packages()->where('id', $package)->first();

        $package->update($request->all());

        return redirect()->route('provider-panel.packages.index');
    }

    public function destroy(Category $category, $package)
    {
        $provider = auth('provider')->user();

        $package = $provider->packages()->where('id', $package)->first();

        $package->delete();

        return redirect()->route('provider-panel.packages.index');
    }
}
