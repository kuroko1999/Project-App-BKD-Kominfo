@extends('app')
@section('title')
    Edit Pegawai
@endsection
@section('pegawai')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Edit Pegawai</h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Pegawai</li>
                <li class="breadcrumb-item"><a href="#">Edit Pegawai</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <!-- <h3 class="tile-title">Register</h3> -->
                    <div class="tile-body">
                        <form class="form-horizontal" action="{{ route('pegawai.update', $pegawai->id) }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group row">
                                <label class="control-label col-md-3">NIP</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="number" name="nip" id="nip"
                                        value="{{ $pegawai->nip }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="nama"id="nama"
                                        value="{{ $pegawai->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tempat Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="tmpt_lahir" id="tmpt_lahir"
                                        value="{{ $pegawai->tmpt_lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="date" name="tgl_lahir" id="tgl_lahir"
                                        value="{{ $pegawai->tgl_lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Alamat</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="4" name="alamat" id="alamat">{{ $pegawai->alamat }}"</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="jenis_kelamin" value="L"
                                                {{ $pegawai->jenis_kelamin == 'L' ? 'checked' : '' }}>Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                id="jenis_kelamin" value="P"
                                                {{ $pegawai->jenis_kelamin == 'P' ? 'checked' : '' }}>Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3">Foto</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="file" name="foto" id="foto"
                                        value="{{ $pegawai->foto }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nomor HP</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="number" name="nohp" id="nohp"
                                        value="{{ $pegawai->nohp }}">
                                </div>
                            </div>


                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                                <a class="btn btn-secondary" href="http://127.0.0.1:8000/pegawai"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                            </div>

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
