<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salaries extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_employee',
        'cut',
        'month',
        'created_at',
        'updated_at',
    ];

}
