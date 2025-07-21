<?php

namespace App\Http\Controllers;

use App\Models\BarangHilang;
use App\Models\BarangPenemuan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Tampilkan Form Kehilangan
    public function formKehilangan()
    {
        return view('frontend.kehilangan');
    }

    // Simpan Laporan Kehilangan
    public function submitKehilangan(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'jenis_barang' => 'required',
            'lokasi' => 'required',
            'ciri_ciri' => 'required',
        ]);
        

        BarangHilang::create([
            'nama_pelapor' => $request->nama_pelapor,
            'jenis_barang' => $request->jenis_barang,
            'lokasi' => $request->lokasi,
            'ciri_ciri' => $request->ciri_ciri,
            'status' => 'Dilaporkan',
        ]);
        

        return redirect()->back()->with('success', 'Laporan kehilangan berhasil dikirim!');
    }

    // Tampilkan Form Penemuan
    public function formPenemuan()
    {
        return view('frontend.penemuan');
    }

    // Simpan Laporan Penemuan
    public function submitPenemuan(Request $request)
    {
        $request->validate([
            'nama_pelapor' => 'required',
            'jenis_barang' => 'required',
            'lokasi' => 'required',
            'ciri_ciri' => 'required',
        ]);

        BarangPenemuan::create([
            'nama_pelapor' => $request->nama_pelapor,
            'jenis_barang' => $request->jenis_barang,
            'lokasi' => $request->lokasi,
            'ciri_ciri' => $request->ciri_ciri,
            'status' => 'Dilaporkan',
        ]);

        return redirect()->back()->with('success', 'Laporan penemuan berhasil dikirim!');
    }

    // Tampilkan Daftar Barang Hilang (Untuk User)
    public function daftarKehilangan()
    {
        $data = BarangHilang::latest()->get();
        return view('frontend.daftar-kehilangan', compact('data'));
    }

    // Tampilkan Daftar Barang Ditemukan (Untuk User)
    public function daftarPenemuan()
    {
        $data = BarangPenemuan::latest()->get();
        return view('frontend.daftar-penemuan', compact('data'));
    }

    
    // app/Http/Controllers/LaporanController.php

    public function daftarBarang()
    {
        $data = \App\Models\BarangHilang::latest()->get();
        return view('frontend.daftar-kehilangan', compact('data'));
    }

}
