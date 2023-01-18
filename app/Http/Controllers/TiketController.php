<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TiketController extends Controller
{
    public function index()
    {
        $tiket = Tiket::get();
        return view('tiket.index', ['tiket'=>$tiket]);
    }

    public function tambah()
    {
        return view('tiket.form');
    }

    public function simpan(Request $request)
    {
        echo $request->kode_tiket;
        echo $request->judul_film;
        echo $request->kategori_film;
        echo $request->nomor_kursi;
        echo $request->jumlah_tiket;
        echo $request->harga;

        
        DB::table('tiket')->insert([
            'kode_tiket'            => $request->kode_tiket,
            'judul_film'           => $request->judul_film,
            'kategori_film'         => $request->kategori_film,
            'nomor_kursi'           => $request->nomor_kursi,
            'jumlah_tiket'          => $request->jumlah_tiket,
            'harga'                 => $request->harga,
            'created_at'            => now()
        ]);


        return redirect()->route('tiket');
    }


    public function edit($id)
    {
        $tiket = Tiket::find($id);

        return view('tiket.form', ['tiket' => $tiket]);
    }

    public function update($id, Request $request)
    {
        $update = DB::table('tiket')->where('id', '=', $id)->update([
            'kode_tiket'            => $request->kode_tiket,
            'judul_film'           => $request->judul_film,
            'kategori_film'         => $request->kategori_film,
            'nomor_kursi'           => $request->nomor_kursi,
            'jumlah_tiket'          => $request->jumlah_tiket,
            'harga'                 => $request->harga,
            'updated_at'            => now()


        ]);

        return redirect()->route('tiket');

    }

    public function hapus($id)
    {
        echo $id;
        //mysqli_query("delete from nama_table where id_primary = id_variable");
        $hapus = DB::table('tiket')->where('id', '=' , $id)->delete();
        return redirect()->route('tiket');
    }
}
