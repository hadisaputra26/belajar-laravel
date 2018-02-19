<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Menggunakan Class DataBase
use Illuminate\Support\Facades\DB;

class ControllerQueryBuilder extends Controller
{
    public function index(){
    	$mahasiswa = DB::table('mahasiswa')->get();
    	return view('L1_Query_Builder/query_builder',['mahasiswa' => $mahasiswa]);
    }

    public function tambah_mahasiswa(){
    	$nrp = $_POST['nrp'];
    	$nama = $_POST['nama'];
    	$email = $_POST['email'];
    	$jurusan = $_POST['jurusan'];

		DB::table('mahasiswa')->insert([
			'nrp' => $nrp,
			'nama' => $nama,
			'email' => $email,
			'jurusan' => $jurusan
		]);
    	
    	$mahasiswa = DB::table('mahasiswa')->get();
    	return view('L1_Query_Builder/query_builder',['mahasiswa' => $mahasiswa]);
    }

    public function hapus_mahasiswa($id){
    	DB::table('mahasiswa')->where('id', $id)->delete();
        
    	$mahasiswa = DB::table('mahasiswa')->get();
    	return view('welcome',['mahasiswa' => $mahasiswa]);
	}

	public function ubah_mahasiswa($id){
		$mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
		// dd($mahasiswa);
    	return view('L1_Query_Builder/ubah_mahasiswa',['mahasiswa' => $mahasiswa]);
	}

	// public function ubah_data_mahasiswa(){
	// 	$id = $_POST['id'];
	// 	$nrp = $_POST['nrp'];
 //    	$nama = $_POST['nama'];
 //    	$email = $_POST['email'];
 //    	$jurusan = $_POST['jurusan'];
 //    	// dd($id, $nrp, $nama, $email, $jurusan);

 //    	// $user = DB::table('mahasiswa')->where(['id', $id])
 //    	// ->update(['nrp' => $nrp,
 //    	// 'nama' => $nama,
 //    	// 'email' => $email,
 //    	// 'jurusan' => $jurusan]);

 //    	$user = DB::table('mahasiswa')->where(['id', 1])
 //    	->update(['nrp' => 'hadi saja']);
 //    	dd($user);


 //    	$mahasiswa = DB::table('mahasiswa')->get();
 //    	return view('L1_Query_Builder/query_builder',['mahasiswa' => $mahasiswa]);
	// }

}
