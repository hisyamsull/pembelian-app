@extends('main.main')
@section('container-card')
<div class="container bg-secondary">
    <h1 class="d-flex justify-content-center">Halaman Login</h1>

    <form action="/login" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="div d-flex justify-content-end">
            <button type="submit" class="btn btn-dark col-2 mb-3 mt-3">Login</button>
          </div>
    </form>
</div>

@endsection