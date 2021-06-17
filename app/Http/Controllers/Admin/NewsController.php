<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Image;

class NewsController extends Controller
{
    

	#index 
	public function index () {
		$news = News::latest()->get();
		return view ('admin.news.index', compact('news'));
	}








	#create
	public function create () {
		return view ('admin.news.create');
	}










	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		


		$news = new News;


		$pic = $request->file('pic');
		$pic2 = $request->file('smallpic');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$picogimg = $request->file('ogimg');



		if(isset($pic)) {
			// $filename = $pic->getClientOriginalName();
			$filename = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			// dd($filename);

			Image::make($pic)->resize(550, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename);
		}
		
 
		if(isset($pic2)) {
			// $filename2 = $pic2->getClientOriginalName();
			$filename2 = hexdec(uniqid()) . '.' . $pic2->getClientOriginalExtension();
			// dd($filename2);

			Image::make($pic2)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename2);
		}


		
		if(isset($pic480)) {
			// $filename480 = $pic480->getClientOriginalName();
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			// dd($filename480);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename480);
		}



		if(isset($pic414)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename414);
		}



		if(isset($picogimg)) {
			// $filenameogimg = $picogimg->getClientOriginalName();
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filenameogimg);
		}






 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($pic)) {
			$pictureOne = 'uploads/news/' . $filename;
		}
		
		if(isset($pic2)){
			$pictureTwo = 'uploads/news/' . $filename2;
		}

		if(isset($pic480)){
			$picture480 = 'uploads/news/' . $filename480;
		}
		
		if(isset($pic414)){
			$picture414 = 'uploads/news/' . $filename414;
		}
		


		if(isset($picogimg)){
			$pictureogimg = 'uploads/news/' . $filenameogimg;
		}
		

		// dd($pictureTwo);


		if(isset($pictureOne)) {
			$news->pic = $pictureOne;
		}

		if(isset($pictureTwo)) {
			$news->smallpic = $pictureTwo;
		}

		if(isset($picture480)) {
			$news->pic480 = $picture480;
		}

		if(isset($picture414)) {
			$news->pic414 = $picture414;
		}

		if(isset($pictureogimg)) {
			$news->ogimg = $pictureogimg;
		}








		$news->title = $request->title;
		$news->short = $request->short;
		$news->descr = $request->descr;

		
		$news->metaTitle = $request->metaTitle;
		$news->description = $request->description;
		$news->keywords = $request->keywords;
		$news->author = $request->author;
		
		$news->schemaDescription = $request->schemaDescription;
		$news->schemaAuthor = $request->schemaAuthor;
		$news->schemaPublisher = $request->schemaPublisher;


		$news->save();

		return redirect()->route('dashboard.news.home');

	}










	#edit
	public function edit ($id) {
		$info = News::find($id);
		return view ('admin.news.edit', compact('info'));
	}








	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		$news = News::find($id);


		$pic = $request->file('pic');
		$pic2 = $request->file('smallpic');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$ogimg = $request->file('ogimg');






		$old_pic = $request->old_pic;
		$old_smallpic = $request->old_smallpic;

		$old_pic480 = $request->old_pic480;
		$old_pic414 = $request->old_pic414;
		$old_picogimg = $request->old_picogimg;







		if(isset($pic)) {
			// $filename = $pic->getClientOriginalName();
			$filename = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$pictureOne = 'uploads/news/' . $filename;

			$news->update([
				'pic' => $pictureOne
			]);

			Image::make($pic)->resize(550, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename);

			if(isset($old_pic)) {
				unlink($old_pic);
			}

		}
		



		if(isset($pic2)) {
			// $filename2 = $pic2->getClientOriginalName();
			$filename2 = hexdec(uniqid()) . '.' . $pic2->getClientOriginalExtension();
			$pictureTwo = 'uploads/news/' . $filename2;

			$news->update([
				'smallpic' => $pictureTwo
			]);

			if(isset($old_smallpic)) {
				unlink($old_smallpic);
			}

			Image::make($pic2)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename2);
		}

 

		if(isset($pic480)) {
			// $filename480 = $pic480->getClientOriginalName();
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			$picture480 = 'uploads/news/' . $filename480;

			$news->update([
				'pic480' => $picture480
			]);

			if(isset($old_pic480)) {
				unlink($old_pic480);
			}

			Image::make($pic480)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename480);
		}


		if(isset($pic414)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();
			$picture414 = 'uploads/news/' . $filename414;

			$news->update([
				'pic414' => $picture414
			]);

			if(isset($old_pic414)) {
				unlink($old_pic414);
			}

			Image::make($pic414)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filename414);
		}





		if(isset($ogimg)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filenameogimg = hexdec(uniqid()) . '.' . $ogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/news/' . $filenameogimg;

			$news->update([
				'ogimg' => $pictureogimg
			]);

			if(isset($old_picogimg)) {
				unlink($old_picogimg);
			}

			Image::make($ogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/news/' . $filenameogimg);
		}






		


		$news->update([
			'title' => $request->title,
			'short' => $request->short,
			'descr' => $request->descr,

			'metaTitle' => $request->metaTitle,
			'description' => $request->description,
			'keywords' => $request->keywords,
			'author' => $request->author,
			
			'schemaDescription' => $request->schemaDescription,
			'schemaAuthor' => $request->schemaAuthor,
			'schemaPublisher' => $request->schemaPublisher,
		]);

		return redirect()->route('dashboard.news.home');
	}













#delete
public function delete($id) {
	$news = News::find($id);

	$delpic = $news->pic;
	$delsmallpic = $news->smallpic;
	$delpic480 = $news->pic480;
	$delpic414 = $news->pic414;
	$delogimg = $news->ogimg;

	if(isset($delpic)) {
		unlink($delpic);
	}
	if(isset($delsmallpic)) {
		unlink($delsmallpic);
	}
	if(isset($delpic480)) {
		unlink($delpic480);
	}
	if(isset($delpic414)) {
		unlink($delpic414);
	}
	if(isset($delogimg)) {
		unlink($delogimg);
	}


	$news->delete();
	return redirect()->route('dashboard.news.home');
}



	#
}
