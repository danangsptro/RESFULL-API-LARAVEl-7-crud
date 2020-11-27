<?php

namespace App\Http\Controllers\backend;

use App\api\divisi;
use App\api\jabatan;
use App\api\karyawan;
use App\Http\Controllers\Controller;

class adminController extends Controller
{
    public function index(){
        $divisi = divisi::all();
        $jabatan = jabatan::all();
        $karyawan = karyawan::all();
        return view('backend.dasboard-admin', compact('divisi', 'jabatan', 'karyawan'));
    }
}
