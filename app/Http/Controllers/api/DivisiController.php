<?php

namespace App\Http\Controllers\api;

use App\api\divisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisiController extends Controller
{
    public function index()
    {
        $divisi = divisi::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Divisi',
            'data'    => $divisi
        ], 200);
    }

    public function create(Request $request)
    {
        $divisi = new divisi();

        $divisi->divisi_karyawan = $request->divisi_karyawan;
        $divisi->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil Di Input',
            'data'    => $divisi
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $divisi_karyawan = $request->divisi_karyawan;

        $divisi = divisi::find($id);
        $divisi->divisi_karyawan = $divisi_karyawan;

        $divisi->save();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil Di Update',
            'data'    => $divisi
        ], 200);
    }

    public function delete($id)
    {
        $divisi = divisi::find($id);
        $divisi->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data berhasil Di Delete',
            'data'    => $divisi
        ], 200);
    }
}
