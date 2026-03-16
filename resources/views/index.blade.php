@extends('layouts.top-layout')
@section('content')

<!-- Start banner
	====================================================-->
	<div id="particles-js" class="w-100 vh-100 overlay-white" style="background: url(images/background/Home.png) no-repeat center center / cover fixed;">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-md-12 col-lg-12 h-100">
					<div class="banner-content y-middle color-dark z-index-1 w-60 lg-w-80 position-relative">

                        <h3>Sefcom Provides</h3>
						<h1 class="banner-title cd-headline clip is-full-width">
							<span class="cd-words-wrapper color-primary">
								<b class="is-visible">Environmental Intelligence</b>
								<b>Water Governance</b>
								<b>Data-Driven Compliance Solutions</b>
							</span>
						</h1>
						<p class="my-15">Sefcom Environmental Consulting (SEC) is an independent, globally connected environmental and water advisory firm delivering sustainable, technology-enabled solutions across mining, infrastructure, energy, water resources, environmental management, and agriculture.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End banner
	====================================================-->
	<!-- Start About Us
	====================================================-->
	<section class="about-us position-relative bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6">
					<div class="inner-title mb-30">
						<h3 class="color-secondery">We integrate environmental science, water governance, climate resilience, and advanced digital technologies, including artificial intelligence, machine learning, and data science, to transform complex environmental data into strategic, decision-ready intelligence.</h3>
					</div>
				</div>
				<div class="col-md-12 col-lg-6">
					<div class="text-area mb-30">
						<p>Through a multidisciplinary international consortium of specialists, SEC provides integrated services spanning feasibility advisory, hydrology, hydrogeology, water stewardship, environmental compliance, climate risk assessment, and ESG performance optimisation.</p>
					</div>
				</div>
				<div class="col-md-12 col-lg-4">
		          	<div class="card box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01" style="width: 18rem;">
						<img src="images/home/mining_solutions.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title box-title-4 my-20 color-secondery">Mining Solutions</h5>


						</div>
					</div>
		        </div>
		        <div class="col-md-12 col-lg-4">
		          	<div class="card box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01" style="width: 18rem;">
						<img src="images/home/energy_infrastructure.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title box-title-4 my-20 color-secondery sr-2">Energy & Infrastructure</h5>


						</div>
					</div>
		        </div>
		        <div class="col-md-12 col-lg-4">
		          <div class="card box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01" style="width: 18rem;">
						<img src="images/home/water_monitoring.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title box-title-4 my-20 color-secondery">Water Monitoring</h5>

						</div>
					</div>
		        </div>
				<div class="col-md-12 col-lg-4">
		          <div class="card box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01" style="width: 18rem;">
						<img src="images/home/environmental_monitoring.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title box-title-4 my-20 color-secondery">Environmental Monitoring</h5>

						</div>
					</div>
		        </div>
				<div class="col-md-12 col-lg-4">
		          <div class="card box-style-4 py-40 px-30 mt-30 bg-white shadow-thik-black-01-hov transition-5 hov-trans-b-t-5 shadow-smooth-black-01" style="width: 18rem;">
						<img src="images/home/environmental_data_analytics.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title box-title-4 my-20 color-secondery">Environmental Data Analytics</h5>

						</div>
					</div>
		        </div>
			</div>
		</div>
	</section>
	<!-- End About Us
	====================================================-->





@include('layouts.footer')
@endsection
@section('javascript')
@endsection
