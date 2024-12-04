<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AAoutfit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('guest/img/logo.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('guest/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('guest/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        {{-- <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div> --}}
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="{{ route('index') }}" class="text-decoration-none d-flex align-items-center">
                    <h1 class="m-0 display-5 font-weight-semi-bold d-flex align-items-center">
                        <span class="border px-2 mr-1 d-inline-flex align-items-center">
                            <img src="{{ asset('guest/img/logo.png') }}" alt="Logo"
                                style="height: 40px; width: auto;">
                        </span>
                        <span style="margin-left: 5px;">AAoutfit</span>
                    </h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                {{-- <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form> --}}
            </div>
            <div class="col-lg-3 col-6 text-right">
                {{-- <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a> --}}
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold d-flex align-items-center">
                            <span class="border px-2 mr-1 d-inline-flex align-items-center">
                                <img src="{{ asset('guest/img/logo.png') }}" alt="Logo"
                                    style="height: 40px; width: auto;">
                            </span>
                            <span style="margin-left: 5px;">AAoutfit</span>
                        </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="{{ route('index') }}"
                                class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Beranda</a>
                            <a href="{{ route('produk') }}"
                                class="nav-item nav-link {{ request()->is('produk') ? 'active' : '' }}">Produk</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Toko Online
                                    Kami</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cart.html" class="dropdown-item">Shopee</a>
                                    <a href="checkout.html" class="dropdown-item">Lazada</a>
                                </div>
                            </div>
                        </div>

                        <div class="navbar-nav ml-auto py-0">
                            {{-- <a href="" class="nav-item nav-link">Login</a>
                        <a href="" class="nav-item nav-link">Register</a> --}}
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->





    <!-- Shop Start -->
    @yield('content')
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="{{ route('index') }}" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold d-flex align-items-center">
                        <span class="border px-2 mr-1 d-inline-flex align-items-center">
                            <img src="{{ asset('guest/img/logo.png') }}" alt="Logo"
                                style="height: 40px; width: auto;">
                        </span>
                        <span style="margin-left: 5px;">AAoutfit</span>
                    </h1>
                </a>
                <p class="mt-3" style="text-align: justify; text-indent: 1em;">AAoutfit adalah toko online
                    dengan koleksi trendy dan nyaman untuk wanita dan anak. Dapatkan celana, rok, kemeja, tunik, serta
                    pakaian dalam berkualitas dengan harga terbaik. Happy shopping di AAoutfit!</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-3 mb-5"> <!-- Ukuran Quick Links dibuat lebih kecil -->
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="{{ route('index') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Beranda</a>
                            <a class="text-dark mb-2" href="{{ route('produk') }}"><i
                                    class="fa fa-angle-right mr-2"></i>Produk</a>
                        </div>
                    </div>
                    <div class="col-md-5 mb-5"> <!-- Ukuran Address dibuat lebih besar -->
                        <h5 class="font-weight-bold text-dark mb-4">Address</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Tegalgubug Lor,
                            Kab. Cirebon</p>
                        <p class="mb-2"><i
                                class="fa fa-envelope text-primary mr-3"></i>aastorecollection21@gmail.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+62 853-2138-0296</p>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Maps</h5>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3963.1863946112185!2d108.38337587499383!3d-6.62375449337048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMzcnMjUuNSJTIDEwOMKwMjMnMDkuNCJF!5e0!3m2!1sid!2sid!4v1729558842836!5m2!1sid!2sid"
                            width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0 text-center text-md-left">
                <p class="mb-md-0 text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">AAoutfit</a>. All Rights
                    Reserved. Redesigned
                    by <a class="text-dark font-weight-semi-bold" href="https://github.com/lukman08">Lukman Hakim</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <p class="mb-md-0 text-dark">
                    Owned by <a class="text-dark font-weight-semi-bold" href="#">Abi Malkhan</a>
                </p>
                {{-- <img class="img-fluid" src="{{ asset('guest/img/payments.png') }}" alt=""> --}}
            </div>
        </div>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
