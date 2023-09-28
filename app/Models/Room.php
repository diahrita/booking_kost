<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'jenis_kamar',
        'fasilitas_kamar',
        'harga_bulanan',
        'kamar_tersedia',
        'foto_kamar',
    ];
}
