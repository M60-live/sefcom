@extends('layouts.top-layout')
@section('content')



    <!-- Banner One Start
	====================================================-->
	<div class="page-banner overlay-secondery-8" style="background: url(images/services/ml.png) bottom center/ cover; padding: 150px 0;">
		<div class="container">
			<div class="banner-text text-center">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Machine Learning Applications for Environmental Systems</h1>
						<nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
						  <ol class="breadcrumb bg-transparent mb-0">
						    <li class="breadcrumb-item"><a href="/">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Machine Learning Applications for Environmental Systems</li>
						  </ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner One End
	====================================================-->


    <div class="py-80">
		<div class="container">
			<div class="row">
                <h2 class="color-secondery pb-2">Machine Learning Applications for Environmental Systems</h2>
                <ul>
                    <p>We apply machine learning techniques to improve prediction, anomaly detection, and operational optimisation.</p>
                    <h5>Use Cases:</h5>
                    <li><i class="bi bi-bullseye pr-2" style="color:#4BAF47;"></i>Predictive modelling</li>
                    <li><i class="bi bi-bullseye pr-2" style="color:#4BAF47;"></i>Early warning systems for water quality non-conformances</li>
                    <li><i class="bi bi-bullseye pr-2" style="color:#4BAF47;"></i>Leak detection in reticulation systems</li>
                    <li><i class="bi bi-bullseye pr-2" style="color:#4BAF47;"></i>Groundwater level prediction modelling</li>
                    <li><i class="bi bi-bullseye pr-2" style="color:#4BAF47;"></i>Risk scoring for pollution incidents</li>
                    <li><i class="bi bi-bullseye pr-2" style="color:#4BAF47;"></i>Predictive maintenance analytics for water infrastructure</li>
                </ul>
            </div>
        </div>
    </div>

@include('layouts.footer')
@endsection
@section('javascript')
@endsection