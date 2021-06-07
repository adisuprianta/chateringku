<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengadaanController extends Controller
{
    public function view(){
        return view('/admin_pengadaan');
        // dd("a");
    }
}
