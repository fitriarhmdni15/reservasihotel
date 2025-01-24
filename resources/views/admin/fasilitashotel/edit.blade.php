@extends('template.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit Fasilitas Hotel</h1>

        <form action="{{ route('admin.fasilitashotel.update', $fasilitashotel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Input untuk Nama Fasilitas Kamar -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Fasilitas</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $fasilitashotel->name) }}" required>
            </div>

            <!-- Input untuk Deskripsi Fasilitas Kamar -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $fasilitashotel->description) }}</textarea>
            </div>

            <!-- Tombol untuk menyimpan perubahan -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.fasilitashotel.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
