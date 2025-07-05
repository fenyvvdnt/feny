@extends('admin.main')

@section('title', 'Tambah Hero Section')

@section('content')
<div class="card">
  <div class="card-body">
    <form action="{{ route('hero.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Judul</label>
        <input type="text" name="title" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" required></textarea>
      </div>
      <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="image" class="form-control-file" required>
      </div>
      <div class="form-group">
        <label>Status Publish</label>
        <select name="status_publish" class="form-control" required>
          <option value="1">Publish</option>
          <option value="0">Unpublish</option>
        </select>
      </div>
      <button class="btn btn-primary">Simpan</button>
    </form>
  </div>
</div>
@endsection
