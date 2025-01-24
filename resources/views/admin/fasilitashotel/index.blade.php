@extends('template.master')

@section('content')
    <div class="container mt-4">
        <h1>Daftar Fasilitas Hotel</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol untuk menambahkan fasilitas kamar baru -->
        <a href="{{ route('admin.fasilitashotel.create') }}" class="btn btn-primary mb-3">Tambah Fasilitas Hotel</a>

        <!-- Tabel Daftar Fasilitas Kamar -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama Fasilitas</th>
                    <th>Deskripsi</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($facilities as $fasilitashotel)
                    <tr>
                        <td>{{ $fasilitashotel->name }}</td>
                        <td>{{ $fasilitashotel->description }}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href="{{ route('admin.fasilitashotel.edit', $fasilitashotel->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Form Hapus -->
                            <form action="{{ route('admin.fasilitashotel.destroy', $fasilitashotel->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus fasilitas kamar ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
