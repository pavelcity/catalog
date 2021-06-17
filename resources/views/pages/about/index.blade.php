@extends('layouts.site')


@push('metaTitleDescrKeys')
	<!-- Open Graph: Article -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{ $about->title ?? '' }}">
	<meta property="og:description" content="{{ $about->description ?? '' }}">
	<meta property="og:url" content="{{ url()->current() }}">

	<meta property="og:image" content="{{ asset($about->ogimg ?? '') }}" />
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" /> 
	<meta property="og:site_name" content="{{ route('home.page') }}">


	<meta property="og:locale" content="RU">
	<meta property="og:author" content="{{ $about->author ?? '' }}">
	<meta property="og:published_time" content="{{ $about->created_at ?? '' }}">
	<meta property="og:modified_time" content="{{ $about->updated_at ?? '' }}">
	<meta property="og:tag" content="{{ $about->keywords ?? '' }}">


	<!-- Meta Data -->
	<title>{{ $about->metaTitle ?? '' }}</title>
	<meta name="description" content="{{ $about->description ?? '' }}">
	<meta name="keywords" content="{{ $about->keywords ?? '' }}">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta name="author" content="{{ $about->author ?? '' }}">
@endpush

 
 





 


@section('content')



@if(true)
@if(isset($about))
<section class="text-gray-600 body-font mt-12">
  <div class="container mx-auto flex px-5 py-10 items-center justify-center flex-col">

		<picture>
			<source srcset="{{ asset($about->pic375 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
			<source srcset="{{ asset($about->pic414 ?? 'uploads/not_image.jpg') }}" media="(max-width: 414px)" />
			<source srcset="{{ asset($about->pic480 ?? 'uploads/not_image.jpg') }}" media="(max-width: 480px)" />
			<source srcset="{{ asset($about->pic600 ?? 'uploads/not_image.jpg') }}" media="(max-width: 600px)" />
			<source srcset="{{ asset($about->pic768 ?? 'uploads/not_image.jpg') }}" media="(max-width: 768px)" />
			<source srcset="{{ asset($about->pic992 ?? 'uploads/not_image.jpg') }}" media="(max-width: 992px)" />
			<source srcset="{{ asset($about->pic1024 ?? 'uploads/not_image.jpg') }}" media="(max-width: 1024px)" />
			<source srcset="{{ asset($about->pic1366 ?? 'uploads/not_image.jpg') }}" media="(max-width: 1366px)" />
			<source srcset="{{ asset($about->pic1440 ?? 'uploads/not_image.jpg') }}" media="(max-width: 1440px)" />
			<img loading="lazy" class="w-full" src="{{ asset($about->pic1500 ?? 'uploads/not_image.jpg') }}" alt="{{ $about->title }}" />
		 </picture>






    <div class="text-center lg:w-2/3 w-full mt-10">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-extrabold text-gray-900">
				{{ $about->title ?? '	Рад знакомству. Меня зовут Илья. ' }}
			</h1>

      <div class="mb-8 leading-relaxed text-justify">
				{!! $about->descr ?? 'Я дизайнер. Рисую красивые картины и создаю брендовую одежду' !!}
			</div>


      <div class="flex justify-center">
        <a href="tel:{{ $about->phone ?? '8 800 000-00-00' }}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
					{{ $about->phone ?? '8 800 000-00-00' }}
				</a>

        <a href="mailto:{{ $about->email ?? 'mail@me.me' }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">
					{{ $about->email ?? 'mail@me.me' }}
				</a>
      </div>


    </div>
  </div>
</section>
@else
<p>нет данных</p>
@endif
@endif






@endsection