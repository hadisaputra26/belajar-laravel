<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index($id){
    	return view('test',['mhs' => $id]);
    }
}
