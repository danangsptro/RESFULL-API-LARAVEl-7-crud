<?php

namespace App\api;

use Illuminate\Database\Eloquent\Model;

class jenis_kelamin extends Model
{
    protected $guarded = [];

    public function karyawan() {
        return $this->hasMany(karyawan::class, 'jenis_kelamin_id', 'id');
    }
}
