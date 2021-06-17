@extends('layouts.site')





@push('metaTitleDescrKeys')
	<!-- Open Graph: Article -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{ $nft->title ?? '' }}">
	<meta property="og:description" content="{{ $nft->description ?? '' }}">
	<meta property="og:url" content="{{ url()->current() }}">

	<meta property="og:image" content="{{ asset($nft->ogimg ?? '') }}" />
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" /> 
	<meta property="og:site_name" content="{{ route('home.page') }}">


	<meta property="og:locale" content="RU">
	<meta property="og:author" content="{{ $nft->author ?? '' }}">
	<meta property="og:published_time" content="{{ $nft->created_at ?? '' }}">
	<meta property="og:modified_time" content="{{ $nft->updated_at ?? '' }}">
	<meta property="og:tag" content="{{ $nft->keywords ?? '' }}">


	<!-- Meta Data -->
	<title>{{ $nft->metaTitle ?? '' }}</title>
	<meta name="description" content="{{ $nft->description ?? '' }}">
	<meta name="keywords" content="{{ $nft->keywords ?? '' }}">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta name="author" content="{{ $nft->author ?? '' }}">
@endpush






@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush
 




@section('content')
 







<section class="text-gray-600 body-font mt-20 overflow-x-hidden">
  <div class=" px-5 py-6 mx-auto flex flex-col">
    <div class="w-full mx-auto">
      <div class="rounded-lg ">
        <img alt="" class="h-full w-full" src="{{ asset('img/nft_b.jpg') }}">
      </div>
    </div>
  </div>
</section>

<section class="text-gray-600 body-font mt-2 overflow-x-hidden">
  <div class="container px-5 mt-2 mx-auto">
    <div class="text-center mb-10">
      <h1	class="sm:text-3xl text-2xl font-extrabold text-center title-font text-gray-900 mb-4">
				{{ $nft->title ?? 'A Great chance is our romance' }}
			</h1>
    </div>
  </div>
</section>







<section class="text-gray-600 body-font mt-10 overflow-x-hidden">
  <div class="container px-5 py-0 mx-auto">





    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 w-full bg-gray-100 rounded-md">

			<div class="col-span-2 p-5 text-justify">
				{!! $nft->descr ?? 'The image of the token can also be purchased as a print on a limited collection of sweatshirts in the yusupov store. Lorem ipsum dolor sit amet consectetur adipisicing elit. At, consequatur totam dolorum aliquid amet natus rem alias neque iure! Voluptates aliquam enim perferendis ab neque laborum eveniet provident nulla iste!' !!}

				<div class="mt-10">
					<a href="{{ route('nft.home') }}" class="inline bg-gray-400 hover:bg-gray-500 transition text-white py-3 px-5 rounded">Назад</a>
				</div>
      </div>
      

 


      <div class="w-auto p-5 ">
        <div class="rounded-lg overflow-hidden">
          <a href="#" target="_blank">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic480_1 ?? 'img/1003.jpg') }}">
					</a>
        </div>
        <a href="#" target="_blank">
					<h2 class="text-xl font-extrabold title-font text-gray-900 mt-5">
						{{ $nft->title ?? 'A Great chance is our romance' }}
					</h2>
        	<p class="text-base leading-relaxed mt-2">curent price - <span class="font-semibold text-gray-900 text-xl">{{ $nft->price ?? 'нет данных' }} ETH</span></p>
				</a>



				<a href="#" target="_blank" class="inline-flex items-center mt-7 border-t-2 border-gray-300 w-full">
          <img alt="blog" src="{{ asset('img/DSC09908.jpg') }}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center mt-5">
          <span class="flex-grow flex flex-col pl-4 mt-5">
            <span class="title-font font-medium text-gray-900">Автор</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">DESIGNER</span>
          </span>
        </a>
      </div>




    </div>
  </div>
</section>






<section class="text-gray-600 body-font mt-5 mb-20">
  <div class=" px-5 py-2 mx-auto  w-full">
   




		
		<div class="text-4xl text-center mb-5 block text-gray-800 ">Коллекция токена</div>



		<div class="swiper-container nftSwiper ">
      <div class="swiper-wrapper pb-5">

        
				
				@if(isset($nft->pic350_1))
				<div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
					<div class="rounded-lg overflow-hidden">
						<a href="#" 
						data-title="{{ $nft->title ?? '' }}"
						data-tokenprice="{{ $nft->price1 ?? '' }}"
						data-tokenPic="{{  asset($nft->pic350_1 ?? 'img/token/t01.jpg') }}"
						class="toketNftPic">
							<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_1 ?? 'img/token/t01.jpg') }}">
							<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price1 ?? '' }} ETH</p>
						</a>
					</div>
				</div>
				@endif

				@if(isset($nft->pic350_2))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price2 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_2 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_2 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price2 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_3))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price3 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_3 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_3 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price3 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_4))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price4 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_4 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_4 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price4 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_5))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price5 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_5 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_5 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price5 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_6))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price6 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_6 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_6 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price6 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_7))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6 swiper-slide">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price7 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_7 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_7 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price7 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

					

      

      </div>

			<div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>

    </div>







		@if(false)
    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">


			@if(isset($nft->pic350_1))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price1 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_1 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_1 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price1 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif


			@if(isset($nft->pic350_2))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price2 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_2 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_2 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price2 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_3))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price3 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_3 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_3 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price3 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_4))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price4 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_4 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_4 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price4 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_5))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price5 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_5 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_5 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price5 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_6))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price6 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_6 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_6 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price6 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif

			@if(isset($nft->pic350_7))
      <div class="p-4 md:w-1/5 sm:mb-0 mb-6">
        <div class="rounded-lg overflow-hidden">
          <a href="#" 
					data-title="{{ $nft->title ?? '' }}"
					data-tokenprice="{{ $nft->price7 ?? '' }}"
					data-tokenPic="{{  asset($nft->pic350_7 ?? 'img/token/t01.jpg') }}"
					class="toketNftPic">
						<img alt="content" class="object-cover object-center h-full w-full" src="{{  asset($nft->pic350_7 ?? 'img/token/t01.jpg') }}">
						<p class="text-base text-gray-900 mt-2 text-center ">Price - {{ $nft->price7 ?? '' }} ETH</p>
					</a>
        </div>
      </div>
			@endif



    </div>
		@endif

		{{-- <a href="#" class="text-center block  uppercase text-gray-800 hover:text-gray-500 tranisiton mt-20">Купить</a> --}}

  </div>
</section>



















{{-- modal --}}
<div class="modalNftToken overflow-x-auto">
	
	
	<div class="bg-white w-full sm:w-6/12 mx-auto sm:mt-20 p-5 relative ">

		<a href="#" class="closeNftTokenBt block absolute right-10 top-5 font-light text-black hover:text-indigo-500 tranisition">закрыть</a>


		<section class="text-gray-600 body-font pt-10 sm:pt-0">
			<div class="container px-5 py-1 mx-auto flex flex-col ">
				<div class="w-full mx-auto ">




					<form id="nftTokenForm" class="mt-0 pb-5">

						<input type="hidden" name="whatForm" value="ЮсуповStore | (NFT) Token-Коллекция | Заказ">
						<input type="hidden" name="zakaz" class="zakazTokenNft" value="">


					<div class="flex flex-col sm:flex-row sm:mt-10 ">
						
						<div class="sm:w-6/12 text-center sm:pr-8 sm:py-0">
							<div class=" rounded-full inline-flex items-center justify-center text-gray-400">
								<img class="intoPicToken" src="" alt="">
							</div>
						</div>



						<div class="w-full  sm:pl-8 sm:py-1 sm:border-l border-gray-200 sm:border-t-0 border-t mt-1 pt-1 sm:mt-0 text-center sm:text-left bg-white">
							<h1 class="text-base mb-2">Вы выбрали token</h1>
							<h2 class="text-4xl text-gray-900 mb-2 nftModalTitle">Наименование товара</h2>
							<h3 class="text-xl text-indigo-500 mb-4 nftModalPrice">Цена: 100 000 ₽</h3>
							
							
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
	<script rel="prefetch" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script rel="prefetch" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script rel="prefetch">
		$(".phone").mask("8 (999) 999 99 99");
	</script>
@endpush






@push('scripts')
<script rel="prefetch" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>	

<!-- Initialize Swiper -->
<script>
	
	const swiper2 = new Swiper(".nftSwiper", {
		loop:true,
		grabCursor: true,
		// cssMode: true,
		// mousewheel: true,
		// keyboard: true,
		slidesPerView: 1,
		spaceBetween: 10,
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		breakpoints: {
					768: {
						slidesPerView: 2,
						spaceBetween: 20,
					},
					1366: {
						slidesPerView: 3,
						spaceBetween: 20,
					},
					1440: {
						slidesPerView: 3,
						spaceBetween: 20,
					},
					1441: {
						slidesPerView: 5,
						spaceBetween: 10,
					},
				},
	});
</script>

@endpush






@endsection