@extends('layouts.app')
@section('title', 'Informasi Biaya')

@section('content')
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
    <h3>
        Informasi Biaya
    </h3>
    <hr style="width: 200px; margin-bottom: 50px;" />
</header>

<!-- akhir header -->

<!--awal Tracking Pengiriman Barang -->

<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">informasi Biaya</h6>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped text-center mt-3" style="font-size: 12px">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Kota Asal</th>
                                        <th scope="col">Kota Tujuan</th>
                                        <th scope="col">Total Berat</th>
                                        <th scope="col">Biaya</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                       <td>{{$item->id}}</td>
                                       <td>{{$item->kota_asal}}</td>
                                       <td>{{$item->kota_tujuan}}</td>
                                       <td>{{$item->total_berat}}/Kg</td>
                                       <td>Rp. {{$item->biaya}},-</td>
                                     </tr>
                                    @empty
                                        <tr>
                                          <td colspan="5" class="text-center">
                                            Data Kosong
                                          </td>
                                        </tr>
                                    @endforelse
                                 </tbody>
                            </table>
                            <span style="font-style: italic;">*Informasi Biaya Dengan Pengiriman minimal 50/Kg Barang akan dikirim dengan kurir kami*</span>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>

<!--akhir Tracking Pengiriman Barang -->

@endsection