<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\api\karyawan;

class DataKaryawanFrontendController extends Controller
{
    public function index () {
        $karyawan = karyawan::all();
        return view ('frontend.content.data-karyawan', compact('karyawan'));
    }
}
