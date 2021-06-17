@extends('layouts.site')


@push('metaTitleDescrKeys')
	<title>{{ $meta->home_title ?? 'Правила' }}</title>
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
          <h2 class="tracking-wide text-2xl sm:text-5xl title-font font-extrabold text-gray-900 mb-1">Правила сайта</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>









<section class="text-gray-600 body-font">
  <div class="container px-5 py-10 mx-auto">
    <div class="flex flex-wrap -m-4">
     
			<div class="p-4 lg:w-1/2 w-full">
        <a href="{{ route('pravila.politics') }}" class="block h-full bg-gray-200 hover:bg-gray-200 transition bg-opacity-75 px-8 p-8 rounded-lg text-center">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Правила</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Политика конфиденциальности</h1>
        </a>
      </div>

			<div class="p-4 lg:w-1/2 w-full">
        <a href="{{ route('pravila.pokupka') }}" class="block h-full bg-gray-200 hover:bg-gray-200 transition bg-opacity-75 px-8 p-8 rounded-lg text-center">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Правила</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Условия покупки</h1>
        </a>
      </div>

			<div class="p-4 lg:w-1/2 w-full">
        <a href="{{ route('pravila.dostavka') }}" class="block h-full bg-gray-200 hover:bg-gray-200 transition bg-opacity-75 px-8 p-8 rounded-lg text-center">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Правила</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Условия доставки</h1>
        </a>
      </div>

			<div class="p-4 lg:w-1/2 w-full">
        <a href="{{ route('pravila.obmen') }}" class="block h-full bg-gray-200 hover:bg-gray-200 transition bg-opacity-75 px-8 p-8 rounded-lg text-center">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Правила</h2>
          <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Условия возврата/обмена</h1>
        </a>
      </div>







    </div>
  </div>
</section>













@endsection