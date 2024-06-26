<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendaftaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('pendaftaran')->insert([
            'id_pendaftaran' => '20230100001',
            'user_id' =>3,
            'nisn' => '92348927348',
            'nik' => '72619873972094293',
            'nama_siswa' => 'Inayah Fauziah',
            'jenis_kelamin' => 'Perempuan',
            'pas_foto' => 'data pendaftar/20230100001/Pasfoto1673879039-WhatsApp Image 2023-01-05 at 14.13.39.jpeg',
            'tempat_lahir' => 'Purwakarta',
            'tanggal_lahir' => now(),
            'agama' => 'Islam',
                    
            //kontak
            'email'  => 'emailinay@gmail.com',
            'hp'  => '238742342340',

            //alamat
            'alamat'  => 'data pendaftar alamat',

            
            //data pendaftaran
            //'gelombang'  => 1,
            'tahun_masuk'  => '2023',
            'pil1'  => 1,
            'pil2'  => 2,

            //data ortu
            'nama_ayah'  => 'data pendaftar nama_ayah',
            'nama_ibu'  => 'data pendaftar nama_ibu',
            'pendidikan_ayah'  => 'data pendaftar pendidikan_ayah',
            'pendidikan_ibu'  => 'data pendaftar pendidikan_ibu',
            'nohp_ayah'  => 'data pendaftar nohp_ayah',
            'nohp_ibu'  => 'data pendaftar nohp_ibu',
            'pekerjaan_ayah'  => 'data pendaftar pekerjaan_ayah',
            'pekerjaan_ibu'  => 'data pendaftar pekerjaan_ibu',
            'penghasilan_ayah'  => 'data pendaftar penghasilan_ayah',
            'penghasilan_ibu'  => 'data pendaftar penghasilan_ibu',

            'berkas_ortu'  => 'data pendaftar/20230100001/BerkasOrtu1673879039-Formulir Pendaftaran-Cupiditate ex amet.pdf',
                    

            //data nilai dan sekolah
            'sekolah'  => 1,
            'smt1'  => 99,
            'smt2'  => 92,
            'smt3'  => 93,
            'smt4'  => 94,
            'smt5'  => 95,
            'smt6'  => 96,
            'berkas_siswa'  => 'data pendaftar/20230100001/BerkasSiswa1673879039-Formulir Pendaftaran-Cupiditate ex amet (1).pdf',
            'prestasi'  => 'path_prestasi',

            // TODO: belum jadi
            'tgl_pendaftaran' =>now(),
            'created_at' => now(),
            'status_pendaftaran'  => "Selesai",
        ]);

        DB::table('pembayaran')->insert([
            'id_pembayaran' => 'PEMPSB00001',
            'status' => "Dibayar",
            'verifikasi'  => true,
            'jatuh_tempo'  => Carbon::now()->addDays(2)->format('Y-m-d'),
            'tgl_pembayaran'  => Carbon::now()->addDays(1)->format('Y-m-d'),
            'total_bayar'  => 150000, 
            'bukti_pembayaran'  => 'data pendaftar/20230100001/Prestasi1673879039-Formulir Pendaftaran-Cupiditate ex amet (1).pdf',
            'id_pendaftaran' => 1,
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('pengumuman')->insert([
            'id_pengumuman' => 'PENGSB00001',
            'status' => false,
            'hasil_seleksi'  => 'LULUS',
            'kursus_penerima' => 1,       
            'nilai_interview' => 100,       
            'nilai_test' => 100,       
            'id_pendaftaran' => 1,
            'user_id' => 2,
            'created_at' => Carbon::now(),
        ]);
    }
}
