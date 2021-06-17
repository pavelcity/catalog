@extends('layouts.site')


@push('metaTitleDescrKeys')
	<!-- Open Graph: Article -->
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{ $contact->title ?? '' }}">
	<meta property="og:description" content="{{ $contact->description ?? '' }}">
	<meta property="og:url" content="{{ url()->current() }}">

	<meta property="og:image" content="{{ asset($contact->ogimg ?? '') }}" />
	<meta property="og:image:600" content="600" />
	<meta property="og:image:600" content="600" /> 
	<meta property="og:site_name" content="{{ route('home.page') }}">


	<meta property="og:locale" content="RU">
	<meta property="og:author" content="{{ $contact->author ?? '' }}">
	<meta property="og:published_time" content="{{ $contact->created_at ?? '' }}">
	<meta property="og:modified_time" content="{{ $contact->updated_at ?? '' }}">
	<meta property="og:tag" content="{{ $contact->keywords ?? '' }}">


	<!-- Meta Data -->
	<title>{{ $contact->metaTitle ?? '' }}</title>
	<meta name="description" content="{{ $contact->description ?? '' }}">
	<meta name="keywords" content="{{ $contact->keywords ?? '' }}">
	<link rel="canonical" href="{{ url()->current() }}" />
	<meta name="author" content="{{ $contact->author ?? '' }}">
@endpush


 





@section('content')




<section class="text-gray-600 body-font mb-1 mt-16 sm:mt-18 ">
  <div class=" px-0 py-2 mx-auto">
    <div class="flex flex-wrap m-0">
     
			<div class="p-2 w-full">
        <div class="block h-full bg-gradient-to-r from-green-400  to-blue-500 px-8 py-10 md:py-20 rounded-lg overflow-hidden text-center relative transition ">
          <h2 class="tracking-widest text-4xl sm:text-8xl title-font font-extrabold text-gray-900 mb-1">Контакты</h2>
        </div>
      </div>
      
    </div>
  </div>
</section>







<section class="text-gray-600 body-font mt-10">
  <div class="container px-5 py-2 mx-auto">





    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      

			<div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
						<path fill="#6F71F3" d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" />
				 </svg>
          <span class="title-font font-medium ml-4">
						{{ $contact->title ?? 'Студия дизайна' }}
					</span>
        </div>
      </div>

			<div class="p-2 sm:w-1/2 w-full">
        <a href="tel:{{ $contact->phone ?? '8 800 000-00-00' }}" class="bg-gray-100 rounded flex p-4 h-full items-center hover:bg-white transition hover:text-indigo-500">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
						<path fill="#6F71F3" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
				 </svg>
          <span class="title-font font-medium ml-4 ">
						{{ $contact->phone ?? '8 800 000-00-00' }}
					</span>
        </a>
      </div>


			<div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
					<path fill="#6F71F3" d="M18.27 6C19.28 8.17 19.05 10.73 17.94 12.81C17 14.5 15.65 15.93 14.5 17.5C14 18.2 13.5 18.95 13.13 19.76C13 20.03 12.91 20.31 12.81 20.59C12.71 20.87 12.62 21.15 12.53 21.43C12.44 21.69 12.33 22 12 22H12C11.61 22 11.5 21.56 11.42 21.26C11.18 20.53 10.94 19.83 10.57 19.16C10.15 18.37 9.62 17.64 9.08 16.93L18.27 6M9.12 8.42L5.82 12.34C6.43 13.63 7.34 14.73 8.21 15.83C8.42 16.08 8.63 16.34 8.83 16.61L13 11.67L12.96 11.68C11.5 12.18 9.88 11.44 9.3 10C9.22 9.83 9.16 9.63 9.12 9.43C9.07 9.06 9.06 8.79 9.12 8.43L9.12 8.42M6.58 4.62L6.57 4.63C4.95 6.68 4.67 9.53 5.64 11.94L9.63 7.2L9.58 7.15L6.58 4.62M14.22 2.36L11 6.17L11.04 6.16C12.38 5.7 13.88 6.28 14.56 7.5C14.71 7.78 14.83 8.08 14.87 8.38C14.93 8.76 14.95 9.03 14.88 9.4L14.88 9.41L18.08 5.61C17.24 4.09 15.87 2.93 14.23 2.37L14.22 2.36M9.89 6.89L13.8 2.24L13.76 2.23C13.18 2.08 12.59 2 12 2C10.03 2 8.17 2.85 6.85 4.31L6.83 4.32L9.89 6.89Z" />
				</svg>
          <span class="title-font font-medium ml-4">
						{{ $contact->adres ?? 'Адрес: г. Екатеринбург ул. Цветная 777' }}
					</span>
        </div>
      </div>


      <div class="p-2 sm:w-1/2 w-full">
        <a href="mailto:mailme@me.me" class="bg-gray-100 rounded flex p-4 h-full items-center hover:bg-white transition hover:text-indigo-500">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
						<path fill="#6F71F3" d="M12,13L2,6.76V6C2,4.89 2.89,4 4,4H20A2,2 0 0,1 22,6V6.75L12,13M22,18A2,2 0 0,1 20,20H4C2.89,20 2,19.1 2,18V9.11L4,10.36V18H20V10.36L22,9.11V18Z" />
				 </svg>
          <span class="title-font font-medium ml-4">
						email: {{ $contact->email ?? 'email: mailme@me.me' }}
					</span>
        </a>
      </div>



      




      



  </div>
</section>











<br>
<br>


<section class="text-gray-600 body-font relative ">
  <div class="absolute inset-0 bg-gray-300">
		
		{{-- {!! $contact->map ?? '<script type="text/javascript" charset="utf-8" rel="prefetch" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4a7371e7e1fe37f2e4a5d356211b9b46ed0d9ac8d30e679ae022e22795b0eee4&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>' !!} --}}

		@if(true)
		<img class="w-full h-full object-cover object-top " src="{{ asset('img/02.jpg') }}" alt="">
		@endif

  </div>
  <div class="container px-5 py-24 mx-auto flex">
    <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Форма обратной связи</h2>
      <p class="leading-relaxed mb-5 text-gray-600">Появились вопросы? Пишите</p>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Имя</label>
        <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
			<div class="relative mb-4">
        <label for="phone" class="leading-7 text-sm text-gray-600">Телефон</label>
        <input type="text" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Сообщение</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Отправить</button>
      <p class="text-xs text-gray-500 mt-3">Нажимая кнопку ОТПРАВИТЬ я соглашаюсь с политикой конфиденциальности</p>
    </div>
  </div>
</section>















@endsection