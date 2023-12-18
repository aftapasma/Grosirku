<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;

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

Route::get('/masuk', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //admin manage products
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/productStore', [ProductController::class, 'store']);
    Route::get('/products/{product}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{product}', [ProductController::class, 'update']);
    Route::delete('/products/{product}', [ProductController::class, 'destroy']);
    //Keranjang
    Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');
    //Pembayaran
    Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
});

//all show products
Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products', [ProductController::class, 'shop']);
//wishlist
Route::get('/wishlist', [WishlistController::class, 'index']);


require __DIR__.'/auth.php';
