@extends('layout.app')

@section('title')
   || Home
@endsection

@section('styles')
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> --}}
@endsection

@section('content')

	<div id="slider" class="banner banner-slider carousel slide carousel-fade" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for Slides -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100 car-img" src="images/slider/newslider1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<p>We are AceDepot and we’ve got you covered. Search through our depot of ace candidates, businesses and companies for the quality products and services that you desire</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider8.jpg" alt="Eight slide">
						<div class="carousel-caption d-none d-md-block">
							<p>Be a boss! Hire candidates and contractors on your devices in the shortest possible time and at your convenience on AceDepot</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider2.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
								<p>New to a place and need any type of worker? Look no farther, locate the nearest one around you on AceDepot</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<p>The reward for a good work is more work. Get your satisfied customers to attest to your good products and services on your company profile, increase customer traffic by displaying your quality products and services!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider4.jpeg" alt="Fourth slide">
						<div class="carousel-caption d-none d-md-block">
							<p>Plan your projects from ground up. Find out what the leading businesses and companies in various fields have to offer from their profiles and select services that most appeal to you</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider5.jpg" alt="Fifth slide">
						<div class="carousel-caption d-none d-md-block">
							<p>Looking for a part-time, temporary or permanent job? Register and apply today on AceDepot!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider6.jpg" alt="Sixth slide">
						<div class="carousel-caption d-none d-md-block">
							<p>Every home and office deserves the best. Eliminate the stress of looking for trained and qualified domestic staff, find them here on AceDepot!</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 car-img" src="images/slider/newslider7.jpeg" alt="Seventh slide">
						<div class="carousel-caption d-none d-md-block">
							<p>Make every detail of your event colorful and memorable by choosing the right location, staff and services on AceDepot</p>
						</div>
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slider" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
	</div>
	<div class="clearfix"></div>

	<section id="scroll-here">
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading">
								<h2>Business Sectors Served</h2>
								<span>For work and for hiring, we cover the following sectors</span>
							</div><!-- Heading -->
							<div class="cat-sec">
								<div class="row no-gape">
									{{-- @foreach ($sectors as $sector)
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="p-category">
												<a href="{{ $sector->id }}">
												<img src="{{ $sector->img_src }}" alt="" class="image">
													<div class="middle">
														<div class="text">Click For More</div>
													</div>
												<span>{{ $sector->name }}</span>
												</a>
											</div>
										</div>
											
									@endforeach --}}
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-event-planning.php">
												<img src="images/sectors/thumbnails/event-planning.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Event Centers & Planning</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-land-building.php">
												<img src="images/sectors/thumbnails/land-building.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Land, Building, Architecture & Design</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-technicians-technologists.php">
												<img src="images/sectors/thumbnails/technicians-technologists.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Technicians & Technologists</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-power-energy.php">
												<img src="images/sectors/thumbnails/power-energy.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Power and Energy</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-arts-music.php">
												<img src="images/sectors/thumbnails/arts-music.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Arts, Music & Entertainment</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-security.php">
												<img src="images/sectors/thumbnails/security.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Security</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-food-catering.php">
												<img src="images/sectors/thumbnails/food-catering.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Food Catering and Restaurants</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-beauty-massage.php">
												<img src="images/sectors/thumbnails/massage.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Beauty & Massage</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-carpentary-furniture.php">
												<img src="images/sectors/thumbnails/carpentary.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Carpentry & Furniture</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-automotive-transportation.php">
												<img src="images/sectors/thumbnails/automotive-transportation.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Automotive & Transportation</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-goods-supply.php">
												<img src="images/sectors/thumbnails/goods-supply.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Goods Supply</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-borehole-sewage.php">
												<img src="images/sectors/thumbnails/borehole.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Borehole & Sewage</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-it-photography.php">
												<img src="images/sectors/thumbnails/it-photography.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>IT & Photography</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-education-training-research.php">
												<img src="images/sectors/thumbnails/education.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Education, Training & Research</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-sewing-tailoring.php">
												<img src="images/sectors/thumbnails/sewing-tailoring.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Sewing, Tailoring & Styling</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-house-keeping.php">
												<img src="images/sectors/thumbnails/house-keeping.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>House Keeping & Cleaning</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-engineering-law.php">
												<img src="images/sectors/thumbnails/engineering-law.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Engineering & Law</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-travel-hospitality.php">
												<img src="images/sectors/thumbnails/travel-hospitality.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Travel & Hospitality</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-printing-branding.php">
												<img src="images/sectors/thumbnails/printing-branding.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Printing, Branding, Packaging & Publishing</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="p-category">
											<a href="business-sector-domestic-commercial.php">
												<img src="images/sectors/thumbnails/domestic-commercial.jpg" class="image">
												<div class="middle">
													<div class="text">Click For More</div>
												</div>
												<span>Domestic & Commercial Staffing</span>
												<!--<p>(22 open positions)</p>-->
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="browse-all-cat">
								<p>What are you looking to find or do on AceDepot today?</p>
								<a class="signin-popup" style="width:150px">To Work</a>
								<a class="a signup-popup" style="width:150px">To Hire</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>

	<section>
			<div class="block double-gap-top double-gap-bottom">
			<div data-velocity="-.1" style="background: url(images/slider/home-welcome.jpg) no-repeat scroll transparent;" class="parallax scrolly-invisible layer color"></div><!-- PARALLAX BACKGROUND IMAGE -->
			<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="simple-text-block">
						<h3>Welcome to AceDepot!</h3>
						<span>At AceDepot, we provide an ingenious solution to the need for a quick hiring process from an ever ready reserve of qualified candidates and reputable businesses to meet your unique hiring needs.</span>
						<a href="register.php">Create an Account</a>
					</div>
				</div>
			</div>
			</div>	
			</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-10" style="margin:auto">
						<div class="heading">
							<h2>Featured Candidate Jobs</h2>
							<span>Leading Employers seeking talent and expertize.</span>
						</div><!-- Heading -->
						<div class="job-list-modern">
							
						</div>
					</div>
					<div class="col-lg-12">
						<div class="browse-all-cat">
							<a href="current-openings.php">Load more jobs</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div data-velocity="-.1" style="background:url(images/happy-clients.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible layer color light"></div><!-- PARALLAX BACKGROUND IMAGE -->
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="heading light">
								<h2>From Happy Employers</h2>
								<span>What our employers thought about the services provided by AceDepot</span>
							</div><!-- Heading -->
							<div class="reviews-sec" id="reviews-carousel">
								
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="heading">
							<h2>Organizations we've partnered with</h2>
							<span>Some of the companies we've helped recruit excellent applicants over the years.</span>
						</div><!-- Heading -->
						<div class="comp-sec">
							<div class="company-img">
								<a href="#"><img src="images/partnership1.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#"><img src="images/partnership2.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#"><img src="images/partnership3.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#"><img src="images/partnership4.jpg" alt="" /></a>
							</div><!-- Client  -->
							<div class="company-img">
								<a href="#"><img src="images/partnership5.jpg" alt="" /></a>
							</div><!-- Client  -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="simple-text">
							<h3>Got a question?</h3>
							<span>We're here to help. Check out our <a href="faq.php" title="Frequently Asked Questions page">FAQs</a>, send us an email at <a href="mailto:contact@acedepotstaffing.com">contact@acedepotstaffing.com</a> or call us at <a href="tel:+2349083817668">+234 9083 81 7668</a>.</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection










