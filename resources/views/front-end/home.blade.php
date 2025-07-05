@extends('front-end.master')

@section('title','Home')

@section('content')
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Produk Terbaru
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'affair', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/affair-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Affair 
                </h6>
                <span>
                  Rp 75.000
                </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'aphrodite', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/aphrodite-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Aphrodite
                </h6>
                  <span>
                    Rp 130.000
                  </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'babylove', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/babylove-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Baby Love
                </h6>
                  <span>
                    Rp 131.000
                  </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'cafedrops', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/cafedrops-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Café Drops
                </h6>
                  <span>
                    Rp 155.000
                  </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'utopia', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/utopia-paarfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Utopia
                </h6>
                <span>
                  Rp 80.000
                </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'darksecret', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/darksecret-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Dark Secret
                </h6>
                <span>
                  Rp 79.000
                </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'matchalatte', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/matchalatte-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Matcha Latte
                </h6>
                <span>
                  Rp 160.000
                </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="{{ route('product.detail', ['product' => 'luminous', 'source' => 'home']) }}">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/luminous-parfume-removebg-preview.png') }}" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  MYKONOS - Luminous
                </h6>
                <span>
                  Rp 249.000    
                </span>
              </div>
              <div class="new">
                <span>
                  Baru
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Lihat Semua Produk
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- saving section -->

  <section class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="{{ asset('assets/front-end/images/vanillaclouds-parfume-removebg-preview.png') }}" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Best Savings on <br>
                  new arrivals
                </h2>
              </div>
              <p>
                Lembut. Manis. Tak tertahankan.
              </p>
              <p>Mykonos Vanilla Clouds adalah parfum EDP yang membawa kamu ke dunia manis penuh kelembutan dan godaan.</p>
              <p>💫 Perpaduan aroma impian:</p>
              <p>Top Notes: Vanilla, heliotrope, white floral accord</p>
              <p>Middle Notes: Marshmallow, iris, creamy vanilla</p>
              <p>Base Notes: Caramel, white musk, deep vanilla</p>
              <p>Aroma ini hangat, genit, dan bikin siapa pun betah berlama-lama di dekatmu.</p>
              <p>Sempurna untuk kencan santai atau malam-malam chill dengan sentuhan manis.</p>
              ✨ Ini adalah kenyamanan dalam botol.
              </p>
              <div class="btn-box">
                @auth
                <a href="{{ route('product.detail', 'vanillaclouds') }}" class="btn1">
                  Beli Sekarang 
                </a>
                @else
                <a href="{{ route('login') }}" class="btn1">
                  Beli Sekarang 
                </a>
                @endauth
                @auth
                <a href="{{ route('shop') }}" class="btn2">
                  Lihat Lebih Banyak
                </a>
                @else
                <a href="{{ route('login') }}" class="btn2">
                  Lihat Lebih Banyak
                </a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end saving section -->

  <!-- gift section -->

  <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="{{ asset('assets/front-end/images/ontherock-parfume-removebg-preview.png') }}" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Gifts for your <br>
                  loved ones
                </h2>
              </div>
              <p>
                Minuman impianmu, kini dalam botol parfum.
              </p>
              <p>
                Temukan Mykonos In The Rocks — parfum unisex yang menggabungkan aroma segar & eksotis dalam satu semprotan penuh karakter.
              </p>
              <p>
                Wewangian khas barumu, di mana setiap semprotan membawamu dalam perjalanan mewah —
                dari aroma segar dan renyah, ke aroma bold dan spicy,
                lalu diakhiri dengan sentuhan manis yang menggoda.
              </p>
              <p>✨ Sekali semprot, pasti ketagihan.</p>
              <div class="btn-box">
                @auth
                <a href="{{ route('product.detail', 'ontherock') }}" class="btn1">
                  Beli Sekarang
                </a>
                @else
                <a href="{{ route('login') }}" class="btn1">
                  Beli Sekarang
                </a>
                @endauth
                @auth
                <a href="{{ route('shop') }}" class="btn2">
                  Lihat Lebih Banyak
                </a>
                @else
                <a href="{{ route('login') }}" class="btn2">
                  Lihat Lebih Banyak
                </a>
                @endauth
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end gift section -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    @if(session('login_success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('login_success') }}',
            confirmButtonText: 'OK',
            confirmButtonColor: '#28a745'
        });
    @endif
  </script>
@endsection