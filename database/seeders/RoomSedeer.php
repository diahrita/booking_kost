<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room = new Room();
        $room->jenis_kamar = 'single';
        $room->fasilitas_kamar = 'Kipas angin, Kulkas, Dapur, Mesin cuci, Jemuran';
        $room->harga_bulanan = '500000';
        $room->kamar_tersedia = '4';
        $room->foto_kamar = 'foto.jpg';
        $room->save();
    }
}
