@extends('main.main')

@section('container-card')
  <p class="h1 text-center">Halaman Pembelian</p>
  <a href="/" class="btn btn-primary">Kembali</a>
  <div class="container-fluid">
    <div class="row justify-content-center">
  @foreach ($datas as $data)
        <div class="col-md-4 mt-4 mb-4">
            <div class="card" style="width: 300px;">
                <div class="card-body bg-primary-subtle">
                  <h4>Data Pembelian</h4>
                  <p class="card-text"> Nama Lengkap : {{$data->nama_pembeli}}</p>
                  <p class="card-text"> Kode barang : {{$data->id_product}}</p>
                  <p class="card-text"> Jumlah Pembelian :{{$data->jumlah_product}}</p>
                  <a href="delete/{{$data->nama_pembeli}}" class="btn btn-danger">cancel</a>
                </div>
              </div>
        </div>
  @endforeach
</div>
</div>

@endsection