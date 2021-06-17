<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Image;

class BlogController extends Controller
{
   
	#index
	public function index () {
		$blogs = Blog::latest()->get();
		return view ('admin.blog.index', compact('blogs'));
	}



	#create
	public function create () {
		return view ('admin.blog.create');
	}



 


	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		


		$blog = new Blog;


		$pic = $request->file('pic');
		$pic2 = $request->file('smallpic');
		$pic480 = $request->file('pic480');
		$pic414 = $request->file('pic414');
		$picogimg = $request->file('ogimg');



		if(isset($pic)) {
			// $filename = $pic->getClientOriginalName();
			$filename = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			// dd($filename);

			Image::make($pic)->resize(770, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename);
		}
		
 
		if(isset($pic2)) {
			// $filename2 = $pic2->getClientOriginalName();
			$filename2 = hexdec(uniqid()) . '.' . $pic2->getClientOriginalExtension();
			// dd($filename2);

			Image::make($pic2)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename2);
		}


		
		if(isset($pic480)) {
			// $filename480 = $pic480->getClientOriginalName();
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			// dd($filename480);

			Image::make($pic480)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename480);
		}



		if(isset($pic414)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();

			Image::make($pic414)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename414);
		}



		if(isset($picogimg)) {
			// $filenameogimg = $picogimg->getClientOriginalName();
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filenameogimg);
		}






 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($pic)) {
			$pictureOne = 'uploads/blog/' . $filename;
		}
		
		if(isset($pic2)){
			$pictureTwo = 'uploads/blog/' . $filename2;
		}

		if(isset($pic480)){
			$picture480 = 'uploads/blog/' . $filename480;
		}
		
		if(isset($pic414)){
			$picture414 = 'uploads/blog/' . $filename414;
		}
		


		if(isset($picogimg)){
			$pictureogimg = 'uploads/blog/' . $filenameogimg;
		}
		

		// dd($pictureTwo);


		if(isset($pictureOne)) {
			$blog->pic = $pictureOne;
		}

		if(isset($pictureTwo)) {
			$blog->smallpic = $pictureTwo;
		}

		if(isset($picture480)) {
			$blog->pic480 = $picture480;
		}

		if(isset($picture414)) {
			$blog->pic414 = $picture414;
		}

		if(isset($pictureogimg)) {
			$blog->ogimg = $pictureogimg;
		}








		$blog->title = $request->title;
		$blog->short = $request->short;
		$blog->descr = $request->descr;

		
		$blog->metaTitle = $request->metaTitle;
		$blog->description = $request->description;
		$blog->keywords = $request->keywords;
		$blog->author = $request->author;
		
		$blog->schemaDescription = $request->schemaDescription;
		$blog->schemaAuthor = $request->schemaAuthor;
		$blog->schemaPublisher = $request->schemaPublisher;


		$blog->save();

		return redirect()->route('dashboard.blog.home');

	}







	#edit
	public function edit($id) {
		$blog = Blog::find($id);
		return view('admin.blog.edit', compact('blog'));
	}













	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		$blog = Blog::find($id);


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
			$pictureOne = 'uploads/blog/' . $filename;

			$blog->update([
				'pic' => $pictureOne
			]);

			Image::make($pic)->resize(750, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename);

			if(isset($old_pic)) {
				unlink($old_pic);
			}

		}
		



		if(isset($pic2)) {
			// $filename2 = $pic2->getClientOriginalName();
			$filename2 = hexdec(uniqid()) . '.' . $pic2->getClientOriginalExtension();
			$pictureTwo = 'uploads/blog/' . $filename2;

			$blog->update([
				'smallpic' => $pictureTwo
			]);

			if(isset($old_smallpic)) {
				unlink($old_smallpic);
			}

			Image::make($pic2)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename2);
		}

 

		if(isset($pic480)) {
			// $filename480 = $pic480->getClientOriginalName();
			$filename480 = hexdec(uniqid()) . '.' . $pic480->getClientOriginalExtension();
			$picture480 = 'uploads/blog/' . $filename480;

			$blog->update([
				'pic480' => $picture480
			]);

			if(isset($old_pic480)) {
				unlink($old_pic480);
			}

			Image::make($pic480)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename480);
		}


		if(isset($pic414)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filename414 = hexdec(uniqid()) . '.' . $pic414->getClientOriginalExtension();
			$picture414 = 'uploads/blog/' . $filename414;

			$blog->update([
				'pic414' => $picture414
			]);

			if(isset($old_pic414)) {
				unlink($old_pic414);
			}

			Image::make($pic414)->resize(370, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filename414);
		}





		if(isset($ogimg)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filenameogimg = hexdec(uniqid()) . '.' . $ogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/blog/' . $filenameogimg;

			$blog->update([
				'ogimg' => $pictureogimg
			]);

			if(isset($old_picogimg)) {
				unlink($old_picogimg);
			}

			Image::make($ogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $filenameogimg);
		}






		


		$blog->update([
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

		return redirect()->route('dashboard.blog.home');
	}





 






 



#delete
public function delete($id) {
	$blog = Blog::find($id);

	$delpic = $blog->pic;
	$delsmallpic = $blog->smallpic;
	$delpic480 = $blog->pic480;
	$delpic414 = $blog->pic414;
	$delogimg = $blog->ogimg;

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


	$blog->delete();
	return redirect()->route('dashboard.blog.home');
}


	#
}
