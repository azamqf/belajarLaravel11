<?php
use Illuminate\Support\Facades\Route;

Route::get('/radio', function () {
    return view('radio');
});

Route::get('/admin/radio', function () {
    return view('admin.radio');
});
