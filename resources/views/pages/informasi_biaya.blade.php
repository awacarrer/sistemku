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
            <div class="col-sm-10 col-md-8 col-lg-5">
                <h5>Biaya Pengiriman</h5>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kota Asal</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Tangerang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Kota Tujuan</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>--Pilih Asal Kota--</option>
                        <option>Jakarta Pusat</option>
                        <option>Jakarta Barat</option>
                        <option>Jakarta Selatan</option>
                        <option>Jakarta Timur</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-plus" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z" />
                        <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z" />
                        <path fill-rule="evenodd"
                            d="M8 7.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                        <path fill-rule="evenodd"
                            d="M7.5 10a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-2z" />
                    </svg>
                    Cek Biaya
                </button>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-sm-10 col-md-12 col-lg-12">
                <table class="table table-hover text-center">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Total Berat</th>
                            <th scope="col">Biaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tangerang</td>
                            <td>Jakarta Barat</td>
                            <td>7 Kg</td>
                            <td>Rp. 203.000.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tangerang</td>
                            <td>Jakarta Timur</td>
                            <td>17 Kg</td>
                            <td>Rp. 603.000.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tangerang</td>
                            <td>Jakarta Pusat</td>
                            <td>27 Kg</td>
                            <td>Rp. 703.000.00</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Tangerang</td>
                            <td>Jakarta Selatan</td>
                            <td>37 Kg</td>
                            <td>Rp. 803.000.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!--akhir Tracking Pengiriman Barang -->

@endsection