<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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



route::get('/', function () {
    return view('frontend/home');
});

route::controller(AuthController::class)->group(function () {
    route::get('suratpengantar', 'suratpengantar')->name('suratpengantar');
});
