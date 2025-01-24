@extends('template.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit Tipe Kamar</h1>

        <!-- Form untuk mengedit tipe kamar -->
        <form action="{{ route('admin.tipekamar.update', $roomType->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Menggunakan metode PUT untuk pembaruan data -->

            <!-- Input Nama Tipe Kamar -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $roomType->name) }}" required>
            </div>

            <!-- Input Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description', $roomType->description) }}</textarea>
            </div>

            <!-- Input Harga -->
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $roomType->price) }}" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="fasilitaskamar" class="form-label">fasilitaskamar</label>
                <textarea name="fasilitaskamar" id="description" class="form-control" required>{{ old('fasilitaskamar', $roomType->description) }}</textarea>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('admin.tipekamar.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
