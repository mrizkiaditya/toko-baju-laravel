@extends('layouts.main')

@section('container')
<div class="category">
<div class="posts mt-4">
        <div class="row title d-flex justify-content-between">
            <div class="col-md-4">
                <h2>Baju Wanita</h2>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

        @foreach($baju as $row)
            <div class="col-md mb-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ $row->gambar }}" alt="Card image cap">
                    <div class="text-card card-body">
                        <h5 class="card-title">{{ $row->nama }}</h5>
                        <a href="/baju/{{ $row->id }}" class="btn btn-dark">Lihat lebih</a>
                    </div>
                </div>
            </div>
        @endforeach

        </div>
    </div>
</div>
@endsection