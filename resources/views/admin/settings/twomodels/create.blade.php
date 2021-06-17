@extends('layouts.admin')
@section('title', 'Модели создать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">2 Модели</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.settings.home') }}">Настройки</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.settings.twomodels.home') }}">2 Модели</a></li>
					<li class="breadcrumb-item active" aria-current="page">Создать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.settings.twomodels.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
					<a href="{{ route('dashboard.settings.twomodels.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Модель (фото)</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">КАРТИНКИ (адаптивные)</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#opengraph" role="tab" aria-controls="profile" aria-selected="false">Open Graph</a>
				</li>
			</ul>








			<div class="tab-content p-3" id="myTabContent">

				{{-- #статья --}}
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					
								{{-- ### --}}
					
								<br>
								<div class="form-group">
									<label for="title">Название</label>
									<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Название" value="{{ old('title') }}">
									@error('title')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					 

								<br>
								<div class="form-group">
									<label for="link">Ссылка слайда</label>
									<input class="form-control form-control-lg" id="link" name="link" type="text" placeholder="какая будет открываться страница" value="{{ old('link') }}">
									@error('link')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					

								<br>
								<div class="form-group">
									<label for="sort">Сортировка (использвуйтей цифры: 1, 2)</label>
									<input class="form-control form-control-lg" id="sort" name="sort" type="text" placeholder="какая картинка будет выводиться первой" value="{{ old('sort') }}">
									@error('sort')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
					
					
					
					
								{{-- большая картинка 950px --}}
								<br>
								<label for="short">Главная картинка (превью)</label>
								<div class="mt-0">
									<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic">
								</div>
					
								<br>
								@error('pic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-1 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
									</div>
									<div class="custom-file">
										<input type="file" name="pic950" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
					
		
				</div>
				{{-- #статья END --}}


















				{{-- адаптивные картинки --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					
					{{-- маленькая картинка 768 px --}}
					<br>
					<label for="short">Картинка (для планшета)</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic768">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 768px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic768" class="custom-file-input" id="avatar768" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 768 px --}}



					
					{{-- маленькая картинка 480 px --}}
					<br>
					<label for="short">Картинка (для ширины - 480px)</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic480">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 480px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic480" class="custom-file-input" id="avatar480" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 480px --}}


					{{-- маленькая картинка 414px --}}
					<br>
					<label for="short">Картинка (для ширины - 414px)</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic414">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 414px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic414" class="custom-file-input" id="avatar414" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 414px --}}



					{{-- маленькая картинка 375 px --}}
					<br>
					<label for="short">Картинка для iphone (для ширины - 375 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic375">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 375px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic375" class="custom-file-input" id="avatar375" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 414px --}}


				</div>










				{{-- Open Graph --}}
				<div class="tab-pane fade" id="opengraph" role="tabpanel" aria-labelledby="contact-tab">
					
				

					{{-- ogimg 600px --}}
					<br>
					<label for="short">Картинка ogimg (для соцсетей) - 600x600px</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPicogimg">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 600x600px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="ogimg" class="custom-file-input" id="avatarogimg" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- ogimg 600px --}}



				</div>
				{{-- Open Graph end --}}





			</div>






			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
			<a href="{{ route('dashboard.settings.twomodels.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

		</form>
		@endif



		</div>
	</div>





	







@push('scripts')
	<script>
		$(document).ready(function(){
			$('#avatar').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	


<script>
	$(document).ready(function(){
		$('#avatar768').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic768').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar480').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic480').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatar414').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic414').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatar375').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	

<script>
	$(document).ready(function(){
		$('#avatarogimg').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPicogimg').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


@endpush





@endsection


