@extends('main.main')
@section('container-card')
<div class="container bg-secondary">
    <h1 class="d-flex justify-content-center">Isi data berikut</h1>
    <a href="/" class="btn btn-dark col-2 mb-3">Back</a>
    <form action="/" method="post">
        @csrf
            <input name="id_product" type="number" hidden value="{{$products->id}}">
        <div class="form-floating mb-3">
            <input name="nama_pembeli" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nama Lengkap</label>
          </div>
          
        <div class="form-floating mb-3">
            <input name="jumlah_product" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Jumlah Barang</label>
          </div>
          <div class="div d-flex justify-content-end">
              <button type="submit" class="btn btn-dark col-2 mb-3">Gas Beli</button>
            </div>
    </form>
</div>

@endsection