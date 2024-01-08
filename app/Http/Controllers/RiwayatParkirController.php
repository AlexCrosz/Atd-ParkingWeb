<?php
// app/Http/Controllers/RiwayatParkirController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class RiwayatParkirController extends Controller
{
    public function index()
    {
        // Ambil data riwayat parkir dari model Pembayaran
        $riwayatParkir = Pembayaran::all();

        // Tampilkan view riwayat parkir dengan data
        return view('riwayat_parkir', compact('riwayatParkir'));
    }
}
