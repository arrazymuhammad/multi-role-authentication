<?php

namespace App\Models\Admin\MasterData;

use App\Models\Model;
use App\Models\Admin\MasterData\Role;


class Module extends Model
{
    protected $table = 'admin__module';

    public function role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }
}
