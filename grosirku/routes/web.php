<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//User Controller
//Admin Controller
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/adminOrder', [AdminController::class, 'show'])->name('adminOrder');
Route::get('/adminUpdate', [AdminController::class, 'update'])->name('adminUpdate');

//Keranjang
Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang');

//Produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');

//Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');

require __DIR__.'/auth.php';
