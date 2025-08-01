<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetworkController;

Route::resource('networks', NetworkController::class);

Route::get('/radio', function () {
    return view('radio');
});

Route::get('/', function () {
    return view('dashboard'); // pastikan resources/views/dashboard.blade.php ada
});

Route::get('/guns', function () {
    return view('guns.index');
});

Route::get('/admin/radio', function () {
    return view('admin.radio');
});

Route::get('/guns/create', function () {
    return view('guns.create');
});
