@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-JENIS KELAMIN')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Edit Jabatan</h1>
        <br>
        <form action="{{ route('update-jenisKelamin', $jabatan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" value="{{ $jabatan->id }}">
            <div class="form-group">
                <label for="jabatan_karyawan"><strong>Nama Divisi</strong></label>
                <input type="text" class="form-control" name="jabatan_karyawan" value={{ $jabatan->jabatan_karyawan }}>
                @error('jabatan_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('jabatan.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
