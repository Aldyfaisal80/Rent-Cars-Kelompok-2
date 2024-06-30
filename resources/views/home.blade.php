
@extends('layout.template')

@section('title', 'Home - Rent Cars')
@section('content')
{{-- @if (Auth::check() && Auth::user()->role === 'admin')
        @include('layout.card')
    @endif --}}
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <img src="{{ asset('assets/img/bannerhome.png') }}" class="img-fluid" alt="...">
            <div id="about" class="about" style="background-color: #F3F6F9; border-radius: 10px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="titlepage">
                                <h2>Our Cars</h2>
                                <p style="text-align: justify;">Temukan koleksi mobil sport pilihan kami di Rental Cars,
                                    dipilih dengan cermat untuk
                                    penggemar kendaraan. Dari klasik abadi hingga model terbaru, setiap mobil kami
                                    menggabungkan presisi, kekuatan, dan keanggunan. Nikmati sensasi mengemudi yang tak
                                    tertandingi, apakah Anda mencari percepatan atau kehalusan dalam menikung. Pilihannya
                                    luas, menggabungkan kinerja tinggi dengan kemewahan untuk pengalaman perjalanan yang
                                    memikat dan tak terlupakan.</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="col-12">
                                <div id="carCarousel" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="{{ asset('assets/img/1.png') }}" class="d-block w-100" alt="Car 1">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/2.png') }}" class="d-block w-100" alt="Car 2">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/3.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/4.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/5.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/6.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/7.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/8.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="{{ asset('assets/img/9.png') }}" class="d-block w-100" alt="Car 3">
                                            <div class="carousel-caption d-none d-md-block">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev btn-lightblue" type="button"
                                        data-bs-target="#carCarousel" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next btn-lightblue" type="button"
                                        data-bs-target="#carCarousel" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section id="rental" class="rental bottom_cross5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <h2>Penawaran Sewa Menarik Untuk Anda</h2>
                                <p>Nikmati berbagai penawaran sewa menarik hanya untuk Anda</p>
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
                                                <figure><img src="{{ asset('assets/img/4.png') }}" style="width: 100%; "
                                                        alt="#" /></figure>
                                                <a class="read_more" href="#">Get Car on Rent</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- <footer style="background-color: #F3F6F9; padding: 20px; border-radius: 10px">
                <div class="footer bottom_cross1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('assets/img/logo.png') }}" width="100" alt="#" />
                                <p style="text-align: justify">It is a long established fact that a reader will be distracted by the readable content of
                                    a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                    more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                    here', making it look like readable English.</p>
                            </div>
                            <div class="col-md-3">
                                <div class="menu_bottom">
                                    <h3>Quick Link</h3>
                                    <ul style="display: flex; flex-direction: column; gap: 10px">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="#about">About</a></li>
                                        <li><a href="#software">Our Software</a></li>
                                        <li><a href="#testimonial">Testimonial</a></li>
                                        <li><a href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="menu_bottom">
                                    <h3>Rental</h3>
                                    <ul style="display: flex; flex-direction: column; gap: 10px">
                                        <li><a href="#">Transport rent</a></li>
                                        <li><a href="#">Taxi Sharing</a></li>
                                        <li><a href="#">Car rent</a></li>
                                        <li><a href="#">Rental Taxi</a></li>
                                        <li><a href="#">Rental Van</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="address">
                                    <h3>Subscribe Now</h3>
                                    <form class="newtetter">
                                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                        <button class="submit btn btn-danger mt-2">Subscribe</button>
                                    </form>
                                    <ul class="social_icon mt-1" style="display: flex; flex-direction: column; gap: 10px">
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i> Facebook</a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i> Instagram</a></li>
                                        <li><a href="#"><i class="fa-brands fa-linkedin"></i> LinkedIn</a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i> Twitter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
@endsection
