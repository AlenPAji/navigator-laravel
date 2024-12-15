<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/room1', function () {
    return view('rooms-1');
})->name('room1');

Route::get('/room2', function () {
    return view('rooms-2');
})->name('room2');

Route::get('/error', function () {
    return view('404page');
})->name('404page');


Route::get('/blog-item', function () {
    return view('blog-item');
})->name('blog-item');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/gallery-boxed', function () {
    return view('gallery-boxed');
})->name('gallery-boxed');

Route::get('/gallery-fullwidth', function () {
    return view('gallery-fullwidth');
})->name('gallery-fullwidth');

Route::get('/index-parallax', function () {
    return view('index-parallax');
})->name('index-parallax');

Route::get('/index-slider', function () {
    return view('index-slider');
})->name('index-slider');

Route::get('/index-video', function () {
    return view('index-video');
})->name('index-video');

Route::get('/layouts', function () {
    return view('layouts');
})->name('layouts');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');





Route::get('/room-detail', function () {
    return view('room-detail');
})->name('room-detail');

Route::get('/about', function () {
    return view('about');
})->name('about');