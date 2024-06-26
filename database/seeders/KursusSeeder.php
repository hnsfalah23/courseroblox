<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProgramStudi;
use DateTime;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create ProgramStudi
        ProgramStudi::create([
            'id_kursus' => 'KRS001',
            'nama_kursus' => 'PUZZLE GAME',
            'jenjang_kursus' => 'Program 1',
            'foto_kursus' => 'foto kursus/kursus1672487749-puzzle.jpg',
            'pengajar' => 'Syahfrial',
            'jam' => '08.00 - 10.00',
            'hari' => 'selasa',
            'harga_kursus'=> 'Rp 150.000 / bulan',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_kursus' => 'KRS002',
            'nama_kursus' => 'FIGHTING GAME',
            'jenjang_kursus' => 'Program 2',
            'foto_kursus' => 'foto kursus/kursus1672488285-fighting.jpg',
            'pengajar' => 'Rina',
            'jam' => '09.00 - 12.00',
            'hari' => 'rabu',
            'harga_kursus'=> 'Rp 150.000 / bulan',
            'created_at' => now()
        ]);
        ProgramStudi::create([
            'id_kursus' => 'KRS003',
            'nama_kursus' => 'SPORT GAME',
            'jenjang_kursus' => 'Program 3',
            'foto_kursus' => 'foto kursus/kursus1672488306-sport.jpg',
            'pengajar' => 'Prida Yanti',
            'jam' => '09.00 - 13.00',
            'hari' => 'jumat',
            'harga_kursus'=> 'Rp 150.000 / bulan',
            'created_at' => now()
        ]);

        ProgramStudi::create([
            'id_kursus' => 'KRS004',
            'nama_kursus' => 'EDUCATION GAME',
            'jenjang_kursus' => 'Program 4',
            'foto_kursus' => 'foto kursus/kursus1672488321-education.jpg',
            'pengajar' => 'Karisa',
            'jam' => '12.00 - 14.00',
            'hari' => 'rabu',
            'harga_kursus'=> 'Rp 150.000 / bulan',
            'created_at' => now()
        ]);
        
    }
}
