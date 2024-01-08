<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Vehicle;

class PembayaranController extends Controller
{
    public function processPayment(Request $request)
    {
        // Validate the request data as needed

        // Ambil informasi kendaraan berdasarkan plat nomor
        $platNumber = $request->input('plat');
        $vehicle = Vehicle::where('plat', $platNumber)->first();

        // Jika kendaraan ditemukan
        if ($vehicle) {
            $jenisKendaraan = $vehicle->jenis_kendaraan;
            $tanggal = $vehicle->tanggal;
            $jamMasuk = $vehicle->jam_masuk; // Menggunakan nilai jam_masuk dari tabel vehicle

            // Logika perhitungan total pembayaran berdasarkan tipe kendaraan
            $totalPembayaran = $this->hitungTotalPembayaran($jenisKendaraan, $jamMasuk);

            // Simpan data pembayaran ke dalam database
            $pembayaran = Pembayaran::create([
                'plat' => $request->input('plat'),
                'jenis_kendaraan' => $jenisKendaraan,
                'tanggal' => $tanggal,
                'jam_masuk' => $jamMasuk,
                'total_pembayaran' => $totalPembayaran,
                // Sesuaikan dengan nama field pada form pembayaran
            ]);

            // Simulasi pembayaran berhasil
            $paymentSuccessful = $this->simulatePayment();

            // Jika pembayaran berhasil, hapus data kendaraan
            if ($paymentSuccessful) {
                $vehicle->delete();
            }
            

            // Tampilkan view dengan data pembayaran dan popup pembayaran berhasil
            return view('process_payment', [
                'pembayaran' => $pembayaran,
            ])->with('success', $paymentSuccessful);
            
            // Arahkan ke halaman dashboard setelah pembayaran selesai
            return redirect()->route('dashboard');
        }
    }

    private function hitungTotalPembayaran($jenisKendaraan, $jamMasuk)
    {
        // Ambil waktu sekarang
        $waktuSekarang = now();

        // Hitung selisih waktu dalam jam   
        $selisihJam = $waktuSekarang->diffInHours($jamMasuk); // Hitung selisih dalam jam

        // Tentukan tarif sesuai dengan jenis kendaraan
        $tarifPerJam = ($jenisKendaraan == 'Motor') ? 2000 : 3000;

        // Hitung total pembayaran
        $totalPembayaran = $tarifPerJam * $selisihJam;

        return $totalPembayaran;
    }

    private function simulatePayment()
    {
        // Simulasi pembayaran berhasil
        // Gantilah dengan logika pembayaran sesungguhnya
        return true;
    }
}
