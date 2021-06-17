@extends('layouts.admin')
@section('title', 'Админка - настройки')


@section('content')


 
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Главная</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Настройки</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->








<div class="row">




	<div class="col-12 col-lg-6">
		<a href="{{ route('dashboard.settings.twomodels.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-secondary">модели (на главной странице под банером)</p>
						<h3 class="mb-0 text-primary">2 фото</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 




 

	<div class="col-12 col-lg-6">
		<a href="{{ route('dashboard.settings.banernft.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-secondary">token's (банер расположенный под моделями)</p>
						<h3 class="mb-0 text-primary">Банер NFT</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


	
	


	<div class="col-12 col-lg-6">
		<a href="{{ route('dashboard.settings.podarki.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-secondary">наборы (слайдер с подарочными наборами)</p>
						<h3 class="mb-0 text-primary">Подарочные</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


	 









	


	



</div>









@endsection


