<?php

use App\Http\Controllers\pertanianController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/crud', pertanianController::class);

