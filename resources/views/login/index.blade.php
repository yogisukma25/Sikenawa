@extends('layouts.app')

@section('content')
    
@endsection

<div class="login-box mx-auto" style="width: 30%; margin-top:100px"> 
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <div class="h3">Masuk</div>
    </div>
    <div class="card-body">

      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email anda">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan kata sandi anda">
        </div>
        <button type="submit" class="btn btn-success w-100 mt-3">Masuk</button>
      </form>

      <p class="mb-2 mt-2 text-center"> Belum punya akun ?
        <a href="forgot-password.html" class="text-success"><b>Daftar</b></a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
