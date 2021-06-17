@extends('layouts.site')



@push('metaTitleDescrKeys')
	<!-- Open Graph: Article -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{ $collekcia->title ?? '' }}">
	<meta property="og:description" content="{{ $collekcia->description ?? '' }}">
	<meta property="og:url" content="{{ url()->current() }}">

	<meta property="og:image" content="{{ asset($collekcia->ogimg ?? '') }}" />
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" /> 
	<meta property="og:site_name" content="{{ route('home.page') }}">


	<meta property="og:locale" content="RU">
	<meta property="og:author" content="{{ $collekcia->author ?? '' }}">
	<meta property="og:published_time" content="{{ $collekcia->created_at ?? '' }}">
	<meta property="og:modified_time" content="{{ $collekcia->updated_at ?? '' }}">
	<meta property="og:tag" content="{{ $collekcia->keywords ?? '' }}">


	<!-- Meta Data -->
	<title>{{ $collekcia->metaTitle ?? '' }}</title>
	<meta name="description" content="{{ $collekcia->description ?? '' }}">
	<meta name="keywords" content="{{ $collekcia->keywords ?? '' }}">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta name="author" content="{{ $collekcia->author ?? '' }}">
@endpush






@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush







@section('content')


<section class="text-gray-600 body-font overflow-hidden mt-1 sm:mt-10">
  <div class="container px-5 py-20 mx-auto">
   
		<div class="lg:w-4/5 mx-auto flex flex-wrap">
      



			{{-- <img alt="" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset($collekcia->pic400_1 ?? 'img/200.jpg') }}"> --}}

			<div class="lg:w-1/2 w-full ">
				<div
				style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
				class="swiper-container mySwiper4"
				>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						{{-- <img class="w-full rounded" src="{{ asset($collekcia->pic400_1 ?? 'img/200.jpg') }}" /> --}}
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_1 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic400_1 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_2 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic400_2 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_3 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic400_3 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_4 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic400_4 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_5 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic400_5 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>

			<div thumbsSlider="" class="swiper-container mySwiper3 mt-3">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_1 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic375_1 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_2 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic375_2 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_3 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic375_3 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_4 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic375_4 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
					<div class="swiper-slide">
						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($collekcia->pic375_5 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic375_5 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
						 </picture>
					</div>
				</div>
			</div>
		</div>




      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-1 mt-6 lg:mt-0">

				{{-- breadcrumbs --}}
				<header class="text-gray-600 body-font mb-10">
					<div class="container mx-auto flex flex-wrap p-0 flex-col md:flex-row items-center">
						<nav class="pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
							<a href="{{ route('home.page') }}" class="mr-5 hover:text-indigo-500 ">Главная</a>
							<a href="{{ route('tovary.home') }}" class="mr-5 hover:text-indigo-500 ">Коллекции</a>
							<a class="mr-5 text-indigo-500">{{ $collekcia->title ?? 'Наименование худи 00' }}</a>
						</nav>
	
					</div>
				</header>
				{{-- breadcrumbs end --}}

 
 
        <h1 class="text-gray-900 text-3xl title-font font-extrabold mb-10">{{ $collekcia->title ?? 'Наименование худи 00' }}</h1>

				{{-- <div class="ya-share2 mb-10" data-services="vkontakte,twitter,facebook,messenger"></div> --}}
				<script src="https://yastatic.net/share2/share.js"></script>
				<div class="ya-share2" data-curtain data-shape="round" data-color-scheme="whiteblack" data-limit="0" data-more-button-type="short" data-services="messenger,vkontakte,facebook,odnoklassniki,telegram,twitter,whatsapp"></div>
        

        <div class="leading-relaxed mb-10 mt-10 text-justify">
					{!! $collekcia->descr ?? 'Полное описание (текст)' !!} 
				</div>
        
				<div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Размер</span>
          <span class="ml-auto text-gray-900">{{ $collekcia->size ?? 'любой размеров' }}</span>
        </div>
        <div class="flex border-t border-gray-200 py-2">
          <span class="text-gray-500">Цвет</span>
          <span class="ml-auto text-gray-900">{{ $collekcia->color ?? 'не указан' }}</span>
        </div>
        <div class="flex border-t border-b mb-6 border-gray-200 py-2">
          <span class="text-gray-500">Материал</span>
          <span class="ml-auto text-gray-900">{{ $collekcia->material ?? 'хлопок' }}</span>
        </div>
		

        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">{{ $collekcia->price ?? 'нет цены' }}</span>
          <button
					data-title="{{ $collekcia->title ?? '' }}"
					data-price="{{ $collekcia->price ?? '' }}"
					class="flex ml-auto text-white bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded transition buyTovar">Купить</button>
 
        </div>
      </div>
    </div>
  </div>
</section>



 

 


{{-- modal --}}
<div class="modalBuyTovar overflow-x-auto">
	
	
	<div class="bg-white w-full sm:w-6/12 mx-auto sm:mt-20 p-5 relative ">

		<a href="#" class="closeTovarBt block absolute right-10 top-5 font-light text-black hover:text-indigo-500 tranisition">закрыть</a>


		<section class="text-gray-600 body-font pt-10 sm:pt-0">
			<div class="container px-5 py-1 mx-auto flex flex-col ">
				<div class="w-full mx-auto ">




					<form id="collectionForm" class="mt-0 ">

						<input type="hidden" name="whatForm" value="ЮсуповStore | Коллекция | Заказ">
						<input type="hidden" name="zakaz" class="zakaz" value="">


					<div class="flex flex-col sm:flex-row sm:mt-10 ">
						
						<div class="sm:w-6/12 text-center sm:pr-8 sm:py-0">
							<div class=" rounded-full inline-flex items-center justify-center text-gray-400">
								{{-- <img src="{{ asset($collekcia->pic400_1 ?? 'img/201.jpg') }}" alt=""> --}}
								<picture class="object-cover object-center w-full h-ful">
									<source loading="lazy" srcset="{{ asset($collekcia->pic375_2 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
									<img loading="lazy" class="w-full rounded" src="{{ asset($collekcia->pic375_2 ?? 'uploads/not_image.jpg') }}" alt="{{ $collekcia->title }}" />
								 </picture>
							</div>
						</div>

						<div class="w-full  sm:pl-8 sm:py-1 sm:border-l border-gray-200 sm:border-t-0 border-t mt-1 pt-1 sm:mt-0 text-center sm:text-left bg-white">
							<h1 class="text-base mb-2">Вы заказываете</h1>
							<h2 class="text-4xl text-gray-900 mb-2 tovarTitle">Наименование товара</h2>
							<h3 class="text-xl text-indigo-500 mb-4 tovarPrice">Цена: 100 000 ₽</h3>
							
							
								<input class="w-full mb-5 border border-indigo-200 rounded" type="text" name="name" placeholder="Имя" required>
								<input class="w-full mb-5 border border-indigo-200 rounded phone" type="text" name="phone" placeholder="Телефон" required>
							

							<div class="text-sm mb-5">Нажимая кнопку <span class="uppercase font-bold">отправить</span> я соглашаюсь с <a href="{{ route('pravila.politics') }}" class="text-indigo-500 border-b border-indigo-500 hover:border-indigo-200 transition">политикой конфиденциальности</a></div>

							<button type="submit" class="text-white bg-indigo-500 py-2 px-4 rounded hover:bg-indigo-300">Отправить</button>


						</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>







@push('scripts')
	<script rel="prefetch" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script rel="prefetch">
		const swiper = new Swiper(".mySwiper3", {
			loop: true,
			spaceBetween: 10,
			slidesPerView: 4,
			freeMode: true,
			watchSlidesVisibility: true,
			watchSlidesProgress: true,
		});
		const swiper2 = new Swiper(".mySwiper4", {
			loop: true,
			spaceBetween: 10,
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			thumbs: {
				swiper: swiper,
			},
		});
	</script>
@endpush






@push('scripts')
<script rel="prefetch" src="https://yastatic.net/share2/share.js" async></script>
@endpush







@push('scripts')
	<script rel="prefetch" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script rel="prefetch" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script rel="prefetch">
		$(".phone").mask("8 (999) 999 99 99");
	</script>
@endpush




@endsection