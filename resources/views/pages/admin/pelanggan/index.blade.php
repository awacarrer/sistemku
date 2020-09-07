@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pelanggan</h6>
        </div>
        <div class="card-body">
        <a href="{{route('pelanggan.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus"></i> Tambah pelanggan
        </a>
            <div class="table-responsive">
                <table class="table table-striped text-center mt-3" style="font-size: 12px">
                    <thead>
                        <tr>
                            <th scope="col">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                          <td>
                            <img src="/img/{{$item->foto == '' ? 'default.png' : $item->foto}}" alt="" style="width: 60px">
                          </td>
                          <td>{{$item->nama}}</td>
                          <td>{{$item->jenis_kelamin}}</td>
                          <td>{{$item->telepon}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->alamat}}</td>
                            <td>
                              <a href="{{route('pelanggan.edit', $item->id)}}" class="btn btn-primary">
                                  <i class="fa fa-edit"></i>
                              </a>
                          <form action="{{route('pelanggan.destroy', $item->id)}}" method="post" class="d-inline">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger">
                                  <i class="fa fa-trash"></i>
                              </button>
                          </form>
                          <a href="{{route('pengiriman-barang.index', $item->id)}}" class="btn btn-success">
                            <i class="fa fa-box"></i>
                        </a>
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