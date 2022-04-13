<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Mahasiswa\DashboardController;
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
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('check-role', [AuthController::class, 'checkRole']);


Route::middleware('auth')->group(function () {
    Route::prefix('admin')
        ->middleware('can:simadu-admin')
        ->group(function () {
            include "_/admin.php";
        });
    Route::prefix('persuratan')->group(function () {
        include "_/persuratan.php";
    });
});

Route::prefix('mahasiswa')->middleware('auth:mahasiswa')->group(function () {
    Route::get('/', DashboardController::class);
});
