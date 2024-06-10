<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StylistController;
use App\Http\Controllers\StylistsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/stylists', [StylistsController::class, 'index'])->name('stylists');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');



Route::get('/admin', [AdminController::class, 'index'])->middleware('CheckRole:admin');


/*
 * customer
 */
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/customer', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::get('/customer/{id}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::put('/customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

/*
 * manager
 */
Route::get('/manager', [ManagerController::class, 'index'])->name('manager.index');
Route::get('/manager/manager', [ManagerController::class, 'create'])->name('manager.create');
Route::post('/manager', [ManagerController::class, 'store'])->name('manager.store');
Route::get('/manager/{id}', [ManagerController::class, 'show'])->name('manager.show');
Route::get('/manager/{id}/edit', [ManagerController::class, 'edit'])->name('manager.edit');
Route::put('/manager/{id}', [ManagerController::class, 'update'])->name('manager.update');
Route::delete('/manager/{id}', [ManagerController::class, 'destroy'])->name('manager.destroy');

/*
 * role
 */
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
Route::get('/role/role', [RoleController::class, 'create'])->name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/{id}', [RoleController::class, 'show'])->name('role.show');
Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

/*
 * salon
 */
Route::get('/salon', [SalonController::class, 'index'])->name('salon.index');
Route::get('/salon/salon', [SalonController::class, 'create'])->name('salon.create');
Route::post('/salon', [SalonController::class, 'store'])->name('salon.store');
Route::get('/salon/{id}', [SalonController::class, 'show'])->name('salon.show');
Route::get('/salon/{id}/edit', [SalonController::class, 'edit'])->name('salon.edit');
Route::put('/salon/{id}', [SalonController::class, 'update'])->name('salon.update');
Route::delete('/salon/{id}', [SalonController::class, 'destroy'])->name('salon.destroy');

/*
 * service
 */
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/service', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');
Route::get('/service/{id}/edit', [ServiceController::class, 'edit'])->name('service.edit');
Route::put('/service/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

/*
 * stylist
 */
Route::get('/stylist', [StylistController::class, 'index'])->name('stylist.index');
Route::get('/stylist/stylist', [StylistController::class, 'create'])->name('stylist.create');
Route::post('/stylist', [StylistController::class, 'store'])->name('stylist.store');
Route::get('/stylist/{id}', [StylistController::class, 'show'])->name('stylist.show');
Route::get('/stylist/{id}/edit', [StylistController::class, 'edit'])->name('stylist.edit');
Route::put('/stylist/{id}', [StylistController::class, 'update'])->name('stylist.update');
Route::delete('/stylist/{id}', [StylistController::class, 'destroy'])->name('stylist.destroy');
