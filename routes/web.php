<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hotel.index');
});

Route::get('/rooms', function () {
    return view('hotel.rooms');
});

Route::get('/contact', function () {
    return view('hotel.contact');
});

Route::get('/', function () {
    return view('hotel.index');
});

Route::get('/rooms', function () {
    return view('hotel.rooms');
});

Route::get('/restaurant', function () {
    return view('hotel.restaurant');
});

Route::get('/about', function () {
    return view('hotel.about');
});

Route::get('/blog', function () {
    return view('hotel.blog');
});

Route::get('/contact', function () {
    return view('hotel.contact');
});
