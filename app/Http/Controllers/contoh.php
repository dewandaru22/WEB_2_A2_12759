<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contoh extends Controller{
    
	function index(){
		//code
		return view('index');
	}
	
	function create(){
		return view('create');
	}

	function halamandua(){
		return view('halamandua');
	}
	function halamantiga(){
		return view('halamantiga');
	}
}
