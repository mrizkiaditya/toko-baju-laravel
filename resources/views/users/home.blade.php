@extends('layouts.main')

@section('container')

<!-- carousel -->
<div class="home">
    <div class="carousel">
        <h1>Promo</h1>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner shadow">
                @foreach($promo as $row)
                <div class="carousel-item active">
                    <img src="{{ $row->gambar }}" class="d-block w-100" alt="promo tokobaju">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- carousel -->

    <!-- baju pria -->
    <div class="posts mt-4">

        <div class="row title d-flex justify-content-between">
            <div class="col-md-4">
                <h2>Baju Pria</h2>
            </div>
            <div class="col-md-4 d-flex flex-row-reverse">
                <a href="/baju-pria"><p>Lihat semua product</p></a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            @foreach($pria->slice(0, 4) as $row)
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
    <!-- baju pria -->

    <!-- baju wanita -->
    <div class="posts mt-4">
        <div class="row title d-flex justify-content-between">
            <div class="col-md-4">
                <h2>Baju wanita</h2>
            </div>
            <div class="col-md-4 d-flex flex-row-reverse">
                <a href="/baju-wanita"><p>Lihat semua product</p></a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            @foreach($wanita->slice(0, 4) as $row)
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
<!-- baju wanita -->

@endsection