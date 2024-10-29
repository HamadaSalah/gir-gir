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

        $categories = Category::whereHas('packages', function ($query) use ($provider, $minPrice, $maxPrice) {
                $query->where('provider_id', $provider->id);
                if ($minPrice) {
                    $query->where('cost', '>=', $minPrice);
                }
                if ($maxPrice) {
                    $query->where('cost', '<=', $maxPrice);
                }
            })
            ->withCount(['packages' => function ($query) use ($provider) {
                $query->where('provider_id', $provider->id);
            }])
            ->with(['packages' => function ($query) use ($provider) {
                $query->where('provider_id', $provider->id)
                      ->with('files');
            }]);

        if ($categoryId) {
            $categories->where('id', $categoryId);
        }

        $categories = $categories->get();

        $allcategories = Category::get();

        return view('provider-panel.packages.index', compact('categories' , 'allcategories'));
    }


    public function show(Category $category, $package)
    {
        $provider = auth('provider')->user();

        $package = $provider->packages()->where('id', $package)->with('files')->first();

        return view('provider-panel.packages.show', compact('package'));
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
        'files.*' => 'file|mimes:jpg,jpeg,png,pdf,docx,doc',
        'service_name.*' => 'required|string|max:255',
        'service_cost.*' => 'required|numeric',
        'service_image.*' => 'nullable|file|mimes:jpg,jpeg,png|max:2048'
    ]);

    $provider = auth('provider')->user();
    $package = $provider->packages()->create($request->only(['name', 'description', 'cost', 'category_id']));

    // Handle file uploads in parallel
    $paths = collect($request->file('files'))->map(function ($file) {
        return [
            'path' => $file->store('uploads/packages', 'public'),
            'name' => $file->getClientOriginalName(),
        ];
    });
    $package->files()->createMany($paths->toArray());

    // Add services in a single operation
    $services = collect($data['service_name'])->map(function ($serviceName, $index) use ($data, $request) {
        $serviceData = [
            'name' => $serviceName,
            'cost' => $data['service_cost'][$index],
            'image_path' => $request->hasFile("service_image.{$index}") ?
                $request->file("service_image.{$index}")->store('uploads/service_images', 'public') : null,
        ];
        return $serviceData;
    });

    $package->services()->createMany($services->toArray());

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
