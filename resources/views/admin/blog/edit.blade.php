@extends('layouts.admin')
@section('title', 'Блог редактировать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Блог</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.blog.home') }}">Блог</a></li>
					<li class="breadcrumb-item active" aria-current="page">редактировать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->







 




	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.blog.update', $blog->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Сохранить</button>
					<a href="{{ route('dashboard.blog.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">БЛОГ</a>
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
									<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Заголовок заметки" value="{{ $blog->title }}">
									@error('title')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
					
					

 

					
					
								{{-- большая картинка 770px --}}
								<input type="hidden" name="old_pic" value="{{ $blog->pic }}">

								<br>
								<label for="short">Главная картинка (превью)</label>
								<div class="mt-0">
									<img src="{{ asset($blog->pic ??'uploads/not_image.jpg') }}" width="400" alt="" id="showPic">
								</div>
					
								<br>
								@error('pic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-1 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
									</div>
									<div class="custom-file">
										<input type="file" name="pic" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
					
					
					
					
					
					 
					
								{{-- маленькая картинка 770px --}}
								<input type="hidden" name="old_smallpic" value="{{ $blog->smallpic }}">

								@if(true)
								<label for="short">Картинка (для детальной страницы)</label>
								<div class="mt-0">
									<img src="{{ asset($blog->smallpic ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic2">
								</div>
					
								<br>
								@error('smallpic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-5 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic2">Картинка детальная страница</span>
									</div>
									<div class="custom-file">
										<input type="file" name="smallpic" class="custom-file-input " id="avatar2" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
								@endif
					
					
					
					
								<div class="form-group">
									@error('short')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="short">Превью (анонс заметки)</label>
									<textarea id="short" name="short" class="form-control" rows="10" cols="3">{{ $blog->short }}</textarea>
								</div>
					
					
								<div class="form-group">
									@error('descr')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="descr">Текст</label>
									<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ $blog->descr }}</textarea>
								</div>
					
		
				</div>
				{{-- #статья END --}}











				{{-- meta block --}}
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
					
				
					<br>
					<div class="form-group">
						<label for="metaTitle">meta title (заголовок статьи - 70-80 знаков) </label>
						<input class="form-control form-control-lg" id="metaTitle" name="metaTitle" type="text" placeholder="meta title" value="{{ $blog->metaTitle }}">
						@error('metaTitle')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="description">meta description (описание статьи - до 150 знаков)</label>
						<input class="form-control form-control-lg" id="description" name="description" type="text" placeholder="meta description" value="{{ $blog->description }}">
						@error('description')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="keywords">meta keywords (5-6 ключевых слов, фраз)</label>
						<input class="form-control form-control-lg" id="keywords" name="keywords" type="text" placeholder="meta keywords" value="{{ $blog->keywords }}">
						@error('keywords')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="author">meta author (автор статьи) </label>
						<input class="form-control form-control-lg" id="author" name="author" type="text" placeholder="meta author" value="{{ $blog->author }}">
						@error('author')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					
				</div>
				{{-- meta block end --}}







				{{-- адаптивные картинки --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					
					
					{{-- маленькая картинка 480px --}}
					<input type="hidden" name="old_pic480" value="{{ $blog->pic480 }}">
					<br>
					<label for="short">Картинка (для ширины - 480px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($blog->pic480 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic480">
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
					<input type="hidden" name="old_pic414" value="{{ $blog->pic414 }}">
					<br>
					<label for="short">Картинка (для ширины - 414px)</label>
					<div class="mt-0">
						
						<img src="{{ asset($blog->pic414 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic414">
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


				</div>
				{{-- адаптивные картинки END --}}







				{{-- Open Graph --}}
				<div class="tab-pane fade" id="opengraph" role="tabpanel" aria-labelledby="contact-tab">
					

					{{-- ogimg 600px --}}
					<br>
					<input type="hidden" name="old_picogimg" value="{{ $blog->ogimg }}">

					<label for="short">Картинка ogimg (для соцсетей) - 600x600px</label>
					<div class="mt-0">
						
						<img src="{{ asset($blog->ogimg ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPicogimg">
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
						<input class="form-control form-control-lg" id="sschemaDescription" name="schemaDescription" type="text" placeholder="короткое описание статьи" value="{{ $blog->schemaDescription }}">
						@error('schemaDescription')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaAuthor">schemaAuthor (автор статьи)</label>
						<input class="form-control form-control-lg" id="schemaAuthor" name="schemaAuthor" type="text" placeholder="автор статьи" value="{{ $blog->schemaAuthor }}">
						@error('schemaAuthor')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaPublisher">schemaPublisher (название компании)</label>
						<input class="form-control form-control-lg" id="schemaPublisher" name="schemaPublisher" type="text" placeholder="название компании" value="{{ $blog->schemaPublisher }}">
						@error('schemaPublisher')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>








				</div>
				{{-- Schemaorg end --}}






			</div>






			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Сохранить</button>
			<a href="{{ route('dashboard.blog.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

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
		$('#avatar2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic2').attr('src', e.target.result);
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


