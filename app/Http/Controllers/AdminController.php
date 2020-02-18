<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
use App\Setting;

class AdminController extends Controller
{
	public function main()
    {
        $statusPKM = DB::table('setting')
                        ->where('status','aktif')
                        ->get()->first();
        $data = array(
                    'total_usulan' => count(Usulan::all()), 
                    'usulan_didanai' => count(Usulan::where('status','3')->get()),
                    'total_usulan_session' => count(Usulan::where('tahun',date("Y"))->get()), 
                    'usulan_didanai_session' => count(Usulan::where('status','3')->where('tahun',date("Y"))->get())
                );
    	return view('Admin/dashboard',['data' => $data,'statusPKM' => $statusPKM]);
    }

    public function login()
    {
    	return view('Admin/login');
    }

    public function doLogin(Request $request)
    {
        echo $username = $request->username;
        echo $password = $request->password;
        $data = Admin::where('username',$username)->first();
        if($data){
            if($password == $data->password){
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('loggedIn',TRUE);
                Session::put('role','operator');
                return redirect('admin');
            }
        }
        $alert = [
            'type' => 'error',
            'message'=> 'Username atau Password salah!'
        ];
        return redirect()->route('admin.login')->with('alert',$alert['type'])->with('message',$alert['message']);
    }

    public function doLogout(){
		Session::flush();
        $alert = [
            'type' => 'info',
            'message'=> 'Kamu telah logout'
        ];
        return redirect()->route('admin.login')->with('alert',$alert['type'])->with('message',$alert['message']);
    }

    public function usulan()
    {
        // $list_usulan = Usulan::all();
        $list_usulan =  DB::table('usulan')
                            ->join('anggota_usulan', 'anggota_usulan.usulan', '=', 'usulan.idUsulan')
                            ->join('mahasiswa', 'mahasiswa.NIM', '=', 'anggota_usulan.mahasiswa')
                            ->select('anggota_usulan.*', 'usulan.*', 'mahasiswa.*')
                            ->where('anggota_usulan.peran','Ketua Kelompok')
                            ->get();
        return view('Admin/usulan', ['list_usulan' => $list_usulan]);
    }

    public function addUsulan()
    {
        $data = Mahasiswa::all();
        $list_mahasiswa = array();
        $key = 0;
        $list_mahasiswa[$key]['id'] = "";
        $list_mahasiswa[$key]['text'] = "";
        $key++;
        foreach ($data as $mahasiswa) {
            $list_mahasiswa[$key]['id'] = $mahasiswa->NIM;
            $list_mahasiswa[$key]['text'] = $mahasiswa->NIM ." - ". $mahasiswa->nama;
            $key++;
        }
        $list_mahasiswa = json_encode($list_mahasiswa);
        $data = Dosen::all();
        $list_dosen = array();
        $key = 0;
        $list_dosen[$key]['id'] = "";
        $list_dosen[$key]['text'] = "";
        $key++;
        foreach ($data as $dosen) {
            $list_dosen[$key]['id'] = $dosen->NIP;
            $list_dosen[$key]['text'] = $dosen->NIP ." - ". $dosen->nama;
            $key++;
        }
        $list_dosen = json_encode($list_dosen);
        return view('Admin/usulanAdd', ['list_mahasiswa' => $list_mahasiswa,'list_dosen' => $list_dosen]);
    }

    public function detailUsulan($id_usulan)
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
        return view('Admin/usulanDetail', ['usulan' => $usulan, 'anggotaUsulan' => $anggotaUsulan,'ketua' => $ketua,'dosenPendamping' => $dosenPendamping]);
    }

    public function doAddUsulan(Request $request)
    {
        $usulan = new Usulan;
        $usulan->tahun = date("Y");
        $usulan->skim = $request->skim;
        $usulan->judul = $request->judul;
        $usulan->proposal = '';
        $usulan->status = 0;
        $usulan->save();
        echo $request->nimPengusul;

        $ketua = new AnggotaUsulan;
        $ketua->mahasiswa = Mahasiswa::where("NIM",$request->nimKetua)->first()->NIM;
        $ketua->peran = "Ketua Kelompok";
        $ketua->usulan = $usulan->idUsulan;
        $ketua->save();
        // echo($ketua->mahasiswa->nama);

        $ketua = Mahasiswa::where("NIM",$request->nimKetua)->first();

        $detailUsulan = new DetailUsulan;
        $detailUsulan->dosenPendamping = Dosen::where("NIP",$request->dosenPendamping)->first()->NIP;
        $detailUsulan->usulan = $usulan->idUsulan;
        $detailUsulan->bidangIlmu = '';
        $detailUsulan->biayaDidanai = 0;
        $detailUsulan->usulanBiayaKegiatan = 0;
        $detailUsulan->save();

        if($ketua->username == null){
            $permitted_chars = '012345678901234567890';
            // Output: 54esmdr0qf
            $ketua->username = $ketua->NIM;
            $ketua->password = substr(str_shuffle($permitted_chars), 0, 6);
            $ketua->save();
        }
        
        $anggota1 = new AnggotaUsulan;
        $anggota1->mahasiswa = Mahasiswa::where("NIM",$request->nimAnggota1)->first()->NIM;
        $anggota1->peran = "Anggota 1";
        $anggota1->usulan = $usulan->idUsulan;
        $anggota1->save();
        // echo($anggota1->mahasiswa->nama);

        $anggota2 = new AnggotaUsulan;
        $anggota2->mahasiswa = Mahasiswa::where("NIM",$request->nimAnggota2)->first()->NIM;
        $anggota2->peran = "Anggota 2";
        $anggota2->usulan = $usulan->idUsulan;
        $anggota2->save();
        // echo($anggota2->mahasiswa->nama);

        if(isset($request->nimAnggota3)){
            $anggota3 = new AnggotaUsulan;
            $anggota3->mahasiswa = Mahasiswa::where("NIM",$request->nimAnggota3)->first()->NIM;
            $anggota3->peran = "Anggota 2";
            $anggota3->usulan = $usulan->idUsulan;
            $anggota3->save();
        }
        if(isset($request->nimAnggota4)){
            $anggota4 = new AnggotaUsulan;
            $anggota4->mahasiswa = Mahasiswa::where("NIM",$request->nimAnggota4)->first()->NIM;
            $anggota4->peran = "Anggota 2";
            $anggota4->usulan = $usulan->idUsulan;
            $anggota4->save();
        }
  
        return redirect()->route('admin.usulan');
    }

    public function dataMahasiswa()
    {
        $list_mahasiswa =  Mahasiswa::all();
        return view('Admin/dataMahasiswa', ['list_mahasiswa' => $list_mahasiswa]);
    }

    public function dataDosen()
    {
        $list_dosen =  Dosen::all();
        return view('Admin/dataDosen', ['list_dosen' => $list_dosen]);
    }

    public function pengaturan()
    {
        $statusPKM = DB::table('setting')
                        ->where('status','Aktif')
                        ->get()->first();
        return view('Admin/pengaturan', ['statusPKM' => $statusPKM]);
    }

    public function addPengaturan()
    {
        return view('Admin/pengaturanAdd');
    }

    public function doAddPengaturan(Request $request)
    {
        $pengaturan = new Setting;
        $pengaturan->tahunPelaksanaan = $request->tahunPelaksanaan;
        $pengaturan->mulaiUnggahProposal = explode(' - ',$request->unggahProposal)[0];
        $pengaturan->mulaiPenilaianProposal = explode(' - ',$request->penilaianProposal)[0];
        $pengaturan->mulaiUnggahLaporanKemajuan = explode(' - ',$request->unggahLaporanKemajuan)[0];
        $pengaturan->mulaiPenilaianLaporanKemajuan = explode(' - ',$request->penilaianLaporanKemajuan)[0];
        $pengaturan->mulaiUnggahLaporanAkhir = explode(' - ',$request->unggahLaporanAkhir)[0];
        $pengaturan->mulaiPenilaianLaporanAkhir = explode(' - ',$request->penilaianLaporanAkhir)[0];
        $pengaturan->akhirUnggahProposal = explode(' - ',$request->unggahProposal)[1];
        $pengaturan->akhirPenilaianProposal = explode(' - ',$request->penilaianProposal)[1];
        $pengaturan->akhirUnggahLaporanKemajuan = explode(' - ',$request->unggahLaporanKemajuan)[1];
        $pengaturan->akhirPenilaianLaporanKemajuan = explode(' - ',$request->penilaianLaporanKemajuan)[1];
        $pengaturan->akhirUnggahLaporanAkhir = explode(' - ',$request->unggahLaporanAkhir)[1];
        $pengaturan->akhirPenilaianLaporanAkhir = explode(' - ',$request->penilaianLaporanAkhir)[1];
        $pengaturan->status = "Aktif";
        $pengaturan->save();

        return redirect()->route('admin.pengaturan');
    }

    public function editPengaturan()
    {
        
        return view('Admin/pengaturanEdit');
    }

    public function finishPengaturan()
    {
        $pengaturan = Setting::Where('status','Aktif')->get()->first();
        $pengaturan->status = "Tidak Aktif";
        $pengaturan->save();
        return redirect()->route('admin.pengaturan');
    }

    public function setReview($value='')
    {
        # code...
    }
}