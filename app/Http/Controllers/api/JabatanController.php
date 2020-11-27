<?php

namespace App\Http\Controllers\api;

use App\api\jabatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JabatanController extends Controller
{
    public function index(){
        $jabatan = jabatan::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Jabatan',
            'data'    => $jabatan
        ], 200);
    }
    public function create(Request $request){
        $jabatan = new jabatan();

        $jabatan->jabatan_karyawan = $request->jabatan_karyawan;
        $jabatan->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil Di Input',
            'data'    => $jabatan
        ], 200);
    }

    public function update(Request $request, $id){
        $jabatan_karyawan = $request->jabatan_karyawan;

        $jabatan = jabatan::find($id);
        $jabatan->jabatan_karyawan = $jabatan_karyawan;
        $jabatan->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil Di Update',
            'data'    => $jabatan
        ], 200);
    }
    public function delete($id){
        $jabatan = jabatan::find($id);
        $jabatan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil Di Delete',
            'data'    => $jabatan
        ], 200);
    }
}
