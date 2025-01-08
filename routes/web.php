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
Route::get('/sat-faqs-new', function () {
    return view('static_pages/sat-faqs-new');
});
Route::get('/cookies-policy', function () {
    return view('static_pages/cookies-policy');
});
Route::get('/storage-policy', function () {
    return view('static_pages/storage-policy');
});
Route::get('/marine-insurance-services', function () {
    return view('static_pages/marine-insurance-services');
});
Route::get('/payment-failed', function () {
    return view('static_pages/payment-failed');
});
Route::get('/how-to-buy', function () {
    return view('static_pages/how-to-buy');
});
Route::get('/page-not-found', function () {
    return view('static_pages/page-not-found');
});
Route::get('/insurance-services', function () {
    return view('static_pages/insurance-services');
});
Route::get('/company-profile', function () {
    return view('static_pages/company-profile');
});
Route::get('/how-to-pay', function () {
    return view('static_pages/how-to-pay');
});
Route::get('/vehicle-information', function () {
    return view('static_pages/vehicle-information');
});
Route::get('/inquirey-form', function () {
    return view('static_pages/inquirey-form');
});
Route::get('/bank-information', function () {
    return view('static_pages/bank-information');
});
Route::get('/about-us', function () {
    return view('static_pages/about-us');
});
Route::get('/testimonials', function () {
    return view('static_pages/testimonials');
});
Route::get('/pre-export-inspection', function () {
    return view('static_pages/pre-export-inspection');
});
Route::get('/sat-auction', function () {
    return view('static_pages/sat-auction');
});
Route::get('/empty-cart', function () {
    return view('static_pages/emty-cart');
});
Route::get('/cart-items', function () {
    return view('static_pages/cart-items');
});

Route::get('/dashboard-profile', function () {
    return view('static_pages/dashboard-profile');
});
Route::get('/dashboard-save-search', function () {
    return view('static_pages/dashboard-save-search');
});
Route::get('/dashboard-my-booking', function () {
    return view('static_pages/dashboard-my-booking');
});
Route::get('/dashboard-favourites', function () {
    return view('static_pages/dashboard-favourites');
});
Route::get('/dashboard-my-transaction', function () {
    return view('static_pages/dashboard-my-transaction');
});
Route::get('/dashboard-consignee-info', function () {
    return view('static_pages/consignee-information');
});
Route::get('/dashboard-review', function () {
    return view('static_pages/dashboard-review');
});
Route::get('/dashboard-loyalty-points', function () {
    return view('static_pages/dashboard-loyalty-points');
});
Route::get('/dashboard-my-bid', function () {
    return view('static_pages/dashboard-my-bid');
});
Route::get('/why-sell-with-sat', function () {
    return view('static_pages/why-sell-with-sat');
});
Route::get('/dashboard-auction-car-sat', function () {
    return view('static_pages/auction-car-sat');
});
Route::get('/dashboard-my-ads', function () {
    return view('static_pages/dashboard-my-ads');
});
Route::get('/dashboard-ads-edit', function () {
    return view('static_pages/dashboard-ads-edit');
});
Route::get('/dashboard-ads-edit-detail', function () {
    return view('static_pages/dashboard-ads-edit-detail');
});
Route::get('/dashboard-ads-personal-info', function () {
    return view('static_pages/dashboard-ads-personal-info');
});
Route::get('/dashboard-request-submitted', function () {
    return view('static_pages/dashboard-request-submitted');
});
Route::get('/dashboard-auction-cars', function () {
    return view('static_pages/dashboard-auction-cars');
});
Route::get('/dashboard-sell-with-sat', function () {
    return view('static_pages/dashboard-sell-with-sat');
});
Route::get('/list-on-sat', function () {
    return view('static_pages/list-on-sat');
});
Route::get('/satpro-memeberend-reason', function () {
    return view('static_pages/satpro-memeberend-reason');
});
Route::get('/satpro-mobile-memberend', function () {
    return view('static_pages/satpro-mobile-memberend');
});
Route::get('/satpro-mobile-member', function () {
    return view('static_pages/satpro-mobile-member');
});
Route::get('/satpro-membership', function () {
    return view('static_pages/satpro-membership');
});
