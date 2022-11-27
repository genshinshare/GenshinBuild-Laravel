@extends('template')
@section('head')
    <title>Login</title>
@endsection
@section('body')
    <div class="container">
        <br>
        <h3>Login sebagai Admin</h3>
        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email" name="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control w-50" id="exampleInputPassword1" placeholder="Masukkan Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        @if (session()->has('gagal'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Email atau Password Invalid!</strong> Mohon masukkan Email dan Password yang tepat!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
@endsection