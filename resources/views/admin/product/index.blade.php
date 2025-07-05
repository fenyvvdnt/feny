@extends('admin.main')

@section('title', 'Product Management')

@section('content')
<div class="card">
  <div class="card-header">
    <a href="{{ route('admin.product.create') }}" class="btn btn-primary">+ Tambah Product</a>
  </div>
  <div class="card-body">
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Nama Product</th>
          <th>Harga</th>
          <th>Gambar</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $product->name }}</td>
          <td>{{ $product->formatted_price }}</td>
          <td><img src="{{ asset('storage/' . $product->image) }}" width="100" alt="{{ $product->name }}"></td>
          <td>
            <span class="badge badge-{{ $product->is_active ? 'success' : 'danger' }}">
              {{ $product->is_active ? 'Active' : 'Inactive' }}
            </span>
          </td>
          <td>
            <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus product ini?')">
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