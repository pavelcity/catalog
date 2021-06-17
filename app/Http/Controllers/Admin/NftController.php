<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tokennft;
use Image;

class NftController extends Controller
{
    

	#index
	public function index () {
		$nfts = Tokennft::latest()->get();
		return view ('admin.nft.index', compact('nfts'));
	}




	#create
	public function create () {
		return view ('admin.nft.create');
	}











	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required',
		], [
			'title.required' => 'заполните это поле',
		]);

 
		
		


		$nft = new Tokennft;


		$pic480_1 = $request->file('pic480_1');
		$pic425_1 = $pic480_1;
		$pic414_1 = $pic480_1;
		$pic375_1 = $pic480_1;

		$picogimg = $request->file('ogimg');



		$pic350_1 = $request->file('pic350_1');
		$pic350_2 = $request->file('pic350_2');
		$pic350_3 = $request->file('pic350_3');

		$pic350_4 = $request->file('pic350_4');
		$pic350_5 = $request->file('pic350_5');
		$pic350_6 = $request->file('pic350_6');
		$pic350_7 = $request->file('pic350_7');
		$pic350_8 = $request->file('pic350_8');
		$pic350_9 = $request->file('pic350_9');
		$pic350_10 = $request->file('pic350_10');



		
		// **
		if(isset($pic480_1)) {
			$filenamepic480_1 = hexdec(uniqid()) . '.' . $pic480_1->getClientOriginalExtension();

			Image::make($pic480_1)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic480_1);
		}
		
 
		// **
		if(isset($pic425_1)) {
			$filenamepic425_1 = hexdec(uniqid()) . '.' . $pic425_1->getClientOriginalExtension();

			Image::make($pic425_1)->resize(425, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic425_1);
		}

		// **
		if(isset($pic414_1)) {
			$filenamepic414_1 = hexdec(uniqid()) . '.' . $pic414_1->getClientOriginalExtension();

			Image::make($pic414_1)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic414_1);
		}

		// **
		if(isset($pic375_1)) {
			$filenamepic375_1 = hexdec(uniqid()) . '.' . $pic375_1->getClientOriginalExtension();

			Image::make($pic375_1)->resize(414, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic375_1);
		}





		// **
		if(isset($pic350_1)) {
			$filenamepic350_1 = hexdec(uniqid()) . '.' . $pic350_1->getClientOriginalExtension();

			Image::make($pic350_1)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_1);
		}
		// **
		if(isset($pic350_2)) {
			$filenamepic350_2 = hexdec(uniqid()) . '.' . $pic350_2->getClientOriginalExtension();

			Image::make($pic350_2)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_2);
		}
		// **
		if(isset($pic350_3)) {
			$filenamepic350_3 = hexdec(uniqid()) . '.' . $pic350_3->getClientOriginalExtension();

			Image::make($pic350_3)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_3);
		}
		// **
		if(isset($pic350_4)) {
			$filenamepic350_4 = hexdec(uniqid()) . '.' . $pic350_4->getClientOriginalExtension();

			Image::make($pic350_4)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_4);
		}
		// **
		if(isset($pic350_5)) {
			$filenamepic350_5 = hexdec(uniqid()) . '.' . $pic350_5->getClientOriginalExtension();

			Image::make($pic350_5)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_5);
		}
		// **
		if(isset($pic350_6)) {
			$filenamepic350_6 = hexdec(uniqid()) . '.' . $pic350_6->getClientOriginalExtension();

			Image::make($pic350_6)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_6);
		}
		// **
		if(isset($pic350_7)) {
			$filenamepic350_7 = hexdec(uniqid()) . '.' . $pic350_7->getClientOriginalExtension();

			Image::make($pic350_7)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_7);
		}
		// **
		if(isset($pic350_8)) {
			$filenamepic350_8 = hexdec(uniqid()) . '.' . $pic350_8->getClientOriginalExtension();

			Image::make($pic350_8)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_8);
		}
		// **
		if(isset($pic350_9)) {
			$filenamepic350_9 = hexdec(uniqid()) . '.' . $pic350_9->getClientOriginalExtension();

			Image::make($pic350_9)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_9);
		}
		// **
		if(isset($pic350_10)) {
			$filenamepic350_10 = hexdec(uniqid()) . '.' . $pic350_10->getClientOriginalExtension();

			Image::make($pic350_10)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenamepic350_10);
		}
 







		// **
		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenameogimg);
		}






 


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ
		
		// **
		if(isset($pic480_1)) {
			$picture480_1 = 'uploads/nft/' . $filenamepic480_1;
		}
		// **
		if(isset($pic425_1)) {
			$picture425_1 = 'uploads/nft/' . $filenamepic425_1;
		}
		// **
		if(isset($pic414_1)) {
			$picture414_1 = 'uploads/nft/' . $filenamepic414_1;
		}
		// **
		if(isset($pic375_1)) {
			$picture375_1 = 'uploads/nft/' . $filenamepic375_1;
		}





		// **
		if(isset($pic350_1)) {
			$picture350_1 = 'uploads/nft/' . $filenamepic350_1;
		}
		// **
		if(isset($pic350_2)) {
			$picture350_2 = 'uploads/nft/' . $filenamepic350_2;
		}
		// **
		if(isset($pic350_3)) {
			$picture350_3 = 'uploads/nft/' . $filenamepic350_3;
		}
		// **
		if(isset($pic350_4)) {
			$picture350_4 = 'uploads/nft/' . $filenamepic350_4;
		}
		// **
		if(isset($pic350_5)) {
			$picture350_5 = 'uploads/nft/' . $filenamepic350_5;
		}
		// **
		if(isset($pic350_6)) {
			$picture350_6 = 'uploads/nft/' . $filenamepic350_6;
		}
		// **
		if(isset($pic350_7)) {
			$picture350_7 = 'uploads/nft/' . $filenamepic350_7;
		}
		// **
		if(isset($pic350_8)) {
			$picture350_8 = 'uploads/nft/' . $filenamepic350_8;
		}
		// **
		if(isset($pic350_9)) {
			$picture350_9 = 'uploads/nft/' . $filenamepic350_9;
		}
		// **
		if(isset($pic350_10)) {
			$picture350_10 = 'uploads/nft/' . $filenamepic350_10;
		}
		




		if(isset($picogimg)){
			$pictureogimg = 'uploads/nft/' . $filenameogimg;
		}
		

		// dd($pictureTwo);


		// **
		if(isset($picture480_1)) {
			$nft->pic480_1 = $picture480_1;
		}
		if(isset($picture425_1)) {
			$nft->pic425_1 = $picture425_1;
		}
		if(isset($picture414_1)) {
			$nft->pic414_1 = $picture414_1;
		}
		if(isset($picture375_1)) {
			$nft->pic375_1 = $picture375_1;
		}




		if(isset($picture350_1)) {
			$nft->pic350_1 = $picture350_1;
		}
		if(isset($picture350_2)) {
			$nft->pic350_2 = $picture350_2;
		}
		if(isset($picture350_3)) {
			$nft->pic350_3 = $picture350_3;
		}
		if(isset($picture350_4)) {
			$nft->pic350_4 = $picture350_4;
		}
		if(isset($picture350_5)) {
			$nft->pic350_5 = $picture350_5;
		}
		if(isset($picture350_6)) {
			$nft->pic350_6 = $picture350_6;
		}
		if(isset($picture350_7)) {
			$nft->pic350_7 = $picture350_7;
		}
		if(isset($picture350_8)) {
			$nft->pic350_8 = $picture350_8;
		}
		if(isset($picture350_9)) {
			$nft->pic350_9 = $picture350_9;
		}
		if(isset($picture350_10)) {
			$nft->pic350_10 = $picture350_10;
		}
		


		if(isset($pictureogimg)) {
			$nft->ogimg = $pictureogimg;
		}




		// dd($request->catcollection_id);


		$nft->title = $request->title;
		$nft->price = $request->price;
		$nft->short = $request->short;
		$nft->descr = $request->descr;

		$nft->price1 = $request->price1;
		$nft->price2 = $request->price2;
		$nft->price3 = $request->price3;
		$nft->price4 = $request->price4;
		$nft->price5 = $request->price5;
		$nft->price6 = $request->price6;
		$nft->price7 = $request->price7;
		$nft->price8 = $request->price8;
		$nft->price9 = $request->price9;
		$nft->price10 = $request->price10;
		
		

		
		$nft->metaTitle = $request->metaTitle;
		$nft->description = $request->description;
		$nft->keywords = $request->keywords;
		$nft->author = $request->author;
		
		$nft->schemaDescription = $request->schemaDescription;
		$nft->schemaAuthor = $request->schemaAuthor;
		$nft->schemaPublisher = $request->schemaPublisher;


		$nft->save();

		return redirect()->route('dashboard.nft.home');

	}










	#edit
	public function edit ($id) {
		$nft = Tokennft::find($id);
		return view ('admin.nft.edit', compact('nft'));
	}











	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required',
		], [
			'title.required' => 'заполните это поле',
		]);


		
		

		$nft = Tokennft::find($id);



		$pic480_1 = $request->file('pic480_1');

		$pic350_1 = $request->file('pic350_1');
		$pic350_2 = $request->file('pic350_2');
		$pic350_3 = $request->file('pic350_3');
		$pic350_4 = $request->file('pic350_4');
		$pic350_5 = $request->file('pic350_5');
		$pic350_6 = $request->file('pic350_6');
		$pic350_7 = $request->file('pic350_7');
		$pic350_8 = $request->file('pic350_8');
		$pic350_9 = $request->file('pic350_9');
		$pic350_10 = $request->file('pic350_10');

		$picogimg = $request->file('ogimg');


 


		$old480_1 = $nft->old480_1;

		$old350_1 = $nft->old350_1;
		$old350_2 = $nft->old350_2;
		$old350_3 = $nft->old350_3;
		$old350_4 = $nft->old350_4;
		$old350_5 = $nft->old350_5;
		$old350_6 = $nft->old350_6;
		$old350_7 = $nft->old350_7;
		$old350_8 = $nft->old350_8;
		$old350_9 = $nft->old350_9;
		$old350_10 = $nft->old350_10;

		$old_picogimg = $request->old_picogimg;






		// **
		if(isset($pic480_1)) {
			$filename480_1 = hexdec(uniqid()) . '.' . $pic480_1->getClientOriginalExtension();
			$picture480_1 = 'uploads/nft/' . $filename480_1;


			if(isset($old480_1)) {
				unlink($old480_1);
			}


			$nft->update([
				'pic480_1' => $picture480_1
			]);

			Image::make($pic480_1)->resize(480, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename480_1);


		}
		
		// **
		if(isset($pic350_1)) {
			$filename350_1 = hexdec(uniqid()) . '.' . $pic350_1->getClientOriginalExtension();
			$picture350_1 = 'uploads/nft/' . $filename350_1;

			if(isset($old350_1)) {
				unlink($old350_1);
			}

			$nft->update([
				'pic350_1' => $picture350_1
			]);

			Image::make($pic350_1)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_1);
		}
		// **
		if(isset($pic350_2)) {
			$filename350_2 = hexdec(uniqid()) . '.' . $pic350_2->getClientOriginalExtension();
			$picture350_2 = 'uploads/nft/' . $filename350_2;

			if(isset($old350_2)) {
				unlink($old350_2);
			}

			$nft->update([
				'pic350_2' => $picture350_2
			]);

			Image::make($pic350_2)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_2);
		}
		
		// **
		if(isset($pic350_3)) {
			$filename350_3 = hexdec(uniqid()) . '.' . $pic350_3->getClientOriginalExtension();
			$picture350_3 = 'uploads/nft/' . $filename350_3;

			if(isset($old350_3)) {
				unlink($old350_3);
			}

			$nft->update([
				'pic350_3' => $picture350_3
			]);

			Image::make($pic350_3)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_3);
		}
		
		// **
		if(isset($pic350_4)) {
			$filename350_4 = hexdec(uniqid()) . '.' . $pic350_4->getClientOriginalExtension();
			$picture350_4 = 'uploads/nft/' . $filename350_4;

			if(isset($old350_4)) {
				unlink($old350_4);
			}

			$nft->update([
				'pic350_4' => $picture350_4
			]);

			Image::make($pic350_4)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_4);
		}
		
		// **
		if(isset($pic350_5)) {
			$filename350_5 = hexdec(uniqid()) . '.' . $pic350_5->getClientOriginalExtension();
			$picture350_5 = 'uploads/nft/' . $filename350_5;

			if(isset($old350_5)) {
				unlink($old350_5);
			}

			$nft->update([
				'pic350_5' => $picture350_5
			]);

			Image::make($pic350_5)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_5);
		}
		
		// **
		if(isset($pic350_6)) {
			$filename350_6 = hexdec(uniqid()) . '.' . $pic350_6->getClientOriginalExtension();
			$picture350_6 = 'uploads/nft/' . $filename350_6;

			if(isset($old350_6)) {
				unlink($old350_6);
			}

			$nft->update([
				'pic350_6' => $picture350_6
			]);

			Image::make($pic350_6)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_6);
		}
		
		// **
		if(isset($pic350_7)) {
			$filename350_7 = hexdec(uniqid()) . '.' . $pic350_7->getClientOriginalExtension();
			$picture350_7 = 'uploads/nft/' . $filename350_7;

			if(isset($old350_7)) {
				unlink($old350_7);
			}

			$nft->update([
				'pic350_7' => $picture350_7
			]);

			Image::make($pic350_7)->resize(350, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filename350_7);
		}
		



		// **
		if(isset($picogimg)) {
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/nft/' . $filenameogimg;

			if(isset($old_picogimg)) {
				unlink($old_picogimg);
			}

			$nft->update([
				'ogimg' => $pictureogimg
			]);

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/nft/' . $filenameogimg);
		}

		 
 

		





		


		$nft->update([
			

			'title' => $request->title,
			'price' => $request->price,
			'short' => $request->short,
			'descr' => $request->descr,


			'price1' => $request->price1,
			'price2' => $request->price2,
			'price3' => $request->price3,
			'price4' => $request->price4,
			'price5' => $request->price5,
			'price6' => $request->price6,
			'price7' => $request->price7,
			'price8' => $request->price8,
			'price9' => $request->price9,
			'price10' => $request->price10,


			'metaTitle' => $request->metaTitle,
			'description' => $request->description,
			'keywords' => $request->keywords,
			'author' => $request->author,
			
			'schemaDescription' => $request->schemaDescription,
			'schemaAuthor' => $request->schemaAuthor,
			'schemaPublisher' => $request->schemaPublisher,
		]);

		return redirect()->route('dashboard.nft.home');
	}












	#delete
	public function delete ($id) {

		$nft = Tokennft::find($id);

		$delpic480_1 = $nft->pic480_1;
		$delpic425_1 = $nft->pic425_1;
		$delpic414_1 = $nft->pic414_1;
		$delpic375_1 = $nft->pic375_1;

		$delpic350_1 = $nft->pic350_1;
		$delpic350_2 = $nft->pic350_2;
		$delpic350_3 = $nft->pic350_3;
		$delpic350_4 = $nft->pic350_4;
		$delpic350_5 = $nft->pic350_5;
		$delpic350_6 = $nft->pic350_6;
		$delpic350_7 = $nft->pic350_7;
		$delpic350_8 = $nft->pic350_8;
		$delpic350_9 = $nft->pic350_9;
		$delpic350_10 = $nft->pic350_10;

		if(isset($delpic480_1)) {
			unlink($delpic480_1);
		}
		if(isset($delpic425_1)) {
			unlink($delpic425_1);
		}
		if(isset($delpic414_1)) {
			unlink($delpic414_1);
		}
		if(isset($delpic375_1)) {
			unlink($delpic375_1);
		}
		if(isset($delpic350_1)) {
			unlink($delpic350_1);
		}

		if(isset($delpic350_2)) {
			unlink($delpic350_2);
		}
		if(isset($delpic350_3)) {
			unlink($delpic350_3);
		}
		if(isset($delpic350_4)) {
			unlink($delpic350_4);
		}
		if(isset($delpic350_5)) {
			unlink($delpic350_5);
		}
		if(isset($delpic350_6)) {
			unlink($delpic350_6);
		}
		if(isset($delpic350_7)) {
			unlink($delpic350_7);
		}
		if(isset($delpic350_8)) {
			unlink($delpic350_8);
		}
		if(isset($delpic350_9)) {
			unlink($delpic350_9);
		}
		if(isset($delpic350_10)) {
			unlink($delpic350_10);
		}

		$nft->delete();
		return redirect()->route('dashboard.nft.home');
	}


	








	#
}
