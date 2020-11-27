<?php

namespace App\api;

use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    protected $guarded = [];

    public function karyawan() {
        return $this->hasMany(karyawan::class, 'jabatan_id', 'id');
    }
}
