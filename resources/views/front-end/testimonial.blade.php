@extends('front-end.master')

@section('title','Testimonial')

@section('content')
<section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Testimonial
        </h2>
        <div class="mt-3">
          <a href="{{ route('testimonial.create') }}" class="btn btn-primary">Tambah Testimonial</a>
        </div>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          @if($testimonials->count() > 0)
            @foreach($testimonials as $index => $testimonial)
              <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                <div class="box">
                  <div class="client_info">
                    <div class="client_name">
                      <h5>
                        {{ $testimonial->name }}
                      </h5>
                      <h6>
                        {{ $testimonial->level }}
                      </h6>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                  <p>
                    "{{ $testimonial->testimonial }}"
                  </p>
                </div>
              </div>
            @endforeach
          @else
            <div class="carousel-item active">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Azra Deliana
                    </h5>
                    <h6>
                      Gold
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  "Gila sih ini wangi enak banget, baru semprot dikit aja udah kecium kemana-mana. Fix jadi andalan!"
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Olivia Aldisa
                    </h5>
                    <h6>
                      Silver
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  "Wanginya tuh fresh tapi ada classy-nya gitu loh, terus tahan lama banget 😭 ga nyangka bakal sebagus ini"
                </p>
              </div>
            </div>
            <div class="carousel-item">
              <div class="box">
                <div class="client_info">
                  <div class="client_name">
                    <h5>
                      Tesa Sulistia
                    </h5>
                    <h6>
                      Platinum
                    </h6>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  "Sumpah SPL-nya mantep parah, gue pake pagi sampe malem masih kecium. Banyak yang nanya parfumnya apaan 😆"
                </p>
              </div>
            </div>
          @endif
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
</section>

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endsection