<?php

use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

Route::resource('equipos', EquipoController::class);