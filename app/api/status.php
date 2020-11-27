<?php

namespace App\api;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $guarded = [];

    public function karyawan() {
        return $this->hasMany(karyawan::class, 'status_id', 'id');
    }
}
