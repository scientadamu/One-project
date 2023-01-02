<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('pages.index');
});
Route::get('/index', function () {
    return view('pages.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/report', function () {
    return view('pages.report');
});
