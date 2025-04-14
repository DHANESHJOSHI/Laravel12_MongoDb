<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/check-db', function () {
//     return config('database.default'); // should return 'mongodb'
// });
