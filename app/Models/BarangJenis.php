<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangJenis extends Model
{
    use HasFactory;
    protected $table = 'BarangJenis';
    protected $primaryKey='idBarangJenis';
}
