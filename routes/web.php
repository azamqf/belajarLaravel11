<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetworkController;

Route::resource('networks', NetworkController::class);

