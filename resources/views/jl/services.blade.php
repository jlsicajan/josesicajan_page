@extends('jl.app')
@section('title', 'Services')
@section('content')
    <div class="main-container">
        <!-- About us -->
        <section class="iq-services wrapper">
            <div class="container-fluid h-100">
                <div class="row row-eq-height h-100">
                    <div class="col-md-3 purple-bg">
                        <div class="iq-objects">
                            <!-- BACKGROUND PARTICLES -->
                            <div id="particles-js"></div>
                            <span class="iq-objects-01">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-9 main-content align-self-center">
                        <div id="box_scroll" class="inner-box box_scroll">
                            <div class="resume-deta iq-plr-40">
                                <div class="row white-bg">
                                    <div class="col-md-12">
                                        <div class="main-title iq-mb-20">
                                            <small>What I Can Do Better</small>
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">Services</h1>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-md-3">
                                        <div class="service-block text-left">
                                            <img src="img/services/web_development.jpeg" class="img-fluid" alt="Jose Sicajan Fullstak Development" style="width: unset!important;">
                                            <h6 class="iq-tw-6 iq-mt-15 iq-mb-10">Fullstack Development</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-md-3">
                                        <div class="service-block text-left re-m    t30">
                                            <img src="img/services/mobile_two.jpg" class="img-fluid" alt="Jose Sicajan Mobile Development" style="width: unset!important;">
                                            <h6 class="iq-tw-6 iq-mt-15 iq-mb-10">Mobile Development</h6>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- include loved by my jl.services.customers.blade.php --}}
                            {{-- include loved by my jl.services.my_clients.blade.php --}}
                            {{-- include loved by my jl.services.my_special.blade.php --}}
                            {{-- include loved by my jl.services.counter_box.blade.php --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->
    </div>
@endsection
