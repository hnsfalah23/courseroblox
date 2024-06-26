<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProgramStudi extends Model
{
    use HasFactory;
    protected $table = "program_kursus";
    protected $primaryKey= "id";
    protected $fillable = ["id_kursus","nama_kursus","jenjang_kursus","foto_kursus","pengajar","jam","hari","harga_kursus","contoh_game"];
    public $timestamps = false;
    public $incrementing = false;

    public static function id()
    {
    	$kode = DB::table('program_kursus')->max('id');
    	$addNol = '';
    	$kode = str_replace("KRS", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "00";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "0";
        }
    	$kodeBaru = "KRS".$addNol.$incrementKode;
    	return $kodeBaru;
    }

    public function pengumuman()
    {
    return $this->belongsTo(Pengumuman::class);
    }

    public function pendaftaran(){
        return $this->hasMany(Pendaftaran::class);
    }
}
