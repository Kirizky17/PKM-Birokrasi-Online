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

class UserController extends Controller
{
	public function main()
    {
    	if(Session::get('role') == 'pengusul'){
            return redirect()->route('pengusul.main');
        }else if(Session::get('role') == 'reviewer'){
            return redirect()->route('reviewer.main');
        }
    }

    public function login()
    {
    	if(Session::get('loggedIn')){
            return redirect()->route('user.main');
        }
        return view('user.login');
    }

    public function doLoginPengusul(Request $request)
    {
    	echo $username = $request->username;
        echo $password = $request->password;
        $data = Mahasiswa::where('username',$username)->first();
        if($data){
            if($password == $data->password){
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('loggedIn',TRUE);
                Session::put('role','pengusul');
                return redirect()->route('pengusul.main');
            }
        }
        $alert = [
            'type' => 'error',
            'message'=> 'Username atau Password salah!'
        ];
        return redirect()->route('user.login')->with('alert',$alert['type'])->with('message',$alert['message']);
    }

    public function doLoginReviewer(Request $request)
    {
        echo $username = $request->username;
        echo $password = $request->password;
        $data = Dosen::where('username',$username)->first();
        if($data){
            if($password == $data->password){
                Session::put('username',$data->username);
                Session::put('nama',$data->nama);
                Session::put('loggedIn',TRUE);
                Session::put('role','reviewer');
                return redirect()->route('reviewer.main');
            }
        }
        $alert = [
            'type' => 'error',
            'message'=> 'Username atau Password salah!'
        ];
        return redirect()->route('user.login')->with('alert',$alert['type'])->with('message',$alert['message']);
    }

    public function doLogout(){
		Session::flush();
        $alert = [
            'type' => 'info',
            'message'=> 'Kamu telah logout'
        ];
        return redirect()->route('user.login')->with('alert',$alert['type'])->with('message',$alert['message']);
    }
}