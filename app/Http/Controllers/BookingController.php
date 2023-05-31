<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function booking()
    {
        return view('booking');
    }

    public function store(Request $request)
    {
        $hargaPerJam = 50000;
        $durasi = $request->input('durasi');

        $booking = new Booking();
        $booking->nama_lengkap = $request->input('nama_lengkap');
        $booking->nomor_telepon = $request->input('nomor_telepon');
        $booking->tanggal = $request->input('tanggal');
        $booking->durasi = $durasi;
        $booking->harga = $hargaPerJam * $durasi;
        $booking->save();

        return redirect()->route('payment', $booking);
    }

    public function payment(Booking $booking)
    {
        return view('payment', compact('booking'));
    }

    public function processPayment(Request $request, Booking $booking)
    {
        // Proses pembayaran

        return view('success')->with('booking', $booking);
    }
}

