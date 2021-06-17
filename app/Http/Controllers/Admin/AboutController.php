<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;

class AboutController extends Controller
{
     


	#index
	public function index () {
		$abouts = About::latest()->get();
		return view ('admin.about.index', compact('abouts'));
	}



	#create
	public function create () {
		return view ('admin.about.create');
	}





	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 

		$about = new About;


		$pic1500 = $request->file('pic1500');
		$pic1440 = $request->file('pic1440');
		$pic1366 = $request->file('pic1366');
		$pic1024 = $request->file('pic1024');
		$pic992 = $request->file('pic992');
		$pic768 = $request->file('pic768');
		$pic600 = $request->file('pic600');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');

		$picogimg = $request->file('ogimg');



		if(isset($pic1500)) {
			$filename1500 = hexdec(uniqid()) . '.' . $pic1500->getClientOriginalExtension();

			Image::make($pic1500)->resize(1500, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1500);
		}
		
 
		if(isset($pic1440)) {
			$filename1440 = hexdec(uniqid()) . '.' . $pic1440->getClientOriginalExtension();

			Image::make($pic1440)->resize(1440, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1440);
		}
 

		if(isset($pic1366)) {
			$filename1366 = hexdec(uniqid()) . '.' . $pic1366->getClientOriginalExtension();

			Image::make($pic1366)->resize(1366, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1366);
		}
 

		if(isset($pic1024)) {
			$filename1024 = hexdec(uniqid()) . '.' . $pic1024->getClientOriginalExtension();

			Image::make($pic1024)->resize(1024, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1024);
		}


		if(isset($pic992)) {
			$filename992 = hexdec(uniqid()) . '.' . $pic992->getClientOriginalExtension();

			Image::make($pic992)->resize(992, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename992);
		}


		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename768);
		}


		if(isset($pic600)) {
			$filename600 = hexdec(uniqid()) . '.' . $pic600->getClientOriginalExtension();

			Image::make($pic600)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename600);
		}


		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename480);
		}


		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename414);
		}


		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename375);
		}


		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filenameogimg);
		}




 


 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($pic1500)) {
			$picture1500 = 'uploads/about/' . $filename1500;
		}
		
		if(isset($pic1440)){
			$picture1440 = 'uploads/about/' . $filename1440;
		}
		
		if(isset($pic1366)){
			$picture1366 = 'uploads/about/' . $filename1366;
		}

		if(isset($pic1024)){
			$picture1024 = 'uploads/about/' . $filename1024;
		}

		if(isset($pic992)){
			$picture992 = 'uploads/about/' . $filename992;
		}

		if(isset($pic768)){
			$picture768 = 'uploads/about/' . $filename768;
		}

		if(isset($pic600)){
			$picture600 = 'uploads/about/' . $filename600;
		}

		if(isset($pic480)){
			$picture480 = 'uploads/about/' . $filename480;
		}

		if(isset($pic414)){
			$picture414 = 'uploads/about/' . $filename414;
		}

		if(isset($pic375)){
			$picture375 = 'uploads/about/' . $filename375;
		}

		if(isset($picogimg)){
			$pictureogimg = 'uploads/about/' . $filenameogimg;
		}







		// dd($pictureTwo);




		if(isset($picture1500)) {
			$about->pic1500 = $picture1500;
		}

		if(isset($picture1440)) {
			$about->pic1440 = $picture1440;
		}

		if(isset($picture1366)) {
			$about->pic1366 = $picture1366;
		}

		if(isset($picture1024)) {
			$about->pic1024 = $picture1024;
		}

		if(isset($picture992)) {
			$about->pic992 = $picture992;
		}

		if(isset($picture768)) {
			$about->pic768 = $picture768;
		}

		if(isset($picture600)) {
			$about->pic600 = $picture600;
		}

		if(isset($picture480)) {
			$about->pic480 = $picture480;
		}

		if(isset($picture414)) {
			$about->pic414 = $picture414;
		}

		if(isset($picture375)) {
			$about->pic375 = $picture375;
		}

		if(isset($pictureogimg)) {
			$about->ogimg = $pictureogimg;
		}












		// --------

		$about->title = $request->title;
		$about->phone = $request->phone;
		$about->email = $request->email;
		$about->descr = $request->descr;

		
		$about->metaTitle = $request->metaTitle;
		$about->description = $request->description;
		$about->keywords = $request->keywords;
		$about->author = $request->author;
		
		$about->schemaDescription = $request->schemaDescription;
		$about->schemaAuthor = $request->schemaAuthor;
		$about->schemaPublisher = $request->schemaPublisher;


		$about->save();

		return redirect()->route('dashboard.about.home');

	}









	#edit
	public function edit ($id) {
		$about = About::find($id);
		return view ('admin.about.edit', compact('about'));
	}











	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		$about = About::find($id);


		$pic1500 = $request->file('pic1500');
		$pic1440 = $request->file('pic1440');
		$pic1366 = $request->file('pic1366');
		$pic1024 = $request->file('pic1024');
		$pic992 = $request->file('pic992');
		$pic768 = $request->file('pic768');
		$pic600 = $request->file('pic600');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$pic375 = $request->file('pic375');

		$ogimg = $request->file('ogimg');






		$old1500 = $request->old1500;
		$old1440 = $request->old1440;
		$old1366 = $request->old1366;
		$old1024 = $request->old1024;
		$old992 = $request->old992;
		$old768 = $request->old768;
		$old600 = $request->old600;
		$old480 = $request->old480;
		$old414 = $request->old414;
		$old375 = $request->old375;

		$oldogimg = $request->oldogimg;







		if(isset($pic1500)) {
			$filename1500 = hexdec(uniqid()) . '.' . $pic1500->getClientOriginalExtension();
			$picture1500 = 'uploads/about/' . $filename1500;

			if(isset($old1500)) {
				unlink($old1500);
			}

			$about->update([
				'pic1500' => $picture1500
			]);

			Image::make($pic1500)->resize(1500, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1500);
		}

		

		if(isset($pic1440)) {
			$filename1440 = hexdec(uniqid()) . '.' . $pic1440->getClientOriginalExtension();
			$picture1440 = 'uploads/about/' . $filename1440;

			if(isset($old1440)) {
				unlink($old1440);
			}

			$about->update([
				'pic1440' => $picture1440
			]);

			Image::make($pic1440)->resize(1440, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1440);
		}


		if(isset($pic1366)) {
			$filename1366 = hexdec(uniqid()) . '.' . $pic1366->getClientOriginalExtension();
			$picture1366 = 'uploads/about/' . $filename1366;

			if(isset($old1366)) {
				unlink($old1366);
			}

			$about->update([
				'pic1366' => $picture1366
			]);

			Image::make($pic1366)->resize(1366, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1366);
		}
		


		if(isset($pic1024)) {
			$filename1024 = hexdec(uniqid()) . '.' . $pic1024->getClientOriginalExtension();
			$picture1024 = 'uploads/about/' . $filename1024;

			if(isset($old1024)) {
				unlink($old1024);
			}

			$about->update([
				'pic1024' => $picture1024
			]);

			Image::make($pic1024)->resize(1024, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename1024);
		}
		
		


		if(isset($pic992)) {
			$filename992 = hexdec(uniqid()) . '.' . $pic992->getClientOriginalExtension();
			$picture992 = 'uploads/about/' . $filename992;

			if(isset($old992)) {
				unlink($old992);
			}

			$about->update([
				'pic992' => $picture992
			]);

			Image::make($pic992)->resize(992, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename992);
		}
		
		


		if(isset($pic768)) {
			$filename768 = hexdec(uniqid()) . '.' . $pic768->getClientOriginalExtension();
			$picture768 = 'uploads/about/' . $filename768;

			if(isset($old768)) {
				unlink($old768);
			}

			$about->update([
				'pic768' => $picture768
			]);

			Image::make($pic768)->resize(768, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename768);
		}
		
		


		if(isset($pic600)) {
			$filename600 = hexdec(uniqid()) . '.' . $pic600->getClientOriginalExtension();
			$picture600 = 'uploads/about/' . $filename600;

			if(isset($old600)) {
				unlink($old600);
			}

			$about->update([
				'pic600' => $picture600
			]);

			Image::make($pic600)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename600);
		}
		



		if(isset($pic480)) {
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			$picture480 = 'uploads/about/' . $filename480;

			if(isset($old480)) {
				unlink($old480);
			}

			$about->update([
				'pic480' => $picture480
			]);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename480);
		}




		if(isset($pic414)) {
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();
			$picture414 = 'uploads/about/' . $filename414;

			if(isset($old414)) {
				unlink($old414);
			}

			$about->update([
				'pic414' => $picture414
			]);

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename414);
		}




		if(isset($pic375)) {
			$filename375 = hexdec(uniqid()) . '.' . $pic375->getClientOriginalExtension();
			$picture375 = 'uploads/about/' . $filename375;

			if(isset($old375)) {
				unlink($old375);
			}

			$about->update([
				'pic375' => $picture375
			]);

			Image::make($pic375)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filename375);
		}
		















		if(isset($ogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $ogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/about/' . $filenameogimg;

			$about->update([
				'ogimg' => $pictureogimg
			]);

			if(isset($oldogimg)) {
				unlink($oldogimg);
			}

			Image::make($ogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/about/' . $filenameogimg);
		}







		// ----------

		$about->update([
			'title' => $request->title,
			'phone' => $request->phone,
			'email' => $request->email,
			'descr' => $request->descr,

			'metaTitle' => $request->metaTitle,
			'description' => $request->description,
			'keywords' => $request->keywords,
			'author' => $request->author,
			
			'schemaDescription' => $request->schemaDescription,
			'schemaAuthor' => $request->schemaAuthor,
			'schemaPublisher' => $request->schemaPublisher,
		]);

		return redirect()->route('dashboard.about.home');
	}


















#delete
public function delete($id) {
	$about = About::find($id);
 
	$delpic1500 = $about->pic1500;
	$delpic1440 = $about->pic1440;
	$delpic1366 = $about->pic1366;
	$delpic1024 = $about->pic1024;
	$delpic992 = $about->pic992;
	$delpic768 = $about->pic768;
	$delpic600 = $about->pic600;
	$delpic480 = $about->pic480;
	$delpic414 = $about->pic414;
	$delpic375 = $about->pic375;

	$delogimg = $about->ogimg;

	if(isset($delpic1500)) {
		unlink($delpic1500);
	}
	if(isset($delpic1440)) {
		unlink($delpic1440);
	}
	if(isset($delpic1366)) {
		unlink($delpic1366);
	}
	if(isset($delpic1024)) {
		unlink($delpic1024);
	}
	if(isset($delpic992)) {
		unlink($delpic992);
	}
	if(isset($delpic768)) {
		unlink($delpic768);
	}
	if(isset($delpic600)) {
		unlink($delpic600);
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


	$about->delete();
	return redirect()->route('dashboard.about.home');
}











	#
}
