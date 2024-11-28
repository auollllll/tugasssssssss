<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

// Rute untuk halaman umum yang bisa diakses oleh semua orang
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/single-product', 'single-product');


// Rute untuk halaman login
Route::get('/login', [AuthController::class, 'tampillogin'])->name('login.tampil');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

// Rute untuk halaman utama dan registrasi
Route::get('/', [HomeController::class, 'registrasi'])->name('home');

// Rute untuk halaman produk yang bisa diakses oleh semua orang
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

// Rute yang memerlukan autentikasi (untuk admin atau pengguna yang sudah login)
Route::middleware('auth')->group(function () {
    // Halaman utama setelah login (dashboard atau home pengguna)
    Route::get('/index', [HomeController::class, 'tampil'])->name('index.tampil');
    
    // Halaman dashboard admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk mengelola produk (admin only)
    Route::resource('products', ProductController::class); // Ini sudah mencakup semua operasi CRUD
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/user-products', [ProductController::class, 'indexForUsers'])->name('user.products');
    // Route::get('/index', [ProductController::class, 'home'])->name('index');
    Route::get('/home', [ProductController::class, 'home'])->name('index');
    Route::get('/', [ProductController::class, 'index'])->name('home');
});

// Rute untuk halaman terkait produk yang hanya bisa diakses oleh admin
Route::middleware('auth')->get('/products', [ProductController::class, 'index'])->name('products.index');
Route::middleware('auth')->get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

// Rute untuk halaman single product (umum)
Route::view('/single-product', 'single-product')->name('single-product');







// <?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\ProductController;

// Route::get('/index', function () {
//     return view('index'); // Ganti 'welcome' dengan halaman yang diinginkan
// });

// // Routes for login
// Route::get('/login', [AuthController::class, 'tampillogin'])->name('login.tampil');
// Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');  // Perbaiki untuk mengarah ke login

// // Default route (Home or Registration page)
// Route::get('/', [HomeController::class, 'registrasi'])->name('home');

// // Route untuk halaman setelah login (Products)
// Route::get('/products', [ProductController::class, 'index'])->name('products')->middleware('auth'); // Pastikan menggunakan middleware 'auth'

// // Halaman utama setelah login (gunakan middleware auth)
// Route::middleware('auth')->get('/index', [HomeController::class, 'tampil'])->name('index.tampil');


// // Route::get('/dashboard', [AuthController::class, '/index'])->name('dashboard');

// // General routes for views
// Route::view('/about', 'about');
// Route::view('/products', 'products');
// Route::view('/contact', 'contact');
// Route::view('/single-product', 'single-product');
// Route::view('/create','create' );
// Route::view('/edit','edit');
// Route::view('/dashboard', 'dashboard');
// Route::view('/user-products', 'user-products');

// // Default route (Home or Registration page)
// Route::get('/', [HomeController::class, 'registrasi'])->name('home');
// Route::middleware('auth')->get('/index', [HomeController::class, 'tampil'])->name('index.tampil');

// // Routes for products
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// //  Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::resource('products', ProductController::class);
// Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
// Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
// // Route::resource('products', ProductController::class);

// Route::get('/products', [ProductController::class, 'index'])->name('products');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products', [ProductController::class, 'products'])->name('products');
// // Route for single product
// Route::view('/single-product', 'single-product')->name('single-product');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/user-products', [ProductController::class, 'indexForUsers'])->name('user.products');


// Route::get('/index', [ProductController::class, 'home'])->name('index');
  