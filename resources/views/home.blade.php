@extends('layouts.main')

@section('container')

<!-- carousel -->
<div class="carousel">
    <h1>Promo</h1>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner shadow">
            <div class="carousel-item active">
                <img src="img/www.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/www.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/www.jpg" class="d-block w-100" alt="...">
            </div>
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
    <h1>Baju Pria</h1>
    <div class="row">

        <div class="col-lg-3 mb-3">
            <div class="card shadow">
                <img src="img/pria/pria1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the Rp 50.000 and make up the bulk of the card's content.</p>
                    <h5 class="card-title">Rp 50.000</h5>
                    <p>⭐4.6</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-3">
            <div class="card shadow">
                <img src="img/pria/pria2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the Rp 50.000 and make up the bulk of the card's content.</p>
                    <h5 class="card-title">Rp 50.000</h5>
                    <p>⭐4.6</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-3">
            <div class="card shadow">
                <img src="img/pria/pria3.jfif" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the Rp 50.000 and make up the bulk of the card's content.</p>
                    <h5 class="card-title">Rp 50.000</h5>
                    <p>⭐4.6</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 mb-3">
            <div class="card shadow">
                <img src="img/pria/pria4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the Rp 50.000 and make up the bulk of the card's content.</p>
                    <h5 class="card-title">Rp 50.000</h5>
                    <p>⭐4.6</p>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection