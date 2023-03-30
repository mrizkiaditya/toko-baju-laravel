<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tokobaju</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg shadow">
        <div class="container-fluid mx-4">
            <a class="navbar-brand" href="/"><strong>tokobaju</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Tentang</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            kategori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/category">Baju Pria</a></li>
                            <li><a class="dropdown-item" href="/category">Baju Wanita</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    <!-- <button class="button-search" type="submit">Search</button> -->
                </form>
                <a href="/register"><button class="button-signup" type="button">Daftar</button></a>
                <a href="/login"><button class="button-login" type="button">Masuk</button></a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Main menu -->
    <div class="container mt-4">
        @yield('container')
    </div>
    <!-- Main menu -->

    <!-- footer -->
    <Footer class="d-flex justify-content-center">
        <div class="d-flex align-self-center">
            <div class="text-center">
                Copyright©2023<br>
                <p class="text">Created by <strong>Muhammad Rizki Aditya</strong></p>
            </div>
        </div>
    </Footer>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>