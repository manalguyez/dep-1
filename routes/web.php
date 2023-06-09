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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admissions', function () {
    return view('admissions');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/contact', function () {
    return view('contact');
});
