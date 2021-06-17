@extends('layouts.admin')
@section('title', 'NFT создать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">NFT</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.nft.home') }}">NFT</a></li>
					<li class="breadcrumb-item active" aria-current="page">Создать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.nft.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
					<a href="{{ route('dashboard.nft.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">NFT</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">МЕТА</a>
				</li>
				<li class="nav-item" role="presentation"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">КАРТИНКИ (коллекции токена)</a>
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
									<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Название" value="{{ old('title') }}">
									@error('title')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>

								<br>
								<div class="form-group">
									<label for="price">Цена</label>
									<input class="form-control form-control-lg" id="price" name="price" type="text" placeholder="Цена" value="{{ old('price') }}">
									@error('price')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>




								<div class="form-group">
									@error('short')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="short">Короткое описание (превью)</label>
									<textarea id="short" name="short" class="form-control" rows="10" cols="3">{{ old('short') }}</textarea>
								</div>
					


								<div class="form-group">
									@error('descr')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="descr">Описание (детальное)</label>
									<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ old('descr') }}</textarea>
								</div>
					
					
					
					
					
								{{-- большая картинка  --}}
								<br>
								<label for="short">Картинка для превью</label>
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
										<input type="file" name="pic480_1" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
					
		
				</div>
				{{-- #статья END --}}






				{{-- meta block --}}
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> 
					
					

					<br>
					<div class="form-group">
						<label for="metaTitle">meta title (заголовок статьи - 70-80 знаков) </label>
						<input class="form-control form-control-lg" id="metaTitle" name="metaTitle" type="text" placeholder="meta title" value="{{ old('metaTitle') }}">
						@error('metaTitle')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="description">meta description (описание статьи - до 150 знаков)</label>
						<input class="form-control form-control-lg" id="description" name="description" type="text" placeholder="meta description" value="{{ old('description') }}">
						@error('description')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<div class="form-group">
						<label for="keywords">meta keywords (5-6 ключевых слов, фраз)</label>
						<input class="form-control form-control-lg" id="keywords" name="keywords" type="text" placeholder="meta keywords" value="{{ old('keywords') }}">
						@error('keywords')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="author">meta author (автор статьи) </label>
						<input class="form-control form-control-lg" id="author" name="author" type="text" placeholder="meta author" value="{{ old('author') }}">
						@error('author')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					
				</div>
				{{-- meta block end --}}














				{{-- адаптивные картинки --}}
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					
					<hr>
					<h4 class="text-primary">1-я картинка</h4>
										
					<div class="form-group">
						<label for="price1">Цена для 1-й картинки</label>
						<input class="form-control form-control-lg" id="price1" name="price1" type="text" placeholder="Цена" value="{{ old('price1') }}">
						@error('price1')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					
					{{-- маленькая картинка   --}}
					<br>
					<label for="short">1-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_2">
					</div>

					<br>
					@error('pic350_1')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_1" class="custom-file-input" id="avatar400_2" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}
















					<hr>
					<h4 class="text-primary">2-я картинка</h4>
										
					<div class="form-group">
						<label for="price2">Цена для 2-й картинки</label>
						<input class="form-control form-control-lg" id="price2" name="price2" type="text" placeholder="Цена" value="{{ old('price2') }}">
						@error('price2')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					{{-- маленькая картинка 3-я картинка  --}}
					<br>
					<label for="short">2-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_3">
					</div>

					<br>
					@error('pic350_2')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_2" class="custom-file-input" id="avatar400_3" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}







					<hr>
					<h4 class="text-primary">3-я картинка</h4>
										
					<div class="form-group">
						<label for="price3">Цена для 3-й картинки</label>
						<input class="form-control form-control-lg" id="price3" name="price3" type="text" placeholder="Цена" value="{{ old('price3') }}">
						@error('price3')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>
					{{-- маленькая картинка 3-я картинка  --}}
					<br>
					<label for="short">3-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_4">
					</div>

					<br>
					@error('pic350_3')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_3" class="custom-file-input" id="avatar400_4" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка  --}}







					<hr>
					<h4 class="text-primary">4-я картинка</h4>

					<div class="form-group">
						<label for="price4">Цена для 4-й картинки</label>
						<input class="form-control form-control-lg" id="price4" name="price4" type="text" placeholder="Цена" value="{{ old('price4') }}">
						@error('price4')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<label for="short">4-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_5">
					</div>

					<br>
					@error('pic350_4')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_4" class="custom-file-input" id="avatar400_5" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка --}}










					<hr>
					<h4 class="text-primary">5-я картинка</h4>

					<div class="form-group">
						<label for="price5">Цена для 5-й картинки</label>
						<input class="form-control form-control-lg" id="price5" name="price5" type="text" placeholder="Цена" value="{{ old('price5') }}">
						@error('price5')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<label for="short">5-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_6">
					</div>

					<br>
					@error('pic350_5')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_5" class="custom-file-input" id="avatar400_6" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка --}}







					<hr>
					<h4 class="text-primary">6-я картинка</h4>

					<div class="form-group">
						<label for="price6">Цена для 6-й картинки</label>
						<input class="form-control form-control-lg" id="price6" name="price6" type="text" placeholder="Цена" value="{{ old('price6') }}">
						@error('price6')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<label for="short">6-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_7">
					</div>

					<br>
					@error('pic350_6')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_6" class="custom-file-input" id="avatar400_7" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка --}}








					<hr>
					<h4 class="text-primary">7-я картинка</h4>

					<div class="form-group">
						<label for="price7">Цена для 7-й картинки</label>
						<input class="form-control form-control-lg" id="price7" name="price7" type="text" placeholder="Цена" value="{{ old('price7') }}">
						@error('price7')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>

					<br>
					<label for="short">7-я картинка</label>
					<div class="mt-0">
						
						<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic400_8">
					</div>

					<br>
					@error('pic350_6')
						<p style="color:red; font-size:12px;">{{ $message }}</p>
					@enderror
					<div class="input-group mb-1 mt-0">
						<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
						</div>
						<div class="custom-file">
							<input type="file" name="pic350_7" class="custom-file-input" id="avatar400_8" aria-describedby="avatar">
							<label class="custom-file-label" for="avatar">Выберите файл</label>
						</div>
					</div>
					<br>
					<br>
					{{-- маленькая картинка --}}








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







				{{-- Schemaorg --}}
				<div class="tab-pane fade" id="schemaorg" role="tabpanel" aria-labelledby="contact-tab">
	
	
					<br>
					<div class="form-group">
						<label for="schemaDescription">schemaDescription (короткое описание статьи) </label>
						<input class="form-control form-control-lg" id="sschemaDescription" name="schemaDescription" type="text" placeholder="короткое описание статьи" value="{{ old('schemaDescription') }}">
						@error('schemaDescription')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaAuthor">schemaAuthor (автор статьи)</label>
						<input class="form-control form-control-lg" id="schemaAuthor" name="schemaAuthor" type="text" placeholder="автор статьи" value="{{ old('schemaAuthor') }}">
						@error('schemaAuthor')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>


					<br>
					<div class="form-group">
						<label for="schemaPublisher">schemaPublisher (название компании)</label>
						<input class="form-control form-control-lg" id="schemaPublisher" name="schemaPublisher" type="text" placeholder="название компании" value="{{ old('schemaPublisher') }}">
						@error('schemaPublisher')
							<p style="color:red;">{{ $message }}</p>
						@enderror
					</div>








				</div>
				{{-- Schemaorg end --}}









			</div>





 
			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
			<a href="{{ route('dashboard.nft.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

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
		$('#avatar400_6').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_6').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

	$(document).ready(function(){
		$('#avatar400_7').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_7').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});

	$(document).ready(function(){
		$('#avatar400_8').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_8').attr('src', e.target.result);
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


