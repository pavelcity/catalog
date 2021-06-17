
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a href="{{ route('home.page') }}" class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <img src="{{ asset('img/logo.png') }}" alt="">
        <span class="ml-3 text-xl hover:text-gray-500 font-extrabold transition">Store</span>
      </a>
      <p class="mt-2 text-sm font-bold text-gray-500">Brands & Designs</p>
    </div>
 


    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a href="{{ route('tovary.home') }}" class="{{ Request::is('tovary*') ? 'text-blue-500' : '' }} block title-font font-extrabold text-gray-700 hover:text-blue-500 transition tracking-widest text-sm mb-3 uppercase">Коллекции</a>

        <nav class="list-none mb-10">
					@forelse($catscollection as $catcollect)
					<li>
            <a href="{{ route('catcollection.show', $catcollect->slug) }}" class="text-gray-600 hover:text-gray-800 hover:text-blue-500">{{ $catcollect->title ?? '' }}</a>
          </li>
					@empty
						<p>нет категорий</p>
					@endforelse
        </nav>

      </div>


      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a href="{{ route('nft.home') }}" class="{{ Request::is('nft*') ? 'text-blue-500' : '' }} block title-font font-extrabold text-gray-700 hover:text-blue-500 transition tracking-widest text-sm mb-3 uppercase">NFT</a>
				@if(false)
				<nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">FAQ</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Покупка</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Продажа</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">OpenSea</a>
          </li>
        </nav>
				@endif
      </div>



      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <a href="{{ route('blog.home') }}" class="{{ Request::is('blog*') ? 'text-blue-500' : '' }} block title-font font-extrabold text-gray-700 hover:text-blue-500 transition tracking-widest text-sm mb-3 uppercase">Блог</a>
        
				@if(false)
				<nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">Путешествия</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Искусство</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Бэкстейдж</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Мои мысли</a>
          </li>
        </nav>
				@endif
      </div>


			
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
				<a href="{{ route('pravila.home') }}" class="{{ Request::is('pravila*') ? 'text-blue-500' : '' }} block title-font font-extrabold text-gray-700 hover:text-blue-500 transition tracking-widest text-sm mb-3 uppercase">Правила</a>
        <nav class="list-none mb-10">
          <li>
            <a href="{{ route('pravila.politics') }}" class="{{ Request::is('pravila/politics') ? 'text-indigo-500' : '' }} text-gray-600  hover:text-blue-500 transition">Политика конфиденциальности</a>
          </li>

					<li>
            <a href="{{ route('pravila.pokupka') }}" class="{{ Request::is('pravila/pokupka') ? 'text-indigo-500' : '' }} text-gray-600 hover:text-blue-500 transition">Условия покупки</a>
          </li>

					<li>
            <a href="{{ route('pravila.dostavka') }}" class="{{ Request::is('pravila/dostavka') ? 'text-indigo-500' : '' }} text-gray-600 hover:text-blue-500 transition">Условия доставки</a>
          </li>

					<li>
            <a href="{{ route('pravila.obmen') }}" class="{{ Request::is('pravila/obmen') ? 'text-indigo-500' : '' }} text-gray-600  hover:text-blue-500 transition">Условия возврата/обмена</a>
          </li>

					@if(Auth::check())
					<li>
            <a href="{{ route('dashboard.home') }}" class="text-pink-600 hover:text-gray-800  hover:text-blue-500 transition">Перейти в админку</a>
          </li>
					@endif


        </nav>
      </div>
    </div>
  </div>


  <div class="bg-gray-500">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-100 text-sm text-center sm:text-left">© 2021 
        <a href="{{ route('home.page') }}" rel="noopener noreferrer" class="text-gray-100 ml-1 hover:text-gray-300 transition" >Store</a>
      </p>


      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">

        <a href="https://www.facebook.com/people/%D0%98%D0%BB%D1%8C%D1%8F-%D0%AE%D1%81%D1%83%D0%BF%D0%BE%D0%B2/100001089516576/" target="_blank" class="text-gray-100">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>

        <a href="https://instagram.com/yusupovdesigns?utm_medium=copy_link" target="_blank" class="ml-3 text-gray-100">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>

        <a href="https://vk.com/yusupovdesigns" target="_blank" class="ml-3 text-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  class="w-5 h-5" viewBox="0 0 24 24">
						<path fill="#fff" d="M15.07 2H8.93C3.33 2 2 3.33 2 8.93V15.07C2 20.67 3.33 22 8.93 22H15.07C20.67 22 22 20.67 22 15.07V8.93C22 3.33 20.67 2 15.07 2M18.15 16.27H16.69C16.14 16.27 15.97 15.82 15 14.83C14.12 14 13.74 13.88 13.53 13.88C13.24 13.88 13.15 13.96 13.15 14.38V15.69C13.15 16.04 13.04 16.26 12.11 16.26C10.57 16.26 8.86 15.32 7.66 13.59C5.85 11.05 5.36 9.13 5.36 8.75C5.36 8.54 5.43 8.34 5.85 8.34H7.32C7.69 8.34 7.83 8.5 7.97 8.9C8.69 11 9.89 12.8 10.38 12.8C10.57 12.8 10.65 12.71 10.65 12.25V10.1C10.6 9.12 10.07 9.03 10.07 8.68C10.07 8.5 10.21 8.34 10.44 8.34H12.73C13.04 8.34 13.15 8.5 13.15 8.88V11.77C13.15 12.08 13.28 12.19 13.38 12.19C13.56 12.19 13.72 12.08 14.05 11.74C15.1 10.57 15.85 8.76 15.85 8.76C15.95 8.55 16.11 8.35 16.5 8.35H17.93C18.37 8.35 18.47 8.58 18.37 8.89C18.19 9.74 16.41 12.25 16.43 12.25C16.27 12.5 16.21 12.61 16.43 12.9C16.58 13.11 17.09 13.55 17.43 13.94C18.05 14.65 18.53 15.24 18.66 15.65C18.77 16.06 18.57 16.27 18.15 16.27Z" />
				 </svg>
        </a>

      </span>
    </div>
  </div>


</footer>





<a href="https://vjvgroup.ru/" target="_blank" class="bg-white mx-auto flex py-10 items-center justify-center">
	<p class="w-auto text-vjvbrand hover:text-gray-800 transition inline-block mr-4 font-light">Разработано IT-компанией VJV Group</p>
	<img class="w-10 hover:translate-x-1 transform transition" src="{{ asset('img/logo-vjv.svg') }}" alt="">
</a>
