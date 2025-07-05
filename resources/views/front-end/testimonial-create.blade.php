@extends('front-end.master')

@section('title','Tambah Testimonial')

@section('content')
<section class="layout_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Tambah Testimonial Baru</h3>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('testimonial.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                       id="name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="level">Level</label>
                                <select class="form-control @error('level') is-invalid @enderror" 
                                        id="level" name="level" required>
                                    <option value="">Pilih Level</option>
                                    <option value="Gold" {{ old('level') == 'Gold' ? 'selected' : '' }}>Gold</option>
                                    <option value="Silver" {{ old('level') == 'Silver' ? 'selected' : '' }}>Silver</option>
                                    <option value="Platinum" {{ old('level') == 'Platinum' ? 'selected' : '' }}>Platinum</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="testimonial">Testimonial</label>
                                <textarea class="form-control @error('testimonial') is-invalid @enderror" 
                                          id="testimonial" name="testimonial" rows="4" 
                                          placeholder="Tulis testimonial Anda di sini..." required>{{ old('testimonial') }}</textarea>
                                @error('testimonial')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">Maksimal 1000 karakter</small>
                            </div>

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Kirim Testimonial</button>
                                <a href="{{ route('testimonial.index') }}" class="btn btn-secondary ml-2">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 