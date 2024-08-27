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

route::get('/dashboarduser',function() {
    return view('backend/user/dashboarduser');
});

/*
route::controller(AuthController::class)->group(function () {
    route::get('dashboardadmin', 'dashboardadmin')->name('dashboardadmin');
});

route::get('/suratpengantar',function () {
    return view('backend/suratpengantar');
});

route::controller(AuthController::class)->group(function () {
    route::get('sktm', 'sktm')->name('sktm');
});

route::controller(AuthController::class)->group(function () {
    route::get('sktmkesehatan', 'sktmkesehatan')->name('sktmkesehatan');
});

route::controller(AuthController::class)->group(function () {
    route::get('sktmpendidikan', 'sktmpendidikan')->name('sktmpendidikan');
});

*/

route::get('/register',function () {
    return view('backend/login/register');
});

route::get('/login',function () {
    return view('backend/login/login');
});

route::get('/permintaansurat',function () {
    return view('backend/admin/permintaansurat');
});

route::get('/sktmpendidikan',function () {
    return view('backend/user/sktmpendidikan');
});

route::get('/sktm',function () {
    return view('backend/user/sktm');
});

route::get('/sktmkesehatan',function () {
    return view('backend/user/sktmkesehatan');
});

route::get('/pengantar',function () {
    return view('backend/user/pengantar');
});
