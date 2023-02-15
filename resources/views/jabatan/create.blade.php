@section('title')
    Tambah Pengalaman Kerja
@endsection
@section('KontrakdanJabatan')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Tambah Kontrak dan Jabatan Kerja</h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="/pegawai/{{ $pegawai->id }}">Detail Pegawai</a></li>
                <li class="breadcrumb-item"><a href="/pegawai/{{ $pegawai->id }}/KontrakdanJabatan">Kontrak Dan Jabatan
                        Kerja</a></li>
                <li class="breadcrumb-item"><a href="#">Tambah Kontrak dan Jabatan Kerja</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form class="form-horizontal" action="{{ url('/KontrakdanJabatan') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="control-label col-md-3">Jabatan Pekerjaan</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="nm_pekerjaan"
                                        id="nm_pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Kontrak Pekerjaan</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="kontrak_pekerjaan"
                                        id="kontrak_pekerjaan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Data Pekerjaan</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="d_pekerjaan" id="d_pekerjaan">
                                </div>
                            </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                                <a class="btn btn-secondary" href="/pegawai/{{ $pegawai->id }}/showKontrakdanJabatan"><i
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
