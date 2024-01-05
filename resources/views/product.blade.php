@extends('main.main')

@section('container-card')

<p class="h1 text-center">Halaman Product</p>
<form action="/logout" method="POST">
  @csrf
  <button type="submit" name="submit" class="btn btn-danger mb-3">Logout</button>
</form>
<a href="/beli" class="btn btn-primary">Lihat Pembelian</a>
@foreach ($products as $product)
<div class="d-flex justify-content-center">
<div class="p-2 bd-highlight">
    <div class="container">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 24rem;">
                <img src="/img/{{$product->image}}" class="card-img-top" alt="...">
                <div class="card-body">

                  <h5 class="card-title">Kode Barang {{ $no }}</h5>
                  <h5 class="card-title">{{ $product->nama }}</h5>
                  <h5 class="card-title">{{ $product->harga }}</h5>
                  <a href="/pembelian/{{$product->id}}" class="btn btn-primary">Beli</a>
                </div>
              </div>
          </div>
      </div>

</div>
</div>
<?php $no++?>


@endforeach


@endsection