<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\EmpleadoController;

Route::get('',[HomeController::class,'index']);

Route::resource('empleados', EmpleadoController::class)->names('admin.empleados');