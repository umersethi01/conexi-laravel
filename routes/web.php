<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome',["name"=>"usama"]);
});
Route::get('/about', function () {
    return view('themes.conexi.about');
});
Route::get('/blog-details', function () {
    return view('themes.conexi.blog-details');
});
Route::get('/blog', function () {
    return view('themes.conexi.blog');
});
Route::get('/book-ride', function () {
    return view('themes.conexi.book-ride');
});
Route::get('/contact', function () {
    return view('themes.conexi.contact');
});
Route::get('/driver', function () {
    return view('themes.conexi.driver');
});
Route::get('/', function () {
    return view('themes.conexi.index');
});
// // Route::get('/index2', function () {
// //     return view('themes.conexi.index2');
// });
Route::get('/single-taxi', function () {
    return view('themes.conexi.single-taxi');
});
Route::get('/taxi', function () {
    return view('themes.conexi.taxi');
});

