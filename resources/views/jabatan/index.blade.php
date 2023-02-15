@extends('app')
@section('title')
    Kontrak dan Jabatan Kerja
@endsection
@section('KontrakdanJabatan')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Kontrak Dan Jabatan Kerja</h1>
                <!-- <p>Sample forms</p> -->
            </div>

            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">...</li>
                <li class="breadcrumb-item"><a href="">Detail Pegawai</a></li>
                <li class="breadcrumb-item"><a href="#">Kontrak dan Jabatan Kerja</a></li>
            </ul>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="form-group col-md 8">

                    </div>

                    <table class="table table-stripped table-hover">
                        <thead>
                            <th>Nama Pegawai</th>

                            <th>Lihat</th>

                        </thead>
                        <tbody>
                            @foreach ($pegawai as $tampil)
                                <tr>

                                    <td>{{ $tampil->nama }}</td>


                                    <td>
                                        <a href="{{ url('/pegawai/' . $tampil->id . '/showKontrakdanJabatan') }}"
                                            class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>

                                    </td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
@endsection
