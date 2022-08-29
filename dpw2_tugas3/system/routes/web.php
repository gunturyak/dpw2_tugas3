<?php

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

Route::get('index', function () {
    return view('template.index');
});

Route::get('product', function () {
    return view('template.product');
});

Route::get('login', function () {
    return view('template.login');
});


//admin

Route::get('AdminBase', function () {
    return view('template.AdminBase');
});

Route::get('beranda', function () {
    return view('beranda');
});

Route::get('produk', function () {
    return view('produk');
});

Route::get('kategori', function () {
    return view('kategori');
});

Route::get('promo', function () {
    return view('promo');
});

Route::get('pelanggan', function () {
    return view('pelanggan');
});

Route::get('suplayer', function () {
    return view('suplayer');
});

Route::get('login', function () {
    return view('login');
});