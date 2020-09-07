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
                    <h6 class="m-0 font-weight-bold text-primary">Edit Pengiriman Barang [ {{$item->nama_pengirim}} ]</h6>
                </div>

                @if ($errors->any())

                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($erros->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    
                @endif
                
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="{{route('pengiriman-barang.update', $item->id)}}" method="post">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="tanggal_pengiriman">Tanggal Pengiriman</label>
                                <input type="datetime" class="form-control" name="tanggal_pengiriman" id="tanggal_pengiriman" value="{{$item->tanggal_pengiriman}}"
                                    placeholder="Tanggal Pengiriman" />
                            </div>
                            <div class="form-group">
                                <label for="nama_pengirim">Nama Pengirim</label>
                                <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim" value="{{$item->nama_pengirim}}"
                                    placeholder="Nama Penerima" />
                            </div>
                            <div class="form-group">
                                <label for="kota_asal">Kota Asal</label>
                                <select class="form-control" name="kota_asal" id="kota_asal">
                                <option>Tangerang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kota_tujuan">Kota Tujuan</label>
                                <select class="form-control" name="kota_tujuan" id="kota_tujuan" value={{$item->kota_tujuan}}>
                                <option>Jakarta Pusat</option>
                                <option>Jakarta Barat</option>
                                <option>Jakarta Timur</option>
                                <option>Jakarta Selatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_penerima">Nama Penerima</label>
                                <input type="text" class="form-control" name="nama_penerima" id="nama_penerima" value="{{$item->nama_penerima}}"
                                    placeholder="Nama Penerima" />
                            </div>
                            <div class="form-group">
                                <label for="organisasi_penerima">Organisasi Penerima</label>
                                <input type="text" class="form-control" name="organisasi_penerima" id="organisasi_penerima" value="{{$item->organisasi_penerima}}"
                                    placeholder="Organisasi Penerima" />
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" rows="10" class="d-block w-100 form-control">
                                    {{$item->alamat}}
                                </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection