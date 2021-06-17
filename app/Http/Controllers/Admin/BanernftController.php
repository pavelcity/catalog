<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banernft;
use Image;

class BanernftController extends Controller
{
    
	#index
	public function index () {
		$baners = Banernft::latest()->get();
		return view ('admin.settings.banernft.index', compact('baners'));
	}



	#create
	public function create () {
		return view ('admin.settings.banernft.create');
	}









	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		
		$banernft = new Banernft;


		$pic950 = $request->file('pic950');
		$pic768 = $request->file('pic768');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');
		



		if(isset($pic950)) {
			$filename950 = hexdec(uniqid()) . '.' . $pic950->getClientOriginalExtension();

			Image::make($pic950)->resize(950, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename950);
		}
		
 
		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename768);
		}


		
		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			// dd($filename480);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename480);
		}



		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename414);
		}



		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename375);
		}







 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($pic950)) {
			$picture950 = 'uploads/banernft/' . $filename950;
		}
		
		if(isset($pic768)){
			$picture768 = 'uploads/banernft/' . $filename768;
		}

		if(isset($pic480)){
			$picture480 = 'uploads/banernft/' . $filename480;
		}
		
		if(isset($pic414)){
			$picture414 = 'uploads/banernft/' . $filename414;
		}
		
		if(isset($pic375)){
			$picture375 = 'uploads/banernft/' . $filename375;
		}
		

		

		// dd($pictureTwo);


		if(isset($picture950)) {
			$banernft->pic950 = $picture950;
		}

		if(isset($picture768)) {
			$banernft->pic768 = $picture768;
		}

		if(isset($picture480)) {
			$banernft->pic480 = $picture480;
		}

		if(isset($picture414)) {
			$banernft->pic414 = $picture414;
		}

		if(isset($picture375)) {
			$banernft->pic375 = $picture375;
		}








		$banernft->title = $request->title;
		$banernft->link = $request->link;


		$banernft->save();

		return redirect()->route('dashboard.settings.banernft.home');

	}














		#edit
		public function edit ($id) {
			$baner = Banernft::find($id);
			return view ('admin.settings.banernft.edit', compact('baner'));
		}







		#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		
		$banernft = Banernft::find($id);


		$pic950 = $request->file('pic950');
		$pic768 = $request->file('pic768');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');






		$old950 = $request->old950;
		$old768 = $request->old768;
		$old480 = $request->old480;
		$old414 = $request->old414;
		$old375 = $request->old375;







		if(isset($pic950)) {
			$filename950 = hexdec(uniqid()) . '.' . $pic950->getClientOriginalExtension();
			$picture950 = 'uploads/banernft/' . $filename950;

			if(isset($old950)) {
				unlink($old950);
			}

			$banernft->update([
				'pic950' => $picture950
			]);

			Image::make($pic950)->resize(950, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename950);
		}
		


		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();
			$picture768 = 'uploads/banernft/' . $filename768;

			if(isset($old768)) {
				unlink($old768);
			}

			$banernft->update([
				'pic768' => $picture768
			]);

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename768);
		}
		


		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			$picture480 = 'uploads/banernft/' . $filename480;

			if(isset($old480)) {
				unlink($old480);
			}

			$banernft->update([
				'pic480' => $picture480
			]);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename480);
		}
		


		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();
			$picture414 = 'uploads/banernft/' . $filename414;

			if(isset($old414)) {
				unlink($old414);
			}

			$banernft->update([
				'pic414' => $picture414
			]);

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/banernft/' . $filename414);
		}
		


		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();
			$picture375 = 'uploads/banernft/' . $filename375;

			if(isset($old375)) {
				unlink($old375);
			}

			$banernft->update([
				'pic375' => $picture375
			]);

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename375);
		}
		

		



		


		$banernft->update([
			'title' => $request->title,
			'link' => $request->link,
		]);

		return redirect()->route('dashboard.settings.banernft.home');
	}






 



	#delete
	public function delete($id) {
		$banernft = Banernft::find($id);

		$delpic950 = $banernft->pic950;
		$delpic768 = $banernft->pic768;
		$delpic480 = $banernft->pic480;
		$delpic414 = $banernft->pic414;
		$delpic375 = $banernft->delpic768;
		

		if(isset($delpic950)) {
			unlink($delpic950);
		}
		if(isset($delpic768)) {
			unlink($delpic768);
		}
		if(isset($delpic480)) {
			unlink($delpic480);
		}
		if(isset($delpic414)) {
			unlink($delpic414);
		}
		if(isset($delpic375)) {
			unlink($delpic375);
		}


		$banernft->delete();
		return redirect()->route('dashboard.settings.banernft.home');
	}


	



}
