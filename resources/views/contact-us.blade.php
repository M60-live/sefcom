@extends('layouts.top-layout')
@section('content')



<!-- Banner One Start
	====================================================-->
	<div class="page-banner overlay-secondery-8" style="background: url(images/background/2.jpg) bottom center/ cover; padding: 150px 0;">
		<div class="container">
			<div class="banner-text text-center">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<h1 class="position-relative va-c-line-w50-h1-primary pb-15 mb-20 color-white">Contact Us</h1>
						<nav class="breadcrumb-one d-table m-auto bg-white px-30" aria-label="breadcrumb">
						  <ol class="breadcrumb bg-transparent mb-0">
						    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact</li>
						  </ol>
						</nav>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner One End
	====================================================-->
	<!-- Start Contact Info 
	====================================================-->
	<section class="position-relative background-map">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="title">
						<span class="color-primary">Contact US</span>
						<h2 class="position-relative va-lb-line-w50-h2-primary pb-15 mb-30">Our Support Center.</h2>
					</div>
					<div class="contact-form-2">
						<form class="contact-message-2" action="{{route('contact.send')}}" method="POST" id="contact-form">
                            @csrf
                        <div class="container">
                            <div class="row">
                            @if(Session::has('message_sent'))
                        <div class='alert alert-success' role="alert">
                            {{Session::get('message_sent') }}
                        </div>
                        @endif
                        @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                            <div class="form-group">
								<input class="form-control" type="text" name="name" id="name" placeholder="Name*"/>
							</div>
							<div class="form-group">
								<input class="form-control" type="text" name="email" id="email" placeholder="Email*"/>
							</div>
							<div class="form-group">
								<input class="form-control" id="subject" type="text" name="subject" id="subject" placeholder="Subject*"/>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="message" rows="7" name="message" id="message" placeholder="Message*"></textarea>
							</div>
							<div class="form-group">
								<input class="btn btn-secondery" id="Send" name="submit" type="submit" value="Send"/>
							</div>
							
						</form>
					</div>
				</div>
				<div class="col">
					<div class="contact-info md-mt-50">
						<ul class="color-secondery">
							<li>
								Phone :
								<span><b>South Africa:</b> +27 71 723 4937</span>
                                <span><b>Ghana:</b> +233 24 514 2414</span>
							</li>
							<li>
								Email : 
								<span>info@sefcomenvironmental.com</span>
							</li>
							<li>
								Address : 
								<span><b>Head Office -South Africa:</b> 28 Lemoendoring Street, Weltevredenpark, 1709, Johannesburg, South Africa</span>
                                <span><b>Ghana Office:</b> 35 HFC Estate, Community 25, Tema, Ghana</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Contact Form
	====================================================-->
	<!-- Start Map 
	====================================================-->
	<div id="map" class="map-canvas"></div>
	<!-- End Map
	====================================================-->



@include('layouts.footer')
@endsection
@section('javascript')
@endsection