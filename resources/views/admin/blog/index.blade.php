@extends('layouts.admin')
@section('title', 'Блог')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Блог</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page">Блог</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->




	


<div class="card radius-5">
	<div class="card-body">
	
		<div class="card-title">
			
			{{-- <a href="{{ route('dashboard.blog.create') }}" class="btn btn-primary m-1 px-5 py-2">Создать</a> --}}
			<a href="{{ route('dashboard.blog.create') }}" class="btn btn-primary m-1 px-5 py-2">
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

					@forelse($blogs as $blog)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $blog->title ?? 'нет данных' }}</td>
						<td><img width="120" src="{{ asset($blog->pic ?? 'uploads/not_image.jpg') }}" alt=""></td>
						

						<td>
							<div class="btn-group m-1" role="group" aria-label="Basic example">
								<a href="{{ route('dashboard.blog.edit', $blog->id) }}" class="btn btn-twitter btn-sm">Редактировать</a>
								<a href="{{ route('dashboard.blog.delete', $blog->id) }}" onclick="return confirm('удалить?')" class="btn btn-danger btn-sm">Удалить</a>
							</div>
						</td>

					</tr>
					@empty
						<p>Данных нет</p>
					@endforelse
				



				</tbody>

			</table>
		</div>
	</div>
</div>




@endsection


