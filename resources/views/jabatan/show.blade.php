@extends('app')
@section('title')
    Jabatan Kerja
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
                <li class="breadcrumb-item"><a href="/pegawai/{{ $pegawai->id }}">Detail Pegawai</a></li>
                <li class="breadcrumb-item"><a href="#">Kontrak Dan Jabatan Kerja</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="form-group col-md 8">
                        <a href="{{ url('pegawai/KontrakdanJabatan/' . $pegawai->id) }}" class="btn btn-primary"><span
                                class="fa fa-plus"> Tambah Kontrak dan Jabatan</span></a>
                    </div>

                    <table class="table table-stripped table-hover">
                        <thead>
                            <th>Jabatan Pekerjaan</th>
                            <th>Data Pekerjaan</th>
                            <th>Kontrak Pekerjaan</th>
                            <th>Operasi</th>
                        </thead>
                        <tbody>
                            @foreach ($pegawai->jabatan as $pengalamans)
                                <tr>
                                    <td>{{ $pengalamans->nm_pekerjaan }}</td>
                                    <td>{{ $pengalamans->d_pekerjaan }}</td>
                                    <td>{{ $pengalamans->kontrak_pekerjaan }}</td>
                                    <!-- <td><a href=""><input type="submit" class="btn btn-warning fa fa-edit"> Edit</a></td> -->
                                    <td><a href="{{ route('KontrakdanJabatan.edit', $pengalamans->id) }}"><button
                                                class="btn btn-warning fa fa-edit"> Edit</button></a></td>
                                    <td>
                                        <form action="{{ route('KontrakdanJabatan.destroy', $pengalamans->id) }}"
                                            method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger fa fa-trash" type="submit"> Hapus</button>
                                        </form>
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
