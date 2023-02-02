<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'middleware'=>['auth', 'verified'],
], 
function(){
    Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');    
}); 


Route::middleware('auth')->group(function () {

    /* Profile Routes */
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /* Purchase Routes */    
    Route::get('/purchase/store/{product}', [PurchaseController::class, 'store'])->name('purchase.store');

    /* Products Routes */
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/show/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/edit/{product}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
    Route::delete('/products/destroy/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    /* Invoices Routes */
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoices/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::get('/invoices/show/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show');
});

require __DIR__.'/auth.php';
