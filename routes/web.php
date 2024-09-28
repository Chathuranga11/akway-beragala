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
