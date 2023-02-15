@section('title')
    Edit Jabatan dan Kontrak Kerja
@endsection
@section('KontrakdanJabatan')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Edit Kontrak dan Jabatan Kerja</h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
                <li class="breadcrumb-item"><a href="#">Kontrak dan Jabatan Kerja</a></li>
                <li class="breadcrumb-item"><a href="#">Edit kontrak dan Jabatan Kerja</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form class="form-horizontal" action="{{ route('KontrakdanJabatan.update', $jabatan->id) }}"
                            method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label class="control-label col-md-3">jabatan Pekerjaan</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" value="{{ $jabatan->nm_pekerjaan }}" type="text"
                                        name="nm_pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Kontrak Pekerjaan</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" value="{{ $jabatan->kontrak_pekerjaan }}"
                                        type="text" name="kontrak_pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Data Pekerjaan</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" value="{{ $jabatan->d_pekerjaan }}" type="text"
                                        name="d_pekerjaan">
                                </div>
                            </div>
                    </div>
                    <input type="hidden" name="pegawai_id" value="{{ $jabatan->pegawai_id }}">
                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                                <a class="btn btn-secondary" href="http://127.0.0.1:8000/KontrakdanJabatan"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
