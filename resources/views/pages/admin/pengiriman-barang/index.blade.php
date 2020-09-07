@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pengiriman Barang</h6>
        </div>
        <div class="card-body">
        <a href="{{route('pengiriman-barang.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah Pengiriman
        </a>
            <div class="table-responsive">
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">Tanggal Pengiriman</th>
                            <th scope="col">Nama Pengirim</th>
                            <th scope="col">Kota Asal</th>
                            <th scope="col">Kota Tujuan</th>
                            <th scope="col">Nama Penerima</th>
                            <th scope="col">Organisasi Penerima</th>
                            <th scope="col">Alamat</th>
                            <th scope="col"></th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                          <td>{{$item->tanggal_pengiriman}}</td>
                          <td>{{$item->nama_pengirim}}</td>
                          <td>{{$item->kota_asal}}</td>
                          <td>{{$item->kota_tujuan}}</td>
                          <td>{{$item->nama_penerima}}</td>
                          <td>{{$item->organisasi_penerima}}</td>
                          <td>{{$item->alamat}}</td>
                          <td>
                            <td>
                              <a href="{{route('pengiriman-barang.edit', $item->id)}}" class="btn btn-primary">
                                  <i class="fa fa-edit"></i>
                              </a>
                          <form action="{{route('pengiriman-barang.destroy', $item->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                              </button>
                          </form>
                            <a href="{{route('detail-barang.index', $item->nama_pengirim)}}" class="btn btn-success">
                                <i class="fa fa-list"></i>
                            </a>
                          </td>
                          </td>
                    </tr>
                       @empty
                           <tr>
                             <td colspan="8" class="text-center">
                               Data Kosong
                             </td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection