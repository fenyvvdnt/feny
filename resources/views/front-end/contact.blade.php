@extends('front-end.master')

@section('title', 'Contact Us')

@section('content')
<section class="contact_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Contact Us
            </h2>
        </div>
        <div class="container-bg">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h4><i class="fa fa-map-marker"></i> Lokasi Kami</h4>
                        <p>Jl. Parfum No. 123, Jakarta Selatan</p>
                        <p>Indonesia</p>
                    </div>
                    <div class="contact-info">
                        <h4><i class="fa fa-phone"></i> Nomor Telepon</h4>
                        <p>+62 812 3456 7890</p>
                        <p>+62 821 2345 6789</p>
                    </div>
                    <div class="contact-info">
                        <h4><i class="fa fa-envelope"></i> Alamat Email</h4>
                        <p>info@mykonos.com</p>
                        <p>support@mykonos.com</p>
                    </div>
                    <div class="contact-info">
                        <h4><i class="fa fa-clock-o"></i> Jam Kerja</h4>
                        <p>Senin - Jumat: 9:00 AM - 5:00 PM</p>
                        <p>Sabtu: 10:00 AM - 3:00 PM</p>
                    </div>
                </div>
                <div class="col-md-6">
                    @auth
                    <form action="">
                        <input type="text" placeholder="Your Name" required />
                        <input type="email" placeholder="Your Email" required />
                        <input type="text" placeholder="Phone Number" required />
                        <input type="text" class="message-box" placeholder="Message" required />
                        <button type="submit">
                            KIRIM PESAN
                        </button>
                    </form>
                    @else
                    <form onsubmit="window.location='{{ route('login') }}'; return false;">
                        <input type="text" placeholder="Your Name" required />
                        <input type="email" placeholder="Your Email" required />
                        <input type="text" placeholder="Phone Number" required />
                        <input type="text" class="message-box" placeholder="Message" required />
                        <button type="submit">
                            KIRIM PESAN
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="map_container">
                        <div class="map-responsive">
                            <iframe src="https://www.google.com/maps?q=Jakarta,+Indonesia&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

@endsection