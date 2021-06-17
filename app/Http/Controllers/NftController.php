<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tokennft;

class NftController extends Controller
{
    
	#index
	public function index () {
		$nfts = Tokennft::latest()->get();
		return view ('pages.nft.index', compact('nfts'));
	}



	#detail
	public function detail ($slug) {
		$nft = Tokennft::where('slug', $slug)->firstOrFail();
		return view ('pages.nft.detail', compact('nft'));
	}






	#
}
