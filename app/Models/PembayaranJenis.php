<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranJenis extends Model
{
    use HasFactory;
     protected $table = 'PembayaranJenis';
    protected $primaryKey='idPembayaranJenis';
}
