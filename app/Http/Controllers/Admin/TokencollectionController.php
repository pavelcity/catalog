<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokencollectionController extends Controller
{
    


	#index
	public function index () {
		return view ('admin.nft.tokencollections.index');
	}




	#create
	public function create () {
		return view ('admin.nft.tokencollections.create');
	}









	#
}
