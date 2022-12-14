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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/shop-builder', function () {
    return view('pages.shop-builder');
});
Route::get('/solutions', function () {
    return view('pages.solutions');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/blog-single', function () {
    return view('pages.blog-single');
});
Route::get('/pricing', function () {
    return view('pages.pricing');
});
Route::get('/about-us', function () {
    return view('pages.about-us');
});
Route::get('/marketing', function () {
    return view('pages.marketing');
});
