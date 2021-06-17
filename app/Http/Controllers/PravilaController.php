<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pravila; 

class PravilaController extends Controller
{
    

	#index
	public function index () {
		return view ('pages.pravila.index');
	}

	
	#politics
	public function politics () {
		$pravila = Pravila::firstOrFail();
		// dd($pravila->politictitle);
		return view('pages.pravila.politics', compact('pravila'));
	}


	#pokupka
	public function pokupka () {
		$pravila = Pravila::firstOrFail();
		return view ('pages.pravila.pokupka', compact('pravila'));
	}

	#pokupka
	public function dostavka () {
		$pravila = Pravila::firstOrFail();
		return view ('pages.pravila.dostavka', compact('pravila'));
	}

	#pokupka
	public function obmen () {
		$pravila = Pravila::firstOrFail();
		return view ('pages.pravila.obmen', compact('pravila'));
	}












	#
}
