<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Image;

class ContactController extends Controller
{
    

	#index
	public function index () {
		$contacts = Contact::latest()->get();
		return view ('admin.contact.index', compact('contacts'));
	}







	#create
	public function create () {
		return view ('admin.contact.create');
	}









	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);

 
		
		


		$contact = new Contact;

		$picogimg = $request->file('ogimg');



		if(isset($picogimg)) {
			// $filenameogimg = $picogimg->getClientOriginalName();
			$filenameogimg = hexdec(uniqid()) . '.' . $picogimg->getClientOriginalExtension();

			Image::make($picogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/contact/' . $filenameogimg);
		}


		//Сохраняем оригинальную картинку в БАЗУ ДАННЫХ

		if(isset($picogimg)){
			$pictureogimg = 'uploads/contact/' . $filenameogimg;
		}
		

		// dd($pictureTwo);

		if(isset($pictureogimg)) {
			$contact->ogimg = $pictureogimg;
		}








		$contact->title = $request->title;

		$contact->adres = $request->adres;
		$contact->phone = $request->phone;
		$contact->email = $request->email;
		$contact->map = $request->map;

		
		$contact->metaTitle = $request->metaTitle;
		$contact->description = $request->description;
		$contact->keywords = $request->keywords;
		$contact->author = $request->author;
		
		$contact->schemaDescription = $request->schemaDescription;
		$contact->schemaAuthor = $request->schemaAuthor;
		$contact->schemaPublisher = $request->schemaPublisher;


		$contact->save();

		return redirect()->route('dashboard.contact.home');

	}










	#edit
	public function edit ($id) {
		$contact = Contact::find($id);
		return view ('admin.contact.edit', compact('contact'));
	}








	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'заполните это поле'
		]);


		
		


		$contact = Contact::find($id);



		$ogimg = $request->file('ogimg');
		$old_picogimg = $request->old_picogimg;






 



		if(isset($ogimg)) {
			// $filename414 = $pic414->getClientOriginalName();
			$filenameogimg = hexdec(uniqid()) . '.' . $ogimg->getClientOriginalExtension();
			$pictureogimg = 'uploads/contact/' . $filenameogimg;

			$contact->update([
				'ogimg' => $pictureogimg
			]);

			if(isset($old_picogimg)) {
				unlink($old_picogimg);
			}

			Image::make($ogimg)->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/contact/' . $filenameogimg);
		}






		$contact->update([
			'title' => $request->title,

			'adres' => $request->adres,
			'phone' => $request->phone,
			'email' => $request->email,
			'map' => $request->map,

			'metaTitle' => $request->metaTitle,
			'description' => $request->description,
			'keywords' => $request->keywords,
			'author' => $request->author,
			
			'schemaDescription' => $request->schemaDescription,
			'schemaAuthor' => $request->schemaAuthor,
			'schemaPublisher' => $request->schemaPublisher,
		]);

		return redirect()->route('dashboard.contact.home');
	}
















#delete
public function delete($id) {
	$contact = Contact::find($id);

	$delogimg = $contact->ogimg;

	if(isset($delogimg)) {
		unlink($delogimg);
	}


	$contact->delete();
	return redirect()->route('dashboard.contact.home');
}




	#
}
