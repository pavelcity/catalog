<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
   
	#index
	public function index () {
		$blogs = Blog::latest()->get();
		return view ('pages.blog.index', compact('blogs'));
	}

 
	#detail
	public function detail ($slug) {
		$blog = Blog::where('slug', $slug)->firstOrFail();
		return view ('pages.blog.detail', compact('blog'));
	}









	#
}
