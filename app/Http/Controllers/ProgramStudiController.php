<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProgramStudi;
use Alert;

class ProgramStudiController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(function($request,$next){
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            if (session('warning')) {
                Alert::warning(session('warning'));
            }
            return $next($request);
        });
    }


    //data kursus kompliit
    public function datakursus(){
        $viewData = ProgramStudi::all();
        return view ('kursus.data-studyProgram-admin',compact('viewData'));
    }

    public function simpankursus(Request $a)
    {
        try{

            $kode=ProgramStudi::id();

            $fileft = $a->file('foto');
            if(file_exists($fileft)){
                $nama_fileft = "kursus".time() . "-" . $fileft->getClientOriginalName();
                $namaFolderft = 'foto kursus';
                $fileft->move($namaFolderft,$nama_fileft);
                $path = $namaFolderft."/".$nama_fileft;
            } else {
                $path = null;
            }

            ProgramStudi::create([
                'id_kursus' => $kode,
                'nama_kursus' => $a->nama,
                'jenjang_kursus' => $a->jenjang,
                'foto_kursus' => $path,
                'pengajar' => $a->pengajar,
                'jam' => $a->jam,
                'hari' => $a->hari,
                'harga_kursus' => $a->harga_kursus,
                'contoh_game' => $a->contoh_game,
        ]);
            return redirect('/data-kursus')->with('success', 'Data Tersimpan!!');
        } catch (\Exception $e){
            echo $e;
            //return redirect()->back()->with('error', 'Data Tidak Berhasil Disimpan!');
        }
    }

    public function updatekursus(Request $a, $id_kursus){
        //$dataUser = Pengguna::all();
        try{
            $fileft = $a->file('foto');
            if(file_exists($fileft)){
                $nama_fileft = "kursus".time() . "-" . $fileft->getClientOriginalName();
                $namaFolderft = 'foto kursus';
                $fileft->move($namaFolderft,$nama_fileft);
                $path = $namaFolderft."/".$nama_fileft;
            } else {
                $path = $a->pathnya;
            }
            ProgramStudi::where("id", $id_kursus)->update([
                'nama_kursus' => $a->nama,
                'jenjang_kursus' => $a->jenjang,
                'foto_kursus' => $path,
                'pengajar' => $a->pengajar,
                'jam' => $a->jam,
                'hari' => $a->hari,
                'harga_kursus' => $a->harga_kursus,
                'contoh_game' => $a->contoh_game,
        ]);
            return redirect('/data-kursus')->with('success', 'Data Terubah!!');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Data Tidak Berhasil Diubah!');
        }
    }

    public function hapuskursus($id_kursus){
        //$dataUser = Pengguna::all();
        try{
            $data = ProgramStudi::find($id_kursus);
            $data->delete();
            return redirect('/data-kursus')->with('success', 'Data Terhapus!!');
        } catch (\Exception $e){
            return redirect()->back()->with('error', 'Data Tidak Berhasil Dihapus!');
        }
    }
}
