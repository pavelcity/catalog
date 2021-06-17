

<header class="text-gray-600 body-font bg-white py-3 fixed top-0 w-full z-50 py-2 shadow topNav transition">
  

	<div class="px-5  mx-auto flex flex-row items-center justify-between">

    <a href="{{ route('home.page') }}" class=" flex title-font font-medium items-center text-gray-900 mb-0 md:mb-0">
      <img class=" topLogo  transition duration-150 ease-in-out block w-10" src="{{ asset('img/logo.svg') }}" alt="">
			<div class="tex-gray-900 font-light">Catalog</div>
    </a>

		<a href="#" class="humb lg:hidden md:ml-auto text-base bg-gray-100">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="35" height="35" viewBox="0 0 24 24">
				<path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
		 </svg>
		</a> 



    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center hidden lg:block">
      <a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg ">Главная</a>

			<a href="{{ route("nft.home") }}" class="{{ Request::is('nft*') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg">NFT</a>
		
			<a href="{{ route('tovary.home') }}" class="{{ Request::is('tovary*') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg">Коллекции</a>
			
      <a href="{{ route('blog.home') }}" class="{{ Request::is('blog*') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg">Блог</a>

      <a href="{{ route('news.home') }}" class="{{ Request::is('news*') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg">Новости</a>

			<a href="{{ route('about.home') }}" class="{{ Request::is('about*') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg">Обо мне</a>

			<a href="{{ route('contact.home') }}" class="{{ Request::is('contact*') ? 'bg-gray-100' : '' }} mr-7 hover:text-gray-900 bg-white hover:bg-gray-200 py-1 2xl:px-10 xl:px-6 px-3 rounded transition text-lg">Контакты</a>
    </nav>


  </div>
</header> 









<div class="leftNav z-50 bg-white">
	<div class="p-7">
		<a href="#" class="closeLeft block text-right mb-6 text-sm text-blue-400">Закрыть</a>

		<a href="{{ route('home.page') }}" class="flex title-font font-medium items-center text-gray-900 mb-0 md:mb-0">
      <img class="topLogo transition duration-150 ease-in-out block sm:w-auto " src="{{ asset('img/logo.png') }}" alt="">
			<div class="tex-gray-900">Yusupov Designs</div>
    </a>
 
		<ul class="mt-5">
			<a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				Главная
			</a>

			<a href="{{ route("nft.home") }}" class="{{ Request::is('nft*') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				NFT
			</a>

			<a href="{{ route("tovary.home") }}" class="{{ Request::is('tovary*') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				Коллекции
			</a>

			<a href="{{ route("blog.home") }}" class="{{ Request::is('blog*') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				Блог
			</a>

			<a href="{{ route("news.home") }}" class="{{ Request::is('news*') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				Новости
			</a>

			<a href="{{ route("about.home") }}" class="{{ Request::is('about*') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				Обо мне
			</a>

			<a href="{{ route("contact.home") }}" class="{{ Request::is('contact*') ? 'bg-gradient-to-l from-blue-400 to-green-400 font-bold' : 'bg-gradient-to-r from-blue-400 to-green-400' }} inline-block w-full  hover:text-blue-500 rounded p-2 text-white mb-2 text-xl">
				Контакты
			</a>

		</ul>

	</div>
</div>
