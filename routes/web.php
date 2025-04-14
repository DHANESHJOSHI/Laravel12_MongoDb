<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// check for Database Collection
// Route::get('/check-db', function () {
//     return \DB::connection()->getDatabaseName();
// });

// checkforDriver
// Route::get('/check-db', function () {
//     return config('database.default'); // should return 'mongodb'
// });
