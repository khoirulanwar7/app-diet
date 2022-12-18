<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    protected $fillable = [
        'rencana_mingguan',
        'judul_rencana',
        'rencana',
        'deskripsi'
    ];
    use HasFactory;
}
