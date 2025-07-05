@extends('admin.main')

@section('title', 'Tambah Product')

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Nama Product</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" required>{{ old('description') }}</textarea>
        @error('description')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Harga</label>
        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" min="0" step="1000" required>
        @error('price')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label>Gambar Product</label>
        <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" required>
        @error('image')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <small class="form-text text-muted">Format: JPG, JPEG, PNG. Maksimal 2MB</small>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Top Notes</label>
            <input type="text" name="top_notes" class="form-control" value="{{ old('top_notes') }}" placeholder="Contoh: Bergamot, Lemon">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Middle Notes</label>
            <input type="text" name="middle_notes" class="form-control" value="{{ old('middle_notes') }}" placeholder="Contoh: Jasmine, Rose">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Base Notes</label>
            <input type="text" name="base_notes" class="form-control" value="{{ old('base_notes') }}" placeholder="Contoh: Musk, Amber">
          </div>
        </div>
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
      <a href="{{ route('admin.product.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection 