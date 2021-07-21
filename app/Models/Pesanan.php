<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = "pesanans";
    protected $fillable = ['id_pelanggan','id_pesanan','alamat','tanggal_pesanan','kode_pos','tanggal_pengiriman','status','total'];
    protected $primaryKey = 'id_pesanan';
}
