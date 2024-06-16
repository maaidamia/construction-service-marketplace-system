<?php

use App\Http\Controllers\Auth\RegisterSP;
use App\Http\Controllers\Front\FrontServicesController;
use App\Http\Controllers\Panel\UsersController;
use App\Http\Controllers\Purchase\Ticketing;
use App\Http\Controllers\Services\BusinessDetailsController;
use App\Http\Controllers\Services\SCategory;
use App\Http\Controllers\Services\ServiceController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('front.homepage.index');
// });
Route::prefix('/')->middleware([])->group(function() {
    Route::get('/', [FrontServicesController::class, 'index'])->name('front.service.list');
    Route::get('/list/{id}', [FrontServicesController::class, 'showCompanyServices'])->name('front.service.show');
    Route::get('/order/{id}', [FrontServicesController::class, 'orderService'])->name('front.service.order');
    Route::post('/order/apply/{id}', [FrontServicesController::class, 'orderStore'])->name('front.service.order.store');
});

### Register SP ###
Route::prefix('/register-service-provider')->middleware([])->group(function() {
    Route::get('/', [RegisterSP::class, 'index'])->name('registerSP');
});
### Register SP ###

// Route::prefix('dashboard')->middleware('auth', 'roleCheck')->group(function() {
Route::prefix('dashboard')->middleware('auth')->group(function() {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');
});

####----------- Auth -----------####
Auth::routes();
####----------- Auth -----------####

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
CRUD FUCNTION
 */
### Register SP CRUD ###
Route::prefix('/service-provider')->middleware([])->group(function() {
    Route::post('/create', [RegisterSP::class, 'store'])->name('registerSP.store');
});
### Register SP CRUD ###

### Business Details CRUD ###
Route::prefix('/business-details')->middleware([])->group(function() {
    Route::get('/', [BusinessDetailsController::class, 'index'])->name('bd');
    Route::get('/my-form/{id}', [BusinessDetailsController::class, 'sp_form_view'])->name('bd.sp.show');

    Route::get('/corporate', [BusinessDetailsController::class, 'index'])->name('bd.corporate');
    Route::post('/corporate', [BusinessDetailsController::class, 'store'])->name('bd.corporate.store');
    Route::get('/corporate/view/{id}', [BusinessDetailsController::class, 'show'])->name('bd.corporate.show');

    Route::get('/contact', [BusinessDetailsController::class, 'index'])->name('bd.contact');
    Route::post('/contact', [BusinessDetailsController::class, 'store'])->name('bd.contact.store');
    Route::get('/contact/view/{id}', [BusinessDetailsController::class, 'show'])->name('bd.contact.show');

    Route::get('/document', [BusinessDetailsController::class, 'index'])->name('bd.document');
    Route::post('/document', [BusinessDetailsController::class, 'store'])->name('bd.document.store');
    Route::get('/document/view/{id}', [BusinessDetailsController::class, 'show'])->name('bd.document.show');
    Route::get('/document/download/{id}', [BusinessDetailsController::class, 'download'])->name('bd.document.download');
});


// admin //
Route::prefix('admin/business-details')->middleware([])->group(function() {
    Route::get('/new-register', [BusinessDetailsController::class, 'new_register'])->name('admin.bd');
    Route::get('/new-register/view/{id}', [BusinessDetailsController::class, 'new_register_view'])->name('admin.bd.view');
    Route::post('/new-register/verify/{id}', [BusinessDetailsController::class, 'new_register_verify'])->name('admin.bd.verify');
});
### Business Details CRUD ###

### Users CRUD ###
Route::prefix('/panel')->middleware([])->group(function() {
    Route::get('/user', [UsersController::class, 'index'])->name('panel.user');
    Route::get('/user/superadministrator', [UsersController::class, 'index'])->name('panel.user.superadmin');
    Route::get('/user/administrator', [UsersController::class, 'index'])->name('panel.user.admin');
    Route::get('/user/client', [UsersController::class, 'index'])->name('panel.user.client');
    Route::get('/user/service-provider', [UsersController::class, 'index'])->name('panel.user.sp');

    Route::get('/user/show/{id}}', [UsersController::class, 'show'])->name('panel.user.show');
    Route::post('/user/update/{id}}', [UsersController::class, 'update'])->name('panel.user.update');
    Route::get('/user/create}', [UsersController::class, 'create'])->name('panel.user.create');
    Route::post('/user/create}', [UsersController::class, 'store'])->name('panel.user.store');
});
### Users CRUD ###

#### Services ####
Route::prefix('/panel/service-provider')->middleware([])->group(function() {
    Route::get('/', [ServiceController::class, 'index'])->name('sp.index');
    Route::get('/create', [ServiceController::class, 'create'])->name('sp.create');
    Route::post('/create', [ServiceController::class, 'store'])->name('sp.store');
    Route::get('/{id}', [ServiceController::class, 'show'])->name('sp.show');
});
Route::prefix('/panel/purchase/service-provider')->middleware([])->group(function() {
    Route::get('/pending', [ServiceController::class, 'panelIndex'])->name('po.sp.pending');
    Route::get('/processing', [ServiceController::class, 'panelIndex'])->name('po.sp.processing');
    Route::get('/finish', [ServiceController::class, 'panelIndex'])->name('po.sp.finish');
});
Route::prefix('/panel/service-category')->middleware([])->group(function() {
    Route::get('/', [SCategory::class, 'index'])->name('sp.scat.index');
    Route::get('/create', [SCategory::class, 'create'])->name('sp.scat.create');
    Route::post('/create', [SCategory::class, 'store'])->name('sp.scat.store');
    Route::get('/{id}', [SCategory::class, 'show'])->name('sp.scat.show');
    Route::put('/update/{id}', [SCategory::class, 'update'])->name('sp.scat.update');
});
#### Services ####

#### Purchasing ####
Route::prefix('/services/order')->middleware([])->group(function() {
    Route::get('/pending', [FrontServicesController::class, 'viewOrder'])->name('po.view.pending');
    Route::get('/processing', [FrontServicesController::class, 'viewOrder'])->name('po.view.processing');
    Route::get('/finish', [FrontServicesController::class, 'viewOrder'])->name('po.view.finish');
   
    Route::get('/view/{id}', [FrontServicesController::class, 'show'])->name('po.view.update');
    Route::put('/store/{id}', [FrontServicesController::class, 'update'])->name('po.view.store');
    // Upload Payment
    Route::get('/paymnet/upload/{id}', [FrontServicesController::class, 'payment'])->name('po.payment.create');
    Route::put('/paymnet/upload/{id}', [FrontServicesController::class, 'paymentStore'])->name('po.payment.store');
    Route::get('/paymnet/download/{id}', [FrontServicesController::class, 'download'])->name('po.payment.download');
    
});
#### Purchasing ####

#### Ticketing ####
Route::prefix('/panel/tickets')->middleware([])->group(function() {
    Route::get('/', [Ticketing::class, 'index'])->name('tickets.index');
    Route::get('/create/{code}', [Ticketing::class, 'create'])->name('tickets.create');
    Route::get('/issues/{code}', [Ticketing::class, 'show'])->name('tickets.show');
});
#### Ticketing ####
