<?php

namespace App\Http\Controllers\api;

use App\api\jenis_kelamin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class jenis_kelaminController extends Controller
{
    public function index()
    {
        $jenis_kelamin = jenis_kelamin::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Jenis Karyawan',
            'data' => $jenis_kelamin
        ], 200);
    }

    public function create(Request $request)
    {
        $jenis_kelamin = new jenis_kelamin();

        $jenis_kelamin->jenis_kelamin = $request->jenis_kelamin;
        $jenis_kelamin->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Input',
            'data' => $jenis_kelamin
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $jenis_kelamin = $request->jenis_kelamin;

        $jenis = jenis_kelamin::find($id);
        $jenis->jenis_kelamin = $jenis_kelamin;

        $jenis->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Update',
            'data' => $jenis
        ], 200);
    }

    public function delete ($id)
    {
        $jenis_kelamin = jenis_kelamin::find($id);
        $jenis_kelamin->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Delete',
            'data' => $jenis_kelamin
        ], 200);
    }
}
