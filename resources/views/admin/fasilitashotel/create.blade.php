@extends('template.master')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Fasilitas Hotel</h1>

        <!-- Form untuk menambah fasilitas kamar -->
        <form action="{{ route('admin.fasilitashotel.store') }}" method="POST">
            @csrf

            <!-- Input Nama Fasilitas -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Fasilitas</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <!-- Input Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.fasilitashotel.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
