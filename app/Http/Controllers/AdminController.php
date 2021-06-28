<?php

namespace App\Http\Controllers;

use App\Masukkan;
use App\Penjualan;
use App\User;
use App\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pemasukkan = Penjualan::limit(7)->get();;
        $pengeluaran = Pengeluaran::limit(7)->get();;

        $masukkan = Masukkan::all()->count('masukkan');
        $pemasukkan1 = Penjualan::all()->sum('total');
        $pengeluaran1 = Pengeluaran::all()->sum('jumlah');

        // $totalPengeluaran = Pengeluaran::sum('jumlah');
        // dd($totalPengeluaran);

        return view('admin.dashboard', [
            'pemasukkan' => $pemasukkan,
            'pengeluaran' => $pengeluaran,
            'pemasukan1' => $pemasukkan1,
            'pengeluaran1' => $pengeluaran1,
            'masukkan' => $masukkan
        ]);
    }

    public function DaftarPendapatan()
    {
        $pemasukkan = Penjualan::all();

        return view('admin.daftar_pendapatan', ['pemasukkan' => $pemasukkan]);
    }

    public function masukan(Request $request)
    {
        $pesan = new Masukkan;
        $pesan->nama = $request->nama;
        $pesan->email = $request->email;
        $pesan->topik = $request->topik;
        $pesan->masukkan = $request->masukkan;

        $pesan->save();

        return view('user.kontak');
    }

    public function adminMasukan()
    {
        $pesan = Masukkan::all();

        return view('admin.pesan', ['pesan' => $pesan]);
    }

    public function profil()
    {
        $pegawai = User::all();

        return view('admin.profil', ['pegawai' => $pegawai]);
    }

    public function deletePesan($id)
    {
        DB::table('pesan')->where('id', $id)->delete();

        return redirect('menu4');
    }

    public function pengeluaran()
    {
        $pengeluaran = Pengeluaran::all();

        return  view('admin.pengeluaran', ['pengeluaran' => $pengeluaran]);
    }

    public function pengeluaranTbh()
    {

        return  view('admin.tambah.tambah_pengeluaran');
    }

    public function pengeluaranInput(Request $request)
    {
        $imgName = $request->foto_nota->getClientOriginalName() . '-'
            . time() . '.' . $request->foto_nota->extension();

        $request->foto_nota->move(public_path('storage/foto_nota'), $imgName);

        $pengeluaran = new Pengeluaran;

        $pengeluaran->keterangan = $request->keterangan;
        $pengeluaran->satuan = $request->satuan;
        $pengeluaran->jumlah = $request->pengeluaran;
        $pengeluaran->foto_nota = $imgName;
        $pengeluaran->tanggal = $request->tanggal;

        $pengeluaran->save();

        return redirect('pengeluaran1');
    }

    public function editPengeluaran($id)
    {
        $pengeluaran = Pengeluaran::where('id', $id)->get();

        return view('admin.edit.editPengeluaran', ['pengeluaran' => $pengeluaran]);
    }

    public function updatePengeluaran(Request $request)
    {
        $imgName = $request->foto_nota->getClientOriginalName() . '-'
            . time() . '.' . $request->foto_nota->extension();

        $request->foto_nota->move(public_path('storage/foto_nota'), $imgName);

        DB::table('pengeluaran')->where('id', $request->id)->update([
            'keterangan' => $request->keterangan,
            'satuan' => $request->satuan,
            'jumlah' => $request->pengeluaran,
            'foto_nota' => $imgName,
            'tanggal' => $request->tanggal
        ]);

        return redirect('/menu5');
    }

    public function deletePengeluaran($id)
    {
        DB::table('pengeluaran')->where('id', $id)->delete();

        return redirect('/menu5');
    }

    public function deletePemasukkan($id)
    {
        DB::table('transaksi')->where('id', $id)->delete();

        return redirect('/menu3');
    }
}
