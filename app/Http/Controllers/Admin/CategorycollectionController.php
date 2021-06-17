<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catcollection;

class CategorycollectionController extends Controller
{
    
	#index
	public function index () {
		$cats = Catcollection::latest()->get();
		return view ('admin.collections.category.index', compact('cats'));
	}





	#create
	public function create () {
		return view ('admin.collections.category.create');
	}









	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		
		$cats = new Catcollection;
		$cats->title = $request->title;
		$cats->save();

		return redirect()->route('dashboard.collections.catcollection.home');

	}







	#edit
	public function edit ($id) {
		$cat = Catcollection::find($id);
		return view ('admin.collections.category.edit', compact('cat'));
	}






	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		$cats = Catcollection::find($id);


		$cats->update([
			'title' => $request->title
		]);
		
		
		return redirect()->route('dashboard.collections.catcollection.home');
	}






	#delete
	public function delete ($id) {
		$cat = Catcollection::find($id);
		$cat->delete();

		return redirect()->route('dashboard.collections.catcollection.home');
	}



	#
}
