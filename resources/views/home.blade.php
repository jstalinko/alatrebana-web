<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords"
        content="{{ App\Helper::websetting('slogan') }},{{ App\Helper::websetting('title') }},{{ App\Helper::websetting('domain') }},{{ App\Helper::websetting('address') }}" />
    <meta name="description" content="{{ App\Helper::websetting('title') }} - {{ App\Helper::websetting('slogan') }}" />
    <meta name="author" content="{{ App\Helper::websetting('domain') }}" />

    <title>
        {{ App\Helper::websetting('name') }} - {{ App\Helper::websetting('slogan') }}
    </title>

    <link rel="icon" href="{{ asset(App\Helper::websetting('favicon')) }}" type="image/x-icon" />
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
        rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="/images/logo.png" alt="" />
                        <form method="get" action="/change-lang">
                            <select class="form-control" onchange="this.form.submit()" name="lang">
                                @foreach (['id', 'en'] as $lang)
                                    <option value="{{ $lang }}"
                                        @if ($lang == App::getLocale()) selected @endif>
                                        {{ $lang }}</option>
                                @endforeach
                            </select>
                        </form>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}"> {{__('home')}} <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about-us') }}"> {{__('about')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/products') }}"> {{__('products')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact-us') }}">{{__('contact')}}</a>
                            </li>
                        </ul>
                        <div class="user_option">
                            <a href="">
                                <img src="images/user.png" alt="">
                                <span>
                                    Login
                                </span>
                            </a>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="custom_menu-btn ">

                            <button>
                                <span class=" s-1">

                                </span>
                                <span class="s-2">

                                </span>
                                <span class="s-3">

                                </span>
                            </button>

                        </div>
                    </div>

                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="play_btn">
                <a href="">
                    <img src="images/play.png" alt="">
                </a>
            </div>
            <div class="number_box">
                <div>
                    <ol class="carousel-indicators indicator-2">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                    </ol>
                </div>
            </div>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($banners as $bn)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <h1>
                                                {{ $bn->type }}
                                                <span>
                                                    {{ Str::limit($bn->title, 40, '...') }}

                                                </span>
                                            </h1>
                                            <p>
                                                {{ Str::limit($bn->subtitle, 100, '...') }}
                                            </p>
                                            <div class="btn-box">
                                                <a href="/products" class="btn-1">
                                                    {{ __('read_more') }}
                                                </a>
                                                <a href="{{ App\Helper::orderWaButton('Produk di banner nomer ' . $loop->iteration) }}"
                                                    class="btn-2">
                                                    {{ __('contact_us') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 img-container">
                                        <div class="img-box">
                                            <img src="{{ App\Helper::imageUrl($bn->image) }}"
                                                alt="{{ $bn->title }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                {{ __('about_us') }}
                            </h2>

                        </div>
                        <p>
                            {{ Str::limit(strip_tags(App\Helper::websetting('about')), 150, '....') }}
                        </p>
                        <a href="/about-us">
                            {{ __('read_more') }}
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- trending section -->

    <section class="trending_section layout_padding">
        <div id="accordion">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    {{ __('category_product') }}
                                </h2>
                            </div>
                            <div class="tab_container">
                                @foreach ($cat5 as $i => $c)
                                    <div class="t-link-box @if ($loop->iteration == 1) collapsed @endif"
                                        data-toggle="collapse" data-target="#collapse{{ $loop->iteration }}"
                                        aria-expanded="@if ($loop->iteration == 1) false @else true @endif"
                                        aria-controls="collapse{{ $loop->iteration }}">
                                        <div class="number">
                                            <h5>
                                                0{{ $i + 1 }}
                                            </h5>
                                        </div>
                                        <hr>
                                        <div class="t-name">
                                            <h5>
                                                {{ $c->name }}
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">

                        @foreach ($cat5 as $i => $c)
                            <div class="collapse @if ($loop->iteration == 1) show @endif"
                                id="collapse{{ $loop->iteration }}" aria-labelledby="heading{{ $loop->iteration }}"
                                data-parent="#accordion">
                                <div class="img_container">
                                    @foreach ($product5 as $ii => $p)
                                        <div class="box b-{{ $ii }}">
                                            <div class="img-box">
                                                <img src="{{ App\Helper::imageUrl($p->image) }}"
                                                    alt="{{ $p->name }}" class="img img-fluid img-thumbnail">
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end trending section -->

    <!-- discount section -->



    <!-- end discount section -->

    <!-- brand section -->

    <section class="brand_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    {{ __('product_collection') }}

                </h2>
            </div>
            <div class="brand_container layout_padding2">
                @foreach ($product8 as $product)
                    <div class="box">
                        <a href="/product/{{ $product->slug }}">
                            @if ($loop->first)
                                <div class="new">
                                    <h5>
                                        {{ __('new') }}
                                    </h5>
                                </div>
                            @endif
                            <div class="img-box">
                                <img src="{{ App\Helper::imageUrl($product->image) }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h6 class="price">
                                    Rp. {{ str_replace(',', '.', number_format($product->price)) }}
                                </h6>
                                <h6>
                                    {{ $product->name }}
                                </h6>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
            <a href="/products" class="brand-btn">
                {{ __('see_more') }}
            </a>
        </div>
    </section>

    <!-- end brand section -->
    <!-- contact section -->

    <section class="contact_section layout_padding">
        <div class="container ">
            <div class="heading_container">
                <h2 class="">
                    {{ __('contact_us') }}
                </h2>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="/contact" method="post">
                        @csrf
                        <div>
                            <input type="text" placeholder="Name" name="name" />
                        </div>
                        <div>
                            <input type="email" placeholder="Email" name="email" />
                        </div>
                        <div>
                            <input type="text" placeholder="Phone" name="phone" />
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" name="message" />
                        </div>
                        <div class="d-flex ">
                            <button type="submit">
                                {{ __('send') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="{{ App\Helper::websetting('gmaps_url') }}" width="600" height="300"
                                frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->

    <!-- client section -->
    <section class="client_section layout_padding-bottom">
        <div class="container">
            <div class="heading_container">
                <h2>
                    {{ __('testimonials') }}
                </h2>
            </div>
        </div>

        <div class="container">
            <div class="client_container layout_padding2">
                @foreach ($testimonials as $tes)
                    @if ($loop->index > 2)
                        @continue
                    @endif
                    <div class="client_box b-{{ $loop->iteration }}">
                        <div class="client-id">
                            <div class="img-box">
                                <img src="images/user.png" alt="" />
                            </div>
                            <div class="name">
                                <h5>
                                    {{ $tes->name }}
                                </h5>
                            </div>
                        </div>
                        <div class="detail">
                            <p>
                                {{ $tes->message }}
                            </p>
                            <div>
                                <div class="arrow_img">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- end client section -->

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_logo">
                <h2>
                    {{ App\Helper::websetting('name') }}
                </h2>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="info_contact">
                        <h5>
                            {{ __('find_us') }}
                        </h5>
                        <div>
                            <div class="img-box">
                                <img src="images/location-white.png" width="18px" alt="">
                            </div>
                            <p>
                                {{ App\Helper::websetting('address') }}
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/telephone-white.png" width="12px" alt="">
                            </div>
                            <p>
                                {{ App\Helper::websetting('phone') }}
                            </p>
                        </div>
                        <div>
                            <div class="img-box">
                                <img src="images/envelope-white.png" width="18px" alt="">
                            </div>
                            <p>
                                {{ App\Helper::websetting('email') }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_info">
                        <h5>
                            Social Media

                        </h5>
                        @foreach ($socialmedia as $social)
                            <li>
                                @if ($social->type == 'facebook')
                                    <a href="{{ $social->url }}" target="_blank"
                                        class="link text-primary"><x-fab-facebook style="width:20" /> Facebook</a>
                                @elseif($social->type == 'instagram')
                                    <a href="{{ $social->url }}" target="_blank"
                                        class="link text-danger"><x-fab-instagram style="width:20" /> Instagram</a>
                                @elseif($social->type == 'twitter')
                                    <a href="{{ $social->url }}" target="_blank"
                                        class="link text-info"><x-fab-twitter style="width:20" /> Twitter</a>
                                @elseif($social->type == 'youtube')
                                    <a href="{{ $social->url }}" target="_blank"
                                        class="link text-danger"><x-fab-youtube style="width:20" /> Youtube</a>
                                @elseif($social->type == 'tiktok')
                                    <a href="{{ $social->url }}" target="_blank"
                                        class="link text-white"><x-fab-tiktok style="width:20" /> Tiktok</a>
                                @endif

                            </li>
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_form ">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="tel" placeholder="Enter your phone number">
                            <button>
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->


    <!-- footer section -->
    <section class="container-fluid footer_section ">
        <div class="container">
            <p>
                &copy; {{ date('Y') }} All Rights Reserved By
                <a href="https://{{ App\Helper::websetting('domain') }}">
                    {{ App\Helper::websetting('name') }}
                </a>
            </p>
        </div>
    </section>
    <!-- end  footer section -->


    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script type="text/javascript">
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [],
            autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                420: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }

        });
    </script>
    <script>
        var nav = $("#navbarSupportedContent");
        var btn = $(".custom_menu-btn");
        btn.click
        btn.click(function(e) {

            e.preventDefault();
            nav.toggleClass("lg_nav-toggle");
            document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        });
    </script>
    <script>
        $('.carousel').on('slid.bs.carousel', function() {
            $(".indicator-2 li").removeClass("active");
            indicators = $(".carousel-indicators li.active").data("slide-to");
            a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
            console.log(indicators);

        })
    </script>

</body>
</body>

</html>
