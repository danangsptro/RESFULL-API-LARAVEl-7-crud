@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-STATUS')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Status</h1>
        <br>
        <form action="{{ route('create-status') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="status_karyawan"><strong>Status Karyawan</strong></label>
                <input type="text" class="form-control" name="status_karyawan">
                @error('status_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('status.index') }}" class="btn btn-primary">Back</a>
        </form>
    </div>
@endsection
