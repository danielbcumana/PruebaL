@extends('layouts.welcome')

@section('content')

<div class="container-fluid p-0">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('storage/img/banner1.jpg') }}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3><b>BOLD</b> & <b>BEAUTIFUL</b></h3>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('storage/img/banner2.jpg') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h3><b>BOLD</b> & <b>BEAUTIFUL</b></h3>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                    <h3><b>BOLD</b> & <b>BEAUTIFUL</b></h3>
                </div>
                <img class="d-block w-100" src="{{ asset('storage/img/banner3.jpg') }}" alt="Third slide">
            </div>
        </div>
    </div>

    <div class="px-5 pb-5 bg-eps-white">
        <div class="row">
            <h2 class="linea"><span><b>WHAT</b> WE DO</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="contenir-img-icon">
                    <i class="fa fa-heart"></i>
                    <img src="{{ asset('storage/img/web-api.jpg') }}" alt="web-api" class="img img-fluid m-auto p-3">
                </div>
                <h4 class="text-center"><strong>WEB APLICATIONS</strong></h4>
                <p>
                    Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                </p>
                <a href="#" class="enlace-servi"><b>Read</b> More</a>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="contenir-img-icon">
                    <i class="fa fa-cube"></i>
                    <img src="{{ asset('storage/img/cloud-hosting.jpg') }}" alt="cloud-hosting" class="img img-fluid m-auto p-3">
                </div>
                <h4 class="text-center"><strong>CLOUD HOSTING</strong></h4>
                <p>
                    Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                </p>
                <a href="#" class="enlace-servi"><b>Read</b> More</a>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="contenir-img-icon">
                    <i class="fa fa-apple"></i>
                    <img src="{{ asset('storage/img/social-apps.png') }}" alt="social-apps" class="img img-fluid m-auto p-3">
                </div>
                <h4 class="text-center"><strong>SOCIAL APPS</strong></h4>
                <p>
                    Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                </p>
                <a href="#" class="enlace-servi"><b>Read</b> More</a>
            </div>
            <div class="col-md-3 col-xs-12 col-sm-6">
                <div class="contenir-img-icon">
                    <i class="fa fa-cog"></i>
                    <img src="{{ asset('storage/img/smart-design.jpg') }}" alt="smart-design" class="img img-fluid m-auto p-3">
                </div>
                <h4 class="text-center"><strong>SMART DESIGN</strong></h4>
                <p>
                    Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                </p>
                <a href="#" class="enlace-servi"><b>Read</b> More</a>
            </div>
        </div>
    </div>
    <div class="px-5 bg-gris sombra-inset">
        <div class="row">
            <h2 class="linea2 pb-5"><span><b>RECENT</b> WORK?</span></h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img img-fluid" src="{{ asset('storage/img/slider1.png') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img img-fluid" src="{{ asset('storage/img/slider2.png') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="img img-fluid" src="{{ asset('storage/img/slider3.png') }}" alt="Third slide">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="fa-ul">
                    <li>
                        <span class="fa-li"><i class="fa fa-twitter"></i></span>
                        <p class="title-blue">SOCIAL APPS DEVELOPMENT</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, praesentium in! Nobis sit quia quisquam voluptates numquam</p>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa fa-heart"></i></span>
                        <p class="title-blue">APPS THAT YOUR CLIENTS ARE GOIND TO LOVE</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, praesentium in! Nobis sit quia quisquam voluptates numquam</p>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa fa-cog"></i></span>
                        <p class="title-blue">INOVATIONS THAT TAKES YOU TO THE NEXT LEVEL</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, praesentium in! Nobis sit quia quisquam voluptates numquam</p>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa fa-leaf"></i></span>
                        <p class="title-blue">ENVIROMENTAL FRIENDLY DESIGN</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, praesentium in! Nobis sit quia quisquam voluptates numquam</p>
                    </li>
                    <li>
                        <span class="fa-li"><i class="fa fa-magic"></i></span>
                        <p class="title-blue">DESIGN THAT HAS SOME MAGIC IN IT</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, praesentium in! Nobis sit quia quisquam voluptates numquam</p>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
    <div class="px-5 pb-5 bg-eps-white sombra">
        <div class="row">
            <h2 class="linea py-3"><span><b>LATEST</b> NEWS?</span></h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <div class="col-4">
                        <div class="contenir-img-icon mini-cii">
                            <img src="{{ asset('storage/img/post1.jpg') }}" alt="post1" class="img img-fluid m-auto p-3">
                        </div>
                    </div>
                    <div class="col-8">
                        <p class="title-blue">A NORMAL POST</p>
                        <p>
                            Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <div class="col-4">
                        <div class="contenir-img-icon mini-cii">
                            <i class="fa fa-link"></i>
                            <img src="{{ asset('storage/img/post2.jpg') }}" alt="post2" class="img img-fluid m-auto p-3">
                        </div>
                    </div>
                    <div class="col-8">
                        <p class="title-blue">LINK POST</p>
                        <p>
                            Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="row">
                    <div class="col-4">
                        <div class="contenir-img-icon mini-cii">
                            <i class="fa fa-play"></i>
                            <img src="{{ asset('storage/img/post3.jpg') }}" alt="post3" class="img img-fluid m-auto p-3">
                        </div>
                    </div>
                    <div class="col-8">
                        <p class="title-blue">VIDEO POST</p>
                        <p>
                            Nam vitae ligula eu mi molestei fringilla sed ac massa. Quiesque justo metus, commodo eu vivarra quis, volutpat et urna
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="p-5 bg-gris sombra-inset">
        <div class="row">
            <h2 class="linea2 pb-5"><span><b>CLIENTS</b> WE LOVE</span></h2>
        </div>
        <div class="row">

            <div id="clientes" class="carousel slide" data-ride="carousel">

                <!-- The slideshow -->
                <div class="container carousel-inner no-padding">
                  <div class="carousel-item active">
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente1.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente2.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente3.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente4.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente5.png') }}">
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente6.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente7.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente8.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente9.png') }}">
                    </div>
                    <div class="col-esp-20">
                      <img src="{{ asset('storage/img/cliente10.png') }}">
                    </div>
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#clientes" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#clientes" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>

        </div>
    </div>


</div>

@endsection
