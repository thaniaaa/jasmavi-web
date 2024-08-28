<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

route::get('/dashboardadmin',function () {
    return view('backend/admin/dashboardadmin');
});

route::get('/permintaansurat',function () {
    return view('backend/admin/permintaansurat');
});

route::get('/suratselesai',function () {
    return view('backend/admin/suratselesai');
});

route::get('/login',function () {
    return view('backend/login/login');
});

route::get('/register',function () {
    return view('backend/login/register');
});

route::get('/dashboarduser',function() {
    return view('backend/user/dashboarduser');
});

route::get('/sktm',function () {
    return view('backend/user/sktm');
});

route::get('/sktmkesehatan',function () {
    return view('backend/user/sktmkesehatan');
});

route::get('/sktmpendidikan',function () {
    return view('backend/user/sktmpendidikan');
});

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
//route for user
route::get('/sktm', [UserController::class,'viewSktm'])->name('sktm');
route::get('/sktm/kesehatan', [UserController::class,'viewSktmKesehatan'])->name('sktmKesehatan');
route::get('/sktm/pendidikan', [UserController::class,'viewSktmPendidikan'])->name('sktmPendidikan');
route::get('/suratpengantar', [UserController::class,'viewSuratPengantar'])->name('suratPengantar');

Route::post('/sktm/create-pendidikan', [UserController::class,'createSktmPendidikan'])->name('sktmPendidikan.create');
Route::post('/sktm/create-kesehatan', [UserController::class,'createSktmKesehatan'])->name('sktmKesehatan.create');
Route::post('/surat-pengantar', [UserController::class,'createSuratPengantar'])->name('suratPengantar.create');

//route for admin
route::get('/admin/permintaan-surat', [AdminController::class,'viewPermintaanSurat'])->name('permintaanSurat');
route::get('/admin/surat-selesai', [AdminController::class,'viewSuratSelesai'])->name('suratSelesai');

Route::patch('/update-status/{id}/{table_source}', [AdminController::class,'updateStatus'])->name('statusSurat.update');

Route::get('pdf/{id}/{table_source}', [AdminController::class, 'pdfController'])->name('viewPdf');