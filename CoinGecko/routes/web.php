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
})->name("home");
Route::get("/login", function () {
    return view('Auth.login');
})->name("login");
Route::get("/register", function () {
    return view('Auth.register');
})->name("register");
Route::group([
    "prefix" => "auth",
    'namespace'  => 'auth',
], function () {
    Route::post("register", [\App\Http\Controllers\auth\RegisterController::class, "index"]);
    Route::post("login", [\App\Http\Controllers\auth\LoginController::class, "index"]);
});
Route::group([
    "prefix" => "coins",
    'namespace'  => 'coin',
], function () {
    Route::get("/{coin}", [\App\Http\Controllers\coin\CoinController::class, "index"]);
});
