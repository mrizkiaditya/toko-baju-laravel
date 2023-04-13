@extends('layouts.admin')

@section('container')

<div class="row">
    <div class="col-md-12 mb-3">
        <h4>Edit Baju</h4>
    </div>
</div>

<div class="row">
    <div>
        <form action="/admin/baju/{{$baju->id}}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Nama Baju</label>
                <input value="{{$baju->nama}}" type="text" name="nama" class="form-control" id="nama" placeholder="Baju dari tokobaju">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Deskripsi Baju</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3">{{$baju->deskripsi}}</textarea>
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Gambar Baju</label>
                <img src="{{ asset($baju->gambar) }}" alt="" style="width: 100px">
                <input value="" type="file" name="gambar" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Jenis Baju</label>
                <select name="jenis_baju" class="form-control" id="exampleFormControlSelect1">
                    <option value="">Pilih Jenis Baju</option>
                    <option value="baju pria" @if($baju->jenis_baju == 'baju pria') selected @endif>Baju Pria</option>
                    <option value="baju wanita" @if($baju->jenis_baju == 'baju wanita') selected @endif>Baju Wanita</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="submit" value="save">Update</button>
        </form>
    </div>
</div>

@endsection