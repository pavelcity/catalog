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
          <h2 class="tracking-wide text-2xl sm:text-5xl title-font font-extrabold text-gray-900 mb-1">
						{{ $pravila->politictitle ?? 'Политика конфиденциальности' }}
					</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>

 


<section class="text-gray-600 body-font">
  <div class="container px-5 py-2 mx-auto">
    <div class="text-center mb-10 text-justify">
      <h1 class="sm:text-3xl text-2xl font-medium text-justify title-font text-gray-900 mb-4">
				{{ $pravila->politictitle ?? 'Политика конфиденциальности' }}
				
			</h1>
			
				{!! $pravila->politic !!}

    </div>
</section>













@endsection