@extends('layouts.admin')
@section('title', 'Коллекция редактировать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Коллекция</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.collections.home') }}">Коллекция</a></li>
					<li class="breadcrumb-item active" aria-current="page">редактировать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.collections.update', $collection->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Сохранить</button>
					<a href="{{ route('dashboard.collections.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">КОЛЛЕКЦИЯ</a>
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

								<div class="form-group">
									<label for="title">Выберите категорию</label>
									<select class="form-control form-control" name="catcollection_id" required>
										<option selected disabled>Выберите ...</option>
										@foreach ($cats as $cat)
												<option 
												@if($cat->id == $collection->catcollection_id) selected @endif
												value="{{ $cat->id }}">{{ $cat->title }}</option>
										@endforeach
									</select>
									@error('catcollection_id')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>



			






					
								<br>
								<div class="form-group">
									<label for="title">Название</label>
									<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Название" value="{{ $collection->title }}">
									@error('title')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>

								<br>
								<div class="form-group">
									<label for="title">Размер</label>
									<input class="form-control form-control-lg" id="title" name="size" type="text" placeholder="Размер" value="{{ $collection->size }}">
									@error('size')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>

								<br>
								<div class="form-group">
									<label for="title">Цвет</label>
									<input class="form-control form-control-lg" id="title" name="color" type="text" placeholder="Цвет" value="{{ $collection->color }}">
									@error('color')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>

								<br>
								<div class="form-group">
									<label for="title">Материал</label>
									<input class="form-control form-control-lg" id="title" name="material" type="text" placeholder="Материал" value="{{ $collection->material }}">
									@error('material')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
								<br>
								<div class="form-group">
									<label for="title">Цена</label>
									<input class="form-control form-control-lg" id="title" name="price" type="text" placeholder="Цена" value="{{ $collection->price }}">
									@error('price')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>
					
					
					
					
					
								{{-- большая картинка 400px --}}
								<br>
								<input type="hidden" name="old400_1" value="{{ $collection->pic400_1 }}">
								<label for="short">1-я картинка </label>
								<div class="mt-0">
									<img src="{{ asset($collection->pic400_1 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic">
								</div>
					
								<br>
								@error('pic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-1 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
									</div>
									<div class="custom-file">
										<input type="file" name="pic400_1" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
					
					
					
					
					
					 
					
								{{-- маленькая картинка 3750px --}}
								@if(true)
								<input type="hidden" name="old375_1" value="{{ $collection->pic375_1 }}">
								<label for="short">1-я картинка (для смартфонов)</label>
								<div class="mt-0">
									<img src="{{ asset($collection->pic375_1 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic2">
								</div>
					
								<br>
								@error('smallpic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-5 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic2">Картинка детальная страница</span>
									</div>
									<div class="custom-file">
										<input type="file" name="pic375_1" class="custom-file-input " id="avatar2" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
								@endif
					
					
					

					
					
								<div class="form-group">
									@error('descr')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="descr">Описание коллекции</label>
									<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ $collection->descr }}</textarea>
								</div>
					
		
				</div>
				{{-- #статья END --}}






				{{-- meta block --}}
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
					
					

					<br>
					<div class="form-group">
						<label for="metaTitle">meta title (заголовок статьи - 70-80 знаков) </label>
						<input class="form-control form-control-lg" id="metaTitle" name="metaTitle" type="text" placeholder="meta title" value="{{ $collection->metaTitle }}">
						@error('metaTitle')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="description">meta description (описание статьи - до 150 знаков)</label>
						<input class="form-control form-control-lg" id="description" name="description" type="text" placeholder="meta description" value="{{ $collection->description }}">
						@error('description')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="keywords">meta keywords (5-6 ключевых слов, фраз)</label>
						<input class="form-control form-control-lg" id="keywords" name="keywords" type="text" placeholder="meta keywords" value="{{ $collection->keywords }}">
						@error('keywords')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="author">meta author (автор статьи) </label>
						<input class="form-control form-control-lg" id="author" name="author" type="text" placeholder="meta author" value="{{ $collection->author }}">
						@error('author')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					
				</div>
				{{-- meta block end --}}














				{{-- адаптивные картинки --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					
					<hr>
					<h4 class="text-primary">2-я картинка</h4>
					{{-- маленькая картинка 2-я картинка  --}}
					<br>
					<label for="short">2-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic400_2 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_2">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic400_2" class="custom-file-input" id="avatar400_2" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 2-я картинка --}}


					{{-- маленькая картинка  --}}
					<br>
					<label for="short">2-я картинка (для смартфонов)</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic375_2 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic375_2">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 375px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic375_2" class="custom-file-input" id="avatar375_2" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}








					<hr>
					<h4 class="text-primary">3-я картинка</h4>
					{{-- маленькая картинка 3-я картинка  --}}
					<br>
					<label for="short">3-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic400_3 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_3">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic400_3" class="custom-file-input" id="avatar400_3" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 3-я картинка --}}


					{{-- маленькая картинка  --}}
					<br>
					<label for="short">3-я картинка (для смартфонов)</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic375_3 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic375_3">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 375px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic375_3" class="custom-file-input" id="avatar375_3" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}







					<hr>
					<h4 class="text-primary">4-я картинка</h4>
					{{-- маленькая картинка 3-я картинка  --}}
					<br>
					<label for="short">4-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic400_4 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_4">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic400_4" class="custom-file-input" id="avatar400_4" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 3-я картинка --}}


					{{-- маленькая картинка  --}}
					<br>
					<label for="short">4-я картинка (для смартфонов)</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic375_4 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic375_4">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 375px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic375_4" class="custom-file-input" id="avatar375_4" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}









					<hr>
					<h4 class="text-primary">5-я картинка</h4>
					{{-- маленькая картинка 3-я картинка  --}}
					<br>
					<label for="short">5-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic400_5 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_5">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic400_5" class="custom-file-input" id="avatar400_5" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка 3-я картинка --}}


					{{-- маленькая картинка  --}}
					<br>
					<label for="short">5-я картинка (для смартфонов)</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->pic375_5 ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPic375_5">
					</div>

					<br>
					@error('pic')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка 375px</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic375_5" class="custom-file-input" id="avatar375_5" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}






				</div>










				{{-- Open Graph --}}
				<div class="tab-pane fade" id="opengraph" role="tabpanel" aria-labelledby="contact-tab">
					

					{{-- ogimg 600px --}}
					<br>
					<label for="short">Картинка ogimg (для соцсетей) - 600x600px</label>
					<div class="mt-0">
						
						<img src="{{ asset($collection->ogimg ?? 'uploads/not_image.jpg') }}" width="400" alt="" id="showPicogimg">
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
						<input class="form-control form-control-lg" id="sschemaDescription" name="schemaDescription" type="text" placeholder="короткое описание статьи" value="{{ $collection->schemaDescription }}">
						@error('schemaDescription')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaAuthor">schemaAuthor (автор статьи)</label>
						<input class="form-control form-control-lg" id="schemaAuthor" name="schemaAuthor" type="text" placeholder="автор статьи" value="{{ $collection->schemaAuthor }}">
						@error('schemaAuthor')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaPublisher">schemaPublisher (название компании)</label>
						<input class="form-control form-control-lg" id="schemaPublisher" name="schemaPublisher" type="text" placeholder="название компании" value="{{ $collection->schemaPublisher }}">
						@error('schemaPublisher')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>








				</div>
				{{-- Schemaorg end --}}









			</div>






			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Сохранить</button>
			<a href="{{ route('dashboard.collections.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

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
		$('#avatar400_2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	



<script>
	$(document).ready(function(){
		$('#avatar400_3').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_3').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_3').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_3').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	



<script>
	$(document).ready(function(){
		$('#avatar400_4').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_4').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_4').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_4').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar400_5').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_5').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_5').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_5').attr('src', e.target.result);
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


