<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javascript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
				</div>



				<div class="flex-grow-1 search-bar">
					<a href="{{ route('home.page') }}">
						<div class="parent-icon text-secondary"><i class="bx bx-pointer"></i> Перейти на сайт
						</div>
					</a>
				</div>


				{{-- <div class="flex-grow-1 search-bar">
					<div class="input-group">
						<div class="input-group-prepend search-arrow-back">
							<button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="search" />
						<div class="input-group-append">
							<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
							</button>
						</div>
					</div>
				</div> --}}



				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
					
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javascript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>







						<li class="nav-item dropdown dropdown-user-profile">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<p class="user-name mb-0">{{ Auth::user()->name }}</p>
										{{-- <p class="designattion mb-0">Available</p> --}}
									</div>
									<img src="https://images.unsplash.com/photo-1525909002-1b05e0c869d8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=675&q=80" class="user-img" alt="">
								</div>
							</a>


							<div class="dropdown-menu dropdown-menu-right">	
								<a class="dropdown-item" href="#"><i
										class="bx bx-cog"></i><span>Профиль</span></a>

									<a class="dropdown-item" href="#"><i
											class="bx bx-archive"></i><span>О нас</span></a>



									<a class="dropdown-item" href="#"><i
											class="bx bx-task"></i><span>Контакты</span></a>	


								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="{{ route('admin.logout') }}"><i
										class="bx bx-power-off"></i><span>Выйти</span></a>
							</div>
						</li>




					</ul>
				</div>
			</nav>
		</header>
		<!--end header-->