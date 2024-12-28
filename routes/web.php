<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ServiceProviderController;
use App\Http\Controllers\User\ProfileController;
use App\Models\Category;
use App\Models\File;
use App\Models\Withdrawal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StripePaymentController;
use App\Models\Service;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('', [HomeController::class, 'index'])->name('home');
Route::get('category/{category:uuid}',[CategoryController::class,'show'])->name('category.show')->whereUuid('category');
Route::get('search', [HomeController::class,'search'])->name('search');
Route::get('all-packages', [HomeController::class,'AllPackages'])->name('all-packages');
Route::get('category/{category}', [HomeController::class,'category'])->name('category');


Route::get('providers', [HomeController::class,'providers'])->name('providers');
Route::get('bestShops', [HomeController::class,'bestShops'])->name('bestShops');
Route::get('providers/{provider}', [HomeController::class,'showProvider'])->middleware('auth:web')->name('provider.show');
Route::get('providers/{provider}/packages/{category?}', [HomeController::class,'providerPackage'])->name('provider.packages');

Route::get('providers/{provider}/services', [HomeController::class,'providerService'])->name('provider.services');
Route::get('providers/{provider}/about', [HomeController::class,'aboutProvider'])->name('provider.about');
Route::get('providers/{provider}/location', [HomeController::class,'locationProvider'])->name('provider.location');
Route::get('providers/{provider}/reviews', [HomeController::class,'reviewsProvider'])->name('provider.reviews');
Route::get('packages/{package}', [HomeController::class,'showPackage'])->middleware('auth:web')->name('package');
Route::get('service/{service}', [HomeController::class,'showService'])->middleware('auth:web')->name('service');
Route::get('services/{service}', [HomeController::class,'showService'])->middleware('auth:web')->name('service');
Route::post('addToCard', [HomeController::class,'addToCard'])->name('addToCard');
Route::get('mycart', [HomeController::class,'myCart'])->name('myCart');
Route::delete('deleteCart/{cart}', [HomeController::class,'deleteMyCart'])->name('deleteMyCart');
Route::post('checkout', [HomeController::class,'checkout'])->name('checkout');
Route::get('orders', [HomeController::class,'orders'])->name('orders');
Route::get('orderDetails/{invoice_number}', [HomeController::class,'orderDetails'])->name('orderDetails');
Route::post('add-service-to-package', [HomeController::class,'addServicesToPackage'])->middleware('auth:web')->name('addServicesToPackage');
Route::get('delete-service-to-package/{id}', [HomeController::class,'DeleteFromANother'])->middleware('auth:web')->name('DeleteFromANother');
Route::post('rating', [HomeController::class,'rate'])->middleware('auth:web')->name('rating');


Route::get('/stripe', [StripePaymentController::class, 'stripe'])->name('stripe.index');
Route::get('stripe/checkout', [StripePaymentController::class, 'stripeCheckout'])->name('stripe.checkout');
Route::get('stripe/checkout/success', [StripePaymentController::class, 'stripeCheckoutSuccess'])->name('stripe.checkout.success');

// Route::group(['prefix' => 'p'], function(){
//     Route::group(['as' => 'provider.','prefix' => '{provider:uuid}', 'controller' => ServiceProviderController::class] , function()
//     {
//         Route::get('','index')->name('index');
//         Route::get('reviews','reviews')->name('reviews');
//         Route::get('packages','packages')->name('packages');
//         Route::get('services','services')->name('services');
//         Route::get('location','location')->name('location');
//         Route::get('about','about')->name('about');
//     });
// });

// Route::get('search', SearchController::class)->name('search');

Route::get('test-view',function()
{
    $user = App\Models\User::first();
    return view('emails.user-created', compact('user'));
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


//Profile Routes
Route::group(['prefix' => 'profile' , 'as' => 'profile.', 'controller' => ProfileController::class] , function(){
    Route::get('' , 'index')->name('index');
    Route::post('update-picture' , 'update_picture')->name('update-picture');
    Route::post('update-info' , 'update_info')->name('update-info');
    Route::post('update-password' , 'update_password')->name('update-password');
});




// Main Routes
Route::view('/terms-and-conditions', 'terms-and-conditions')->name('terms');
Route::view('/privacy-policy', 'privacy-policy')->name('privacy');
Route::view('/cookie-policy', 'cookie-policy')->name('cookie');

// About Section
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::get('/products', function(){

    
    return view('services', ['services' => Service::all()]);
})->name('products');
Route::view('/faq', 'faq')->name('faq');

// Weddings Section
Route::view('/wedding-ideas', 'wedding-ideas')->name('wedding.ideas');
Route::view('/summer-weddings', 'summer-weddings')->name('summer.weddings');
Route::view('/real-weddings', 'real-weddings')->name('real.weddings');

// Birthdays Section
Route::view('/summer-birthdays', 'summer-birthdays')->name('summer.birthdays');
Route::view('/real-birthdays', 'real-birthdays')->name('real.birthdays');
