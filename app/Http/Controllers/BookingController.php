<?php

namespace App\Http\Controllers;

use App\Models\TransaksiBooking;
use App\Models\Vila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Booking;


class BookingController extends Controller
{
    public function index()
    {
    $transaksi = TransaksiBooking::with('vila')->get();
    return view('booking.index', compact('transaksi'));
    }
    public function showBookingForm($id)
    {
        $vila = Vila::findOrFail($id);
        return view('customers.booking', compact('vila'));
    }
    public function createBookingForm($id)
    {
        $vila = Vila::findOrFail($id);
        return view('customers.booking', compact('vila'));
    }
    public function createBooking(Request $request)
    {
        // Validasi data
        $request->validate([
            'villa_id' => 'required|exists:vilas,id',
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'notelp' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'metode_pembayaran' => 'required',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Hitung total bayar
        $villa = Vila::findOrFail($request->villa_id);
        $checkInDate = new \DateTime($request->check_in);
        $checkOutDate = new \DateTime($request->check_out);
        $diffDays = $checkOutDate->diff($checkInDate)->days;
        $totalBayar = $villa->harga * $diffDays;

        // Simpan data pemesanan ke tabel transaksi_booking
        $transaksiBooking = new TransaksiBooking([
            'id_villa' => $request->villa_id,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'total_bayar' => $totalBayar,
            'metode_pembayaran' => $request->metode_pembayaran,
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);
        $transaksiBooking->save();

        // Redirect pengguna kembali ke halaman index atau halaman pemesanan sukses
        return redirect()->route('customers.index')->with('success', 'Pemesanan villa berhasil! Terima kasih telah memesan villa.');
    }
    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan oleh form
        $request->validate([
            // sesuaikan validasi dengan kebutuhan Anda
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'notelp' => 'required',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'metode_pembayaran' => 'required',
            'total_bayar' => 'required',
            // ... tambahkan validasi lainnya sesuai kebutuhan Anda
        ]);

        // Cari data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Update data booking berdasarkan input form
        $booking->update($request->all());

        // Redirect ke halaman edit dengan pesan sukses
        return redirect()->route('booking.index', $booking->id)->with('success', 'Data booking berhasil diupdate.');
    }
    public function edit($id)
    {
        // Ambil data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Tampilkan halaman edit booking dengan data yang diambil
        return view('booking.edit', compact('booking'));
    }

    // Fungsi untuk menghapus data booking
    public function destroy($id)
    {
        // Cari data booking berdasarkan ID
        $booking = Booking::findOrFail($id);

        // Hapus data booking
        $booking->delete();

        // Redirect ke halaman index setelah berhasil dihapus
        return redirect()->route('booking.index')->with('success', 'Data booking berhasil dihapus.');
    }
}