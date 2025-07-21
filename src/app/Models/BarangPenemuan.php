<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangPenemuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'jenis_barang',
        'lokasi',
        'ciri_ciri',
        'status',
    ];
    
}
