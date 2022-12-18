<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $fillable = [
        'jenis_makanan',
        'kategori_makanan'
    ];
    use HasFactory;
}
