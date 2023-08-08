<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vila;
use App\Models\Review;
use App\Models\Peraturan;
use App\Models\PeraturanDago;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{
    public function all()
{
    $vilas = Vila::all(); // Villa adalah model yang merepresentasikan data villa
    
    return view('customers.all', compact('vilas'));
}
public function showAll()
{
    $vilas = Vila::all();
    return view('customers.all', compact('vilas'));
}
public function filter(Request $request)
{
    $query = Vila::query();

    if ($request->has('harga_min') && $request->has('harga_max')) {
        $query->whereBetween('harga', [$request->input('harga_min'), $request->input('harga_max')]);
    }

    $filteredVilas = $query->get();

        Session::put('filtered_vilas', $filteredVilas);

    return redirect()->route('customers.all');
}
public function filterr(Request $request)
{
    $query = Vila::query();

    if ($request->has('lokasi')) {
        $query->where('lokasi', 'like', '%' . $request->input('lokasi') . '%');
    }

    $filteredVilas = $query->get();

        Session::put('filtered_vilas', $filteredVilas);

    return redirect()->route('customers.all');
}
    public function index()
    {
        $vilas = Vila::all();
        $reviews = Review::all();
        $peraturans = Peraturan::all();
        $peraturandagos = PeraturanDago::all();
        return view('customers.index', compact('vilas', 'reviews','peraturans','peraturandagos'));  
        return view('customers.all', compact('vilas')) ;     
    }
    public function show($id)
    {
        $vila = Vila::findOrFail($id);
        $vilas = Vila::all();
        return view('customers.show', compact('vila','vilas'));
    }
    public function showBookingForm(Vila $vila)
    {
        return view('customers.booking')->with('vila', $vila);
    }
    public function booking(Vila $vila)
    {
        return view('customers.booking', compact('vila'))->with('success', 'Data vila telah ditambahkan.');;
    }
    public function showSingleProperty($id) {
        $villa = Vila::find($id);
    
        if (!$villa) {
            abort(404); // atau Anda bisa menangani kasus jika properti tidak ditemukan
        }
    
        return view('property-single', compact('villa'));
    }
    
}
