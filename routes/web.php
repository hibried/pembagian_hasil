<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenggunaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PenggunaController::class, 'index']);
