<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('used_car/home');
});
Route::get('/home-copy', function () {
    return view('used_car/home-copy');
});
Route::get('/search', function () {
    return view('used_car/advance_search');
});
Route::get('/search-details', function () {
    return view('used_car/search_details');
});
Route::get('/country', function () {
    return view('used_car/country');
});
Route::get('/new_car', function () {
    return view('used_car/new_car');
});

