@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-JENIS KELAMIN')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Jenis Kelamin</h1>
        <br>
        <form action="{{ route('create-jenisKelamin') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="jenis_kelamin"><strong>Jabatan Karyawan</strong></label>
                <input type="text" class="form-control" name="jenis_kelamin">
                @error('jenis_kelamin')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('jenis-kelamin.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
