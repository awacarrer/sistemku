@extends('layouts.app')
@section('title', 'Contact')

@section('content')

  <!-- awal jumbotron -->

  <div class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-7">
          <h3 style="margin-bottom: -15px;">Contact us</h3>
          <br />
          <h1>Sistem Monitoring Pengiriman Barang Sriwijaya Air</h1>
          <p style="font-style: italic;">
            Selamat Datang di Sistem Monitoring Pengiriman Barang dari
            Mahasiswa Universitas Muhammadiyah Tangerang
          </p>
          <a href="#" class="btn btn-warning text-white mt-3">Let's Get Start</a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-5">
            <img src="{{url('frontend/img/4.png')}}" style="height: 300px;" />
        </div>
      </div>
    </div>
  </div>

  <!-- akhit jumbotron -->


  <!-- awal menu contact us -->

  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6">
          <h3>Contact us</h3>
            <h2 class="mt-4">PT.Sriwijaya Air</h2>
            <p class="pt-2">Nomor call center Sriwijaya Air  062-21-5507902</p>
            <p>Hotline dan customer service Sriwijaya Air <br> +0804 1777 777</p>
        </div>
        <div class="col-sm-10 col-md-8 col-lg-6">
          <h3>Say Hello!</h3>
          <form>
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="email" placeholder="Masukan full name" class="form-control" id="fullname"
                aria-describedby="emailHelp" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" placeholder="Masukan Email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" />
            </div>
            <div class="form-group">
              <label for="measseges">Measseges</label>
              <textarea type="text" placeholder="Masukan Pesan" name="measseges" class="form-control"
                id="measseges"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection