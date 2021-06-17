@extends('layouts.admin')
@section('title', 'Подарочные наборы')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Подарочные наборы</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.settings.home') }}"><i class='bx bx-home-alt'></i></a>
					<li class="breadcrumb-item"><a href="{{ route('dashboard.settings.home') }}">Настройки</a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Подарочные наборы</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->




	


<div class="card radius-5">
	<div class="card-body">
	
		<div class="card-title">
			

			<a href="{{ route('dashboard.settings.podarki.create') }}" class="btn btn-primary m-1 px-5 py-2">
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
						<th style="width: 200px;">btns</th>
					</tr>
				</thead>
			


				@php
					$i = 1;
				@endphp

				<tbody>

					@if(true)
					@forelse($gifts as $item)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $item->title ?? 'нет данных' }}</td>
						<td><img width="120" src="{{ asset($item->pic420 ?? 'uploads/not_image.jpg') }}" alt=""></td>
						

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.settings.podarki.edit', $item->id) }}" class="btn btn-twitter btn-sm">Редактировать</a>
								<a href="{{ route('dashboard.settings.podarki.delete', $item->id) }}" onclick="return confirm('удалить?')" class="btn btn-danger btn-sm">Удалить</a>
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



