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
    return view('index');
});

Route::get('/index.html', function () {
    return view('index');
});

Route::get('/about.html', function () {
    return view('about');
});

Route::get('/features.html', function () {
    return view('features');
});

Route::get('/features.html', function () {
    return view('features');
});

Route::get('/blog.html', function () {
    return view('blog');
});

Route::get('/login.html', function () {
    return view('login');
});

Route::get('/login.html', function () {
    return view('login');
});

Route::get('/register.html', function () {
    return view('register');
});

Route::get('/contact.html', function () {
    return view('contact');
});

Route::get('/404.html', function () {
    return view('404');
});

Route::get('/careers.html', function () {
    return view('careers');
});

Route::get('/blog-single.html', function () {
    return view('blog-single');
});

Route::get('/privacy-policy.html', function () {
    return view('privacy-policy');
});
