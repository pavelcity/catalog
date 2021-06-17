@extends('layouts.site')


@if(false)
@push('metaTitleDescrKeys')
	<title>{{ $meta->home_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->home_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->home_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->home_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->chome_avtor ?? '' }}">
@endpush
@endif

  


@push('styles')
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush
 


@push('styles')
	<style>
			.swiper-slide2 {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
      }

      .swiper-slide2 img {
        display: block;
			}
        
		</style>
@endpush












@section('content')





@if(true)
	@include('pages.includes.utp')
@endif


















@if(true)
{{-- boy and girl --}}
<section class="text-gray-600 body-font ">
  <div class=" px-5 py-0 mx-auto">
    <div class="flex flex-wrap -m-4">
      
			@forelse($picmodels as $item)
			<div class="lg:w-1/2 md:w-1/2 p-1 w-full ">
        <a href="{{ $item->link ?? '' }}" class="h-auto block relative rounded overflow-hidden bg-blue-300 hover:bg-white transition">

					<picture>
						<source srcset="{{ asset($item->pic375 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
						<source srcset="{{ asset($item->pic414 ?? 'uploads/not_image.jpg') }}" media="(max-width: 414px)" />
						<source srcset="{{ asset($item->pic480 ?? 'uploads/not_image.jpg') }}" media="(max-width: 480px)" />
						<source srcset="{{ asset($item->pic768 ?? 'uploads/not_image.jpg') }}" media="(max-width: 768px)" />

						<img loading="lazy" class="w-full" src="{{ asset($item->pic950 ?? 'uploads/not_image.jpg') }}" alt="{{ $item->title }}" />
					 </picture>


        </a>
      </div>
			@empty
				<p>нет данных</p>
			@endforelse
	



    </div>
  </div>

	<a href="{{ route('tovary.home') }}" class="mx-auto block text-gray-900 hover:text-gray-500 transition text-center mt-5 mb-5 uppercase font-semibold">Перейти в коллекции</a>
</section>
@endif










 

@if(true)
{{-- nft --}}

<section class="text-gray-600 body-font ">
  <div class=" px-2 py-0 mx-auto flex flex-wrap">


		<div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0 relative">
      <a href="{{ $banernft->link }}">


				<picture class="object-cover object-center w-full h-ful">
					<source srcset="{{ asset($banernft->pic375 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
					<source srcset="{{ asset($banernft->pic414 ?? 'uploads/not_image.jpg') }}" media="(max-width: 414px)" />
					<source srcset="{{ asset($banernft->pic480 ?? 'uploads/not_image.jpg') }}" media="(max-width: 480px)" />
					<source srcset="{{ asset($banernft->pic768 ?? 'uploads/not_image.jpg') }}" media="(max-width: 768px)" />

					<img loading="lazy" class="object-cover object-center w-full h-ful" src="{{ asset($banernft->pic950 ?? 'uploads/not_image.jpg') }}" alt="{{ $banernft->title }}" />
				 </picture>


			{{-- <p class="text-white text-2xl absolute bottom-3 left-3 bg-gray-500 p-5">Здесь расположим текст об NFT</p> --}}
			</a>
    </div>
   
		   

 
		<div class="lg:w-1/2 sm:w-2/3 content-start sm:pl-10 w-full">
      <div class="w-full sm:p-4 px-4 mb-6">
        <a href="{{ route('nft.home') }}" class="block mx-auto font-extrabold text-xl mb-2 text-gray-900 text-center w-full">Catalog NFT token's  </a>
      </div>



 
      


			<div class="w-10/12 sm:w-1/2 lg:w-1/2  mx-auto wrapNftSlide ">
				<!-- Slider main container -->



				<div class="swiper-container mySwiper">
					<div class="swiper-wrapper">

						@forelse($nfts as $nft)
							<div class="swiper-slide">
								<a href="{{ route('nft.detail', $nft->slug) }}">
									<img loading="lazy" class="nftSlide"  src="{{ asset($nft->pic480_1 ?? 'img/nft.jpg') }}" />
								</a>
							</div>
						@empty
							<p class="mx-auto bg-indigo-500 text-white p-3">Нет данных</p>
						@endforelse
						

					</div>
					<div class="swiper-pagination"></div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>

		
			</div>

    </div>

  </div>
</section>
@endif








 



@if(true)
{{-- tubuses --}}
<section class="text-gray-600 body-font ">
  <div class="container px-5 mt-10 mx-auto">
    <div class="text-center mb-1">
      <h1 class="sm:text-3xl text-2xl font-extrabold text-center title-font text-gray-900 mb-4">Подарочные наборы</h1>
      <p class="text-base leading-relaxed mx-auto">Вы можете заказать понравившийся товар в эксклюзивной подарочной упаковкой, с личным автографом Ильи Юсупова</p>
    </div>
  </div>
</section>


<section class="text-gray-600 body-font">
  <div class=" px-2 py-4 mx-auto">

		<div class="swiper-container giftSwiper">
      <div class="swiper-wrapper pb-10">

        @forelse ($gifts as $gift)
				
					<a href="#" 
					data-title="{{ $gift->title ?? '' }}"
					data-price="{{ $gift->price ?? '' }}"
					data-image="{{ asset($gift->pic414 ?? 'uploads/not_image.jpg') }}"
					class="podarok swiper-slide bg-gray-100 p-6 rounded-lg block transition">



						<picture class="object-cover object-center w-full h-ful">
							<source loading="lazy" srcset="{{ asset($gift->pic375 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
							<source loading="lazy" srcset="{{ asset($gift->pic414 ?? 'uploads/not_image.jpg') }}" media="(max-width: 414px)" />
							<source loading="lazy" srcset="{{ asset($gift->pic480 ?? 'uploads/not_image.jpg') }}" media="(max-width: 480px)" />
		
							<img loading="lazy" class="object-cover object-center w-full h-ful" src="{{ asset($gift->pic420 ?? 'uploads/not_image.jpg') }}" alt="{{ $gift->title ?? '' }}" />
						 </picture>



						<h2 class="text-lg text-gray-900 font-medium title-font mb-4 mt-2">{{ $gift->title ?? 'название' }}</h2>
						<p class="leading-relaxed text-base">{{ $gift->price ?? '' }} </p>

						<div class="bg-indigo-400 hover:bg-indigo-500 transition text-white text-base py-2 px-7 rounded inline-block mt-2 mb-6">Купить</div>
					</a>

					
				
			@empty
				<p class="mx-auto">нет данных</p>
			@endforelse
      

      </div>

			<div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>

    </div>





  </div>
</section>
@endif
















@if(true)
{{-- video block --}}
<section class="text-gray-600 body-font mb-3 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			
			<div class="p-2 w-full">
        <div  class="block h-full  bg-gradient-to-r  from-green-400  to-blue-500 px-8 p-32 rounded-lg overflow-hidden text-center relative transition">
          <h2 class="tracking-wide text-4xl sm:text-8xl title-font font-extrabold text-gray-900 mb-1 uppercase">Block video</h2>
        </div>
      </div>
      
      

    </div>
  </div>
</section>
@endif























@if(true)
{{-- news --}}
<section class="text-gray-600 body-font ">
  <div class="px-0 py-0 mx-auto">
		
    <div class="flex flex-col text-center w-full mb-2">
      <h1 class="sm:text-3xl text-2xl font-extrabold title-font mb-4 text-gray-900 hover:text-gray-600">
				<a href="{{ route('news.home') }}">Новости</a>
			</h1>
    </div>

 

    <div class="flex flex-wrap m-0">
      
			@forelse($news as $info)

			<div class="lg:w-1/3 md:w-1/2 w-full p-2 mb-5">
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
				<h1 class="title-font text-xl sm:text-2xl font-extrabold text-gray-900 mt-3">
					<a href="{{ route('news.detail', $info->slug) }}" class="hover:text-indigo-500 transition">{{ $info->title }}</a>
				</h1>
      </div>

			@empty
				<p class="mx-auto">нет данных</p>
			@endforelse



    </div>
  </div>
</section>
@endif









@if(true)
@isset($about)
{{-- about --}}
<section class="body-font bg-gray-100 mt-10 mx-0 rounded-md">
  <div class=" px-2 py-0 mx-auto  flex flex-col">
    <div class="w-full mx-auto">
    
			
      <div class="flex flex-col justify-center items-center sm:flex-row">
        <div class="sm:w-1/2 text-center sm:pr-8 sm:py-1">

          <div class="w-full h-full rounded-full inline-flex items-center justify-center ">
						<a href="{{ route('about.home') }}">
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
							<img loading="lazy" class="w-full" src="{{ asset($about->pic992 ?? 'uploads/not_image.jpg') }}" alt="{{ $about->title }}" />
						 </picture>
						</a>
          </div>
        </div>

        <div class="sm:w-1/2 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4">
						<span class="font-extrabold block text-xl sm:text-6xl mb-10">
							{{ $about->title ?? 'Юсупов Илья' }}
						</span>
		
						{!! Str::limit ($about->descr, 300) !!}
						<br>
						<br>

					</p>
          <a href="{{ route('about.home') }}" class="text-indigo-500 mb-10 sm:mb-0 inline-flex items-center hover:text-indigo-400 transition">Узнать больше
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endisset
@endif












{{-- modalGift --}}
<div class="modalGift overflow-x-auto">
	<div class="bg-white w-full h-auto sm:w-6/12 mx-auto sm:mt-20 p-5 relative">
		<a href="#" class="closeGiftBt block absolute right-10 top-5 font-light text-black hover:text-indigo-500 tranisition">закрыть</a>
		<br>
		<section class="text-gray-600 body-font pt-10 sm:pt-0">
			<div class="container px-5 py-1 mx-auto flex flex-col ">
				<div class="w-full mx-auto ">




					<form id="giftForm" class="mt-0 ">

						<input type="hidden" name="whatForm" value="ЮсуповStore | Подарочный набор | Заказ">
						<input type="hidden" name="zakaz" class="zakazGift" value="">


					<div class="flex flex-col sm:flex-row sm:mt-10 ">
					
						<div class="sm:w-6/12 text-center sm:pr-8 sm:py-0">
							<div class=" rounded-full inline-flex items-center justify-center text-gray-400">
								<img class="intoPic" src="" alt="">
							</div>
						</div>
 
						<div class="w-full  sm:pl-8 sm:py-1 sm:border-l border-gray-200 sm:border-t-0 border-t mt-1 pt-1 pb-10 sm:mt-0 text-center sm:text-left bg-white">
							<h1 class="text-base mb-2">Вы заказываете подарочный набор</h1>
							<h2 class="text-4xl text-gray-900 font-extrabold mb-2 giftTitle">Наименование товара</h2>
							<h3 class="text-xl text-indigo-500 mb-4 giftPrice">Цена: 100 000 ₽</h3>
							
							
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
		const swiper = new Swiper(".mySwiper", {
				slidesPerView: 1,
				loop: true,
        effect: "cube",
				spaceBetween: 10,
        grabCursor: true,
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },
        pagination: {
          el: ".swiper-pagination",
        },
				navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
				breakpoints: {
          640: {
            slidesPerView: 1,
          },
          768: {
            slidesPerView: 1,
          },
          1024: {
            slidesPerView: 1,
          },
        },
      });





	const swiper2 = new Swiper(".giftSwiper", {
		loop:true,
		grabCursor: true,
		// cssMode: true,
		// mousewheel: true,
    // keyboard: true,
		slidesPerView: 1,
		spaceBetween: 20,
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
            slidesPerView: 4,
            spaceBetween: 20,
          },
        },
	});


	</script>






@push('scripts')
	<script rel="prefetch" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script rel="prefetch" src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
	<script rel="prefetch">
		$(".phone").mask("8 (999) 999 99 99");
	</script>
@endpush



@endpush








@endsection