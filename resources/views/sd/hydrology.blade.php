@extends('layouts.top-layout')
@section('content')
<!-- Banner One Start
	====================================================-->
	<div class="page-banner overlay-secondery-8" style="background: url(images/background/2.jpg) bottom center/ cover; padding: 150px 0;">
		<div class="container">
			<div class="banner-text text-center">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Service Details</h1>
						<nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
						  <ol class="breadcrumb bg-transparent mb-0">
						    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Service Details</li>
						  </ol>
						</nav>
						<div class="text-area color-white w-50 lg-w-80 md-w-100 d-table mx-auto mt-20">
							<p>Velit adipiscing primis nostra magna conubia risus viverra rhoncus scelerisque consequat eget sit lacus. Ipsum posuere enim. Habitas varius blandit curae cubilia vehicula.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner One End
	====================================================-->
	<!-- Start Service Details
	====================================================-->
	<div class="py-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="service-details-one">
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="owl-carousel service-slider owl-nav-style-one position-relative">
									<img src="images/other/2.jpg" alt="images">
									<img src="images/other/3.jpg" alt="images">
									<img src="images/other/4.jpg" alt="images">
								</div>
							</div>
							<div class="col-md-12 col-lg-12">
								<div class="text-area">
									<h3 class="my-30 color-secondery">Make sure you have emotional support.</h3>
									<p class="mb-15">Habitasse purus proin rhoncus nulla ut. Potenti condimentum vehicula euismod semper Id ligula, cras volutpr magna purus vel mus lacinia sociosqu. Nostra per augue habitasse interdum natoq lacus lacus mus curaerl fusce nunc odio ad facilisis dui tristique torquent. Gravida vel, duis aliquet magna quis tristiqu. Accumsa sit imperdie loborti commod turpis. Taciti venenatis. Commod euismod elit ligula elit ipsum accum dictum adipiscing morb poten Aliquet eleifend lectus turpis inceptos aenean.</p>
									<p>Porta inceptos ac cubilia lorem libero malesuada donec maecenas nostra odio per morbi. Pulvin gravid morb sagittis dui nibh congue. Aptent felis pede augue id viverra cursus sapien. Justo, nibh rhoncus. Consecte facilis urna penatib Elit elit semper sagittis in fusce. Quisque ac suspendis quisque libero rhoncus dictum sit sapien.</p>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-4 col-xl-3">
					<div class="side-menu-list bg-gray">
						<ul>
							<li><a class="active" href="#">Data Collecting</a></li>
							<li><a href="#">Business Analytics</a></li>
							<li><a href="#">Business Transformation</a></li>
							<li><a href="#">Learning Innovation</a></li>
							<li><a href="#">Digital Experience</a></li>
							<li><a href="#">Corporate Finance</a></li>
							<li><a href="#">Trade and Stock</a></li>
						</ul>
					</div>
					<div class="side-contact py-40 px-30 mt-30 bg-gray">
						<h3 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-30 color-secondery">Contact Us</h3>
						<ul class="color-dark icon-primary link-list-b-15">
							<li><span class="mr-20"><i class="fa fa-phone" aria-hidden="true"></i></span> +61 600 800 900</li>
							<li><span class="mr-20"><i class="fa fa-envelope" aria-hidden="true"></i></span> info@yourdomain.com</li>
							<li class="m-0"><span class="mr-20"><i class="fa fa-map-marker" aria-hidden="true"></i></span>40 Towerhill Avenue, Melbourne, Australia.</li>
						</ul>
					</div>
					<a class="btn btn-secondery mt-30 w-100" href="#">Live Chat</a>
				</div>
			</div>
		</div>
	</div>
	<!-- End Service Details
	====================================================-->









@include('layouts.footer')
@endsection
@section('javascript')
@endsection
