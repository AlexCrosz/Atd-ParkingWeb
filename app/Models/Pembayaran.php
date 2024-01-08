<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'plat',
        'jenis_kendaraan',
        'tanggal',
        'jam_masuk',
        'total_pembayaran',
        // Sesuaikan dengan kolom-kolom yang ada pada tabel payments
    ];
}
