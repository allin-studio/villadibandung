<?php

namespace App\Http\Controllers;
use App\Models\vila;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function showReservationForm()
    {
        // Simply return the view without fetching any data
        return view('reservation.reservation');
    }

    public function details($id)
    {
        $vila = Vila::findOrFail($id);
        return view('reservation.details', compact('vila'));
    }

    public function submit(Request $request)
    {
    // Validasi dan proses data reservation
    $data = $request->validate([
        'checkin' => 'required|date',
        'checkout' => 'required|date',
        'rooms' => 'required|integer',
        'adults' => 'required|integer',
        'children' => 'nullable|integer',
        'access_code' => 'nullable|string',
        'vila_id' => 'required|integer|exists:vila,id',
    ]);

    // Simpan data ke database atau proses sesuai kebutuhan

    return redirect()->route('reservation.details', ['id' => $data['vila_id']])
                     ->with('success', 'Reservation successfully created!');
    }

}
