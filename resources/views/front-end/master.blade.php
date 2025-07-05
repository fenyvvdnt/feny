<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('assets/front-end/images/favicon.png') }}" type="image/x-icon">

  <title>
  @yield('title')
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/front-end/css/bootstrap.css') }}" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/front-end/css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('assets/front-end/css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="{{ route('home') }}">
          <span>
            MYKONOS
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->routeIs('shop') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('shop') }}">
                Shop
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('why') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('why') }}">
                Why Us
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('testimonial.*') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('testimonial.index') }}">
                Testimonial
              </a>
            </li>
            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            @auth
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span>Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            @else
              <a href="{{ route('login') }}">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Login</span>
              </a>
            @endauth
            <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        @forelse ($hero_info as $index => $hero)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    {{ $hero->title }}
                  </h1>
                  <p>
                    {{ $hero->description }}
                  </p>
                  <a href="{{ route('contact') }}">
                    Hubungi Kami
                  </a>
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img src="{{ asset('storage/' . $hero->image) }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        @empty
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    Welcome — Your Scent Journey Begins Here
                  </h1>
                  <p>
                    Mulailah perjalanan kepribadianmu lewat wangi yang memikat dan tak terlupakan. Mykonos hadir untuk menemani setiap langkahmu—dari momen santai, hingga kesempatan istimewa. Temukan sensasi yang tak hanya harum, tapi juga menyentuh jiwa.
                  </p>
                  <a href="{{ route('contact') }}">
                    Hubungi Kami
                  </a>
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img src="{{ asset('assets/front-end/images/pinkdrop-parfume-removebg-preview.png') }}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforelse
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Sebelumnya</span>
        </a>
        <img src="{{ asset('assets/front-end/images/line.png') }}" alt="" />
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Selanjutnya</span>
        </a>
      </div>
    </div>
  </div>
</section>
    <!-- end slider section -->
  </div>

  <!-- end hero area -->
  @yield('content')

  <!-- Info Section & Footer -->
  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              Tentang Kami
            </h6>
            <p>
            Parfume Mykonos hadir untuk kamu yang suka tampil wangi dan percaya diri. Kami menghadirkan parfum berkualitas dengan aroma khas yang tahan lama, cocok untuk semua momen spesialmu.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                Info Terbaru
              </h5>
              <form action="{{ route('login') }}">
                <input type="email" placeholder="Enter your email">
                <button>
                  Berlangganan
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              PUSAT BANTUAN
            </h6>
            <p>
            Ada pertanyaan soal produk atau pesanan? Tim kami siap bantu kamu kapan saja. Jangan ragu untuk hubungi kami!
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
            <h6>
            <h6>
              HUBUNGI KAMI
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>{{ $contact_info->alamat ?? '-' }}</span>
              </a>
              <a href="tel:{{ $contact_info->nomor_telepon ?? '' }}">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>{{ $contact_info->nomor_telepon ?? '-' }}</span>
              </a>
              <a href="mailto:{{ $contact_info->email ?? '' }}">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>{{ $contact_info->email ?? '-' }}</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Parfume Mykonos</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </section>

  <script src="{{ asset('assets/front-end/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('assets/front-end/js/bootstrap.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{ asset('assets/front-end/js/custom.js') }}"></script>

</body>

</html>