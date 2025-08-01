<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NetworkController;

Route::resource('networks', NetworkController::class);

Route::get('/radio', function () {
    return view('radio');
});

Route::get('/admin/radio', function () {
    return view('admin.radio');
});
