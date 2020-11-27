@extends('frontend.masterFrontend')
@section('title', 'Data Karyawan')

@section('frontend')

    <div class="container data-karyawan">
        <h1>Data Karyawan</h1>
        <hr>
    </div>
    <div class="card container">
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered ftd" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat Karyawan</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Divisi</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawan as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama_karyawan }}</td>
                            <td>{{ $d->tanggal_lahir }}</td>
                            <td>{{ $d->alamat_karyawan }}</td>
                            <td>{{ $d->nomor_telepon }}</td>
                            <td>{{ $d->jenis_kelamin->jenis_kelamin }}</td>
                            <td>{{ $d->divisi->divisi_karyawan }}</td>
                            <td>{{ $d->jabatan->jabatan_karyawan }}</td>
                            <td>{{ $d->status->status_karyawan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
