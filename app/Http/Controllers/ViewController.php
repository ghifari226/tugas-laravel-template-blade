<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {
		return view('index');
	}

	public function data() {
		return view('data');
	}
}
