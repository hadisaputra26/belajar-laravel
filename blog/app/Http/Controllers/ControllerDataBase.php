<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//menambahkan class DB
use Illuminate\Support\Facades\DB;

class ControllerDataBase extends Controller
{
    public function index(){
    	$user = ['HADI','TIKA','SUSI','MARTIN'];

    	// untuk menampilkan Semua data dari databse
    	// $users = DB::table('users')->get();

    	// Untuk untuk menampilkan data dengan WHERE
    	// $users = DB::table('users')->where('username','hadi')->get();

    	// Menggunakan Insert
    	// DB::table('users')->insert(['username' => 'putra', 'password' => '1919919']);

    	// Menggunakan Update
    	// DB::table('users')->where('username', 'hadisajabro')->update(['username' => 'hadi1']);
        DB::table('users')->where('id', 10)->update(['username' => 'makan', 'password' => '111111']);

    	// Menggunakan DELETE
    	// DB::table('users')->where('username', 'putra')->delete();
    	// DB::table('users')->where('id', 11)->delete();

    	$users = DB::table('users')->get();


    	return view('belajardatabase', ['nama' => $user, 'users' => $users]);
    }
}
