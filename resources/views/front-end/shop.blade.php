@extends('front-end.master')

@section('title','Shop')

@section('content')
<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
        @guest
        <div class="alert alert-info mt-3">
          Silakan <a href="{{ route('login') }}">login</a> atau <a href="{{ route('register') }}">daftar</a> untuk melakukan pembelian
        </div>
        @endguest
      </div>
      <div class="row">
        @if($products->count() > 0)
          @foreach($products as $product)
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="box">
                <a href="{{ route('product.show', $product->slug) }}">
                  <div class="img-box">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                  </div>
                  <div class="detail-box">
                    <h6>
                      {{ $product->name }}
                    </h6>
                    <span>
                      {{ $product->formatted_price }}
                    </span>
                  </div>
                  @if($product->created_at->diffInDays(now()) <= 7)
                    <div class="new">
                      <span>
                        Baru
                      </span>
                    </div>
                  @endif
                </a>
              </div>
            </div>
          @endforeach
        @else
          <div class="col-12 text-center">
            <p>Tidak ada produk yang tersedia saat ini.</p>
          </div>
        @endif
      </div>
    </div>
</section>
@endsection