<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\About;
use App\Models\Twomodel;
use App\Models\Banernft;
use App\Models\Podarki;
use App\Models\Tokennft;

class HomePageController extends Controller
{
    
	
	#index
	public function index () {
		$news = News::latest()->take(3)->get();
		$about = About::firstOrFail();
		$picmodels = Twomodel::orderBy('sort', 'ASC')->get();
		$banernft = Banernft::firstOrFail();
		$gifts = Podarki::latest()->get();
		$nfts = Tokennft::latest()->get();
		return view ('pages.index', compact('news', 'about', 'picmodels', 'banernft', 'gifts', 'nfts'));
	}









		#
}
