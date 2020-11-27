@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-JENIS DIVISI')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Divisi</h1>
        <br>
        <form action="{{ route('update-divisi', $divisi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" value="{{ $divisi->id }}">
            <div class="form-group">
                <label for="divisi_karyawan"><strong>Nama Divisi</strong></label>
            <input type="text" class="form-control" name="divisi_karyawan" value = {{$divisi->divisi_karyawan}}>
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
