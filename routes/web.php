<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


route::get('/login', [AuthController::class, "index"]);
route::post('/login', [AuthController::class, "login"])->name("login");

route::post('/logout', [AuthController::class, "logout"])->name("logout");

route::get('/dashboard', function () {
    return view('dashboard');
});

route::get('/halaman-user', function () {
    return view('user');
});
