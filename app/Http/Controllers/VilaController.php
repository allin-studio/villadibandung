<?php
// app/Http/Controllers/VilaController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Vila;

class VilaController extends Controller
{
    // Menampilkan daftar Vila
    public function index()
    {
        $vilas = Vila::all();
        return view('vilas.index', compact('vilas'));
        $vilaList = Vila::all(); // Gantikan dengan cara mengambil data Vila sesuai model Anda
        return view('all.index', compact('vilaList'));
    }

    // Menampilkan formulir create Vila
    public function create()
    {
        return view('vilas.create');
    }

    // Menyimpan data Vila ke database
    public function store(Request $request)
    {
        $request->validate([
            'nama_vila' => 'required',
            'alamat_lengkap' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'jumlah_kasur' => 'required',
            'kapasitas' => 'required',
            'fasilitas' => 'required',
            'harga' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jumlah_kamar_mandi' => 'required', // Validasi jumlah kamar mandi
        ]);

        $vilaData = $request->except('foto');

        // Upload foto ke direktori storage dan ambil pathnya
        $Vila = Vila::create($vilaData);

        // Proses foto-foto yang diunggah dan simpan ke dalam kolom "foto"
        if ($request->hasFile('foto')) {
            $photoPaths = [];
            foreach ($request->file('foto') as $photo) {
                $photoPath = $photo->storePublicly('vila_photos', 'public'); // Ganti menjadi storePublicly
                $photoPaths[] = $photoPath;
            }
            $Vila->foto = $photoPaths;
            $Vila->save();
        }

        return redirect()->route('Vila.index')->with('success', 'Data Vila telah ditambahkan.');
    }

    // Menampilkan detail Vila
    public function show($id)
    {
        $Vila = Vila::findOrFail($id);
        return view('vilas.show', compact('Vila'));
        return view('customers.show', compact('Vila'));

    }

    // Menampilkan formulir edit Vila
    public function edit($id)
    {
        $Vila = Vila::findOrFail($id);

        return view('vilas.edit', compact('Vila'));
    }

    // Fungsi untuk mengupdate data Vila
    public function update(Request $request, $id)
    {
        $Vila = Vila::findOrFail($id);

        $request->validate([
            'nama_vila' => 'required',
            'alamat_lengkap' => 'required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'jumlah_kasur' => 'required',
            'kapasitas' => 'required',
            'fasilitas' => 'required',
            'harga' => 'required',
            'foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'jumlah_kamar_mandi' => 'required',
        ]);

        $vilaData = $request->except('foto');

        // Upload foto ke direktori storage dan ambil pathnya
        if ($request->hasFile('foto')) {
            $photoPaths = [];
            foreach ($request->file('foto') as $photo) {
                $photoPath = $photo->storePublicly('vila_photos', 'public'); // Ganti menjadi storePublicly
                $photoPaths[] = str_replace('public/', '', $photoPath);
            }
            $vilaData['foto'] = $photoPaths;
        }

        // Update data Vila
        $Vila->update($vilaData);

        return redirect()->route('Vila.index')->with('success', 'Data Vila telah diperbarui.');
    }

    public function destroy($id)
    {
        Vila::destroy($id);

        return redirect()->route('Vila.index')->with('success', 'Data Vila telah dihapus.');
    }
    public function booking($id)
    {
        // Redirect pengguna ke halaman form pemesanan dengan data id villa
        return redirect()->route('bookingForm', ['id' => $id]);
        }
}