<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PPDB SMK Wikrama</title>

</head>

<body>
    <div class="" style="">
        <div id="bggedung" class="bggedung"></div>
        <div class="container pt-5">
            <nav class="container navbar navbar-expand-lg bg-light px-5 py-3 shadow" id="navbar">
                <div class="container">
                    <img src="/assets/img/logowikrama.png" alt="" style="width: 75px">
                    <h4 class="mx-4">SMK Wikrama Bogor</h4>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#beranda">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#jurusan">Jurusan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#test">Testimoni</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Hubungi Kami</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    @if (!Auth::user())
                                        <li>
                                            <a class="dropdown-item" href="/login"><i
                                                    class="fa-solid fa-right-from-bracket"></i> Login</a>
                                        </li>
                                    @endif
                                    @if (Auth::user())
                                        <li>
                                            <a class="dropdown-item" href="/logout"><i
                                                    class="fa-solid fa-right-from-bracket"></i> Logout</a>
                                        </li>
                                        <li><a class="dropdown-item" href="/"><i class="fa-solid fa-house"></i>
                                                Home</a></li>
                                        @if (Auth::user()->role == 'user')
                                            <li><a class="dropdown-item" href="/dashboard/pembayaran"><i
                                                        class="fa-solid fa-receipt"></i> Pembayaran</a>
                                            </li>
                                        @endif
                                        @if (Auth::user()->role == 'admin')
                                            <li><a class="dropdown-item" href="/dashboard/pembayarann"><i
                                                        class="fa-solid fa-users"></i> Pembayaran</a>
                                            </li>
                                        @endif
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    </div>
    <div class="">
        @yield('container')

        @include('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('/assets/app.js') }}"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>
