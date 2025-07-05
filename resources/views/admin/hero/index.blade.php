@extends('admin.main')

@section('title', 'Hero Section')

@section('content')
<div class="card">
  <div class="card-header">
    <a href="{{ route('hero.create') }}" class="btn btn-primary">+ Tambah Hero</a>
  </div>
  <div class="card-body">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($heroes as $hero)
        <tr>
          <td>{{ $hero->title }}</td>
          <td>{{ $hero->description }}</td>
          <td><img src="{{ asset('storage/' . $hero->image) }}" width="100"></td>
          <td>{{ $hero->status_publish ? 'Publish' : 'Unpublish' }}</td>
          <td>
            <a href="{{ route('hero.edit', $hero->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('hero.destroy', $hero->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?')">
              @csrf @method('DELETE')
              <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
