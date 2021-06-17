<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catcollection;
use App\Models\Collection;

class CatcollectionController extends Controller
{
    

	#index
	public function index () {
		$category = Catcollection::firstOrFail();
		$collections = $category->collections()->get();
		return view('pages.catcollections.index', compact('collections'));
	}



	#show
	public function show ($slug) {
		$catcollect = Catcollection::where('slug', $slug)->firstOrFail();
		$collections = $catcollect->collections()->get();
		// $tovary = Collection::with('catcollection')->get();
		// dd('страница категории');
		return view ('pages.catcollections.index', compact('catcollect', 'collections'));
	}


}
