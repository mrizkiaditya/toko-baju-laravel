@extends('layouts.admin')

@section('container')

<div class="row">
    <div class="col-md-12 mb-3">
        <h4>Tambah Baju</h4>
    </div>
</div>

<div class="row">
    <div>
        <form action="/admin/baju/store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Nama Baju</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Baju dari tokobaju" required autofocus value="{{ old('nama') }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Deskripsi Baju</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required value="{{ old('deskripsi') }}"></textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1">Gambar Baju</label>
                <input type="file" name="gambar" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Jenis Baju</label>
                <select name="jenis_baju" class="form-control" id="exampleFormControlSelect1">
                    <option value="">Pilih Jenis Baju</option>
                    <option value="baju pria">Baju Pria</option>
                    <option value="baju wanita">Baju Wanita</option>
                </select>
            </div>
            <button class="btn btn-primary" type="submit" name="submit" value="save">Simpan</button>
        </form>
    </div>
</div>

@endsection