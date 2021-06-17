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
          <h2 class="tracking-widest text-4xl sm:text-8xl title-font font-extrabold text-gray-900 mb-1">Новости</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>











<section class="text-gray-600 body-font mt-4">
  <div class="container px-5 py-1 mx-auto">

		{{-- breadcrumbs --}}
		<header class="text-gray-600 body-font mb-16">
			<div class="container mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
				<nav class="pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
					<a href="{{ route('home.page') }}" class="mr-5 hover:text-indigo-500 ">Главная</a>
					<a class="mr-5 text-indigo-500">Новости</a>
				</nav>

			</div>
		</header>
		{{-- breadcrumbs end --}}
		

    <div class="flex flex-wrap -m-4">
      

			@forelse($news as $info)

			<div class="lg:w-1/3 md:w-1/2 w-full p-4 mb-5">
        <a href="{{ route('news.detail', $info->slug) }}" class="flex relative">


					
					<picture class="absolute inset-0 w-full h-full ">
						<source srcset="{{ asset($info->pic414 ?? 'no-image нет картинки 414') }}" media="(max-width: 414px)" />
						<source srcset="{{ asset($info->pic480 ?? 'no-image нет картинки 480') }}" media="(max-width: 480px)" />
	
						<img loading="lazy" class="absolute inset-0 w-full h-full object-cover object-center" src="{{ asset($info->pic ?? 'uploads/not_image.jpg') }}" alt="запись в блоге" />
					</picture>


          <div class="px-8 py-20 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100 transition duration-500 ease-in-out">
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3    md:h-14   md:overflow-hidden ">{{ $info->title }}</h1>
            <div class="leading-relaxed  md:h-14  md:overflow-hidden">{!! $info->short !!}</div>
          </div>

        </a>
				<h1 class="title-font text-xl sm:text-2xl font-medium text-gray-900 mt-3">
					<a href="{{ route('news.detail', $info->slug) }}" class="hover:text-indigo-500 transition">{{ $info->title }}</a>
				</h1>
      </div>

			@empty
				<p>нет данных</p>
			@endforelse














     




    </div>
  </div>
</section>







@endsection