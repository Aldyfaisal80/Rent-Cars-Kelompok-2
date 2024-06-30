<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>intega</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('assets/index/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/index/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('assets/index/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset('assets/index/image/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/index/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('assets/index/image/loading.gif') }}" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid ">
                <div class="row justify-content-between">
                    <div class="col-md-4 col-sm-4">
                        <div class="logo">
                            <a href="{{ route('welcome')}}"><img src="{{ asset('assets/index/image/logo.png') }}"
                                    alt="#" /></a>
                        </div>
                    </div>
                    <div class="">
                        <ul class="conat_info d_none ">
                            <li><a href="{{ route('login')}}">Log in/sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <style>
        .banner_main {
            background-image: url('{{ asset('assets/index/image/banner.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 200px 0;
            min-height: 914px;
        }
    </style>
    <section class="banner_main bottom_cross" style="margin-bottom: 50px;">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                <li data-target="#banner1" data-slide-to="1"></li>
                <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="ban_car">
                                        <figure><img src="{{ asset('assets/index/image/car1.png') }}" alt="#" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-bg">
                                        <h1>Selamat Datang di Rent Car</h1>
                                        <span>Di mana anda akan menemukan kendaraan impian anda di tengah-tengah layanan
                                            terbaik yang tersedia yang disesuaikan dengan kebutuhan anda.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="ban_car">
                                        <figure><img src="{{ asset('assets/index/image/car1.png') }}" alt="#" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-bg">
                                        <h1>Selamat Datang di Rent Car</h1>
                                        <span>Di mana anda akan menemukan kendaraan impian anda di tengah-tengah layanan
                                            terbaik yang tersedia yang disesuaikan dengan kebutuhan anda.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="ban_car">
                                        <figure><img src="{{ asset('assets/index/image/car1.png') }}"
                                                alt="#" /></figure>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="text-bg">
                                        <h1>Selamat Datang di Rent Car</h1>
                                        <span>Di mana anda akan menemukan kendaraan impian anda di tengah-tengah layanan
                                            terbaik yang tersedia yang disesuaikan dengan kebutuhan anda.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- end banner -->
    <!-- about section -->
    <div id="about" class="about">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-5">
                    <div class="titlepage">
                        <h2>Mobil Kami</h2>
                        <p> Temukan koleksi mobil sport pilihan kami di Rental Cars, dipilih dengan cermat untuk
                            penggemar kendaraan. Dari klasik abadi hingga model terbaru, setiap mobil kami menggabungkan
                            presisi, kekuatan, dan keanggunan. Nikmati sensasi mengemudi yang tak tertandingi, apakah
                            Anda mencari percepatan atau kehalusan dalam menikung. Pilihannya luas, menggabungkan
                            kinerja tinggi dengan kemewahan untuk pengalaman perjalanan yang memikat dan tak terlupakan.
                        </p>
                        <a class="read_more" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about_right">
                        <figure><img src="{{ asset('assets/index/image/car2.png') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <!-- software section -->
    <section id="rental" class="rental bottom_cross5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Penawaran Sewa Menarik Untuk Anda</h2>
                        <p>Nikmati berbagai penawaran sewa menarik hanya untuk Anda </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="rental1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#rental1" data-slide-to="0" class="active"></li>
                <li data-target="#rental1" data-slide-to="1"></li>
                <li data-target="#rental1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ban_car">
                                        <figure><img src="{{ asset('assets/index/image/car4.png') }}"
                                                alt="#" /></figure>
                                        <a class="read_more" href="{{ route('login')}}">Get Car on Rent</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ban_car">
                                        <figure><img src="{{ asset('assets/index/image/car4.png') }}"
                                                alt="#" /></figure>
                                        <a class="read_more" href="#">Get Car on Rent</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="ban_car">
                                        <figure><img src="{{ asset('assets/index/image/car4.png') }}"
                                                alt="#" /></figure>
                                        <a class="read_more" href="#">Get Car on Rent</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#rental1" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#rental1" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- end We Do section -->

    <!--  footer -->
    <footer>
        <div class="footer bottom_cross1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a class="logo_bottom" href="index.html"><img
                                src="{{ asset('assets/index/image/logo.png') }}" alt="#" /></a>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, </p>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div class="fid_box">
                            <h3>Adderess </h3>
                            <ul class="location_icon">
                                <li>Healing Center, 176 W Street name, <br>
                                    Loram ipusm
                                </li>
                                <li><a href="#">
                                        (+71) 8522369417<br> (+71) 8522369417</a>
                                </li>
                                <li><a href="#"> demo@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fid_box">
                            <h3>Links </h3>
                            <ul class="link">
                                <li class="active"><a href="#">Home
                                    </a>
                                </li>
                                <li><a href="#">About
                                    </a>
                                </li>
                                <li><a href="#rental">
                                        Rental
                                    </a>
                                </li>
                                <li><a href="#luxury">
                                        Luxury
                                    </a>
                                </li>
                                <li><a href="#testimonial">
                                        Testimonial
                                    </a>
                                </li>
                                <li><a href="#Ccontact ">
                                        Contact </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fid_box">
                            <h3>Newsletter</h3>
                            <form class="news_form">
                                <input class="letter_form" placeholder=" Your Name" type="text" name="Your Name">
                                <input class="letter_form" placeholder=" Email" type="text" name="Email">
                                <button class="sumbit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html
                                    Templates</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('assets/index/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/index/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/index/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/index/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('assets/index/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/index/js/custom.js') }}"></script>
    <script>
        function openNav() {
            document.getElementById("mySidepanel").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidepanel").style.width = "0";
        }
    </script>

</body>

</html>
