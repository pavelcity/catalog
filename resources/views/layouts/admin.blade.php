<!DOCTYPE html>
<html lang="ru">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>@yield('title')</title>


	<meta http-equiv="Cache-Control" content="no-cache" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

	<meta name="csrf-token" content="{{ csrf_token() }}">


 


	<!--favicon-->
	<link rel="icon" href="{{ asset('adminka/assets/images/favicon-32x32.png') }}" type="image/png" />
	<!-- Vector CSS -->
	{{-- <link href="{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" /> --}}
	<!--plugins-->
	<link href="{{ asset('adminka/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	{{-- <link href="{{ asset('adminka/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" /> --}}
	<link href="{{ asset('adminka/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('adminka/assets/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('adminka/assets/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/bootstrap.min.css') }}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/icons.css') }}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{ asset('adminka/assets/css/app.css') }}" />


	<link rel="stylesheet" href="{{ asset('adminka/additional_admin.css') }}">



	
	@stack('styles')



</head>


<body>



	<!-- wrapper -->
	<div class="wrapper">

		@include('admin.includes.left_nav')
		@include('admin.includes.top_header')

		



		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">


					@yield('content')

				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->






		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->


		<!--Start Back To Top Button--> 
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->





		<div class="footer">
			<p class="mb-0"> <a href="{{ route('home.page') }}" target="_blank">перейти на сайт</a>
			</p>
		</div>


	</div>
	<!-- end wrapper -->










	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="	{{ asset('adminka/assets/js/jquery.min.js') }}"></script>
	<script src="	{{ asset('adminka/assets/js/popper.min.js') }}"></script>
	<script src="	{{ asset('adminka/assets/js/bootstrap.min.js') }}"></script>


	<!--plugins-->
	<script src="	{{ asset('adminka/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="	{{ asset('adminka/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	{{--  <script src="	{{ asset('adminka/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>  --}}


	<!-- Vector map JavaScript -->
	{{-- <script src="	{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script> --}}
	{{-- <script src="	{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script> --}}
	{{-- <script src="	{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-in-mill.js') }}"></script> --}}
	{{-- <script src="	{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js') }}"></script> --}}
	{{-- <script src="	{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-uk-mill-en.js') }}"></script> --}}
	{{-- <script src="	{{ asset('adminka/assets/plugins/vectormap/jquery-jvectormap-au-mill.js') }}"></script> --}}
	{{-- <script src="	{{ asset('adminka/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script> --}}
	{{--  <script src="	{{ asset('adminka/assets/js/index.js') }}"></script>  --}}
	<!-- App JS -->
	{{--  <script src="	{{ asset('adminka/assets/js/app.js') }}"></script>  --}}

	{{-- <script>
		new PerfectScrollbar('.dashboard-social-list');
		new PerfectScrollbar('.dashboard-top-countries');
	</script> --}}




	@stack('scripts')

</body>

</html>