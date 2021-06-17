<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    
	#index
	public function index () {
		$about = About::firstOrFail();
		return view ('pages.about.index', compact('about'));
	}


 






	#
}
