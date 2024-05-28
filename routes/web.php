<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OncallController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/prueba', [OncallController::class, 'Oncall']);

Route::get('/', [OncallController::class, 'Oncall']);
