@extends('layouts.admin')

@section('container')

<div class="row">
    <div class="col-md-12 mb-3">
        <h4>Tambah promo</h4>
    </div>
</div>

<div class="row">
    <div>
        <form action="/admin/promo" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Nama promo</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="promo dari tokobaju">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Deskripsi promo</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Gambar promo</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
        </form>
    </div>
</div>

@endsection