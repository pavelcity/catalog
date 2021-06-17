<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catcollection;
use App\Models\Collection;


class TovaryController extends Controller
{
     
	#index
	public function index () {
		// dd('коллекции');
		$collections = Collection::latest()->get();
		$catscollection = Catcollection::get();

		$tovary = Collection::with('catcollection')->get();

		// $catscollection = Catcollection::firstOrFail();
		// $collections = $catscollection->collections()->get();
		return view ('pages.tovary.index', compact('collections', 'catscollection', 'tovary'));
	}



	#detail
	public function detail ($slug) {
		// dd('это детальная страница');
		$collekcia = Collection::where('slug', $slug)->firstOrFail();
		return view ('pages.tovary.detail', compact('collekcia'));
		
		// $cat = Catcollection::where('slug', $slug)->firstOrFail();
		// $collection = $cat->collections->orderBy('id', 'desc')->get();
		
		// return view ('pages.tovary.detail', compact('collection'));
	}





	#
}
