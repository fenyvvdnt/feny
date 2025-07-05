@extends('admin.main')

@section('title', 'Edit Kontak')

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('contact.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ $contact->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label>No. Telepon</label>
                <input type="text" name="nomor_telepon" value="{{ $contact->nomor_telepon }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ $contact->email }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Status Publish</label>
                <select name="status_publish" class="form-control" required>
                    <option value="1" {{ $contact->status_publish == 1 ? 'selected' : '' }}>Publish</option>
                    <option value="0" {{ $contact->status_publish == 0 ? 'selected' : '' }}>Unpublish</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
