@extends('layouts.admin')

@section('container')

<div class="row">
    <div class="col-md-12 mb-3">
        <h4>Edit promo</h4>
    </div>
</div>

<div class="row">
    <div>
        <form action="/admin/promo/{{$promo->id}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Nama promo</label>
                <input value="{{$promo->nama}}" type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="promo dari tokobaju">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Deskripsi promo</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3">{{$promo->deskripsi}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Gambar promo</label>
                <img src="{{ asset($promo->gambar) }}" alt="" style="width: 100px">
                <input value="" type="file" name="gambar" class="form-control">
            </div>
            <button class="btn btn-primary" type="submit" name="submit" value="save">Update</button>
        </form>
    </div>
</div>

@endsection