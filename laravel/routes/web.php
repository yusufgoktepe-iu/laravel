<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mis', function () {
    return ('welcome to mis page');
});

/*
Route::get('/about/{name}', function ($name) {
    return view('about', ['name' => $name]);
});
*/
Route::get('about/{name}', [PageController::class, 'showAbout']);