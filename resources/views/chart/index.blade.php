@extends('app')
@section('title')
    Charts
@endsection
@section('chart')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1>Charts</h1>
                <!-- <p>Dashboard Sistem Kepegawaian</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Chartss</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Perbandingan Users dan Pegawai </h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title">Pegawai Berdasarkan Jabatan Kontrak</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
