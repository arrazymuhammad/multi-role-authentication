<?php

use App\Http\Controllers\Persuratan\Koordinator\PengajuanBaruController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'koordinator/pengajuan-baru');

Route::get('pengajuan-baru', PengajuanBaruController::class);
