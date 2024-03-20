<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [
    'uses' => 'App\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

Route::get('/courses', [
    'uses' => 'App\Http\Controllers\CourseController@index',
    'as' => 'courses'
]);
