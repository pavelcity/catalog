@extends('layouts.admin')
@section('title', 'Правила создать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Правила</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.rules.home') }}">Правила</a></li>
					<li class="breadcrumb-item active" aria-current="page">Создать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.rules.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
					<a href="{{ route('dashboard.rules.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Правила</a>
				</li>
			</ul>








			<div class="tab-content p-3" id="myTabContent">

				{{-- #статья --}}
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					
								{{-- ### --}}
					
							<hr>
							<h3>Политика конфиденциальности</h3>
							
							<br>
							<div class="form-group">
								<label for="politictitle">Заголовок (например: Политика конфиденциальности) </label>
								<input class="form-control form-control-lg" id="politictitle" name="politictitle" type="text" placeholder="Заголовок" value="{{ old('politictitle') }}">
								@error('politictitle')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<div class="form-group">
								@error('politic')
									<p style="color:red;">{{ $message }}</p>
								@enderror
								<label for="politic">Текст</label>
								<textarea id="politic" name="politic" class="form-control" rows="10" cols="3">{{ old('politic') }}</textarea>
							</div>





							<br>
							<hr>
							<h3>Условия доставки</h3>
							
							<br>
							<div class="form-group">
								<label for="dostavkatitle">Заголовок (например: Условия доставки) </label>
								<input class="form-control form-control-lg" id="dostavkatitle" name="dostavkatitle" type="text" placeholder="Заголовок" value="{{ old('dostavkatitle') }}">
								@error('dostavkatitle')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<div class="form-group">
								@error('dostavka')
									<p style="color:red;">{{ $message }}</p>
								@enderror
								<label for="dostavka">Текст</label>
								<textarea id="dostavka" name="dostavka" class="form-control" rows="10" cols="3">{{ old('dostavka') }}</textarea>
							</div>







							<br>
							<hr>
							<h3>Условия возврата/обмена</h3>
							
							<br>
							<div class="form-group">
								<label for="obmentitle">Заголовок (например: Условия возврата/обмена) </label>
								<input class="form-control form-control-lg" id="obmentitle" name="obmentitle" type="text" placeholder="Заголовок" value="{{ old('obmentitle') }}">
								@error('obmentitle')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<div class="form-group">
								@error('obmen')
									<p style="color:red;">{{ $message }}</p>
								@enderror
								<label for="obmen">Текст</label>
								<textarea id="obmen" name="obmen" class="form-control" rows="10" cols="3">{{ old('obmen') }}</textarea>
							</div>









							<br>
							<hr>
							<h3>Условия покупки</h3>
							
							<br>
							<div class="form-group">
								<label for="pokupkatitle">Заголовок (например: Условия покупки) </label>
								<input class="form-control form-control-lg" id="pokupkatitle" name="pokupkatitle" type="text" placeholder="Заголовок" value="{{ old('pokupkatitle') }}">
								@error('pokupkatitle')
									<p style="color:red;">{{ $message }}</p>
								@enderror
							</div>

							<div class="form-group">
								@error('pokupka')
									<p style="color:red;">{{ $message }}</p>
								@enderror
								<label for="pokupka">Текст</label>
								<textarea id="pokupka" name="pokupka" class="form-control" rows="10" cols="3">{{ old('pokupka') }}</textarea>
							</div>





					
		
				</div>
				{{-- #статья END --}}

















			</div>






			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
			<a href="{{ route('dashboard.rules.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

		</form>
		@endif



		</div>
	</div>





	





@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#politic') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#dostavka') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#pokupka') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#obmen') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush







@endsection




