<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use App\Admin;
use App\AnggotaUsulan;
use App\DetailUsulan;
use App\Dosen;
use App\Jurusan;
use App\Mahasiswa;
use App\Prodi;
use App\ReviewLaporanAkhir;
use App\ReviewLaporanKemajuan;
use App\ReviewMonev;
use App\ReviewProposal;
use App\Usulan;
use Illuminate\Support\Facades\Storage;

class PengusulController extends Controller
{

	public function main()
    {   
        $statusPKM = DB::table('setting')
                        ->where('status','aktif')
                        ->get()->first();
        $pengusul = Mahasiswa::find(Session::get('username'));
        return view('User/Pengusul/dashboard', ['pengusul' => $pengusul,'statusPKM' => $statusPKM]);
    }

    public function usulan()
    {
        $list_usulan =  DB::table('usulan')
                            ->join('anggota_usulan', 'anggota_usulan.usulan', '=', 'usulan.IdUsulan')
                            ->where('anggota_usulan.mahasiswa','=',Session::get('username'))
                            ->orderBy('usulan.tahun','desc')
                            ->select('anggota_usulan.*', 'usulan.*')
                            ->get();
        return view('User/Pengusul/usulan', ['list_usulan' => $list_usulan]);
    }

    public function editUsulan($id_usulan)
    {
        $usulan = Usulan::where('idUsulan',$id_usulan)->get()->first();
        return view('User/Pengusul/usulanEdit', ['usulan' => $usulan]);
    }

    public function doEditUsulan(Request $request, $id_usulan)
    {
        $detailUsulan = DetailUsulan::where('usulan', $id_usulan)
                            ->update(['bidangIlmu' => $request->bidangIlmu, 'usulanBiayaKegiatan' => $request->usulanBiaya]);
        // $detailUsulan->save();
        // echo($detailUsulan);

        $usulan = Usulan::find($id_usulan);
        $usulan->status = "1";
        $usulan->save();

        // echo($usulan);
        return redirect()->route('pengusul.usulan');
    }

    public function laporanLogbook()
    {
        $list_usulan =  DB::table('usulan')
                            ->join('anggota_usulan', 'anggota_usulan.usulan', '=', 'usulan.IdUsulan')
                            ->where('anggota_usulan.mahasiswa','=',Session::get('username'))
                            ->orderBy('usulan.tahun','desc')
                            ->select('anggota_usulan.*', 'usulan.*')
                            ->get();
        return view('User/Pengusul/logbook', ['list_usulan' => $list_usulan]);
    }

    public function laporanKemajuan()
    {
        $list_usulan =  DB::table('usulan')
                            ->join('anggota_usulan', 'anggota_usulan.usulan', '=', 'usulan.IdUsulan')
                            ->where('anggota_usulan.mahasiswa','=',Session::get('username'))
                            ->orderBy('usulan.tahun','desc')
                            ->select('anggota_usulan.*', 'usulan.*')
                            ->get();
        return view('User/Pengusul/kemajuan', ['list_usulan' => $list_usulan]);
    }

    public function laporanAkhir()
    {
        $list_usulan =  DB::table('usulan')
                            ->join('anggota_usulan', 'anggota_usulan.usulan', '=', 'usulan.IdUsulan')
                            ->where('anggota_usulan.mahasiswa','=',Session::get('username'))
                            ->orderBy('usulan.tahun','desc')
                            ->select('anggota_usulan.*', 'usulan.*')
                            ->get();
        return view('User/Pengusul/akhir', ['list_usulan' => $list_usulan]);
    }

    public function uploadProposal($id_usulan)
    {
        return view('User/Pengusul/uploadProposal',["id" => $id_usulan]);
    }

    public function viewUsulan($id_usulan)
    {
        $usulan = DB::table('usulan')
                        ->join('detail_usulan', 'detail_usulan.usulan', '=', 'usulan.idUsulan')
                        ->select('detail_usulan.*', 'usulan.*')
                        ->where('usulan.idUsulan',$id_usulan)
                        ->get()->first();
        $ketua = DB::table('mahasiswa')
                        ->join('anggota_usulan', 'anggota_usulan.mahasiswa', '=', 'mahasiswa.NIM')
                        ->select('anggota_usulan.*', 'mahasiswa.*')
                        ->where('anggota_usulan.usulan', $id_usulan)
                        ->where('anggota_usulan.peran','Ketua Kelompok')
                        ->get()->first();
        $anggotaUsulan = DB::table('mahasiswa')
                        ->join('anggota_usulan', 'anggota_usulan.mahasiswa', '=', 'mahasiswa.NIM')
                        ->select('anggota_usulan.*', 'mahasiswa.*')
                        ->where('anggota_usulan.usulan', $id_usulan)
                        ->where('anggota_usulan.peran','!=','Ketua Kelompok')
                        ->get();
        $dosenPendamping = DB::table('dosen')
                        ->where('NIP', $usulan->dosenPendamping)
                        ->get()->first();
        return view('User/Pengusul/usulanDetail', ['usulan' => $usulan, 'anggotaUsulan' => $anggotaUsulan,'ketua' => $ketua,'dosenPendamping' => $dosenPendamping]);
    }

    public function doUploadProposal($idUsulan, Request $request)
    {
        $usulan = Usulan::where('idUsulan',$idUsulan)->first();
        // $file_explode = explode(".", strtolower($request->file('pdfFile')->getClientOriginalName()));
        // echo $request->file('pdfFile')->getClientOriginalName(); 
        // $uniqueFileName = date("Y")."_".$file_explode[0].'.'.$file_explode[1];
        // $request->file('pdfFile')->move(public_path().addslashes("pdf").$uniqueFileName);
        $uniqueFileName = $idUsulan .'_'. date("Y") .'_'. $usulan->judul . '.' . $request->file('pdfFile')->getClientOriginalExtension();
        // Storage::make($request->file('pdfFile'))->save( public_path('pdf' . $uniqueFileName) );

        $request->file('pdfFile')->move("pdf/",$uniqueFileName);


        $usulan->proposal = $uniqueFileName;
        $usulan->status = "2";
        $usulan->save();

        return redirect()->route('pengusul.usulan');
    }
}