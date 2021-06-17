@extends('layouts.admin')
@section('title', 'Админка')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Главная</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					{{-- <li class="breadcrumb-item active" aria-current="page">Настройки</li> --}}
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->




	

<div class="row">



	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.settings.home') }}" class="card radius-5 bg-info">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-white">Главная, телефоны ...</p>
						<h3 class="mb-0 text-white">Настройки</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 

	
	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.collections.home') }}" class="card radius-5 bg-primary">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-white">создать, изменить</p>
						<h3 class="mb-0 text-white">Коллекции</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


	
	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.nft.home') }}" class="card radius-5 bg-secondary">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-white">создать, изменить</p>
						<h3 class="mb-0 text-white">NFT</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 





	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.about.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">Обо мне</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 




 

	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.blog.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">Блог</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.news.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">Новости</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.contact.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">Контакты</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 
 


	@if(Auth::user()->email === 'suadmin@me.me')

	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.rules.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-info">настроить</p>
						<h3 class="mb-0 text-info">Правила </h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


	@endif










	


	



</div>









@endsection


