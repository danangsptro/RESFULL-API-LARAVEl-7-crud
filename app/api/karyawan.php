<?php

namespace App\api;

use App\api\divisi;
use App\api\status;
use App\api\jabatan;
use App\api\jenis_kelamin;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $guarded = [];

    public function divisi(){
        return $this->belongsTo(divisi::class, 'divisi_id', 'id');
    }
    public function jabatan(){
        return $this->belongsTo(jabatan::class, 'jabatan_id', 'id');
    }
    public function status(){
        return $this->belongsTo(status::class, 'status_id', 'id');
    }
    public function jenis_kelamin(){
        return $this->belongsTo(jenis_kelamin::class, 'jenis_kelamin_id', 'id');
    }
}
