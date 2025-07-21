<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangHilang;
use App\Models\BarangPenemuan;

class LaporanApiController extends Controller
{
    /**
     * Ambil semua data barang hilang.
     */
    public function getKehilangan()
    {
        $barangHilang = \App\Models\BarangHilang::latest()->get();
        return response()->json($barangHilang);
    }


    /**
     * Simpan laporan kehilangan.
     */
    public function storeKehilangan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'jenis_barang' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'ciri_ciri' => 'required|string',
        ]);

        $validatedData['status'] = 'Dilaporkan';

        $laporan = BarangHilang::create($validatedData);

        return response()->json([
            'message' => 'Laporan kehilangan berhasil ditambahkan.',
            'data' => $laporan,
        ], 201);
    }

    /**
     * Ambil semua data barang penemuan.
     */
    public function getPenemuan()
    {
        $barangPenemuan = BarangPenemuan::latest()->get();
        return response()->json($barangPenemuan);
    }

    /**
     * Simpan laporan penemuan.
     */
    public function storePenemuan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'jenis_barang' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'ciri_ciri' => 'required|string',
        ]);

        $validatedData['status'] = 'Dilaporkan';

        $penemuan = BarangPenemuan::create($validatedData);

        return response()->json([
            'message' => 'Laporan penemuan berhasil ditambahkan.',
            'data' => $penemuan,
        ], 201);
    }
}
