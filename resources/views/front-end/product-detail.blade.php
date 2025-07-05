<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - {{ $product['name'] }}</title>
    
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/front-end/css/bootstrap.css') }}" />
    <!-- Custom styles -->
    <link href="{{ asset('assets/front-end/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('assets/front-end/css/responsive.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <section class="product_detail_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <a href="{{ $source === 'home' ? route('home') : route('shop') }}" class="back-button mb-4">
                        <i class="fas fa-arrow-left"></i> Kembali ke {{ $source === 'home' ? 'Home' : 'Shop' }}
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="product_detail_img">
                        <img src="{{ asset('assets/front-end/images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product_detail_box">
                        <h2 class="product_detail_title">{{ $product['name'] }}</h2>
                        <h4 class="product_detail_price">{{ $product['price'] }}</h4>
                        <p class="product_detail_text">{{ $product['description'] }}</p>
                        
                        <div class="notes-section">
                            <p><b>Top Notes:</b> {{ $product['notes']['top'] }}</p>
                            <p><b>Middle Notes:</b> {{ $product['notes']['middle'] }}</p>
                            <p><b>Base Notes:</b> {{ $product['notes']['base'] }}</p>
                        </div>
                        
                        <div class="product_detail_buttons">
                            @auth
                                <a href="#" class="btn btn-warning mr-2">
                                    <i class="fas fa-shopping-cart"></i> Beli Sekarang
                                </a>
                                <a href="#" class="btn btn-outline-primary">
                                    <i class="fas fa-heart"></i> Masukan ke Keranjang
                                </a>
                            @else
                                <div class="alert alert-info">
                                    <i class="fas fa-info-circle"></i> 
                                    Silakan <a href="{{ route('login') }}">login</a> atau 
                                    <a href="{{ route('register') }}">daftar</a> untuk melakukan pembelian
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-warning mr-2">
                                    <i class="fas fa-shopping-cart"></i> Beli Sekarang
                                </a>
                                <a href="{{ route('login') }}" class="btn btn-outline-primary">
                                    <i class="fas fa-heart"></i> Masukan ke Keranjang
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/front-end/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/front-end/js/bootstrap.js') }}"></script>
</body>
</html>
