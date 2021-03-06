@extends('backend.masterbackend')
@section('title', 'Admin | Daboard Admin')

@section('backend')

    <div class="container-fluid">
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">PT MAJU TERUS</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-1">
            <div class="jumbotron jumbotron-fluid" style="background-color: #FEBD01; border-radius:5rem">
                <div class="container" style=" text-align: center; color:white;">
                    <h1 class="display-4"><strong>Selamat Datang</strong></h1>
                    <br>
                    <h3 class="display-5">Di halaman Dashboard PT MAJU TERUS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body" style="background-color: #f7eaa4;">
                        <div class="clearfix">
                            <div class="float-right">
                                <p class="mb-0 text-right"><strong>Data Divisi</strong></p>
                                <div class="container-fluid">
                                    <h3 class="text-right">{{ $divisi->count() }}</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                              </svg> &nbsp; Total seluruh Divisi
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body" style="background-color:  #f7eaa4;">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-receipt text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right"><strong>Data Jabatan</strong></p>
                                <div class="container-fluid">
                                    <h3 class="text-right">{{ $jabatan->count() }}</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                              </svg> &nbsp; Total seluruh Jabatan
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="card">
                    <div class="card-body" style="background-color:  #f7eaa4;">
                        <div class="clearfix">
                            <div class="float-left">
                                <i class="mdi mdi-receipt text-warning icon-lg"></i>
                            </div>
                            <div class="float-right">
                                <p class="mb-0 text-right"><strong>Jumlah Karyawan</strong></p>
                                <div class="container-fluid">
                                    <h3 class="text-right">{{ $karyawan->count() }}</h3>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted mt-3 mb-0">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                              </svg> &nbsp; Total seluruh Karyawan
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
@endsection
