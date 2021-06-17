<!--sidebar-wrapper-->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
<!--
				<div class="">
					<img src="{{ asset('adminka/assets/images/logo-icon.png') }}" class="logo-icon-2" alt="" />
				</div>
-->
				<div>
					<h4 class="logo-text">Юсуповstore</h4>
				</div>
				<a href="javascript:;" class="toggle-btn ml-auto"> <i class="bx bx-menu"></i>
				</a>
			</div>





			<!--navigation-->
			<ul class="metismenu" id="menu">

				<li class="menu-label">админка</li>



				<li class="{{ Request::is('dashboard') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.home') }}">
						<div class="parent-icon text-primary"><i class="bx bx-checkbox-square"></i>
						</div>
						<div class="menu-title text-primary">Главная</div>
					</a>
				</li>



 


				<hr>
				<div class="card radius-15">
					<div class="p-10">
						<li class="{{ Request::is('dashboard/settings*') ? 'mm-active' : '' }}">
							<a href="{{ route('dashboard.settings.home') }}">
								<div class="parent-icon text-info"><i class="bx bx-cog"></i>
								</div>
								<div class="menu-title text-info">Настройки</div>
							</a>
						</li>
					</div>
				</div>




				<li class="{{ Request::is('dashboard/collections*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.collections.home') }}">
						<div class="parent-icon text-primary"> <i class="bx bx-closet"></i>
						</div>
						<div class="menu-title text-primary">Коллекции</div>
					</a>
				</li>



				<li class="{{ Request::is('dashboard/nft*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.nft.home') }}">
						<div class="parent-icon text-secondary"> <i class="bx bx-coin"></i>
						</div>
						<div class="menu-title text-secondary">NFT</div>
					</a>
				</li>








				<li class="{{ Request::is('dashboard/blog*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.blog.home') }}">
						<div class="parent-icon text-info"> <i class="bx bx-edit-alt"></i>
						</div>
						<div class="menu-title text-info">Блог</div>
					</a>
				</li>

				<li class="{{ Request::is('dashboard/news*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.news.home') }}">
						<div class="parent-icon text-info"><i class="bx bx-archive"></i>
						</div>
						<div class="menu-title">Новости</div>
					</a>
				</li>

				<li class="{{ Request::is('dashboard/contact*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.contact.home') }}">
						<div class="parent-icon text-info"><i class="bx bx-bell"></i>
						</div>
						<div class="menu-title">Контакты</div>
					</a>
				</li>

				<li class="{{ Request::is('dashboard/about*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.about.home') }}">
						<div class="parent-icon text-info"><i class="bx bx-upside-down"></i>
						</div>
						<div class="menu-title">Обо мне</div>
					</a>
				</li>


				@if(Auth::user()->email === 'suadmin@me.me')
				<li class="{{ Request::is('dashboard/rules*') ? 'mm-active' : '' }}">
					<a href="{{ route('dashboard.rules.home') }}">
						<div class="parent-icon text-info"><i class="bx bx-bulb"></i>
						</div>
						<div class="menu-title">Правила</div>
					</a>
				</li>
				@endif

				





				<li class="menu-label">Перейти на главную сайта</li>

				<li>
					<a href="{{ route('home.page') }}">
						<div class="parent-icon text-secondary"><i class="bx bx-pointer"></i>
						</div>
						<div class="menu-title text-secondary">На сайт</div>
					</a>
				</li>



	

		
			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar-wrapper-->