<?php

use App\Http\Controllers\StudentApiController;
use Illuminate\Support\Facades\Route;

Route::get('index', [StudentApiController::class,'index']);
