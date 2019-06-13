
<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-fixed navbar-light white bootsnav">
	<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-menu">
				<i class="fa fa-bars"></i>
			</button>
			<!-- Start Header Navigation -->
			<div class="navbar-header">
				<a class="navbar-brand" href=" ./">
					<img class="logo logo-scrolled" src="images/newlogo.png" alt="acedepot" />
				</a>
			</div><!-- Logo -->
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="navbar-menu">
				<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
						<li class="active"><input type="text" class="form-control" placeholder="Find Freelancer"></li>
						<li class="dropdown megamenu-fw"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Brows</a>
							<ul class="dropdown-menu megamenu-content" role="menu">
								<li class="">
									<div class="row">
										<div class="col-menu col-md-3">
											<h6 class="title">Main Nav</h6>
											<div class="content">
												<ul class="menu-col">
													<li><a class="" href="/" class=" ">Home</a></li>
													<li class=" "><a class=" " href="services"> Services</a></li>
													<li><a class=" " href="about"> About Us</a></li>
													<li><a class=" " href="contact">Contact</a></li>
													<li><a class=" " href="faq">FAQ</a></li>
												</ul>
											</div>
										</div><!-- end col-3 -->
										<div class="col-menu col-md-3">
											<h6 class="title">Candidates</h6>
											<div class="content">
												<ul class="menu-col">
													<li class=""><a class="" href="current-openings"> Current Openings</a></li>
													<li class=""><a class="" href="available-contracts"> Available Contracts</a></li>
												</ul>
											</div>
										</div><!-- end col-3 -->
										<div class="col-menu col-md-3">
											<h6 class="title">Employer</h6>
											<div class="content">
												<ul class="menu-col">
													<li><a class=" " href="employer-contractor-search"> Search/Request a Contractor</a></li>
													<li><a class=" " href="employer-candidate-search"> Candidate Search/Post a Job</a></li>
												</ul>
											</div>
										</div><!-- end col-3 -->
									</div><!-- end row -->									
								</li>
							</ul>
						</li>
						<li><a href="blog">Blog</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
						@guest
							<li class=" ">
									<a class=" " href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>{{ __('Login') }}</a>
							</li>
							@if (Route::has('register'))
									<li class="left-br">
											<a href="javascript:void(0)"  data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a>									</li>
							@endif
						@else
														
							<li class="dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->first_name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
												onclick="event.preventDefault();
																			document.getElementById('logout-form').submit();">
												{{ __('Logout') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
										</form>
								</div>
							</li>
					@endguest
				</ul>
			</div><!-- /.navbar-collapse -->

		</div>	
</nav>
<!-- End Navigation -->