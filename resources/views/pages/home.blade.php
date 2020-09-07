@extends('layouts.app')

@section('title')
    E-Monitoring 
@endsection

@section('content')
  <!-- awal jumbotron -->

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-7">
          <h3 style="margin-bottom: -15px;">Sistem</h3>
          <br />
          <h1>Monitoring Pengiriman Barang Sriwijaya Air</h1>
          <p style="font-style: italic;">
            Selamat Datang di Sistem Monitoring Pengiriman Barang dari
            Mahasiswa Universitas Muhammadiyah Tangerang
          </p>
          <a href="#" class="btn btn-warning text-white mt-3">Let's Get Start</a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-5">
        <img src="{{url('frontend/img/BN.png')}}" style="height: 400px;" />
        </div>
      </div>
    </div>
  </div>

  <!-- akhit jumbotron -->

  <!-- awal header -->

  <header class="text-center">
    <h1>
      Monitoring
    </h1>
    <hr style="width: 200px; margin-bottom: 50px;" />
  </header>

  <!-- akhir header -->

  <!-- awal service -->

  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-5 col-lg-4" style="margin: auto;">
          <div class="card text-center" style="width: 18rem;">
          <img src="{{url('frontend/img/delivery.png')}}" class="card-img-top" style="height: 150px; width: 150px; margin-left: 70px;" />
            <div class="card-body">
              <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder=" Masukan Nomor Resi" />
              <a href="#" class="btn btn-primary mt-3">Cek Resi</a>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-4">
          <div class="card text-center" style="width: 18rem;">
          <img src="{{url('frontend/img/location.png')}}" class="card-img-top" style="height: 150px; width: 150px; margin-left: 70px;" />
            <div class="card-body">
              <h5 class="card-title">Tracking Area</h5>
              <a href="/tracking_area" class="btn btn-primary mt-3">Tracking Area</a>
            </div>
          </div>
        </div>
        <div class="col-sm-10 col-md-5 col-lg-4">
          <div class="card text-center" style="width: 18rem;">
          <img src="{{url('frontend/img/survey.png')}}" class="card-img-top" style="height: 150px; width: 150px; margin-left: 70px;" />
            <div class="card-body">
              <h5 class="card-title">informasi biaya</h5>
              <a href="/informasi_biaya" class="btn btn-primary mt-3">informasi biaya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- akhir service -->
    
@endsection