<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller0187 extends Controller

{
    public function barang(){
        $barang = DB::table('barang')->get();
        
        return view('barang0187',['barang' => $barang]);
    }
    public function pelanggan(){
        $pelanggan = DB::table('pelanggan')->get();
        
        return view('pelanggan0187',['pelanggan' => $pelanggan]);
    }
    public function transaksi(){
        $transaksi = DB::table('transaksi')->get();
        
        return view('transaksi0187',['transaksi' => $transaksi]);
    }
    public function cari(Request $request)
    {
        
        $cari = $request->cari;
        $pelanggan = DB::table('pelanggan')
        ->where('nama','like',"%".$cari."%")
        ->paginate();
     
            
        return view('pelanggan0187',['pelanggan' => $pelanggan]);
    }
    public function home(){
        $home = DB::table('transaksi')
                ->join('pelanggan', 'transaksi.id_pelanggan','=', 'pelanggan.id',)
                ->join('barang', 'transaksi.id_barang','=', 'barang.id',)
                ->select('pelanggan.nama as Nama_pelanggan','Alamat','barang.nama as Nama_barang', 'Harga')
                ->get();
    // dd($home->all());
            return view('home0187',['home' => $home]);
        }
}