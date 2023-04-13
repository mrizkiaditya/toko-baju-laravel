@extends('layouts.main')

@section('container')
<div class="baju">
<div class="posts mt-4">
        <div class="row title d-flex justify-content-between">
            <div class="col-md-4">
                <h2>{{ $baju->nama }}</h2>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="gambar col-5">
                <img src="{{ asset($baju->gambar) }}" alt="">
            </div>
            <div class="deskripsi col-7">
                <p>
                    {{ $baju->deskripsi }}
            </div>

        </div>
    </div>
</div>
@endsection