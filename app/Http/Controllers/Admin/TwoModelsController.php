<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Twomodel;
use Image;

class TwoModelsController extends Controller
{
    

	#index
	public function index () {
		$picmodels = Twomodel::latest()->get();
		return view ('admin.settings.twomodels.index', compact('picmodels'));
	}



	#create
	public function create () {
		return view ('admin.settings.twomodels.create');
	}
 







	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		


		$fashionmodels = new Twomodel;


		$pic950 = $request->file('pic950');
		$pic768 = $request->file('pic768');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');
		$picogimg = $request->file('ogimg');



		if(isset($pic950)) {
			$filename950 = hexdec(uniqid()) . '.' . $pic950->getClientOriginalExtension();

			Image::make($pic950)->resize(950, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename950);
		}
		
 
		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename768);
		}


		
		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			// dd($filename480);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename480);
		}



		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename414);
		}



		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename375);
		}



		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filenameogimg);
		}






 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($pic950)) {
			$picture950 = 'uploads/models/' . $filename950;
		}
		
		if(isset($pic768)){
			$picture768 = 'uploads/models/' . $filename768;
		}

		if(isset($pic480)){
			$picture480 = 'uploads/models/' . $filename480;
		}
		
		if(isset($pic414)){
			$picture414 = 'uploads/models/' . $filename414;
		}
		
		if(isset($pic375)){
			$picture375 = 'uploads/models/' . $filename375;
		}
		


		if(isset($picogimg)){
			$pictureogimg = 'uploads/models/' . $filenameogimg;
		}
		

		// dd($pictureTwo);


		if(isset($picture950)) {
			$fashionmodels->pic950 = $picture950;
		}

		if(isset($picture768)) {
			$fashionmodels->pic768 = $picture768;
		}

		if(isset($picture480)) {
			$fashionmodels->pic480 = $picture480;
		}

		if(isset($picture414)) {
			$fashionmodels->pic414 = $picture414;
		}

		if(isset($picture375)) {
			$fashionmodels->pic375 = $picture375;
		}

		if(isset($pictureogimg)) {
			$fashionmodels->ogimg = $pictureogimg;
		}








		$fashionmodels->title = $request->title;
		$fashionmodels->link = $request->link;
		$fashionmodels->sort = $request->sort;


		$fashionmodels->save();

		return redirect()->route('dashboard.settings.twomodels.home');

	}




 











	#edit
	public function edit ($id) {
		$fashionmodel = Twomodel::find($id);
		return view ('admin.settings.twomodels.edit', compact('fashionmodel'));
	}















	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		
		$fashionmodels = Twomodel::find($id);


		$pic950 = $request->file('pic950');
		$pic768 = $request->file('pic768');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');
		$picogimg = $request->file('ogimg');






		$old950 = $request->old950;
		$old768 = $request->old768;
		$old480 = $request->old480;
		$old414 = $request->old414;
		$old375 = $request->old375;
		$oldogimg = $request->oldogimg;







		if(isset($pic950)) {
			$filename950 = hexdec(uniqid()) . '.' . $pic950->getClientOriginalExtension();
			$picture950 = 'uploads/models/' . $filename950;

			if(isset($old950)) {
				unlink($old950);
			}

			$fashionmodels->update([
				'pic950' => $picture950
			]);

			Image::make($pic950)->resize(950, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename950);
		}
		


		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();
			$picture768 = 'uploads/models/' . $filename768;

			if(isset($old768)) {
				unlink($old768);
			}

			$fashionmodels->update([
				'pic768' => $picture768
			]);

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename768);
		}
		


		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			$picture480 = 'uploads/models/' . $filename480;

			if(isset($old480)) {
				unlink($old480);
			}

			$fashionmodels->update([
				'pic480' => $picture480
			]);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename480);
		}
		


		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();
			$picture414 = 'uploads/models/' . $filename414;

			if(isset($old414)) {
				unlink($old414);
			}

			$fashionmodels->update([
				'pic414' => $picture414
			]);

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename414);
		}
		


		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();
			$picture375 = 'uploads/models/' . $filename375;

			if(isset($old375)) {
				unlink($old375);
			}

			$fashionmodels->update([
				'pic375' => $picture375
			]);

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filename375);
		}
		


		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/models/' . $filenameogimg;

			if(isset($oldogimg)) {
				unlink($oldogimg);
			}

			$fashionmodels->update([
				'ogimg' => $pictureogimg
			]);

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/models/' . $filenameogimg);
		}
		





		


		$fashionmodels->update([
			'title' => $request->title,
			'link' => $request->link,
			'sort' => $request->sort,
		]);

		return redirect()->route('dashboard.settings.twomodels.home');
	}














	#delete
public function delete($id) {
	$fashionmodels = Twomodel::find($id);

	$delpic950 = $fashionmodels->pic950;
	$delpic768 = $fashionmodels->pic768;
	$delpic480 = $fashionmodels->pic480;
	$delpic414 = $fashionmodels->pic414;
	$delpic375 = $fashionmodels->delpic768;
	$delogimg = $fashionmodels->ogimg;

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
	if(isset($delogimg)) {
		unlink($delogimg);
	}


	$fashionmodels->delete();
	return redirect()->route('dashboard.settings.twomodels.home');
}






	#
}
