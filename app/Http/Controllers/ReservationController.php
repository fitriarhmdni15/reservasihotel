<?php

use App\Models\Reservation;

class ReservationController extends Controller
{
    public function create()
    {
        return view('reservation.create'); // Menampilkan form reservasi
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'room_type' => 'required|integer',
            'number_of_guests' => 'required|integer',
        ]);

        Reservation::create($validated);

        return redirect()->route('reservation.index')->with('success', 'Reservation made successfully!');
    }

    // Fungsi lain untuk menampilkan semua reservasi, dll.
}

