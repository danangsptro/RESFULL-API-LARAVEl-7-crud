@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-JABATAN')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Jabatan</h1>
        <br>
        <form action="{{ route('create-jabatan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="jabatan_karyawan"><strong>Jabatan Karyawan</strong></label>
                <input type="text" class="form-control" name="jabatan_karyawan">
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
