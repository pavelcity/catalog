<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Podarki;
use Image;

class PodarkiController extends Controller
{
    
	#index
	public function index () {
		$gifts = Podarki::latest()->get();
		return view ('admin.settings.podarki.index', compact('gifts'));
	}


 

	#create
	public function create () {
		return view ('admin.settings.podarki.create');
	}








	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		
		$gifts = new Podarki;


		$pic420 = $request->file('pic420');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');
		



		if(isset($pic420)) {
			$filename420 = hexdec(uniqid()) . '.' . $pic420->getClientOriginalExtension();

			Image::make($pic420)->resize(420, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/gifts/' . $filename420);
		}
		
 
		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/gifts/' . $filename768);
		}


		
		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			// dd($filename480);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/gifts/' . $filename480);
		}



		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/gifts/' . $filename414);
		}



		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/gifts/' . $filename375);
		}







 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($pic420)) {
			$picture420 = 'uploads/gifts/' . $filename420;
		}
		
		if(isset($pic768)){
			$picture768 = 'uploads/gifts/' . $filename768;
		}

		if(isset($pic480)){
			$picture480 = 'uploads/gifts/' . $filename480;
		}
		
		if(isset($pic414)){
			$picture414 = 'uploads/gifts/' . $filename414;
		}
		
		if(isset($pic375)){
			$picture375 = 'uploads/gifts/' . $filename375;
		}
		

		

		// dd($pictureTwo);


		if(isset($picture420)) {
			$gifts->pic420 = $picture420;
		}

		if(isset($picture768)) {
			$gifts->pic768 = $picture768;
		}

		if(isset($picture480)) {
			$gifts->pic480 = $picture480;
		}

		if(isset($picture414)) {
			$gifts->pic414 = $picture414;
		}

		if(isset($picture375)) {
			$gifts->pic375 = $picture375;
		}








		$gifts->title = $request->title;
		$gifts->price = $request->price;


		$gifts->save();

		return redirect()->route('dashboard.settings.podarki.home');

	}








	#edit
	public function edit ($id) {
		$gift = Podarki::find($id);
		return view ('admin.settings.podarki.edit', compact('gift'));
	}










		#update
		public function update (Request $request, $id) {
			$this->validate($request, [
				'title' => 'required'
			], [
				'title.required' => 'заполните это поле'
			]);
	
	
			
			
	
	
			
			$gift = Podarki::find($id);
	
	
			$pic420 = $request->file('pic420');
			$pic480 = $request->file('pic480');
			$pic414 = $request->file('pic414');
			$pic375 = $request->file('pic375');
	
	
	
	
	
	
			$old420 = $request->old420;
			$old480 = $request->old480;
			$old414 = $request->old414;
			$old375 = $request->old375;
	
	
	
	
	
	
	
			if(isset($pic420)) {
				$filename420 = hexdec(uniqid()) . '.' . $pic420->getClientOriginalExtension();
				$picture420 = 'uploads/gifts/' . $filename420;
	
				if(isset($old420)) {
					unlink($old420);
				}
	
				$gift->update([
					'pic420' => $picture420
				]);
	
				Image::make($pic420)->resize(420, null, function ($constraint) {
					$constraint->aspectRatio();
				})->save('uploads/gifts/' . $filename420);
			}
			
	
	
			if(isset($pic480)) {
				$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
				$picture480 = 'uploads/gifts/' . $filename480;
	
				if(isset($old480)) {
					unlink($old480);
				}
	
				$gift->update([
					'pic480' => $picture480
				]);
	
				Image::make($pic480)->resize(480, null, function ($constraint) {
					$constraint->aspectRatio();
				})->save('uploads/gifts/' . $filename480);
			}
			
	
	
			if(isset($pic414)) {
				$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();
				$picture414 = 'uploads/gifts/' . $filename414;
	
				if(isset($old414)) {
					unlink($old414);
				}
	
				$gift->update([
					'pic414' => $picture414
				]);
	
				Image::make($pic414)->resize(414, null, function ($constraint) {
					$constraint->aspectRatio();
				})->save('uploads/gifts/' . $filename414);
			}
			
	
	
			if(isset($pic375)) {
				$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();
				$picture375 = 'uploads/gifts/' . $filename375;
	
				if(isset($old375)) {
					unlink($old375);
				}
	
				$gift->update([
					'pic375' => $picture375
				]);
	
				Image::make($pic375)->resize(375, null, function ($constraint) {
					$constraint->aspectRatio();
				})->save('uploads/gifts/' . $filename375);
			}
			
	
			
	
	
	
			
	
	
			$gift->update([
				'title' => $request->title,
				'price' => $request->price,
			]);
	
			return redirect()->route('dashboard.settings.podarki.home');
		}
	
	









	#delete
	public function delete($id) {
		$gifts = Podarki::find($id);

		$delpic420 = $gifts->pic420;
		$delpic480 = $gifts->pic480;
		$delpic414 = $gifts->pic414;
		$delpic375 = $gifts->delpic768;
		

		if(isset($delpic420)) {
			unlink($delpic420);
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


		$gifts->delete();
		return redirect()->route('dashboard.settings.podarki.home');
	}




}
