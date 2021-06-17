<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pravila;

class PravilaController extends Controller
{
    
	#index
	public function index () {
		$pravilas = Pravila::latest()->get();
		return view ('admin.rules.index', compact('pravilas'));
	}




	#create
	public function create () {
		return view ('admin.rules.create');
	}







	#store
	public function store (Request $request) {
		$this->validate($request, [
			'politictitle' => 'nullable',
		]);


		$pravila = new Pravila;

		$pravila->politictitle = $request->politictitle;
		$pravila->politic = $request->politic;

		$pravila->dostavkatitle = $request->dostavkatitle;
		$pravila->dostavka = $request->dostavka;

		$pravila->pokupkatitle = $request->pokupkatitle;
		$pravila->pokupka = $request->pokupka;

		$pravila->obmentitle = $request->obmentitle;
		$pravila->obmen = $request->obmen;

		$pravila->save();

		return redirect()->route('dashboard.rules.home');
	}








	#edit
	public function edit ($id) {
		$pravila = Pravila::find($id);
		return view ('admin.rules.edit', compact('pravila'));
	}










	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'politictitle' => 'nullable',
		]);


		$pravila = Pravila::find($id);

		$pravila->update([
			'politictitle' => $request->politictitle,
			'politic' => $request->politic,
	
			'dostavkatitle' => $request->dostavkatitle,
			'dostavka' => $request->dostavka,
	
			'pokupkatitle' => $request->pokupkatitle,
			'pokupka' => $request->pokupka,
	
			'obmentitle' => $request->obmentitle,
			'obmen' => $request->obmen,
		]);



		return redirect()->route('dashboard.rules.home');
	}











	#delete 
	public function delete ($id) {
		$pravila = Pravila::find($id);
		$pravila->delete();
		return redirect()->route('dashboard.rules.home');
	}



	#
}
