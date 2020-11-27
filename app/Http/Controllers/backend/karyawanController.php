<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\api\karyawan;
use App\api\jenis_kelamin;
use App\api\status;
use App\api\divisi;
use App\api\jabatan;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view ('backend.content.karyawan.index-karyawan', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisi = divisi::all();
        $jabatan = jabatan::all();
        $status = status::all();
        $jenis = jenis_kelamin::all();
        return view ('backend.content.karyawan.create-karyawan', compact('divisi', 'jabatan', 'status', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $divisi = divisi::all();
        $jabatan = jabatan::all();
        $status = status::all();
        $jenis = jenis_kelamin::all();
        $karyawan = karyawan::where('id', $id)->first();
        return view ('backend.content.karyawan.edit-karyawan', compact('divisi', 'jabatan', 'status', 'jenis', 'karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
