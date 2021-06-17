@extends('layouts.site')


@push('metaTitleDescrKeys')
	<title>{{ $meta->home_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->home_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->home_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->home_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->chome_avtor ?? '' }}">
@endpush


 




@section('content')



<section class="text-gray-600 body-font mb-1 mt-16 sm:mt-18 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			<div class="p-2 w-full">
        <div class="block h-full bg-gradient-to-r from-green-400  to-blue-500 px-8 py-10 md:py-20 rounded-lg overflow-hidden text-center relative transition ">
          <h2 class="tracking-widest text-4xl sm:text-8xl title-font font-extrabold text-gray-900 mb-1">Блог</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>

 
 




<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-2 mx-auto">


		{{-- breadcrumbs --}}
		<header class="text-gray-600 body-font mb-10">
			<div class="container mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
				<nav class="pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
					<a href="{{ route('home.page') }}" class="mr-5 hover:text-indigo-500 ">Главная</a>
					{{-- <a href="{{ route('tovary.home') }}" class="mr-5 hover:text-indigo-500 ">Коллекции</a> --}}
					<a class="mr-5 text-indigo-500">Блог</a>
				</nav>

			</div>
		</header>
		{{-- breadcrumbs end --}}




		@if(true)
    <div class="flex flex-wrap -m-12">
      
			
			@forelse($blogs as $blog)
			<div class="p-12 md:w-1/2 flex flex-col items-start">
        <a href="{{ route('blog.detail', $blog->slug) }}" class="hover:text-indigo-500">
					<h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4 hover:text-indigo-500 transition">{{ $blog->title ?? 'нет данных' }}</h2>


 
				 <picture>
					<source srcset="{{ asset($blog->pic414 ?? 'no-image нет картинки 414') }}" media="(max-width: 414px)" />
					<source srcset="{{ asset($blog->pic480 ?? 'no-image нет картинки 480') }}" media="(max-width: 480px)" />

					<img loading="lazy" class="w-full" src="{{ asset($blog->pic ?? 'uploads/not_image.jpg') }}" alt="запись в блоге" />
				 </picture>
		 
 


					<div class="leading-relaxed mb-8 mt-5 text-justify">{!! $blog->short ?? 'Текст превью публикации...' !!}</div>
				</a>
        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full ">
          <a href="{{ route('blog.detail', $blog->slug) }}" class="text-indigo-500 inline-flex items-center hover:text-gray-500 transition mt-4 " >Читать далее
            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
        <a href="{{ route('about.home', $blog->slug) }}" class="inline-flex items-center">
          <img alt="Юсупов Илья" loading="lazy" src="{{ asset('img/avatar_author.jpg') }}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center" />
          <span class="flex-grow flex flex-col pl-4">
            <span class="title-font font-medium text-gray-900">Юсупов Илья</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">DESIGNER</span>
          </span>
        </a>
      </div>


			@empty
				<p>нет данных</p>
			@endforelse

    </div>
		@endif





  </div>
</section>












@endsection