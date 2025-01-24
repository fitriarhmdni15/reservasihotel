<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;

class AdminFasilitasHotelController extends Controller
{
    public function index()
    {
        $facilities = FasilitasHotel::all();
        return view('admin.fasilitashotel.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.fasilitashotel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        FasilitasHotel::create($request->only('name', 'description'));

        return redirect()->route('admin.fasilitashotel.index')->with('success', 'Fasilitas hotel berhasil ditambahkan.'); // Use the prefixed route name
    }

    public function edit(FasilitasHotel $fasilitashotel)
    {
        return view('admin.fasilitashotel.edit', compact('fasilitashotel'));
    }

    public function update(Request $request, FasilitasHotel $fasilitashotel)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $fasilitashotel->update($request->only('name', 'description'));

        return redirect()->route('admin.fasilitashotel.index')->with('success', 'Fasilitas hotel berhasil diperbarui.'); // Use the prefixed route name
    }

    public function destroy(FasilitasHotel $fasilitashotel)
    {
        $fasilitashotel->delete();

        return redirect()->route('admin.fasilitashotel.index')->with('success', 'Fasilitas hotel berhasil dihapus.'); // Use the prefixed route name
    }
}
