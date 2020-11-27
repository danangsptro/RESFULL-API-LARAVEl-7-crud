@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-JABATAN')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Edit Jenis Kelamin</h1>
        <br>
        <form action="{{ route('update-jenisKelamin', $jenis_kelamin->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" value="{{ $jenis_kelamin->id }}">
            <div class="form-group">
                <label for="jenis_kelamin"><strong>Jenis Kelamin</strong></label>
            <input type="text" class="form-control" name="jenis_kelamin" value="{{$jenis_kelamin->jenis_kelamin}}">
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
