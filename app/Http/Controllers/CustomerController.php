<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vila;

class CustomerController extends Controller
{
    public function index()
    {
        $vilas = Vila::all();
        return view('customers.index', compact('vilas'));

        return view('customers.index');
    }
    public function show($id)
    {
        $vila = Vila::findOrFail($id);
        return view('customers.show', compact('vila'));
    }
    public function showBookingForm(Vila $vila)
    {
        return view('customers.booking')->with('vila', $vila);
    }
    public function booking(Vila $vila)
    {
        return view('customers.booking', compact('vila'));
    }
    public function showSingleProperty($id) {
        $villa = Vila::find($id);
    
        if (!$villa) {
            abort(404); // atau Anda bisa menangani kasus jika properti tidak ditemukan
        }
    
        return view('property-single', compact('villa'));
    }
}
