<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Paste;
use Auth;
use App\User;
use \Input;
use DB;


class UserController extends Controller
{
	public function dashboard(){
		// Check if user's logged in
		if (!Auth::check()) return redirect('/users/login');
		$userPastes = Paste::where('userId', Auth::user()->id)->get();
		return view('paste/dashboard', ['userPastes' => $userPastes]);
	}
	public function account(){
		return redirect('/');
	}
}
