<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
        protected $fillable = [
            'nama_pelapor',
            'jenis_barang',
            'lokasi',
            'ciri_ciri',
            'status',
            'kategori', // hilang/temuan
        ];
    
    
}
