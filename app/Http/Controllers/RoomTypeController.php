<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    // Menampilkan semua tipe kamar
    public function index()
    {
        $roomTypes = RoomType::all();
        return view('admin.tipekamar.index', compact('roomTypes'));
    }

    // Menampilkan form untuk membuat tipe kamar baru
    public function create()
    {
        return view('admin.tipekamar.create');
    }

    // Menyimpan tipe kamar baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'fasilitaskamar' => 'nullable|string',
        ]);

        RoomType::create($request->only('name', 'price', 'description', 'fasilitaskamar'));

        return redirect()->route('admin.tipekamar.index')->with('success', 'Tipe kamar berhasil dibuat!');
    }

    // Menampilkan form untuk mengedit tipe kamar
    public function edit(RoomType $roomType)
    {
        return view('admin.tipekamar.edit', compact('roomType'));
    }

    // Mengupdate tipe kamar
    public function update(Request $request, RoomType $roomType)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'fasilitaskamar' => 'nullable|string',
        ]);

        $roomType->update($request->only('name', 'price', 'description', 'fasilitaskamar'));

        return redirect()->route('admin.tipekamar.index')->with('success', 'Tipe kamar berhasil diperbarui!');
    }

    // Menghapus tipe kamar
    public function destroy(RoomType $roomType)
    {
        // Optional: Check if the room type is associated with any rooms
        // if ($roomType->rooms()->count() > 0) {
        //     return redirect()->route('admin.tipekamar.index')->with('error', 'Tipe kamar ini masih memiliki kamar yang terdaftar!');
        // }

        $roomType->delete();

        return redirect()->route('admin.tipekamar.index')->with('success', 'Tipe kamar berhasil dihapus!');
    }
}
