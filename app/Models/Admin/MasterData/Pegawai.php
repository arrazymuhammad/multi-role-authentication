<?php

namespace App\Models\Admin\MasterData;

use App\Models\ModelAuthenticate;
use App\Models\Admin\MasterData\Role;

class Pegawai extends ModelAuthenticate
{
    protected $table = 'admin__pegawai';

    public $fillable = ['nama', 'email'];

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }
}
