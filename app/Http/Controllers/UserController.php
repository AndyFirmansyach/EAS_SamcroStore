<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function Home()
    {
        $barang = Barang::limit(6)->get();

        return view('user.home', ['barang' => $barang]);
    }

    public function Produk()
    {
        $barang = Barang::all();

        $hoodie = Barang::where('jenis_barang', 'hoodie');
        $sweater = Barang::where('jenis_barang', 'sweater');
        $jaket = Barang::where('jenis_barang', 'jaket');

        return view('user.daftar_barang', [
            'barang' => $barang,
            'hoodie' => $hoodie,
            'sweater' => $sweater,
            'jaket' => $jaket
        ]);
    }

    public function Kontak()
    {
        return view('user.kontak');
    }

    public function Transaksi()
    {
        $barang = Barang::all();

        return view('user.transaksi', ['barang' => $barang]);
    }

    public function transaksiLanjut(Request $request)
    {


        $transaksi = new Penjualan;
        $transaksi->pembeli = $request->nama_pelanggan;
        $transaksi->alamat = $request->alamat;
        $transaksi->no_hp = $request->no_hp;
        $transaksi->nama_barang = $request->nama_barang;
        $transaksi->jumlah_barang = $request->jumlah_barang;
        $transaksi->harga_satuan = $request->harga_satuan;
        $transaksi->potongan = $request->potongan;
        $transaksi->total = $request->total;
        $transaksi->media_pembayaran = $request->media_pembayaran;

        $transaksi->save();

        $barang = Barang::all();

        return view('user.transaksi', ['barang' => $barang]);
    }

    public function hitung_js(Request $request)
    {
        $barang = Barang::all();

        $nama_barang = $request->get('nama_barang');

        $harga = Barang::where('nama_barang', $nama_barang)->first();

        return $harga;
    }
}
