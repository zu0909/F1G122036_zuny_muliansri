<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('home/{var1}/{var21}', function ($var1,$var2) {
    $cal =$var1 * $var2;
    dd($cal);
});

Route::get('test-controller', [HomeController::class, 'index']);
Route::get('tambah/{var1}/{var2}', [HomeController::class, 'tambah']);
