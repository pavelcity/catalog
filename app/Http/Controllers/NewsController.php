<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
     
	#index
	public function index () {
		$news = News::latest()->get();
		return view ('pages.news.index', compact('news'));
	}

	#detail
	public function detail ($slug) {
		$info = News::where('slug', $slug)->firstOrFail();
		return view ('pages.news.detail', compact('info'));
	}











	#

}
