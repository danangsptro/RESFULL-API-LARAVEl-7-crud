<?php

namespace App\Http\Controllers\api;
use App\api\karyawan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = karyawan::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Karyawan',
            'data'    => $karyawan
        ], 200);
    }

    public function create(Request $request){
        $karyawan = new karyawan();

        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat_karyawan = $request->alamat_karyawan;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->nomor_telepon = $request->nomor_telepon;
        $karyawan->jenis_kelamin_id = $request->jenis_kelamin_id;
        $karyawan->divisi_id = $request->divisi_id;
        $karyawan->jabatan_id = $request->jabatan_id;
        $karyawan->status_id = $request->status_id;

        $karyawan->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Input',
            'data'    => $karyawan
        ], 200);
    }

    public function update(Request $request, $id){
        $nama_karyawan = $request->nama_karyawan;
        $alamat_karyawan = $request->alamat_karyawan;
        $nomor_telepon = $request->nomor_telepon;
        $divisi_id = $request->divisi_id;
        $jabatan_id = $request->jabatan_id;
        $status_id = $request->status_id;

        $karyawan = karyawan::find($id);
        $karyawan->nama_karyawan = $nama_karyawan;
        $karyawan->alamat_karyawan = $alamat_karyawan;
        $karyawan->nomor_telepon = $nomor_telepon;
        $karyawan->divisi_id = $divisi_id;
        $karyawan->jabatan_id = $jabatan_id;
        $karyawan->status_id = $status_id;

        $karyawan->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Update',
            'data'    => $karyawan
        ], 200);
    }

    public function delete($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Delete',
            'data'    => $karyawan
        ], 200);
    }
}
