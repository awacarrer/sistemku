@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">
        <div class="col">
                    <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Barang </h6>
                </div>

                @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('detail-barang.store')}}" method="post">
                            @csrf
                            <!-- Resi -->
                            <div class="form-group">
                                <label for="no_pengiriman">No Pengiriman</label>
                                <input type="number" class="form-control" name="no_pengiriman" id="no_pengiriman" value="{{old('no_pengiriman')}}"
                                    placeholder="Masukan No Pengiriman" />
                            </div>
                            <!-- Email -->
                            <div class="form-group">
                                <label for="nama_barang">nama_barang</label>
                                <input type="nama_barang" class="form-control" name="nama_barang" id="nama_barang" value="{{old('nama_barang')}}"
                                    placeholder="Masukan Nama Barang" />
                            </div>
                            <div class="form-group">
                                <label for="berat_barang">Berat Barang</label>
                                <input type="berat_barang" class="form-control" name="berat_barang" id="berat_barang" value="{{old('berat_barang')}}"
                                    placeholder="Masukan Berat Barang" />
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya</label>
                                <input type="biaya" class="form-control" name="biaya" id="biaya" value="{{old('biaya')}}"
                                    placeholder="Masukan Biaya Pengiriman" />
                            </div>
    
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection