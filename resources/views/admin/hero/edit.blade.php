@extends('admin.main')

@section('title', 'Edit Hero Section')

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('hero.update', $hero->id) }}" method="POST" enctype="multipart/form-data">
      @csrf @method('PUT')
      <div class="form-group">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" value="{{ $hero->title }}" required>
      </div>
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" required>{{ $hero->description }}</textarea>
      </div>
      <div class="form-group">
        <label>Gambar Saat Ini</label><br>
        <img src="{{ asset('storage/' . $hero->image) }}" width="100"><br><br>
        <label>Ganti Gambar</label>
        <input type="file" name="image" class="form-control-file">
      </div>
      <div class="form-group">
        <label>Status Publish</label>
        <select name="status_publish" class="form-control" required>
          <option value="1" {{ $hero->status_publish == 1 ? 'selected' : '' }}>Publish</option>
          <option value="0" {{ $hero->status_publish == 0 ? 'selected' : '' }}>Unpublish</option>
        </select>
      </div>
      <button class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection
