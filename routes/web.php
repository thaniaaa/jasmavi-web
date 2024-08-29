<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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

//route
route::get('/', function () {
    return view('frontend/home');
});

//route for dashboard
route::get('/dashboardadmin',function () {
    return view('backend/admin/dashboardadmin');
})->middleware('admin');
route::get('/dashboarduser',function() {
    return view('backend/user/dashboarduser');
})->middleware('auth');

//route for login
route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
route::post('/login', [LoginController::class, 'authenticate']);
route::post('/logout', [LoginController::class, 'logout']);

//route for register
route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
route::post('/register', [RegisterController::class, 'store']);

//route for user
route::get('/sktm', [UserController::class,'viewSktm'])->name('sktm')->middleware('auth');
route::get('/sktm/kesehatan', [UserController::class,'viewSktmKesehatan'])->name('sktmKesehatan')->middleware('auth');
route::get('/sktm/pendidikan', [UserController::class,'viewSktmPendidikan'])->name('sktmPendidikan')->middleware('auth');
route::get('/suratpengantar', [UserController::class,'viewSuratPengantar'])->name('suratPengantar')->middleware('auth');

Route::post('/sktm/create-pendidikan', [UserController::class,'createSktmPendidikan'])->name('sktmPendidikan.create');
Route::post('/sktm/create-kesehatan', [UserController::class,'createSktmKesehatan'])->name('sktmKesehatan.create');
Route::post('/surat-pengantar', [UserController::class,'createSuratPengantar'])->name('suratPengantar.create');

//route for admin
route::get('/admin/permintaan-surat', [AdminController::class,'viewPermintaanSurat'])->name('permintaanSurat')->middleware('admin');
route::get('/admin/surat-selesai', [AdminController::class,'viewSuratSelesai'])->name('suratSelesai')->middleware('admin');

Route::patch('/update-status/{id}/{table_source}', [AdminController::class,'updateStatus'])->name('statusSurat.update');

//route for pdf
Route::get('pdf/{id}/{table_source}', [AdminController::class, 'pdfController'])->name('viewPdf');


// route::get('/permintaansurat',function () {
//     return view('backend/admin/permintaansurat');
// });

// route::get('/suratselesai',function () {
//     return view('backend/admin/suratselesai');
// });

//route::get('/sktm',function () {
//     return view('backend/user/sktm');
// });

// route::get('/sktmkesehatan',function () {
//     return view('backend/user/sktmkesehatan');
// });

// route::get('/sktmpendidikan',function () {
//     return view('backend/user/sktmpendidikan');
// });

// route::get('/suratpengantar',function () {
//     return view('backend/user/suratpengantar');
// });

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