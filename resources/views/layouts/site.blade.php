<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

	<meta name="robots" content="noindex,nofollow" />
	<link rel="icon" href="img/fav.svg" type="image/x-icon">


	@stack('metaTitleDescrKeys')





	<script type='application/ld+json'> 
		{
			"@context": "http://www.schema.org",
			"@type": "ClothingStore",
			"name": "Онлайн-бутик Yusupov NFT | Купить мужскую и женскую одежду онлайн",
			"url": "https://yusupovnft.com",
			"logo": "Вставить ссылку на логотип",
			"description": "Онлайн-бутик  Yusupov NFT, мужская и женская одежда класса люкс. Доставка по всему миру. Оплатите онлайн - доставим бесплатно! ",
			"priceRange": "RUB",
			"address": {
				"@type": "PostalAddress",
				"streetAddress": "Адрес",
				"addressLocality": "г. Екатеринбург",
				"addressRegion": "Свердловская область",
				"postalCode": "индекс",
				"addressCountry": "Россия"
			},
			"geo": {
				"@type": "GeoCoordinates",
				"latitude": "широта",
				"longitude": "долгота"
			},
			"hasMap": "ссылка с гугл карт",
			"openingHours": "Mo, Tu, We, Th, Fr 10:00-20:00",
			"contactPoint": {
				"@type": "ContactPoint",
				"contactType": "отдел продаж",
				"telephone": "8 (888) 555-22-44"
			}, 
			"sameAs": [
				"ССЫЛКА на ФБ",
				"ССЫЛКА на Вконтакте",
				"ССЫЛКА на ИНСТУ",
				"ССЫЛКА на YOUTUBE"
			]
		}
		 </script>
		 
	
	
	
	
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/", 
			"@type": "BreadcrumbList", 
			"itemListElement": [{
				"@type": "ListItem", 
				"position": 1, 
				"name": "Каталог",
				"item": "https://yusupovnft.com/catalog/"  
			},
			{
				 "@type": "ListItem", 
				"position": 2, 
				"name": "NFT",
				"item": "https://yusupovnft.com/nft/"
			},
			{
				"@type": "ListItem", 
				"position": 3, 
				"name": "Контакты",
				"item": "https://yusupovnft.com/contacts"  
			},
			{
				"@type": "ListItem", 
				"position": 4, 
				"name": "О бренде",
				"item": "https://yusupovnft.com/about-brend/"  
			},
			{
				"@type": "ListItem", 
				"position": 5, 
				"name": "О магазине",
				"item": "https://yusupovnft.com/about-shop/"  
			},
			{
				"@type": "ListItem", 
				"position": 6, 
				"name": "Блог",
				"item": "https://yusupovnft.com/blog/"  
			},
			{
				"@type": "ListItem", 
				"position": 7, 
				"name": "Новости",
				"item": "https://yusupovnft.com/news/"  
			}]
		}
		</script>



		@stack('schema')



	<link rel="stylesheet" href="{{ asset('css/app.css?v=19') }}">
	<link rel="stylesheet" href="{{ asset('css/additional.css?v=19') }}">

	@stack('styles')
	{{-- @livewireStyles --}}
 
</head>





 
<body class="bg-white overflow-x-hidden">

 

	@include('pages.includes.topnav')
		@yield('content')
	@include('pages.includes.footer')




	

	
	<script rel="prefetch" src="{{ asset('js/myjs.js?v=11') }}"></script>
	@stack('scripts')

	{{-- @livewireScripts --}}
	
</body>


</html>