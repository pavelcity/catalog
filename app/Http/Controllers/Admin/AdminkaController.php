<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminkaController extends Controller
{
    
	#index
	public function index () {
		return view ('admin.index');
	}





	# logout adminka 
	public function logoutAdminka()
	{
		Auth::logout();
		return redirect()->route('home.page');
	}



	#
}
