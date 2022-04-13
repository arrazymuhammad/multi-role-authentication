<?php

namespace App\Models\Admin\MasterData;

use App\Models\ModelAuthenticate;

class Mahasiswa extends ModelAuthenticate
{
    protected $table = 'admin__mahasiswa';

    public $fillable = ['nim', 'nama'];
}
