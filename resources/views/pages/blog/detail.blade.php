@extends('layouts.site')






@push('metaTitleDescrKeys')
	<!-- Open Graph: Article -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{ $blog->title }}">
	<meta property="og:description" content="{{ $blog->description }}">
	<meta property="og:url" content="{{ url()->current() }}">

	<meta property="og:image" content="{{ asset($blog->ogimg ?? '') }}" />
	{{-- <meta property="og:image" content="{{ asset($blog->ogimg ?? $blog->pic) }}" /> --}}
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" /> 
	<meta property="og:site_name" content="{{ route('home.page') }}">


	<meta property="og:locale" content="RU">
	<meta property="og:author" content="{{ $blog->author ?? '' }}">
	<meta property="og:published_time" content="{{ $blog->created_at ?? '' }}">
	<meta property="og:modified_time" content="{{ $blog->updated_at ?? '' }}">
	<meta property="og:tag" content="{{ $blog->keywords ?? '' }}">


	<!-- Meta Data -->
	<title>{{ $blog->metaTitle ?? '' }}</title>
	<meta name="description" content="{{ $blog->description ?? '' }}">
	<meta name="keywords" content="{{ $blog->keywords ?? '' }}">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta name="author" content="{{ $blog->author ?? '' }}">
@endpush


 

 
 




@section('content')


<section class="text-gray-600 body-font mb-1 mt-16 sm:mt-18 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			<div class="p-2 w-full">
        <div class="block h-full bg-gradient-to-r from-green-400  to-blue-500 px-8 py-10 md:py-20 rounded-lg overflow-hidden text-center relative transition ">
          <h2 class="tracking-widest text-2xl sm:text-5xl title-font font-extrabold text-gray-900 mb-1">{{ $blog->title ?? 'Название заметки' }}</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>

 




<section class="text-gray-600 body-font">
  <div class="container px-5 py-4 mx-auto flex flex-col">
    <div class="w-full lg:w-4/5 mx-auto ">


			{{-- breadcrumbs --}}
		<header class="text-gray-600 body-font mb-10 ">
			<div class="container mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
				<nav class="pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
					<a href="{{ route('home.page') }}" class="mr-5 hover:text-indigo-500 ">Главная</a>
					<a href="{{ route('blog.home') }}" class="mr-5 hover:text-indigo-500 ">Блог</a>
					<a class="mr-5 text-indigo-500">{{ $blog->title ?? 'Название заметки' }}</a>
				</nav>

			</div>
		</header>
		{{-- breadcrumbs end --}}





      <div class="flex flex-col sm:flex-row mt-0">
        <div class="sm:w-1/3 text-left sm:pr-8 sm:py-0">
          

					<img loading="lazy" class="w-full" src="{{ asset($blog->smallpic ?? 'uploads/not_image.jpg') }}" alt="{{ $blog->title }}" />

					<a href="{{ route('about.home') }}" class="inline-flex mt-10 items-center">
						<img alt="Юсупов Илья" src="{{ asset('img/avatar_author.jpg') }}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center" />
						<span class="flex-grow flex flex-col pl-4">
							<span class="title-font font-medium text-gray-900">Автор</span>
							<span class="text-gray-400 text-xs tracking-widest mt-0.5">DESIGNER</span>
						</span>
					</a>
					
					<a href="{{ route('blog.home') }}" class="inline-block w-full  text-indigo-500 inline-flex items-center mt-10">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-0 mr-2 transform rotate-180" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
						Назад
          </a>
        </div>

  


        <div class="sm:w-2/3 sm:pl-8 sm:py-0 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0  sm:text-left">

				<script rel="prefetch" src="https://yastatic.net/share2/share.js"></script>
				<div class="ya-share2" data-curtain data-shape="round" data-color-scheme="whiteblack" data-limit="0" data-more-button-type="short" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp"></div>


					<h1 class="text-2xl mb-5 mt-5">{{ $blog->title ?? 'Название заметки' }}</h1>

          <div class="leading-relaxed text-lg mb-4 text-justify">
						{!! $blog->descr ?? 'нет данных' !!}
					</div>
          

          <a href="{{ route('blog.home') }}" class="text-indigo-500 inline-flex items-center mt-10 block">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-0 mr-2 transform rotate-180" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
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
		"@type": "BlogPosting",
		"mainEntityOfPage": {
			"@type": "WebPage",
			"@id": "{{ url()->current() }}"
		},
		"headline": "{{ $blog->title ?? '' }}",
		"description": "{{ $blog->schemaDescription ??  $blog->description}}",
		"image": "{{ asset($blog->smallpic ?? '') }}",  
		"author": {
			"@type": "Person",
			"name": "{{ $blog->schemaAuthor ?? '' }}"
		},  
		"publisher": {
			"@type": "Organization",
			"name": "{{ $blog->schemaPublisher ?? '' }}",
			"logo": {
				"@type": "ImageObject",
				"url": "{{ asset('img/logo.png' ?? 'no-image') }}"
			}
		},
		"datePublished": "{{ $blog->created_at ?? '' }}",
		"dateModified": "{{ $blog->updated_at ?? '' }}"
	}
	</script>
@endpush







@endsection