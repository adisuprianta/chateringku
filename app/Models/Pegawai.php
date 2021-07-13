<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = "pegawais";
    protected $fillable = ['id_pegawai','foto','nama_pegawai','alamat','no_hp','bagian', 'salary'];
    protected $primaryKey = 'id_pegawai';
}
