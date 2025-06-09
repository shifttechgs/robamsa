<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\customer\CustomerDashboardController;
use App\Http\Controllers\customer\CustomerOrderController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\shop\ShopController;
use App\Http\Controllers\company\FaqController;
use App\Http\Controllers\company\ContactUsController;
use App\Http\Controllers\company\CompanyController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//})->name('/');
Route::get('/migrate',function(){
    Artisan::call('migrate');
    dd('migrated!');
});

Route::get('reboot',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('key:generate');
    dd('system rebooted!');}
);

Route::get('/signin', function () {
    return view('admin/authentication/signin'); // Make sure this view file exists
})->name('signin');

//route to customer dashboard
Route::get('/customer/dashboard', [CustomerDashboardController::class, 'index'])
    ->name('customer.dashboard');

Route::get('/customer/invoice/{id}', [CustomerOrderController::class, 'index'])
    ->name('customer.invoice');

//display products
Route::get('/', [CatalogueController::class, 'displayProducts'])->name('welcome');
//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome');
//

Route::get('/shop', [ShopController::class, 'index'])->name('shopProducts');

//{{ route('shopProducts', ['category' => $category->id]) }}
//get product by id
Route::get('/product/{id}', [CatalogueController::class, 'productDetails'])->name('product.details');

//cart routes
Route::get('cart', [CatalogueController::class, 'cart'])->name('cart');

Route::get('addToCart/{id}', [CatalogueController::class, 'addToCart'])->name('addToCart');
//Route::get('/cart/add/{id}', [CatalogueController::class, 'addToCart'])->name('addToCart');

Route::patch('updateCart', [CatalogueController::class, 'updateCart'])->name('updateCart');
//Route::delete('removeFromCart', [CatalogueController::class, 'remove'])->name('removeFromCart');
Route::post('/remove-from-cart', [CatalogueController::class, 'removeFromCart'])->name('removeFromCart');


Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.placeOrder');


//payfast routes
Route::get('/payfast/pay/{order}', [PaymentController::class, 'pay'])->name('payfast.pay');
Route::get('/payfast/return', [PaymentController::class, 'paymentSuccess'])->name('payfast.return');
Route::get('/payfast/cancel', [PaymentController::class, 'paymentCancel'])->name('payfast.cancel');
Route::post('/payfast/notify', [PaymentController::class, 'paymentNotify'])
    ->name('payfast.notify')
    ->withoutMiddleware('web');  // You can also add this if you want to disable 'web' middleware


Route::get('order-success', function () {  return view('products.order_success');})->name('order.success');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('order_details', [OrdersController::class, 'showOrder'])->name('orders_details');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['role:super-admin|admin']], function() {

    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);

});


Route::get('orders', [OrdersController::class, 'index'])
    ->name('orders');

//categories routes
Route::get('categories', [CategoriesController::class, 'index'])
    ->name('categories.index');
Route::post('createCategory', [CategoriesController::class, 'store'])->name('createCategory');
Route::post('/categories/update/{id}', [CategoriesController::class, 'update'])->name('updateCategory');

//catalogue routes
Route::get('catalogues', [CatalogueController::class, 'index'])->name('catalogues.index');
Route::post('createCatalogue', [CatalogueController::class, 'store'])->name('createCatalogue');
Route::post('/catalogues/update/{id}', [CatalogueController::class, 'update'])->name('updateCatalogue');

//customers routes
Route::get('customers', [CustomerController::class, 'index'])
    ->name('customers');


//company routes
Route::get('faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('contact_us', [ContactUsController::class, 'index'])->name('contact.index');
Route::get('about_us', [CompanyController::class, 'index'])->name('about_us.index');

require __DIR__.'/auth.php';
