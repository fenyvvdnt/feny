@extends('admin.main')

@section('title', 'Daftar Kontak')

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{ route('contact.create') }}" class="btn btn-primary">Tambah Kontak</a>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact->alamat }}</td>
                    <td>{{ $contact->nomor_telepon }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->status_publish ? 'Publish' : 'Unpublish' }}</td>
                    <td>
                        <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
