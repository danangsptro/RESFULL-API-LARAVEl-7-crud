<?php

namespace App\Http\Controllers\api;

use App\api\status;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{
    public function index(){
        $status = status::all();

        return response()->json([
            'success' => true,
            'message' => 'Data Status',
            'data'    => $status
        ], 200);
    }
    public function create(Request $request){
        $status = new status();

        $status->status_karyawan = $request->status_karyawan;
        $status->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Input',
            'data'    => $status
        ], 200);
    }
    public function update(Request $request, $id){
        $status_karyawan = $request->status_karyawan;

        $status = status::find($id);
        $status->status_karyawan = $status_karyawan;

        $status->save();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Update',
            'data'    => $status
        ], 200);
    }
    public function delete($id){
        $status = status::find($id);
        $status->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Delete',
            'data'    => $status
        ], 200);
    }
}
