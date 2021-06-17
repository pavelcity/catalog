@extends('layouts.admin')
@section('title', 'nft')


@section('content')


 
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Главная</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">nft</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->







 @if(false)
<div class="row">


	<div class="col-12 col-lg-6">
		<a href="{{ route('dashboard.nft.token.home') }}" class="card radius-5 bg-secondary">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-white">создать коллецию для токена</p>
						<h3 class="mb-0 text-white">Токен коллекции</h3>
					</div>
				</div>
			</div>
		</a>
	</div> 


</div>
@endif










 

{{-- коллекции here --}}

<div class="card radius-5">
	<div class="card-body">
	
		<div class="card-title">
			
			<a href="{{ route('dashboard.nft.create') }}" class="btn btn-primary m-1 px-5 py-2">
				<i class="bx bx-plus"></i>
			</a>
		</div>
		<hr/>

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Название</th>
						<th scope="col">Фото</th>
						{{-- <th scope="col">Категория</th> --}}
						<th style="width: 200px;">btns</th>
					</tr>
				</thead>
			


				@php
					$i = 1;
				@endphp

				<tbody>

					@if(true)
					@forelse($nfts as $item)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $item->title ?? 'нет данных' }}</td>
						<td><img width="120" src="{{ asset($item->pic480_1 ?? 'uploads/not_image.jpg') }}" alt=""></td>

						{{-- <td>{{ $item->catcollection->title ?? 'нет категории' }}</td> --}}
						

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.nft.edit', $item->id) }}" class="btn btn-twitter btn-sm">Редактировать</a>
								<a href="{{ route('dashboard.nft.delete', $item->id) }}" onclick="return confirm('удалить?')" class="btn btn-danger btn-sm">Удалить</a>
							</div>
						</td>

					</tr>
					@empty
						<p>Данных нет</p>
					@endforelse
					@endif



				</tbody>

			</table>
		</div>
	</div>
</div>






@endsection



