@extends('template.master')

@section('content')
    <div class="container mt-4">
        <h1>Tambah Tipe Kamar</h1>

        <!-- Form untuk menambah tipe kamar -->
        <form action="{{ route('admin.tipekamar.store') }}" method="POST">
            @csrf

            <!-- Input Nama Tipe Kamar -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <!-- Input Harga -->
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" step="0.01" required>
            </div>

            <!-- Input Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="description" class="form-control" required>{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="fasilitaskamar" class="form-label">fasilitaskamar</label>
                <textarea name="fasilitaskamar" id="fasilitaskamar" class="form-control" required>{{ old('fasilitaskamar') }}</textarea>
            </div>

            <!-- Tombol Simpan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.tipekamar.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection
