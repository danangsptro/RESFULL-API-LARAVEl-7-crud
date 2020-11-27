<?php

namespace App\api;

use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    protected $guarded = [];

    public function karyawan() {
        return $this->hasMany(karyawan::class, 'divisi_id', 'id');
    }
}
