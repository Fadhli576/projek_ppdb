<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;

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
})->name('home');
   

Route::middleware('Guest')->group(function() {
     Route::get('/register', [RegisterController::class, 'index'])->name('register-page');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.post');
    Route::get('/login', [LoginController::class, 'index'])->name('login-page');
    Route::post('/login/auth', [LoginController::class, 'authanticate'])->name('login.auth');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['Login', 'checkRole:admin'])->group(
    function () {
        Route::get('/dashboard/pembayarann', [PaymentController::class, 'index'])->name('payment.index');
        Route::post('/tolak/{id}', [PaymentController::class, 'tolak'])->name('payment.tolak');
        Route::post('/validasi/{id}', [PaymentController::class, 'validasi'])->name('payment.validate');

        Route::get('/lihat/{id}', [PaymentController::class, 'lihatData'])->name('lihatData-view');
        Route::post('/lihat/{id}', [PaymentController::class, 'lihatData'])->name('lihatData');

        Route::get('/detail/{id}', [PaymentController::class, 'detailData'])->name('detailData-view');
        Route::post('/detail/{id}', [PaymentController::class, 'detailData'])->name('detailData');
    }
);

Route::middleware(['Login', 'checkRole:admin,user'])->group(
    function () {

        Route::get('/dashboard', [PaymentController::class, 'dashboardIndex'])->name('payment.homr');

    }
);

Route::middleware(['Login', 'checkRole:user'])->group(
    function () {
        Route::get('/dashboard/pembayaran', [PaymentController::class, 'create'])->name('payment.create');
        Route::post('/store', [PaymentController::class, 'store'])->name('payment.store');
        
    }
);




