<?php

namespace App\Http\Controllers;

use App\Filters\PackagesFilter;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Chat;
use App\Models\CouponCode;
use App\Models\Message;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Package;
use App\Models\Provider;
use App\Models\Rate;
use App\Models\Service;
use App\Models\ServiceProvider;
use App\Models\ServicesToPackage;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
    /**
     * @param Request $request
     * @return Application
     */
    public function index(Request $request)
    {
        $categories = Category::take(5)->get();

        $most_requested_packages = Package::with('files')->latest('id')->take(10)->orderBy('order_count', 'desc')->get();


        $best_shops = Provider::withCount(['services as services_order_count' => function ($query) {
                $query->withCount('orders');
            }])->orderBy('services_order_count', 'desc')->take(3)->get();

        $trendy_packages = Package::take(10)->orderBy('order_count', 'desc')->get();
        $slider = Package::where('to_home', 1)->take(3)->get();


        if ($trendy_packages->isEmpty()) {
            $trendy_packages = Package::inRandomOrder()->take(3)->with('createdBy', 'feedbacks')->get();
        }


        return view('home', compact('categories' ,  'most_requested_packages', 'best_shops', 'trendy_packages', 'slider'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }

    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function search()
    {

        // dd(request()->all());
        $query = Package::with('services');

        $query = app(Pipeline::class)->send($query)->through([
            PackagesFilter::class
        ])->thenReturn();

        $packages = $query->latest('id')->get();


        $serviceIds = $packages->pluck('services.*.id')->flatten()->unique();

        // Now retrieve all services by those IDs and eager-load the packages relationship
        $services = Service::whereIn('id', $serviceIds)->with('packages')->latest('id')->get();

        // dd($services[0]->packages[0] );

        return view('search', ['packages' => $packages, 'services' => $services]);
    }

    public function AllPackages()
    {

        $query = Package::with('services');

        $query = app(Pipeline::class)->send($query)->through([
            PackagesFilter::class
        ])->thenReturn();

        $packages = $query->latest('id')->paginate(6);

        return view('all-packages', ['packages' => $packages]);
    }


    /**
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function providers() {
        return view('providers', ['best_shops' => Provider::with('package.files')->get()]);
    }
    public function bestShops() {

        if (Schema::hasColumn('providers', 'to_home')){
            $providers = Provider::with('package.files')->where('to_home', 1)->with('package.files')->get();
        }
        else {
            $providers = Provider::with('package.files')->get();
        }
        return view('bestShops', ['best_shops' => $providers]);
    }

    /**
     * @param Provider $provider
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function showProvider(Provider $provider) {

        
        $provider->load(['packages']);

        $services = $provider->load('packages.services')
        ->packages
        ->flatMap(function ($package) {
            return $package->services;
        });

        $chat = Chat::with('messages')->where('user_id', auth()->user()->id)->where('provider_id', $provider->id)->first();


        return view('provider.new-home', ['provider' => $provider, 'services' => $services, 'chat' => $chat]);
    }

    public function reviewsProvider(Provider $provider) {

        $provider->load(['rates.user', 'rates.rateable']);

        return view('provider.providerRates' , compact('provider'));

    }

    /**
     * @param Provider $provider
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */


    // public function providerPackage(Provider $provider) {


    //     $categories = Category::whereHas('packages', function ($query) use ($provider) {
    //         $query->where('provider_id', $provider->id);
    //     })->with(['packages' => function ($query) use ($provider) {
    //         $query->where('provider_id', $provider->id);
    //     }])->get();

    //     // $categories = Category::all();

    //     // if($request->has('category_id'))
    //     // {
    //     //     $provider->load(['packages' => function($query) use ($request){
    //     //         $query->where('category_id', $request->category_id);
    //     //     }]);
    //     // }else{
    //     // $provider->load('packages');
    //     // }

    //     // $provider->load(['packages']);

    //     return view('provider.new-packages', ['categories' => $categories, 'provider' => $provider]);
    //     // return view('provider.packages', ['categories' => $categories, 'provider' => $provider]);
    // }

    public function providerPackage(Provider $provider, $categoryId = null) {
        $categories = Category::with(['packages' => function ($query) use ($provider) {
            $query->where('provider_id', $provider->id);
        }])->get();

        if ($categoryId) {
            $categories = $categories->filter(function ($category) use ($categoryId) {
                return $category->id == $categoryId || $category->packages->isNotEmpty();
            });
        }

        $allCategories = Category::all();

        return view('provider.new-packages', [
            'categories' => $categories,
            'provider' => $provider,
            'selectedCategoryId' => $categoryId,
            'allCategories' => $allCategories
        ]);
    }




    public function providerService(Provider $provider) {

        $services = $provider->load('packages.services')
        ->packages
        ->flatMap(function ($package) {
            return $package->services;
        });


        return view('provider.new-services', ['services' => $services, 'provider' => $provider]);
    }

    /**
     * @param Request $request
     * @param Category $category
     * @return Application|Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function category(Request $request,Category $category)
    {

        $category->load('packages');

        $packs = Package::where('category_id', $category->id);

        if(!empty(request('type'))) {
            $packs = $packs->whereHas('provider', function($query){
                $query->where('type', request('type'));
            });
         }
         $packs = $packs->get();

         $serviceIds = $packs->pluck('services.*.id')->flatten()->unique();

         $services = Service::whereIn('id', $serviceIds)->with('packages')->get();
 
 
        return view('category.show', ['packages' => $packs, 'services' => $services, 'category' => $category]);
    }

    public function showPackage(Package $package)
    {
        $another_Service = ServicesToPackage::where('package_id', $package->id)->where('user_id', auth()->user()->id)->get();
        $services = $package->provider->packages->pluck('services')->flatten()->unique() ;
        return view('package', ['package' => $package, 'services' => $services, 'another_Service' => $another_Service, 'an_service' => Service::take(30)->get()]);
    }

    public function showService(Service $service)
    {
        return view('service', ['service' => $service]);
    }

    public function addToCard(Request $request) {

        $discount = NULL;

        if($request->coupon_code) {
            $coupon_code = CouponCode::where('code', $request->coupon_code)->first();
            if($coupon_code) {
                $discount = $coupon_code->dicount;
            }
        }

        if($request->package) {
            $package = Package::find($request->package);
            $package->carts()->create([
                'user_id'=>auth()->user()->id,
                "time_from" => $request->time_from,
                "time_to" => $request->time_to,
                "location" => $request->location,
                "notes" => $request->notes,
                "phone_numbers" => $request->phone_numbers,
                'discount' => $discount
            ]);
        }
        else if($request->service) {
            $service = Service::find($request->service);
            $service->carts()->create([
                'user_id'=>auth()->user()->id,
                "time_from" => $request->time_from,
                "time_to" => $request->time_to,
                "location" => $request->location,
                "notes" => $request->notes,
                "phone_numbers" => $request->phone_numbers,
                'discount' => $discount
            ]);
        }
        return redirect()->route('myCart');

    }

    public function myCart() {

        $carts = Cart::with('cartable')->where('user_id', auth()->user()?->id)->get();
        $totalCost = Cart::with('cartable')
        ->where('user_id', auth()->user()?->id)
        ->get()
        ->sum(function($cart) {
            return $cart->cartable->cost;
        });

        return view('carts', compact('carts', 'totalCost'));
    }

    public function deleteMyCart(Cart $cart) {

        $cart->delete();
        return redirect()->back();

    }

    public function aboutProvider(Provider $provider) {

        $provider->load(['info', 'rates.user', 'rates.rateable']);

        return view('provider.new-about' , compact('provider'));
    }

    public function locationProvider(Provider $provider) {
        $provider->load('info');
        return view('provider.new-location', compact('provider'));
    }

    public function checkout() {

        $carts = Cart::with('cartable')->where('user_id', auth()->user()?->id)->get();
        $totalCost = Cart::with('cartable')
        ->where('user_id', auth()->user()?->id)
        ->get()
        ->sum(function($cart) {
            return $cart->cartable->cost;
        });

        if($carts->count() > 0) {
              $order = Order::create([
                'user_id'=> auth()->user()->id,
                'provider_id'=> $carts[0]->cartable->provider->id,
                "date_from" => $carts[0]->time_from,
                "date_to" => $carts[0]->time_to,
                "location" => $carts[0]->location,
                "notes" => $carts[0]->notes,
                "phone_numbers" => $carts[0]->phone_numbers,
                "total" => $totalCost ?? 0,
                "gender" => $carts[0]->gender,
            ]);

            foreach($carts as $cart){
                $order->items()->create([
                    'orderable_type' => $cart->cartable_type,
                    'orderable_id' => $cart->cartable_id,
                ]);
                $cart->delete();
            }
         }

        return redirect()->route('home')->With('success', 'Order Successfully');
    }
    public function orders() {
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('orders', compact('orders'));
    }


    public function orderDetails($invoice_number) {

        $order =  Order::where('user_id', auth()->user()->id)->where('invoice_number', $invoice_number)->first();
        return view('order_details', compact('order'));
    }

    public function addServicesToPackage(Request $request) {
       $data =  $request->validate([
            'service_id' => 'required',
            'package_id' => 'required'
        ]);

        ServicesToPackage::create([
            'service_id' => $request->service_id,
            'package_id' =>  $request->package_id,
            'another' =>  $request->another ?? NULL,
            'user_id' =>auth()->user()->id
        ]);
        return redirect()->back();

    }
    public function DeleteFromANother($id) {


        $ser = ServicesToPackage::findOrFail($id);

        $ser->delete();
        return redirect()->back();
    }


    public function sendMessage(Request $request) {

        $request->validate([
            'user_id' => 'required|integer',
            'provider_id' => 'required|integer',
            'message' => 'required|string',
        ]);

        // Process the data, e.g., save it to the database
        // Example:
        $data = [
            'user_id' => $request->user_id,
            'provider_id' => $request->provider_id,
            'message' => $request->message,
        ];

        $chat = Chat::where('user_id', $request->user_id)->where('provider_id', $request->provider_id)->first();

        if(!$chat) {
            $chat = Chat::create([
                'user_id' => $request->user_id,
                'provider_id' => $request->provider_id,
            ]);
        }


        // Assuming you save it to a model or do further processing
        Message::create([
            'chat_id' => $chat->id,
            'message' => $request->message,
            'sender_id' => $request->sender_id ?? 'guest'
        ]);

        $provider = Provider::find($chat->provider_id);

        if(auth()->user()?->id != $chat->user_id) {
            Notification::create([
                'user_id' => $chat->user_id,
                'text' => $provider->name . ' Provider Send you an message '
            ]);
        }

        return response()->json(['success' => true, 'message' => 'Request sent successfully!']);
    }

    public function rate(Request $request) {
        $request->validate([
            'rate' => 'required',
            'comment' => 'nullable',
            'package_id' => 'required'
        ]);

        $package = Package::findOrFail($request->package_id);
        $package->rates()->create([
            'rate' => $request->rate,
            'comment' => $request->comment,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->route('home')->with('success', 'Rated Successfully');

    }
}
