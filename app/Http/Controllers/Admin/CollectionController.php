<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catcollection;
use App\Models\Collection;
use Image;

class CollectionController extends Controller
{
    
	#index 
	public function index () {
		$collections = Collection::latest()->get();
		return view ('admin.collections.index', compact('collections'));
	}




	#create 
	public function create () {
		$cats = Catcollection::get();
		return view ('admin.collections.create', compact('cats'));
	}









	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required',
			'catcollection_id' => 'required',
		], [
			'title.required' => 'заполните это поле',
			'catcollection_id.required' => 'выберите категорию',
		]);

 
		
		


		$collection = new Collection;


		$pic400_1 = $request->file('pic400_1');
		$pic375_1 = $request->file('pic375_1');

		$pic400_2 = $request->file('pic400_2');
		$pic375_2 = $request->file('pic375_2');

		$pic400_3 = $request->file('pic400_3');
		$pic375_3 = $request->file('pic375_3');

		$pic400_4 = $request->file('pic400_4');
		$pic375_4 = $request->file('pic375_4');

		$pic400_5 = $request->file('pic400_5');
		$pic375_5 = $request->file('pic375_5');

		$picogimg = $request->file('ogimg');


		// **
		if(isset($pic400_1)) {
			$filenamepic400_1 = hexdec(uniqid()) . '.' . $pic400_1->getClientOriginalExtension();

			Image::make($pic400_1)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic400_1);
		}
		
 
		if(isset($pic375_1)) {
			$filenamepic375_1 = hexdec(uniqid()) . '.' . $pic375_1->getClientOriginalExtension();

			Image::make($pic375_1)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic375_1);
		}






		// **
		if(isset($pic400_2)) {
			$filenamepic400_2 = hexdec(uniqid()) . '.' . $pic400_2->getClientOriginalExtension();

			Image::make($pic400_2)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic400_2);
		}

		if(isset($pic375_2)) {
			$filenamepic375_2 = hexdec(uniqid()) . '.' . $pic375_2->getClientOriginalExtension();

			Image::make($pic375_2)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic375_2);
		}




		// **
		if(isset($pic400_3)) {
			$filenamepic400_3 = hexdec(uniqid()) . '.' . $pic400_3->getClientOriginalExtension();

			Image::make($pic400_3)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic400_3);
		}

		if(isset($pic375_3)) {
			$filenamepic375_3 = hexdec(uniqid()) . '.' . $pic375_3->getClientOriginalExtension();

			Image::make($pic375_3)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic375_3);
		}


		// **
		if(isset($pic400_4)) {
			$filenamepic400_4 = hexdec(uniqid()) . '.' . $pic400_4->getClientOriginalExtension();

			Image::make($pic400_4)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic400_4);
		}

		if(isset($pic375_4)) {
			$filenamepic375_4 = hexdec(uniqid()) . '.' . $pic375_4->getClientOriginalExtension();

			Image::make($pic375_4)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic375_4);
		}




		// **
		if(isset($pic400_5)) {
			$filenamepic400_5 = hexdec(uniqid()) . '.' . $pic400_5->getClientOriginalExtension();

			Image::make($pic400_5)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic400_5);
		}

		if(isset($pic375_5)) {
			$filenamepic375_5 = hexdec(uniqid()) . '.' . $pic375_5->getClientOriginalExtension();

			Image::make($pic375_5)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenamepic375_5);
		}










		// **
		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenameogimg);
		}






 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ
		
		// **
		if(isset($pic400_1)) {
			$picture400_1 = 'uploads/collections/' . $filenamepic400_1;
		}
		if(isset($pic375_1)){
			$picture375_1 = 'uploads/collections/' . $filenamepic375_1;
		}

		// **
		if(isset($pic400_2)) {
			$picture400_2 = 'uploads/collections/' . $filenamepic400_2;
		}
		if(isset($pic375_2)){
			$picture375_2 = 'uploads/collections/' . $filenamepic375_2;
		}

		// **
		if(isset($pic400_3)) {
			$picture400_3 = 'uploads/collections/' . $filenamepic400_3;
		}
		if(isset($pic375_3)){
			$picture375_3 = 'uploads/collections/' . $filenamepic375_3;
		}

		// **
		if(isset($pic400_4)) {
			$picture400_4 = 'uploads/collections/' . $filenamepic400_4;
		}
		if(isset($pic375_4)){
			$picture375_4 = 'uploads/collections/' . $filenamepic375_4;
		}

		// **
		if(isset($pic400_5)) {
			$picture400_5 = 'uploads/collections/' . $filenamepic400_5;
		}
		if(isset($pic375_5)){
			$picture375_5 = 'uploads/collections/' . $filenamepic375_5;
		}








		if(isset($picogimg)){
			$pictureogimg = 'uploads/collections/' . $filenameogimg;
		}
		

		// dd($pictureTwo);


		// **
		if(isset($picture400_1)) {
			$collection->pic400_1 = $picture400_1;
		}
		if(isset($picture375_1)) {
			$collection->pic375_1 = $picture375_1;
		}

		// **
		if(isset($picture400_2)) {
			$collection->pic400_2 = $picture400_2;
		}
		if(isset($picture375_2)) {
			$collection->pic375_2 = $picture375_2;
		}

		// **
		if(isset($picture400_3)) {
			$collection->pic400_3 = $picture400_3;
		}
		if(isset($picture375_3)) {
			$collection->pic375_3 = $picture375_3;
		}

		// **
		if(isset($picture400_4)) {
			$collection->pic400_4 = $picture400_4;
		}
		if(isset($picture375_4)) {
			$collection->pic375_4 = $picture375_4;
		}


		// **
		if(isset($picture400_5)) {
			$collection->pic400_5 = $picture400_5;
		}
		if(isset($picture375_5)) {
			$collection->pic375_5 = $picture375_5;
		}




		if(isset($pictureogimg)) {
			$collection->ogimg = $pictureogimg;
		}




		// dd($request->catcollection_id);



		$collection->catcollection_id = $request->catcollection_id;

		$collection->title = $request->title;
		$collection->descr = $request->descr;
		$collection->size = $request->size;
		$collection->color = $request->color;
		$collection->material = $request->material;
		$collection->price = $request->price;

		
		$collection->metaTitle = $request->metaTitle;
		$collection->description = $request->description;
		$collection->keywords = $request->keywords;
		$collection->author = $request->author;
		
		$collection->schemaDescription = $request->schemaDescription;
		$collection->schemaAuthor = $request->schemaAuthor;
		$collection->schemaPublisher = $request->schemaPublisher;


		$collection->save();

		return redirect()->route('dashboard.collections.home');

	}














	#edit 
	public function edit ($id) {
		$collection = Collection::find($id);
		$cats = Catcollection::get();
		return view ('admin.collections.edit', compact('cats', 'collection'));
	}













	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required',
			'catcollection_id' => 'required',
		], [
			'title.required' => 'заполните это поле',
			'catcollection_id.required' => 'выберите категорию',
		]);


		
		


		$collection = Collection::find($id);



		$pic400_1 = $request->file('pic400_1');
		$pic375_1 = $request->file('pic375_1');

		$pic400_2 = $request->file('pic400_2');
		$pic375_2 = $request->file('pic375_2');

		$pic400_3 = $request->file('pic400_3');
		$pic375_3 = $request->file('pic375_3');

		$pic400_4 = $request->file('pic400_4');
		$pic375_4 = $request->file('pic375_4');

		$pic400_5 = $request->file('pic400_5');
		$pic375_5 = $request->file('pic375_5');

		$picogimg = $request->file('ogimg');


 


		$old400_1 = $collection->old400_1;
		$old375_1 = $collection->old375_1;

		$old400_2 = $collection->old400_2;
		$old375_2 = $collection->old375_2;

		$old400_3 = $collection->old400_3;
		$old400_3 = $collection->old400_3;

		$old375_4 = $collection->old375_4;
		$old375_4 = $collection->old375_4;

		$old375_5 = $collection->old375_5;
		$old375_5 = $collection->old375_5;




		$old_picogimg = $request->old_picogimg;






		// **
		if(isset($pic400_1)) {
			$filename400_1 = hexdec(uniqid()) . '.' . $pic400_1->getClientOriginalExtension();
			$picture400_1 = 'uploads/collections/' . $filename400_1;

			$collection->update([
				'pic400_1' => $picture400_1
			]);

			Image::make($pic400_1)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename400_1);

			if(isset($old400_1)) {
				unlink($old400_1);
			}
		}
		

		if(isset($pic375_1)) {
			$filename375_1 = hexdec(uniqid()) . '.' . $pic375_1->getClientOriginalExtension();
			$picture375_1 = 'uploads/collections/' . $filename375_1;

			$collection->update([
				'pic375_1' => $picture375_1
			]);

			if(isset($old375_1)) {
				unlink($old375_1);
			}

			Image::make($pic375_1)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename375_1);
		}

 



		// **
		if(isset($pic400_2)) {
			$filename400_2 = hexdec(uniqid()) . '.' . $pic400_2->getClientOriginalExtension();
			$picture400_2 = 'uploads/collections/' . $filename400_2;

			$collection->update([
				'pic400_2' => $picture400_2
			]);

			Image::make($pic400_2)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename400_2);

			if(isset($old400_2)) {
				unlink($old400_2);
			}
		}
		

		if(isset($pic375_2)) {
			$filename375_2 = hexdec(uniqid()) . '.' . $pic375_2->getClientOriginalExtension();
			$picture375_2 = 'uploads/collections/' . $filename375_2;

			$collection->update([
				'pic375_2' => $picture375_2
			]);

			if(isset($old375_2)) {
				unlink($old375_2);
			}

			Image::make($pic375_2)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename375_2);
		}





		// **
		if(isset($pic400_3)) {
			$filename400_3 = hexdec(uniqid()) . '.' . $pic400_3->getClientOriginalExtension();
			$picture400_3 = 'uploads/collections/' . $filename400_3;

			$collection->update([
				'pic400_3' => $picture400_3
			]);

			Image::make($pic400_3)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename400_3);

			if(isset($old400_3)) {
				unlink($old400_3);
			}
		}
		

		if(isset($pic375_3)) {
			$filename375_3 = hexdec(uniqid()) . '.' . $pic375_3->getClientOriginalExtension();
			$picture375_3 = 'uploads/collections/' . $filename375_3;

			$collection->update([
				'pic375_3' => $picture375_3
			]);

			if(isset($old375_3)) {
				unlink($old375_3);
			}

			Image::make($pic375_3)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename375_3);
		}







		// **
		if(isset($pic400_4)) {
			$filename400_4 = hexdec(uniqid()) . '.' . $pic400_4->getClientOriginalExtension();
			$picture400_4 = 'uploads/collections/' . $filename400_4;

			$collection->update([
				'pic400_4' => $picture400_4
			]);

			Image::make($pic400_4)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename400_4);

			if(isset($old400_4)) {
				unlink($old400_4);
			}
		}
		

		if(isset($pic375_4)) {
			$filename375_4 = hexdec(uniqid()) . '.' . $pic375_4->getClientOriginalExtension();
			$picture375_4 = 'uploads/collections/' . $filename375_4;

			$collection->update([
				'pic375_4' => $picture375_4
			]);

			if(isset($old375_4)) {
				unlink($old375_4);
			}

			Image::make($pic375_4)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename375_4);
		}

		 












		// **
		if(isset($pic400_5)) {
			$filename400_5 = hexdec(uniqid()) . '.' . $pic400_5->getClientOriginalExtension();
			$picture400_5 = 'uploads/collections/' . $filename400_5;

			$collection->update([
				'pic400_5' => $picture400_5
			]);

			Image::make($pic400_5)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename400_5);

			if(isset($old400_5)) {
				unlink($old400_5);
			}
		}
		

		if(isset($pic375_5)) {
			$filename375_5 = hexdec(uniqid()) . '.' . $pic375_5->getClientOriginalExtension();
			$picture375_5 = 'uploads/collections/' . $filename375_5;

			$collection->update([
				'pic375_5' => $picture375_5
			]);

			if(isset($old375_5)) {
				unlink($old375_5);
			}

			Image::make($pic375_5)->resize(375, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filename375_5);
		}




		// **
		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/collections/' . $filenameogimg;

			if(isset($old_picogimg)) {
				unlink($old_picogimg);
			}

			$collection->update([
				'ogimg' => $pictureogimg
			]);

			Image::make($picogimg)->resize(400, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/collections/' . $filenameogimg);
		}

		 
 

		





		


		$collection->update([
			'catcollection_id' => $request->catcollection_id,

			'title' => $request->title,
			'descr' => $request->descr,
			'size' => $request->size,
			'color' => $request->color,
			'material' => $request->material,
			'price' => $request->price,

			'metaTitle' => $request->metaTitle,
			'description' => $request->description,
			'keywords' => $request->keywords,
			'author' => $request->author,
			
			'schemaDescription' => $request->schemaDescription,
			'schemaAuthor' => $request->schemaAuthor,
			'schemaPublisher' => $request->schemaPublisher,
		]);

		return redirect()->route('dashboard.collections.home');
	}




















	#delete
	public function delete($id) {
		$collection = Collection::find($id);
		

		$delpic400_1 = $collection->pic400_1;
		$delpic375_1 = $collection->pic375_1;

		$delpic400_2 = $collection->pic400_2;
		$delpic375_2 = $collection->pic375_2;

		$delpic400_3 = $collection->pic400_3;
		$delpic375_3 = $collection->pic375_3;

		$delpic400_4 = $collection->pic400_4;
		$delpic375_4 = $collection->pic375_4;

		$delpic400_5 = $collection->pic400_5;
		$delpic375_5 = $collection->pic375_5;

		$delogimg = $collection->ogimg;
		// dd($delogimg);


		// **
		if(isset($delpic400_1)) {
			unlink($delpic400_1);
		}
		if(isset($delpic375_1)) {
			unlink($delpic375_1);
		}

		// **
		if(isset($delpic400_2)) {
			unlink($delpic400_2);
		}
		if(isset($delpic375_2)) {
			unlink($delpic375_2);
		}

		// **
		if(isset($delpic400_3)) {
			unlink($delpic400_3);
		}
		if(isset($delpic375_3)) {
			unlink($delpic375_3);
		}

		// **
		if(isset($delpic400_4)) {
			unlink($delpic400_4);
		}
		if(isset($delpic375_4)) {
			unlink($delpic375_4);
		}

		// **
		if(isset($delpic400_5)) {
			unlink($delpic400_5);
		}
		if(isset($delpic375_5)) {
			unlink($delpic375_5);
		}


		if(isset($delogimg)) {
			unlink($delogimg);
		}



		$collection->delete();
		return redirect()->route('dashboard.collections.home');
	}







	#
}
