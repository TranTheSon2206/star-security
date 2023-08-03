<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AccountController;

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
})->name('home');
Route::get('admin', function () {
    return view('front.admin');
});
Route::get('admin/adminedit', function () {
    return view('front.admintest');
});

Route::get('network', function () {
    return view('front.site.network');
});
Route::get('contact', function () {
    return view('front.site.contact');
});

// Route::prefix('account')->group(function () {
//     Route::get('login', [AccountController::class, 'login'])->name('account.login');
//     Route::post('login', [AccountController::class, 'checklogin']);
//     Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
// });

Route::get('login', [AccountController::class, 'login'])->name('account.login');
Route::post('login', [AccountController::class, 'checklogin']);
Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');

Route::get('/service', [ServiceController::class, 'index']);

Route::get('about', function () {
    return view('front.site.about');
});