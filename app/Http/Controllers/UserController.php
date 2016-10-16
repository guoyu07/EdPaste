<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function dashboard(){
		return view('paste/index');
	}
	public function account(){
		return view('paste/index');
	}
}
