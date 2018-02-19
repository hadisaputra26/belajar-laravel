<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller{
    public function index(){
    	return view('index');
	}

	public function store(Request $request){
		// return dd($request->all());
		return view('store', ['data' => $request->all()]);
	}
}