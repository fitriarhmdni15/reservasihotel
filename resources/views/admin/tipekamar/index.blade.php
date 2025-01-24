@extends('template.master')

@section('content')
    <div class="container mt-4">
        <h1>Daftar Tipe Kamar</h1>

        <!-- Menampilkan pesan sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Link ke form tambah tipe kamar -->
        <a href="{{ route('admin.tipekamar.create') }}" class="btn btn-primary mb-3">Tambah Tipe Kamar</a>

        <!-- Tabel Daftar Tipe Kamar -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>fasilitaskamar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roomTypes as $roomType)
                    <tr>
                        <td>{{ $roomType->name }}</td>
                        <td>{{ $roomType->description }}</td>
                        <td>{{ number_format($roomType->price, 2, ',', '.') }}</td>
                        <td>{{ $roomType->fasilitaskamar }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.tipekamar.edit', $roomType->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Form untuk menghapus tipe kamar -->
                            <form action="{{ route('admin.tipekamar.destroy', $roomType->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus tipe kamar ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
     