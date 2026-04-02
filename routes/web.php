<?php

use App\Http\Controllers\TccController;
use App\Http\Controllers\BancaController;

Route::resource('tccs', TccController::class);
Route::resource('bancas', BancaController::class);