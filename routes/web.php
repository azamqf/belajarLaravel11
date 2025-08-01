<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard'); // pastikan dashboard.blade.php ada
});

Route::get('/guns', function () {
    return view('guns.index');
});

Route::get('/guns/create', function () {
    return view('guns.create');
});

