@extends('layouts.top-layout')
@section('content')
<!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/Three-Scientists_1343477100.jpg">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Laboratory Services</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="/">Home</a></li>
                            <li class="active">Laboratory Services</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    Service Details 02
    ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container container2">
            <div class="row gx-30 flex-row-reverse">

                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-40">
                            <img src="assets/img/update/service/water-testing-lab.jpg" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Laboratory Services</h2>
                            <p class="mb-30">SEC facilitated sampling and transport of samples to accredited full-service, independent analytical laboratories world-wide that performs a wide range of organic and inorganic chemical analyses on water, soil, minerals, and air sample matrices.</p>
                            <div class="row flex-row-reverse">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="page-img mb-30">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="service-wrap">
                                        <h3 class="page-subtitle mb-15">Service lists</h3>
                                        <p>Services facilitated include:</p>
                                        <div class="checklist mb-30 mt-25">
                                            <ul>
                                                <li><i class="fas fa-check-circle"></i>Water Analysis</li>
                                                <li><i class="fas fa-check-circle"></i>Geochemical Characterisation</li>
                                                <li><i class="fas fa-check-circle"></i>Soil Characterisation</li>
                                                <li><i class="fas fa-check-circle"></i>Air Analysis</li>
                                                <li><i class="fas fa-check-circle"></i>Specialised Analysis</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_service_list">
                            <h3 class="widget_title">Service lists</h3>
                            <ul>
                                <li>
                                    <a class="active" href="#">Laboratory Services</a>
                                </li>
                                <li>
                                    <a href="/hydrology">Hydrology</a>
                                </li>
                                <li>
                                    <a href="/hydrogeology">Hydrogeology</a>
                                </li>
                                <li>
                                    <a href="/soil-science">Soil Science</a>
                                </li>
                                <li>
                                    <a href="/geochemistry">Geochemistry</a>
                                </li>
                                <li>
                                    <a href="/environmental-assessment">Environmental Assessment</a>
                                </li>
                                <li>
                                    <a href="/hydropower">Hydropower</a>
                                </li>
                                <li>
                                    <a href="/infrastructure">Infrastructure</a>
                                </li>
                                <li>
                                    <a href="/energy">Energy</a>
                                </li>
                                <li>
                                    <a href="/geotechnical-services">Geotechnical Services</a>
                                </li>
                                <li>
                                    <a href="/geographical-information-systems">Geographical Information Systems</a>
                                </li>
                                <li>
                                    <a href="/feasibility-studies">Feasibility Studies</a>
                                </li>
                                <li>
                                    <a href="/sales-and-marketing">Sales and Marketing</a>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_banner" data-bg-src="assets/img/widget/c.jpg">
                            <div class="widget-banner-wrap">
                                <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                <div class="subtitle">For More Info</div>
                                <h4 class="title">+27 71 723 4937</h4>
                                <p class="text">Get in touch with us today</p>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>










@include('layouts.footer')
@endsection
@section('javascript')
@endsection
