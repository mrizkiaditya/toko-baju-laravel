@extends('layouts.main')

@section('container')
<div class="category">
<div class="posts mt-4">
        <div class="row title d-flex justify-content-between">
            <div class="col-md-4">
                <h2>Baju Pria</h2>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

        @foreach($baju as $row)
            <div class="col-md mb-3">
                <div class="card shadow">
                    <img class="card-img-top" src="{{ $row->gambar }}" alt="Card image cap">
                    <div class="text-card card-body">
                        <h5 class="card-title">{{ $row->nama }}</h5>
                        <p class="card-text">{{ $row->deskripsi }}</p>
                        <a href="#" class="btn btn-dark">Lihat lebih</a>
                    </div>
                </div>
            </div>
        @endforeach

            <div class="col-md mb-3">
                <div class="card shadow">
                    <img class="card-img-top" src="img/pria/pria2.jpg" alt="Card image cap">
                    <div class="text-card card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Lihat lebih</a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card shadow">
                    <img class="card-img-top" src="img/pria/pria3.jfif" alt="Card image cap">
                    <div class="text-card card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Lihat lebih</a>
                    </div>
                </div>
            </div>
            <div class="col-md mb-3">
                <div class="card shadow">
                    <img class="card-img-top" src="img/pria/pria4.jpg" alt="Card image cap">
                    <div class="text-card card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Lihat lebih</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection