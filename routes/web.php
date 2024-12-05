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
Route::get('/new_car_search', function () {
    return view('used_car/new_car_search');
});
Route::get('/new_car_search_detail', function () {
    return view('used_car/new_car_search_detail');
});
Route::get('/blogs', function () {
    return view('used_car/blogs');
});

Route::get('/auto-parts', function () {
    return view('used_car/auto-parts');
});

Route::get('/auto-parts-search', function () {
    return view('used_car/auto-parts-search');
});
Route::get('/auto-parts-search-details', function () {
    return view('used_car/auto-parts-search-details');
});
Route::get('/reserve-car', function () {
    return view('used_car/reserve-car');
});
Route::get('/reserve', function () {
    return view('used_car/reserve');
});
Route::get('/buy', function () {
    return view('used_car/buy');
});
Route::get('/thankyou', function () {
    return view('used_car/thankyou');
});
Route::get('/track_order', function () {
    return view('used_car/track_order');
});

// ========================== Static Pages Route ==========================

Route::get('/shipping_agent', function () {
    return view('static_pages/shipping_agent');
});
Route::get('/carrier-service-policy', function () {
    return view('static_pages/carrier-service-policy');
});
Route::get('/finance-service', function () {
    return view('static_pages/finance-services-new');
});
Route::get('/refund-policy', function () {
    return view('static_pages/refund-policy');
});
Route::get('/none-stolen-vehicle', function () {
    return view('static_pages/none-stolen-vehicle');
});
Route::get('/why-choose-sat', function () {
    return view('static_pages/why-choose-sat');
});
Route::get('/biding-form', function () {
    return view('static_pages/biding-form');
});
Route::get('/security-export-new', function () {
    return view('static_pages/security-export-new');
});
Route::get('/marine-insurance-services', function () {
    return view('static_pages/marine-insurance-services');
});
