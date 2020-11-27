@extends('backend.masterbackend')
@section('title', 'ADMIN | STATUS')


@section('backend')
    <br>
    <br>
    <h1 id="ftd">Table Status</h1>
    <br>
    <div class="container-fluid">
        <a href="{{ route('halaman-dasboard') }}" class="btn btn-primary" style="border-radius: 5rem">Kembali Halaman Admin</a>
    <a href="{{route('created-status')}}" class="btn btn-warning" style="border-radius: 5rem">Tambah Data</a>
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
                            <th scope="col">Status Karyawan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($status as $d)
                            <tr>
                                <td>{{ $d->id }}</td>
                                <td>{{ $d->status_karyawan }}</td>
                                <td>
                                <a href="{{route ('edit-status', $d->id)}}" class="btn btn-warning" style="border-radius: 5rem">EDIT</a>
                                <form action="{{route('delete-status', $d->id)}}" class="d-inline"
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
