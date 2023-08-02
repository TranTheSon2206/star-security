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
    return view('front.index');
});
Route::get('admin', function () {
    return view('front.admin');
});
Route::get('admin/adminedit', function () {
    return view('front.adminedit');
});
Route::get('service', function () {
    return view('front.site.service');
});
Route::get('network', function () {
    return view('front.site.network');
});
Route::get('contact', function () {
    return view('front.site.contact');
});
Route::get('login', function () {
    return view('front.account.login');
});