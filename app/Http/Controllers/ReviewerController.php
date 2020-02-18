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

class ReviewerController extends Controller
{
	public function main()
    {
    	$statusPKM = DB::table('setting')
                        ->where('status','aktif')
                        ->get()->first();
        $reviewer = Dosen::find(Session::get('username'));
        return view('User/Reviewer/dashboard', ['reviewer' => $reviewer,'statusPKM' => $statusPKM]);
    }

    public function reviewProposal()
    {

    }

    public function doReviewProposal()
    {
    	# code...
    }

    public function reviewLaporaKemajuan($value='')
    {
    	# code...
    }

    public function doReviewLaporaKemajuan($value='')
    {
    	# code...
    }

    public function reviewLaporaAkhir($value='')
    {
    	# code...
    }

    public function doReviewLaporaAkhir($value='')
    {
    	# code...
    }
}