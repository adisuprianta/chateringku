<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\produk;
use DB;
use File;

class AdminController extends Controller
{
    public function index(){
        return view('/adminhome');
    }
    public function produk(){
        $produk = produk::get();
        return view('/admin_produk',['produk'=>$produk]);
    }

    public function tambahproduk(Request $request){
        $file = $request->file('file');
        // dd($file);
        $nama_file = $request->nama.".".$file->getClientOriginalExtension();
        $tujuan_upload = 'data_file/produk';
        $file->move($tujuan_upload,$nama_file);
        produk::insert([
            'nama_produk'=>$request->nama,
            'harga'=>$request->harga,
            'file'=>$nama_file,
            'deskripsi'=>$request->deskripsi,
            'kategori'=>$request->kategori,
        ]);
        return redirect()->back();
    }
    public function hapusproduk($id){

        $produk = produk::find($id);
        File::delete('data_file/produk/'.$produk->foto);
        $produk->delete();
        return redirect()->back();
        // $pegawai = pegawai::where('id_pegawai' ,$id )->get();
        // dd($pegawai);
    }
    public function editproduk(Request $request){

        $produk = produk::find($request->id);
        
        $file = $request->file('file');
        
        if($file == null){
            DB::table('produks')->where('id_produk', $request->id)->update([
                'nama_produk'=>$request->nama,
                'harga'=>$request->harga,
                'deskripsi'=>$request->deskripsi,
                'kategori'=>$request->kategori,
            ]);
        }else{
            File::delete('data_file/produk/'.$produk->foto);
        
        // dd($file);
            $nama_file = $request->nama.".".$file->getClientOriginalExtension();
            $tujuan_upload = 'data_file/produk';
            $file->move($tujuan_upload,$nama_file);
            DB::table('produks')->where('id_produk', $request->id)->update([
                'nama_produk'=>$request->nama,
                'harga'=>$request->harga,
                'file'=>$nama_file,
                'deskripsi'=>$request->deskripsi,
                'kategori'=>$request->kategori,
            ]);

            
        }
        return redirect()->back();
        // $pegawai = pegawai::where('id_pegawai' ,$id )->get();
        // dd($pegawai);
    }      

    public function pegawai(){
        $pegawai = pegawai::get();
        return view('admin_pegawai',['pegawai'=>$pegawai]);
    }
    public function tambahpegawai(Request $request){
        // $file = $request->file('file');
        // $nama_file = $request->nama.".".$file->getClientOriginalExtension();
        // $tujuan_upload = 'data_file/pegawai';
        // $file->move($tujuan_upload,$nama_file)

        dd($request->image);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        
        // dd($nama);
        pegawai::insert([
            'nama_pegawai'=>$request->nama,
            'alamat'=>$request->alamat,
            'foto'=>$imageName,
            'no_hp'=>$request->no_hp,
            'salary'=>$request->salary
        ]);
        return redirect()->back();
    }  
    public function hapuspegawai($id){

        $pegawai = pegawai::find($id);
        File::delete('data_file/pegawai/'.$pegawai->foto);
        $pegawai->delete();
        return redirect()->back();
        // $pegawai = pegawai::where('id_pegawai' ,$id )->get();
        // dd($pegawai);
    }    
    public function editpegawai(Request $request){
        
        $pegawai = pegawai::find($request->id_pegawai);
        dd($request->id_pegawai);
        // File::delete('data_file/pegawai/'.$pegawai->foto);
        // // dd( $request->nama);
        // $file = $request->file('file');
        // $nama_file = $request->nama.".".$file->getClientOriginalExtension();
        // $tujuan_upload = 'data_file/pegawai';
        // $file->move($tujuan_upload,$nama_file);
        
        // DB::table('pegawais')->where('id_pegawai', $request->id_pegawai)->update([
        //     'nama_pegawai'=>$request->nama,
        //     'alamat'=>$request->alamat,
        //     'foto'=>$nama_file,
        //     'no_hp'=>$request->no_hp
        // ]);
        
        // return redirect()->back();
    }  
}
