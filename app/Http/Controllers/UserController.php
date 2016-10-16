<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function dashboard(){
		return redirect('/');
	}
	public function account(){
		return redirect('/');
	}
}
