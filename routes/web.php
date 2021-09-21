<?php

use Illuminate\Support\Facades\Route;

Route::get('', [\App\Http\Controllers\TesteController::class, 'index']);
Route::post('', [\App\Http\Controllers\TesteController::class, 'about']);
