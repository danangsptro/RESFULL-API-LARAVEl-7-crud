@extends('backend.masterbackend')
@section('title', 'ADMIN | DIVISI')


@section('backend')
    <br>
    <br>
    <h1 id="ftd">Table Divisi</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary" style="border-radius: 5rem">Kembali Halaman Admin</a>
    <a href="{{route('created-divisi')}}" class="btn btn-warning" style="border-radius: 5rem">Tambah Data</a>
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
                            <th scope="col">Divisi Karyawan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($divisi as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->divisi_karyawan }}</td>
                                <td>
                                <a href="{{route('edit-divisi', $d->id)}}" class="btn btn-warning" style="border-radius: 5rem">EDIT</a>
                                <form action="{{route('delete-divisi', $d->id)}}" class="d-inline"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger"
                                            onclick="return confirm('ANDA YAKIN INGIN MENGHAPUS ?')" style="border-radius: 5rem">HAPUS</button>
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
