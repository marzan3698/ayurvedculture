<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('/single', function () {
    return view('frontend.pages.single_product');
});

Route::get('/all', function () {
    return view('frontend.pages.all_location');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/allproduct', function () {
    return view('frontend.pages.all_product');
});

Route::get('/diseases', function () {
    return view('frontend.pages.disease');
});

Route::get('/testimonial', function () {
    return view('frontend.pages.testimonial');
});
Route::get('/career', function () {
    return view('frontend.pages.career');
});
Route::get('/faq', function () {
    return view('frontend.pages.faq');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/pay', function () {
    return view('frontend.pages.Payment.howtopay');
});
Route::get('/shiping', function () {
    return view('frontend.pages.shiping');
});
