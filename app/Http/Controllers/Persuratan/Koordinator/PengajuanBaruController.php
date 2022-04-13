<?php

namespace App\Http\Controllers\Persuratan\Koordinator;

use App\Http\Controllers\Controller;

class PengajuanBaruController extends Controller
{
    public function __invoke()
    {
        return view('persuratan.koordinator.pengajuan-baru');
    }
}
