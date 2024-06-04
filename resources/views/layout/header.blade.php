
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="{{App\Helper::websetting('slogan')}},{{App\Helper::websetting('title')}},{{App\Helper::websetting('domain')}},{{App\Helper::websetting('address')}}" />
  <meta name="description" content="{{App\Helper::websetting('title')}} - {{App\Helper::websetting('slogan')}}" />
  <meta name="author" content="{{App\Helper::websetting('domain')}}" />

  <title>{{$title}} - {{App\Helper::websetting('name')}}</title>

  <link rel="shortcut icon" href="{{App\Helper::websetting('favicon')}}">
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item @if(request()->is('/')) active @endif ">
                <a class="nav-link" href="{{url('/')}}">{{__('home')}} <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item @if(request()->is('about-us')) active @endif">
                <a class="nav-link" href="{{url('/about-us')}}"> {{__('about')}}</a>
              </li>
              <li class="nav-item @if(request()->is('products')) active @endif">
                <a class="nav-link" href="{{url('/products')}}">{{__('products')}}</a>
              </li>
              <li class="nav-item @if(request()->is('contact-us')) active @endif">
                <a class="nav-link" href="{{url('/contact-us')}}">{{__('contact')}}</a>
              </li>
            </ul>
            <div class="user_option">
              
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
  </div>

