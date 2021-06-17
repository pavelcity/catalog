<?php

use Illuminate\Support\Facades\Route;


# роуты сайта
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\TovaryController as Tovary;
use App\Http\Controllers\NftController as Nft;
use App\Http\Controllers\ContactController as Contact;
use App\Http\Controllers\BlogController as Blog;
use App\Http\Controllers\NewsController as News;
use App\Http\Controllers\AboutController as About;
use App\Http\Controllers\PravilaController as Pravila;
use App\Http\Controllers\CatcollectionController;



# роуты админки
use App\Http\Controllers\Admin\AdminkaController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\TwoModelsController;
use App\Http\Controllers\Admin\BanernftController;
use App\Http\Controllers\Admin\PodarkiController;

use App\Http\Controllers\Admin\CollectionController;
use App\Http\Controllers\Admin\CategorycollectionController;

use App\Http\Controllers\Admin\NftController;
use App\Http\Controllers\Admin\TokencollectionController;

use App\Http\Controllers\Admin\PravilaController;









 
Route::get('', [HomePageController::class, 'index'])->name('home.page');



#tovary
Route::name('tovary.')->prefix('tovary/')->group(function(){
	Route::get('', [Tovary::class, 'index'])->name('home');
	Route::get('{slug}', [Tovary::class, 'detail'])->name('detail');
});

#категории товаро (коллекции)
Route::name('catcollection.')->prefix('catcollection/')->group(function(){
	Route::get('', [CatcollectionController::class, 'index'])->name('home');
	Route::get('{slug}', [CatcollectionController::class, 'show'])->name('show');
});






#nft
Route::name('nft.')->prefix('nft/')->group(function(){
	Route::get('', [Nft::class, 'index'])->name('home');
	Route::get('{slug}', [Nft::class, 'detail'])->name('detail');
});


#blog
Route::name('blog.')->prefix('blog/')->group(function(){
	Route::get('', [Blog::class, 'index'])->name('home');
	Route::get('{slug}', [Blog::class, 'detail'])->name('detail');
});


#news
Route::name('news.')->prefix('news/')->group(function(){
	Route::get('', [News::class, 'index'])->name('home');
	Route::get('{slug}', [News::class, 'detail'])->name('detail');
});


#about
Route::name('about.')->prefix('about/')->group(function(){
	Route::get('', [About::class, 'index'])->name('home');
});


#contact page
Route::get('contact', [Contact::class, 'index'])->name('contact.home');


Route::name('pravila.')->prefix('pravila/')->group(function(){
	Route::get('', [Pravila::class, 'index'])->name('home');
	Route::get('politics', [Pravila::class, 'politics'])->name('politics');
	Route::get('pokupka', [Pravila::class, 'pokupka'])->name('pokupka');
	Route::get('dostavka', [Pravila::class, 'dostavka'])->name('dostavka');
	Route::get('obmen', [Pravila::class, 'obmen'])->name('obmen');
});
















 

# админка
Route::name('dashboard.')->prefix('dashboard/')->namespace('Admin')->middleware(['auth:sanctum', 'verified', 'web', 'auth'])->group(function () {

	Route::get('', [AdminkaController::class, 'index'])->name('home');




	#Правила
	Route::name('rules.')->prefix('rules/')->group(function () {
		Route::get('', [PravilaController::class, 'index'])->name('home');
		Route::get('create', [PravilaController::class, 'create'])->name('create');
		Route::post('store', [PravilaController::class, 'store'])->name('store');
		Route::get('{id}/edit', [PravilaController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [PravilaController::class, 'update'])->name('update');
		Route::get('{id}/delete', [PravilaController::class, 'delete'])->name('delete');
	});

	#Blog
	Route::name('blog.')->prefix('blog/')->group(function () {
		Route::get('', [BlogController::class, 'index'])->name('home');
		Route::get('create', [BlogController::class, 'create'])->name('create');
		Route::post('store', [BlogController::class, 'store'])->name('store');
		Route::get('{id}/edit', [BlogController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [BlogController::class, 'update'])->name('update');
		Route::get('{id}/delete', [BlogController::class, 'delete'])->name('delete');
	});


	#News
	Route::name('news.')->prefix('news/')->group(function () {
		Route::get('', [NewsController::class, 'index'])->name('home');
		Route::get('create', [NewsController::class, 'create'])->name('create');
		Route::post('store', [NewsController::class, 'store'])->name('store');
		Route::get('{id}/edit', [NewsController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [NewsController::class, 'update'])->name('update');
		Route::get('{id}/delete', [NewsController::class, 'delete'])->name('delete');
	});


	#Contact
	Route::name('contact.')->prefix('contact/')->group(function () {
		Route::get('', [ContactController::class, 'index'])->name('home');
		Route::get('create', [ContactController::class, 'create'])->name('create');
		Route::post('store', [ContactController::class, 'store'])->name('store');
		Route::get('{id}/edit', [ContactController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ContactController::class, 'update'])->name('update');
		Route::get('{id}/delete', [ContactController::class, 'delete'])->name('delete');
	});

	
	#About
	Route::name('about.')->prefix('about/')->group(function () {
		Route::get('', [AboutController::class, 'index'])->name('home');
		Route::get('create', [AboutController::class, 'create'])->name('create');
		Route::post('store', [AboutController::class, 'store'])->name('store');
		Route::get('{id}/edit', [AboutController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [AboutController::class, 'update'])->name('update');
		Route::get('{id}/delete', [AboutController::class, 'delete'])->name('delete');
	});



 

	
	#Settings
	Route::name('settings.')->prefix('settings/')->group(function () {
		Route::get('', [SettingsController::class, 'index'])->name('home');
		Route::get('create', [SettingsController::class, 'create'])->name('create');
		Route::post('store', [SettingsController::class, 'store'])->name('store');
		Route::get('{id}/edit', [SettingsController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [SettingsController::class, 'update'])->name('update');
		Route::get('{id}/delete', [SettingsController::class, 'delete'])->name('delete');

		#two models
		Route::name('twomodels.')->prefix('twomodels/')->group(function(){
			Route::get('', [TwoModelsController::class, 'index'])->name('home');
			Route::get('create', [TwoModelsController::class, 'create'])->name('create');
			Route::post('store', [TwoModelsController::class, 'store'])->name('store');
			Route::get('{id}/edit', [TwoModelsController::class, 'edit'])->name('edit');
			Route::post('{id}/update', [TwoModelsController::class, 'update'])->name('update');
			Route::get('{id}/delete', [TwoModelsController::class, 'delete'])->name('delete');
		});

		#baner nft
		Route::name('banernft.')->prefix('banernft/')->group(function(){
			Route::get('', [BanernftController::class, 'index'])->name('home');
			Route::get('create', [BanernftController::class, 'create'])->name('create');
			Route::post('store', [BanernftController::class, 'store'])->name('store');
			Route::get('{id}/edit', [BanernftController::class, 'edit'])->name('edit');
			Route::post('{id}/update', [BanernftController::class, 'update'])->name('update');
			Route::get('{id}/delete', [BanernftController::class, 'delete'])->name('delete');
		});

		#подарочные наборы
		Route::name('podarki.')->prefix('podarki/')->group(function(){
			Route::get('', [PodarkiController::class, 'index'])->name('home');
			Route::get('create', [PodarkiController::class, 'create'])->name('create');
			Route::post('store', [PodarkiController::class, 'store'])->name('store');
			Route::get('{id}/edit', [PodarkiController::class, 'edit'])->name('edit');
			Route::post('{id}/update', [PodarkiController::class, 'update'])->name('update');
			Route::get('{id}/delete', [PodarkiController::class, 'delete'])->name('delete');
		});

	});







	#Коллекции
	Route::name('collections.')->prefix('collections/')->group(function () {
		Route::get('', [CollectionController::class, 'index'])->name('home');
		Route::get('create', [CollectionController::class, 'create'])->name('create');
		Route::post('store', [CollectionController::class, 'store'])->name('store');
		Route::get('{id}/edit', [CollectionController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [CollectionController::class, 'update'])->name('update');
		Route::get('{id}/delete', [CollectionController::class, 'delete'])->name('delete');

		#коллекции категории
		Route::name('catcollection.')->prefix('catcollection/')->group(function(){
			Route::get('', [CategorycollectionController::class, 'index'])->name('home');
			Route::get('create', [CategorycollectionController::class, 'create'])->name('create');
			Route::post('store', [CategorycollectionController::class, 'store'])->name('store');
			Route::get('{id}/edit', [CategorycollectionController::class, 'edit'])->name('edit');
			Route::post('{id}/update', [CategorycollectionController::class, 'update'])->name('update');
			Route::get('{id}/delete', [CategorycollectionController::class, 'delete'])->name('delete');
		});

	});




	
	#Nft
	Route::name('nft.')->prefix('nft/')->group(function () {
		Route::get('', [NftController::class, 'index'])->name('home');
		Route::get('create', [NftController::class, 'create'])->name('create');
		Route::post('store', [NftController::class, 'store'])->name('store');
		Route::get('{id}/edit', [NftController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [NftController::class, 'update'])->name('update');
		Route::get('{id}/delete', [NftController::class, 'delete'])->name('delete');

		#Коллекция токена
		Route::name('token.')->prefix('token/')->group(function(){
			Route::get('', [TokencollectionController::class, 'index'])->name('home');
			Route::get('create', [TokencollectionController::class, 'create'])->name('create');
			Route::post('store', [TokencollectionController::class, 'store'])->name('store');
			Route::get('{id}/edit', [TokencollectionController::class, 'edit'])->name('edit');
			Route::post('{id}/update', [TokencollectionController::class, 'update'])->name('update');
			Route::get('{id}/delete', [TokencollectionController::class, 'delete'])->name('delete');
		});

	});

	#
});













Route::get('logoutadminka', [AdminkaController::class, 'logoutAdminka'])->name('admin.logout');

Route::fallback(function () {
	abort(404);
});