@extends('layouts.site')


@push('metaTitleDescrKeys')
	<title>{{ $meta->home_title ?? '' }}</title>
	<meta name="description" content="{{ $meta->home_description ?? '' }}">
	<meta name="keywords" content="{{ $meta->home_keywords ?? '' }}">
	<link rel="canonical" href="{{ $meta->home_canonical ?? '' }}" />
	<meta name="author" content="{{ $meta->chome_avtor ?? '' }}">
@endpush


 
 



@section('content')



@if(false)
<section class="text-gray-600 body-font">
  <div class=" px-5 py-6 mx-auto flex flex-col">
    <div class="w-full mx-auto">
      <div class="rounded-lg h-auto ">
        <img alt="" class="object-cover object-center h-full w-full" src="{{ asset('img/nft_shorts.jpg') }}">
				<img class="mx-auto block -mt-14 shadow-md rounded-full" style="width: 150px; " src="{{ asset('img/nft_logo.jpg') }}" alt="">
      </div>
    </div>
  </div>
</section>
@endif




<section class="text-gray-600 body-font mb-1 mt-16 sm:mt-18 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			<div class="p-2 w-full">
        <div class="block h-full bg-gradient-to-r from-green-400  to-blue-500 px-8 py-10 md:py-20 rounded-lg overflow-hidden text-center relative transition ">
          <h2 class="tracking-widest text-4xl sm:text-8xl title-font font-extrabold text-gray-900 mb-1">NFT</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>

 



 

<section class="text-gray-600 body-font mt-5">
  <div class="container px-5 mt-2 mx-auto">
    <div class="text-center mb-5">
      <div class="text-base leading-relaxed mx-auto text-justify">Каждая запись в блокчейне называется токеном. Однако в открытом блокчейне все токены равны друг другу и взаимозаменяемы. Это означает, что один токен можно заменить другим таким же токеном и ничего не изменится. Но технология Non Fungible Token (NFT) работает по-другому. Каждый невзаимозаменяемый токен является уникальным и его нельзя подделать, разделить или незаметно заменить. Такая организация идеально подходит для того, чтобы закрепить свои права на какой-либо уникальный объект, будь то произведение искусства в единственном экземпляре, предмет в компьютерной игре или даже недвижимость.
				<br>
				<br>
				Технология NFT была создана в 2017 году на основе смарт-контрактов Ethereum. По информации аналитического сервиса Nonfungible, за время существования NFT было продано 5,35 млн токенов.
				</div>
    </div>
  </div>
</section>







<br>
<br>
<br>

<section class="text-gray-600 body-font">
  <div class="container px-5 py-0 mx-auto">



    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

			@forelse($nfts as $nft)
				<div class="p-4 md:w-1/3 sm:mb-0 mb-6">
					<div class="rounded-lg overflow-hidden">
						<a href="{{ route('nft.detail', $nft->slug) }}">

							<picture class="object-cover object-center h-full w-full">
								<source srcset="{{ asset($nft->pic375_1 ?? 'uploads/not_image.jpg') }}" media="(max-width: 375px)" />
								<source srcset="{{ asset($nft->pic414_1 ?? 'uploads/not_image.jpg') }}" media="(max-width: 414px)" />
								<source srcset="{{ asset($nft->pic425_1 ?? 'uploads/not_image.jpg') }}" media="(max-width: 425px)" />
								<img loading="lazy" class="object-cover object-center h-full w-full" src="{{ asset($nft->pic480_1 ?? 'uploads/not_image.jpg') }}" alt="{{ $nft->title }}" />
							 </picture>						
						
						</a> 
					</div>
					<a href="{{ route('nft.detail', $nft->slug) }}">
						<h2 class="text-xl font-medium title-font text-gray-900 mt-5">{{ $nft->title ?? 'A Great chance is our romance' }}</h2>
						<div class="text-base leading-relaxed mt-2 text-justify">{!! $nft->short ?? 'The image of the token can also be purchased as a print on a limited collection of sweatshirts in the yusupov store' !!}	</div>
					</a>
				</div>
			@empty
				<p class="py-2 px-8 inline bg-indigo-500 text-white mx-auto">нет данных</p>
			@endforelse
		
      
		

    </div>
  </div>
</section>









@endsection