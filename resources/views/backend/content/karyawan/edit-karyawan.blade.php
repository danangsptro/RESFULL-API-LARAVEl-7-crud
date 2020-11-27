@extends('backend.masterbackend')
@section('title', 'ADMIN | EDIT-KARYAWAN')


@section('backend')
    <div class="container mt-3">
        <br>
        <h1 id="ftd">Create Karyawan</h1>
        <br>
        <form action="{{ route('update-karyawans', $karyawan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" class="form-control" name="id" value="{{ $karyawan->id }}">
            <div class="form-group">
                <label for="nama_karyawan"><strong>Nama Karyawan</strong></label>
                <input type="text" class="form-control" name="nama_karyawan" value="{{ $karyawan->nama_karyawan }}">
                @error('nama_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat_karyawan"><strong>Alamat Karyawan</strong></label>
                <input type="text" class="form-control" name="alamat_karyawan" value="{{ $karyawan->alamat_karyawan }}">
                @error('alamat_karyawan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tanggal_lahir"><strong>Tanggal Lahir</strong></label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}">
                @error('tanggal_lahir')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nomor_telepon"><strong>Nomor Telepon</strong></label>
                <input type="text" class="form-control" name="nomor_telepon" value="{{ $karyawan->nomor_telepon }}">
                @error('nomor_telepon')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jenis_kelamin_id"><strong>Jenis Kelamin</strong></label>
                <select name="jenis_kelamin_id" id="jenis_kelamin_id" class="custom-select">
                    @foreach ($jenis as $item)
                        <option value="{{ $item->id }}" {{ $karyawan->jenis_kelamin_id == $item->id ? 'selected' : '' }}>
                            {{ $item->jenis_kelamin }}
                        </option>
                    @endforeach
                </select>
                @error('jenis_kelamin_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="divisi_id"><strong>Divisi</strong></label>
                <select name="divisi_id" id="divisi_id" class="custom-select">
                    @foreach ($divisi as $item)
                        <option value="{{ $item->id }}" {{ $karyawan->divisi_id == $item->id ? 'selected' : '' }}>
                            {{ $item->divisi_karyawan }}
                        </option>
                    @endforeach
                </select>
                @error('divisi_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="jabatan_id"><strong>Jabatan</strong></label>
                <select name="jabatan_id" id="jabatan_id" class="custom-select">
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}" {{ $karyawan->jabatan_id == $item->id ? 'selected' : '' }}>
                            {{ $item->jabatan_karyawan }}
                        </option>
                    @endforeach
                </select>
                @error('jabatan_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status_id"><strong>Status</strong></label>
                <select name="status_id" id="status_id" class="custom-select">
                    @foreach ($status as $item)
                        <option value="{{ $item->id }}" {{ $karyawan->status_id == $item->id ? 'selected' : '' }}>
                            {{ $item->status_karyawan }}
                        </option>
                    @endforeach
                </select>
                @error('status_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-success" type="submit"
                onclick="return confirm('Anda Yakin Sudah Benar ?')">Upload</button>
            <a href="{{ route('karyawan.index') }}" class="btn btn-primary">Back</a>
        </form>
        <br>
    </div>
@endsection
