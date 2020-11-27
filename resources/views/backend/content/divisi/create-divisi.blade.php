@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-JENIS KELAMIN')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Divisi</h1>
        <br>
        <form action="{{ route('create-divisi') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="divisi_karyawan"><strong>Nama Divisi</strong></label>
                <input type="text" class="form-control" name="divisi_karyawan">
                @error('divisi_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('divisi.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
