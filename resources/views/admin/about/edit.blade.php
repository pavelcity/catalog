@extends('layouts.admin')
@section('title', 'Обо мне редактировать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Обо мне</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.about.home') }}">Обо мне</a></li>
					<li class="breadcrumb-item active" aria-current="page">редактировать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.about.update', $about->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Сохранить</button>
					<a href="{{ route('dashboard.about.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ОБО МНЕ</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">МЕТА</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">КАРТИНКИ (адаптивные)</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#opengraph" role="tab" aria-controls="profile" aria-selected="false">Open Graph</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#schemaorg" role="tab" aria-controls="profile" aria-selected="false">Schemaorg</a>
				</li>
			</ul>








			<div class="tab-content p-3" id="myTabContent">

				{{-- #статья --}}
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					
								{{-- ### --}}
					
								<br>
								<div class="form-group">
									<label for="title">Название</label>
									<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Заголовок заметки" value="{{ $about->title }}">
									@error('title')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
					
								<br>
								<div class="form-group">
									<label for="phone">Телефон</label>
									<input class="form-control form-control-lg" id="phone" name="phone" type="text" placeholder="Телефон" value="{{ $about->phone }}">
									@error('phone')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
					
								<br>
								<div class="form-group">
									<label for="email">Email</label>
									<input class="form-control form-control-lg" id="email" name="email" type="text" placeholder="email" value="{{ $about->email }}">
									@error('email')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
					
					
					
					
								{{-- большая картинка pic1500px --}}
								<br>
								<input type="hidden" name="old1500" value="{{ $about->pic1500 }}">
								<label for="short">Главная картинка</label>
								<div class="mt-0">
									<img src="{{ asset($about->pic1500 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic">
								</div>
					
								<br>
								@error('pic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-1 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
									</div>
									<div class="custom-file">
										<input type="file" name="pic1500" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
					
					
					
					
					
					 
					
					
					
					
					
					

					
					
								<div class="form-group">
									@error('descr')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="descr">Текст (для страницы обо мне)</label>
									<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ $about->descr }}</textarea>
								</div>
					
		
				</div>
				{{-- #статья END --}}









				{{-- meta block --}}
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
					
					

					<br>
					<div class="form-group">
						<label for="metaTitle">meta title (заголовок статьи - 70-80 знаков) </label>
						<input class="form-control form-control-lg" id="metaTitle" name="metaTitle" type="text" placeholder="meta title" value="{{ $about->metaTitle }}">
						@error('metaTitle')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="description">meta description (описание статьи - до 150 знаков)</label>
						<input class="form-control form-control-lg" id="description" name="description" type="text" placeholder="meta description" value="{{ $about->description }}">
						@error('description')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="keywords">meta keywords (5-6 ключевых слов, фраз)</label>
						<input class="form-control form-control-lg" id="keywords" name="keywords" type="text" placeholder="meta keywords" value="{{ $about->keywords }}">
						@error('keywords')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="author">meta author (автор статьи) </label>
						<input class="form-control form-control-lg" id="author" name="author" type="text" placeholder="meta author" value="{{ $about->author }}">
						@error('author')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					
				</div>
				{{-- meta block end --}}















				{{-- адаптивные картинки --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					


					{{--  картинка 1440px --}}
					<br>
					<input type="hidden" name="old1440" value="{{ $about->pic1440 }}">
					<label for="short">Картинка (для macbook - 1440 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic1440 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic1440">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 1440 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic1440" class="custom-file-input" id="avatar1440" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- картинка 1440px --}}




					{{--  картинка  1366 px --}}
					<br>
					<input type="hidden" name="old1366" value="{{ $about->pic1366 }}">
					<label for="short">Картинка (для ноутбуков - 1366 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic1366 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic1366">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 1366 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic1366" class="custom-file-input" id="avatar1366" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{--  картинка 1366 px --}}




					{{--  картинка  1024 px --}}
					<br>
					<input type="hidden" name="old1024" value="{{ $about->pic1024 }}">
					<label for="short">Картинка (1024 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic1024 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic1024">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 1024 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic1024" class="custom-file-input" id="avatar1024" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{--  картинка 1024 px --}}



					{{--  картинка  992 px --}}
					<br>
					<input type="hidden" name="old992" value="{{ $about->pic992 }}">
					<label for="short">Картинка (992 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic992 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic992">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 922 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic992" class="custom-file-input" id="avatar992" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{--  картинка 992 px --}}




					{{--  картинка  768 px --}}
					<br>
					<input type="hidden" name="old768" value="{{ $about->pic768 }}">
					<label for="short">Картинка (для планшетов 768 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic768 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic768">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 768 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic768" class="custom-file-input" id="avatar768" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{--  картинка 768 px --}}





					{{--  картинка  600 px --}}
					<br>
					<input type="hidden" name="old600" value="{{ $about->pic600 }}">
					<label for="short">Картинка (для планшетов 600 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic600 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic600">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 600 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic600" class="custom-file-input" id="avatar600" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{--  картинка 600 px --}}


					
					{{-- маленькая картинка 480px --}}
					<br>
					<input type="hidden" name="old480" value="{{ $about->pic480 }}">
					<label for="short">Картинка (для ширины - 480px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic480 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic480">
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
					<input type="hidden" name="old414" value="{{ $about->pic414 }}">
					<label for="short">Картинка (для ширины - 414px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic414 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic414">
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
					<input type="hidden" name="old375" value="{{ $about->pic375 }}">
					<label for="short">Картинка (для ширины - 375 px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->pic375 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic375">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 375 px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic375" class="custom-file-input" id="avatar375" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 375 px --}}
					


				</div>










				{{-- Open Graph --}}
				<div class="tab-pane fade" id="opengraph" role="tabpanel" aria-labelledby="contact-tab">
					
		

					{{-- ogimg 600px --}}
					<br>
					<input type="hidden" name="oldogimg" value="{{ $about->ogimg }}">
					<label for="short">Картинка ogimg (для соцсетей) - 600x600px</label>
					<div class="mt-0">
						
						<img src="{{ asset($about->ogimg ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPicogimg">
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







				{{-- Schemaorg --}}
				<div class="tab-pane fade" id="schemaorg" role="tabpanel" aria-labelledby="contact-tab">
	
	
					<br>
					<div class="form-group">
						<label for="schemaDescription">schemaDescription (короткое описание статьи) </label>
						<input class="form-control form-control-lg" id="sschemaDescription" name="schemaDescription" type="text" placeholder="короткое описание статьи" value="{{ $about->schemaDescription }}">
						@error('schemaDescription')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaAuthor">schemaAuthor (автор статьи)</label>
						<input class="form-control form-control-lg" id="schemaAuthor" name="schemaAuthor" type="text" placeholder="автор статьи" value="{{ $about->schemaAuthor }}">
						@error('schemaAuthor')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaPublisher">schemaPublisher (название компании)</label>
						<input class="form-control form-control-lg" id="schemaPublisher" name="schemaPublisher" type="text" placeholder="название компании" value="{{ $about->schemaPublisher }}">
						@error('schemaPublisher')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>








				</div>
				{{-- Schemaorg end --}}









			</div>






			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Сохранить</button>
			<a href="{{ route('dashboard.about.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

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
		$('#avatar1440').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic1440').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar1366').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic1366').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar1024').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic1024').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar992').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic992').attr('src', e.target.result);
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
		$('#avatar600').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic600').attr('src', e.target.result);
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







@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#short') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#descr') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush







@endsection


