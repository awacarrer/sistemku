@extends('layouts.app')
@section('title', 'DetailPengiriman')

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
        <h3>
            Detail Pengiriman Barang
        </h3>
        <hr style="width: 200px; margin-bottom: 50px;" />
    </header>

    <!-- akhir header -->

    <!--awal detail pengiriman barang -->

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>Detail Pengiriman Barang No.Pengiriman: 1092</h5>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">No. Peng Barang</th>
                                <th scope="col">No Resi</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Penerima</th>
                                <th scope="col">Alamat Pengiriman</th>
                                <th scope="col">Biaya Pengiriman</th>
                                <th scope="col">Total Biaya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1092</th>
                                <td>GZBL899906</td>
                                <td>29/07/2020</td>
                                <td>boby - pt siku </td>
                                <td>tangerang - Samarinda </td>
                                <td>Rp. 200.000.00</td>
                                <td>Rp.400.000.00 </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h5>Data Barang</h5>
                    <table class="table table-hover text-center">
                        <thead>
                            <tr>
                                <th scope="col">No. Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Berat Barang</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sepatu</td>
                                <td>1 Kg</td>
                                <td>
                                    <button type="button" class="btn btn-warning text-white">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn btn-danger text-white">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Sandal</td>
                                <td>2 Kg</td>
                                <td>
                                    <button type="button" class="btn btn-warning text-white">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd"
                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg>
                                    </button>
                                    <button type="button" class="btn btn-danger text-white">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd"
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Total Berat</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="0/Kg">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-success text-white mr-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4a.5.5 0 0 0-1 0v3.5H4a.5.5 0 0 0 0 1h3.5V12a.5.5 0 0 0 1 0V8.5H12a.5.5 0 0 0 0-1H8.5V4z" />
                        </svg>
                    </button>
                    <button type="button" class="btn btn-primary text-white mr-2">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                        </svg>
                    </button>
                    <button type="button" class="btn btn-warning text-white">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-printer-fill" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5z" />
                            <path fill-rule="evenodd"
                                d="M11 9H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                            <path fill-rule="evenodd"
                                d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--akhir detail pengiriman barang -->

@endsection