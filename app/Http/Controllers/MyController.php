<?php

namespace App\Http\Controllers;
use App\Models\Biodata;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\Pembelian;
use App\Models\Pembeli;
use App\Models\Suplier;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function latihan()
    {
        $result = "Latihan Controller";
        return view('latihan', compact('result'));
    }

    public function biodata()
    {
        $nama = "Silvi Lestari";
        $tempatlahir = "Bandung";
        $tgllahir ="11 Juni 2003";
        $umur = "18 Tahun";
        $alamat = "Sukamenak";
        return view('biodata', compact('nama', 'tempatlahir', 'tgllahir',
        'umur', 'alamat'));
    }

    public function bio()
    {
        // mengambil semua data dari model biodata
        $bio = Biodata::all();
        return view('biodataku', compact('bio'));
    }

    public function barang()
    {
        // mengambil semua data dari model biodata
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function pesanan()
    {
        // mengambil semua data dari model biodata
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }

    public function pembelian()
    {
        // mengambil semua data dari model biodata
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }

    public function pembeli()
    {
        // mengambil semua data dari model biodata
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }

    public function suplier()
    {
        // mengambil semua data dari model biodata
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }


    public function show($id)
    {
        $barang = Barang::findOrFail($id);
        return view('show', compact('barang'));
    }

    public function showpembeli($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('showpembeli', compact('pembeli'));
    }

    public function showpembelian($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('showpembelian', compact('pembelian'));
    }

    public function showsuplier($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view('showsuplier', compact('suplier'));
    }

    public function showpesanan($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('showpesanan', compact('pesanan'));
    }
}


