@extends('backend.masterbackend')
@section('title', 'ADMIN | KARYAWAN')


@section('backend')
    <br>
    <br>
    <h1 id="ftd">Table Karyawan</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary" style="border-radius: 5rem">Kembali Halaman
            Admin</a>
        <a href="{{ route('created-karyawan') }}" class="btn btn-warning" style="border-radius: 5rem">Tambah Data</a>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Data Table</strong>
            </div>
            <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered ftd">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nama Karyawan</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Alamat Karyawan</th>
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Divisi</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->nama_karyawan }}</td>
                                <td>{{ $d->tanggal_lahir }}</td>
                                <td>{{ $d->alamat_karyawan }}</td>
                                <td>{{ $d->nomor_telepon }}</td>
                                <td>{{ $d->jenis_kelamin->jenis_kelamin }}</td>
                                <td>{{ $d->divisi->divisi_karyawan }}</td>
                                <td>{{ $d->jabatan->jabatan_karyawan }}</td>
                                <td>{{ $d->status->status_karyawan }}</td>
                                <td>
                                    <a href="{{ route('edit-karyawan', $d->id) }}" class="btn btn-warning"
                                        style="border-radius: 5rem">EDIT</a>
                                    <form action="{{route('delete-karyawan', $d->id)}}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('ANDA YAKIN INGIN MENGHAPUS ?')"
                                            style="border-radius: 5rem; margin-top:1rem;">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
