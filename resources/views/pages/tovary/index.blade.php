@extends('layouts.site')


@push('metaTitleDescrKeys')
	<title>{{ $meta->home_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->home_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->home_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->home_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->chome_avtor ?? '' }}">
@endpush


 




@section('content')


@if(false)
<section class="text-gray-600 body-font">
  <div class=" px-5 py-6 mx-auto flex flex-col">
    <div class="w-full mx-auto">
      <div class="rounded-lg h-auto ">
        <img alt="" class="object-cover object-center h-full w-full" src="{{ asset('img/nft_shorts.jpg') }}">
				<img class="mx-auto block -mt-14 shadow-md rounded-full" style="width: 150px; " src="{{ asset('img/nft_logo.jpg') }}" alt="">
      </div>
    </div>
  </div>
</section>
@endif






<section class="text-gray-600 body-font mb-1 mt-16 sm:mt-18 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			<div class="p-2 w-full">
        <div class="block h-full bg-gradient-to-r from-green-400  to-blue-500 px-8 py-10 md:py-20 rounded-lg overflow-hidden text-center relative transition ">
          <h2 class="tracking-widest text-4xl sm:text-8xl title-font font-extrabold text-gray-900 mb-1">Коллекции</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>









{{-- filters --}}

<header class="text-gray-600 body-font mt-10">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

    <nav class="md:mr-auto md:ml-0 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="{{ route('tovary.home') }}" class="mr-5 text-indigo-700 hover:text-indigo-500 text-xl mr-5">Все</a>

			@forelse($catscollection as $cat)
			<a href="{{ route('catcollection.show', $cat->slug) }}" class="mr-5 text-gray-900 hover:text-indigo-500 text-xl mr-5">{{ $cat->title ?? 'нет категории' }}</a>
			@empty
				<p>нет категорий</p>
			@endforelse
    
    </nav>

  </div>
</header>










{{-- ----оригинал start NEW--- --}}
@if(true)
@forelse($tovary as $tovar)
	

<section class="text-gray-600 body-font mt-10 ">
  <div class="container px-5 py-0 mx-auto">
    <div class="flex flex-wrap w-full mb-1">
      <div class="w-full mb-1 lg:mb-0">
				
        <a href="{{ route('catcollection.show', $tovar->catcollection->slug) }}"  class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">{{ $tovar->catcollection->title ?? 'нет категории' }}</a>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
    </div>

  </div>
</section>


 
	
	<section class="text-gray-00 body-font mt-1">
		<div class="container px-5 py-2 mx-auto">

			<div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

				<div class="p-4 md:w-1/3 sm:mb-0 mb-6 hidden sm:block">
					<div class="rounded-lg overflow-hidden">
						<a href="{{ route('tovary.detail', $tovar->slug) }}">
							<picture class="object-cover object-center h-full w-full">
								<source loading="lazy" srcset="{{ asset($tovar->pic375_1 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
								<img loading="lazy" class="object-cover object-center h-full w-full" src="{{ asset($tovar->pic400_1 ?? 'uploads/not_image.jpg') }}" alt="{{ $tovar->title ?? '' }}" />
							</picture>
						</a>
					</div>
				</div>


				<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
					<div class="rounded-lg overflow-hidden">
						<a href="{{ route('tovary.detail', $tovar->slug) }}">
							<picture class="object-cover object-center h-full w-full">
								<source loading="lazy" srcset="{{ asset($tovar->pic375_2 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
								<img loading="lazy" class="object-cover object-center h-full w-full" src="{{ asset($tovar->pic400_2 ?? 'uploads/not_image.jpg') }}" alt="{{ $tovar->title ?? '' }}" />
							</picture>
						</a>
					</div>
				</div>


				<div class="p-4 md:w-1/3 sm:mb-0 mb-6 hidden sm:block">
					<div class="rounded-lg overflow-hidden">
						<a href="{{ route('tovary.detail', $tovar->slug) }}">
							<picture class="object-cover object-center h-full w-full">
								<source loading="lazy" srcset="{{ asset($tovar->pic375_3 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
								<img loading="lazy" class="object-cover object-center h-full w-full" src="{{ asset($tovar->pic400_3 ?? 'uploads/not_image.jpg') }}" alt="{{ $tovar->title }}" />
							</picture>
						</a>
					</div>
				</div>

			</div>

			<a href="{{ route('tovary.detail', $tovar->slug) }}" class="text-4xl text-center mb-5 block text-gray-800 hover:text-gray-500 tranisiton mt-1">{{ $tovar->title }}</a>

			<a href="{{ route('tovary.detail', $tovar->slug) }}" class="text-center block mt-5 uppercase text-gray-800 hover:text-gray-500 tranisiton">Купить</a>

		</div>
	</section>





@empty
	<p class="text-center bg-indigo-400 text-white">ничего нет</p>
@endforelse
@endif
{{-- ----оригинал end NEW--- --}}










@if(false)
<section class="text-gray-600 body-font mt-10" id="hudy">
  <div class="container px-5 py-0 mx-auto">
    <div class="flex flex-wrap w-full mb-2">
      <div class="w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Худи</h1>
        <div class="h-1 w-20 bg-indigo-500 rounded"></div>
      </div>
    </div>

  </div>
</section>

<section class="text-gray-600 body-font mt-5">
  <div class="container px-5 py-2 mx-auto">
   

    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="{{ route('tovary.detail') }}"><img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('img/200.jpg') }}"></a>
        </div>
      </div>

      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="{{ route('tovary.detail') }}"><img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('img/201.jpg') }}"></a>
        </div>
      </div>

      <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="{{ route('tovary.detail') }}"><img alt="content" class="object-cover object-center h-full w-full" src="{{ asset('img/202.jpg') }}"></a>
        </div>
      </div>

    </div>

		<a href="{{ route('tovary.detail') }}" class="text-4xl text-center mb-5 block text-gray-800 hover:text-gray-500 tranisiton">Наименование худи</a>
		<a href="{{ route('tovary.detail') }}" class="text-center block mt-5 uppercase text-gray-800 hover:text-gray-500 tranisiton">Купить</a>

  </div>
</section>
@endif





 
















@if(false)
<section class="text-gray-600 body-font">
  <div class="container px-5 py-2 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-center">
      
			
			<div class="w-full mb-10 px-4">
        {{-- <div class="rounded-lg h-64 overflow-hidden">
          <img alt="" class="object-cover object-center h-full w-1/3" src="https://images.unsplash.com/photo-1539032415515-5888f32f3579?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
        </div> --}}
				<img alt="" class="oh-full w-1/3" src="https://images.unsplash.com/photo-1539032415515-5888f32f3579?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
				<img alt="" class="h-full w-1/3" src="https://images.unsplash.com/photo-1539032415515-5888f32f3579?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
				<img alt="" class=" h-full w-1/3" src="https://images.unsplash.com/photo-1539032415515-5888f32f3579?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">


        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Свитер светлый</h2>
        <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
        <button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Смотреть</button>
      </div>





      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="https://images.unsplash.com/photo-1539032136976-1755d8624f93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Чепчик</h2>
        <p class="leading-relaxed text-base">Williamsburg occupy sustainable snackwave gochujang. Pinterest cornhole brunch, slow-carb neutra irony.</p>
        <button class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Смотреть</button>
      </div>


    </div>
  </div>
</section>
@endif







@endsection