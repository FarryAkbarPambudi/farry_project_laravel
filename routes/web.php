<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome'); //ini menuju ke halaman welcome.blade.php di folder resource/view
});

Route::get('/index', function () {
    return view('index'); //ini menuju ke halaman index.blade.php di folder resource/view
});

Route::get('/login', function () {
    return view('login'); //ini menuju ke halaman login.blade.php di folder resource/view
});

Route::get('/about', function () {
    return view('about'); //ini menuju ke halaman login.blade.php di folder resource/view
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/about', [HomeController::class, 'about'])->name('about');
