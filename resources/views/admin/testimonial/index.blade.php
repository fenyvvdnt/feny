@extends('admin.main')

@section('title', 'Testimonial Management')

@section('content')
<div class="card">
  <div class="card-header">
    <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">+ Tambah Testimonial</a>
  </div>
  <div class="card-body">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nama</th>
          <th>Level</th>
          <th>Testimonial</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($testimonials as $testimonial)
        <tr>
          <td>{{ $testimonial->name }}</td>
          <td>
            <span class="badge badge-{{ $testimonial->level == 'Gold' ? 'warning' : ($testimonial->level == 'Silver' ? 'secondary' : 'info') }}">
              {{ $testimonial->level }}
            </span>
          </td>
          <td>{{ Str::limit($testimonial->testimonial, 100) }}</td>
          <td>
            <span class="badge badge-{{ $testimonial->is_active ? 'success' : 'danger' }}">
              {{ $testimonial->is_active ? 'Active' : 'Inactive' }}
            </span>
          </td>
          <td>
            <a href="{{ route('admin.testimonial.edit', $testimonial->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('admin.testimonial.destroy', $testimonial->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus testimonial ini?')">
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
