<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable =[
        'nama_user',
        'tgl_lahir',
        'berat_badan',
        'tinggi_badan'
    ];
    use HasFactory;
}
