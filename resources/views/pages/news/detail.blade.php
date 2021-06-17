@extends('layouts.site')


@push('metaTitleDescrKeys')
	<!-- Open Graph: Article -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{ $info->title }}">
	<meta property="og:description" content="{{ $info->description }}">
	<meta property="og:url" content="{{ url()->current() }}">

	<meta property="og:image" content="{{ asset($info->ogimg ?? '') }}" />
	{{-- <meta property="og:image" content="{{ asset($blog->ogimg ?? $blog->pic) }}" /> --}}
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" /> 
	<meta property="og:site_name" content="{{ route('home.page') }}">


	<meta property="og:locale" content="RU">
	<meta property="og:author" content="{{ $info->author ?? '' }}">
	<meta property="og:published_time" content="{{ $info->created_at ?? '' }}">
	<meta property="og:modified_time" content="{{ $info->updated_at ?? '' }}">
	<meta property="og:tag" content="{{ $info->keywords ?? '' }}">


	<!-- Meta Data -->
	<title>{{ $info->metaTitle ?? '' }}</title>
	<meta name="description" content="{{ $info->description ?? '' }}">
	<meta name="keywords" content="{{ $info->keywords ?? '' }}">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta name="author" content="{{ $info->author ?? '' }}">
@endpush

 

 







@section('content')




<section class="text-gray-600 body-font mb-1 mt-16 sm:mt-18 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			<div class="p-2 w-full">
        <div class="block h-full bg-gradient-to-r from-green-400  to-blue-500 px-8 py-10 md:py-20 rounded-lg overflow-hidden text-center relative transition ">
          <h2 class="tracking-widest text-2xl sm:text-5xl title-font font-extrabold text-gray-900 mb-1">{{ $info->title ?? '' }}</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>








<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-4 mx-auto">


					{{-- breadcrumbs --}}
					<header class="text-gray-600 body-font mb-16 ">
						<div class="container mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
							<nav class="pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
								<a href="{{ route('home.page') }}" class="mr-5 hover:text-indigo-500 ">Главная</a>
								<a href="{{ route('news.home') }}" class="mr-5 hover:text-indigo-500 ">Новости</a>
								<a class="mr-5 text-indigo-500">{{ $info->title }}</a>
							</nav>
			
						</div>
					</header>
					{{-- breadcrumbs end --}}

					


    <div class="-my-8 divide-y-2 divide-gray-100">
      
			
			


			<div class="py-8 flex flex-wrap md:flex-nowrap">
        
				<div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
					<img loading="lazy" alt="{{ $info->title }}" class="w-full md:w-4/5 block" src="{{ asset($info->smallpic ?? 'uploads/not_image.jpg') }}">

          {{-- <span class="font-semibold title-font text-gray-700 mt-10">{{ $info->title }}</span> --}}
          <span class="mt-1 text-gray-500 text-sm my-5">{{ $info->created_at }}</span>

					<script rel="prefetch" src="https://yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-curtain data-shape="round" data-color-scheme="whiteblack" data-limit="0" data-more-button-type="short" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp"></div>

					<a href="{{ route('news.home') }}" class="text-indigo-500 inline-flex items-center mt-10 hover:text-gray-500">
            <svg class="w-4 h-4 ml-0 mr-2 transform rotate-180" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
						Назад
          </a>

        </div>




				
        <div class="md:flex-grow">
          <h2 class="text-2xl font-medium text-gray-900 title-font mb-10">{{ $info->title }}</h2>

					{{-- <img alt="" class="" src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"> --}}

          <div class="leading-relaxed mt-10 text-justify">
						{!! $info->descr !!}
					</div>
					
          <a href="{{ route('news.home') }}" class="text-indigo-500 inline-flex items-center mt-10 hover:text-gray-500">
            <svg class="w-4 h-4 ml-0 mr-2 transform rotate-180" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5l7 7-7 7"></path>
            </svg>
						Назад
          </a>
        </div>
      </div>




    </div>
  </div>
</section>





@push('schema')
<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "NewsArticle",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "{{ url()->current() }}"
		},
		"headline": "{{ $info->title ?? '' }}",
		"description": "{{ $info->schemaDescription ??  $info->description}}",
		"image": "{{ asset($info->smallpic ?? '') }}",  
		"author": {
			"@type": "Person",
			"name": "{{ $info->schemaAuthor ?? '' }}"
		},  
		"publisher": {
			"@type": "Organization",
			"name": "{{ $info->schemaPublisher ?? '' }}",
			"logo": {
				"@type": "ImageObject",
				"url": "{{ asset('img/logo.png' ?? 'no-image') }}"
			}
		},
		"datePublished": "{{ $info->created_at ?? '' }}",
		"dateModified": "{{ $info->updated_at ?? '' }}"
	}
	</script>
@endpush






@endsection