@extends('layouts.app')
@section('title', 'Services')

@section('content')

    <!-- awal jumbotron -->

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-7">
                    <h3 style="margin-bottom: -15px;">Sistem</h3>
                    <br />
                    <h1>Service Monitoring Pengiriman Barang Sriwijaya Air</h1>
                    <p style="font-style: italic;">
                        Selamat Datang di Sistem Monitoring Pengiriman Barang dari
                        Mahasiswa Universitas Muhammadiyah Tangerang
                    </p>
                    <a href="#" class="btn btn-warning text-white mt-3">Let's Get Start</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5">
                <img src="{{url('frontend/img/3.png')}}" style="height: 350px;" />
                </div>
            </div>
        </div>
    </div>

    <!-- akhit jumbotron -->

    <!-- awal header -->

    <header class="text-center">
        <h2>
            Services
        </h2>
        <hr style="width: 200px; margin-bottom: 50px;" />
    </header>

    <!-- akhir header -->

    <!-- awal service -->

    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-5 col-lg-3">
                    <div class="card text-center" style="width: 17rem;">
                    <img src="{{url('frontend/img/online_register.png')}}" class="card-img-top"
                            style="height: 130px; width: 130px; margin-left: 70px; margin-top: 10px;" />
                        <div class="card-body">
                            <h5 class="card-title">Registrasi</h5>
                            <a href="#" class="btn btn-primary" data-toggle="modal"
                                data-target="#registrasi">Registrasi</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-5 col-lg-3">
                    <div class="card text-center" style="width: 17rem;">
                    <img src="{{url('frontend/img/1.png')}}" class="card-img-top"
                            style="height: 130px; width: 130px; margin-left: 70px; margin-top: 10px;" />
                        <div class="card-body">
                            <h5 class="card-title">Tracking Area</h5>
                            <a href="/tracking_area" class="btn btn-primary">Tracking Area</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-5 col-lg-3">
                    <div class="card text-center" style="width: 17rem;">
                    <img src="{{url('frontend/img/2.png')}}" class="card-img-top"
                            style="height: 130px; width: 130px; margin-left: 70px; margin-top: 10px;" />
                        <div class="card-body">
                            <h5 class="card-title">Informasi Biaya</h5>
                            <a href="/informasi_biaya" class="btn btn-primary">informasi biaya</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-10 col-md-5 col-lg-3">
                    <div class="card text-center" style="width: 17rem;">
                    <img src="{{url('frontend/img/12.png')}}" class="card-img-top"
                            style="height: 130px; width: 130px; margin-left: 70px; margin-top: 10px;" />
                        <div class="card-body">
                            <h5 class="card-title">Lain-lainnya</h5>
                            <a href="/" class="btn btn-primary">Lain-lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- akhir service -->
@endsection
