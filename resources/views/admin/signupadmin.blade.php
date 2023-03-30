@extends('layouts.formadmin')

@section('container')
<h3 class="text-center mb-3 mt-5 pt-5"><strong>Admin tokobaju</strong></h3>
<div class="d-flex justify-content-center">
    <div class="signup shadow d-flex align-items-center justify-content-center">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Ulang Password</label>
                <input type="password" class="form-control" id="exampleInputPassword2">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <div class="text-center mt-2"><a href="/login-admin">Kembali ke login</a></div>
            <div class="mt-4 text-center" style="color: rgb(200, 7, 7);">
                by <a class="navbar-brand" href="/"><strong>tokobaju</strong></a>
            </div>
@endsection