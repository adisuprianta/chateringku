<?php

namespace App\Http\Controllers;

use App\Models\bahan_baku;
use App\Models\supplier;
use Illuminate\Http\Request;
use DB;
class PengadaanController extends Controller
{
    public function view(){
        return view('/admin_pengadaan');
        // dd("a");
    }
    public function suplier(){
        $suplier = supplier::get();
        return view('/pengadaan_supplier',['suplier'=>$suplier]);
    }
    public function tambahsuplier(Request $request){
        supplier::insert([
            'nama_suplier'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->nohp
        ]);
        return redirect()->back();
    }
    public function editsuplier(Request $request){
        DB::table('suppliers')->where('id_suplier',$request->id_suplier)->update([
            'nama_suplier'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->nohp
        ]);
        return redirect()->back();
    }
    public function hapussuplier($id){
        DB::table('suppliers')->where('id_suplier',$id)->delete();
        return redirect()->back();
    }
    public function diterima(){
        $data = DB::table('pelanggans as u')->join('pesanans as p','u.id_pelanggan','=','p.id_pelanggan')
        ->join('pembayarans as b','p.id_pesanan','=','b.id_pesanan')
        ->select('u.nama_pelanggan','p.total','p.id_pesanan','p.alamat','b.file_pembayaran','p.kode_pos','p.tanggal_pesanan','p.status')
        ->where('p.status','sudah bayar')
        ->get();
        // foreach($data as $d){
        //     // echo $d->id_pesanan;
        //     echo "a";
        // }
        // dd("");
        return view('pengadaan_diterima',compact('data'));
    }
    public function rincian($id){
        $data = DB::table('pesanan_items as p')->join('produks as pr','p.id_produk','=','pr.id_produk')
        ->select('p.id_item','pr.file','pr.kategori','pr.nama_produk','p.harga','p.jumlah')
        ->where('id_pesanan',$id)->get();
        $suplier = supplier::get();
        return view('pengadaan_rincian_pesanan',compact('data','suplier'));
    }

    public function bahan_baku(Request $request){
        // echo $request->suplier;
        bahan_baku::insert([
            'id_item'=>$request->id_item,
            'id_suplier'=>$request->suplier,
            'bahan'=>$request->bahan
        ]);
        return redirect()->back();
    }

    public function kirim(){
        
    }
}
