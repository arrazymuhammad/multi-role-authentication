<?php

use App\Http\Controllers\Admin\MasterData\MahasiswaController;
use App\Http\Controllers\Admin\MasterData\ModuleController;
use App\Http\Controllers\Admin\MasterData\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'admin/master-data/pegawai');
Route::resource('master-data/pegawai', PegawaiController::class);
Route::resource('master-data/mahasiswa', MahasiswaController::class);
Route::post('master-data/module/add-role', [ModuleController::class, 'addRole']);
Route::get('master-data/module/delete-role/{role}', [ModuleController::class, 'deleteRole']);
Route::resource('master-data/module', ModuleController::class);
