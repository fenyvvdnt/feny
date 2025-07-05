@extends('admin.main')

@section('title', 'Tambah Testimonial')

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('admin.testimonial.store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Level</label>
        <select name="level" class="form-control @error('level') is-invalid @enderror" required>
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
        <label>Testimonial</label>
        <textarea name="testimonial" class="form-control @error('testimonial') is-invalid @enderror" rows="4" required>{{ old('testimonial') }}</textarea>
        @error('testimonial')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <small class="form-text text-muted">Maksimal 1000 karakter</small>
      </div>
      <div class="form-group">
        <label>Status</label>
        <select name="is_active" class="form-control @error('is_active') is-invalid @enderror" required>
          <option value="1" {{ old('is_active') == '1' ? 'selected' : '' }}>Active</option>
          <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>Inactive</option>
        </select>
        @error('is_active')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ route('admin.testimonial.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
