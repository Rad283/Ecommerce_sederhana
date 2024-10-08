<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriController;
use App\Models\Pesanan;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
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
    return view('welcome', ['produk' => produk::all()]);
})->name('welcome');


Route::get('/detail/{id}', function (string $id) {
    // return $produk;
    return view('lp.detailed', ['produk' => produk::find($id)]);
})->name('detailed');


Route::get('/checkout/{id}', function (string $id) {
    return view('lp.checkout', ['produk' => produk::find($id)]);
})->name('checkout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::resource('/produk', ProdukController::class);
});


Route::prefix('user')->middleware(['auth', 'cek_role:user'])->group(function () {
    Route::get('/', function (Request $request) {
        return view('user.index', ['pesanans' => Pesanan::with('produk')->where('user_id', '=', $request->user()->id)->get()]);
    })->name('user.index');
});

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/pesanan', [PesananController::class, 'index']);
        Route::get('/pesanan/create', [PesananController::class, 'create']);
        Route::post('/pesanan/store', [PesananController::class, 'store']);
        Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
        Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
        Route::get('/pesanan/delete/{id}', [PesananController::class, 'destroy']);
        Route::get('/kategori', [KategoriController::class, 'index']);
        Route::get('/kategori/create', [KategoriController::class, 'create']);
        Route::post('/kategori/store', [KategoriController::class, 'store']);
        Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy']);
    });
});