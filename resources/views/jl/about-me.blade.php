@extends('jl.app')
@section('title', 'About me')
@section('content')
    <div class="main-container">
        <!-- About us -->
        <section class="me-about wrapper">
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
                        <div id="boxscroll" class="iq-home about-us">
                            <div class="home-deta iq-mt-80">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="boder-img">
                                            <img src="img/jl_main_profile.jpg" class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-8 content-deta">
                                        <div class="main-title">
                                            <small>Know About Me</small>
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">About Me</h1>
                                        </div>
                                        <p class="iq-tw-4 iq-mt-10 iq-mb-20">Hello! I’m Jose Sicajan.  I am a Software Engineer, specialized in developing Web Development. I have been developing applications for the past 5 years with Laravel, Codeigniter, Django, PHP and Python.</p>
                                        <ul class="contact-info">
                                            <li> <span class="iq-tw-6">Name :</span> Jose Luis Sicajan</li>
                                            <li> <span class="iq-tw-6">Freelance :</span> Available</li>
                                            <li> <span class="iq-tw-6">Email :</span> <a href="mailto:jlsicajan@gmail.com">jlsicajan@gmail.com</a></li>
                                            <li> <span class="iq-tw-6">Phone :</span> (502) - 4917 7890</li>
                                            <li><span class="iq-tw-6">Work Status :</span> Software Engineer</li>
                                        </ul>
                                        <a class="button" href="resume.html">resume</a>
                                        <a class="button iq-ml-20" href="contact-us.html">hire me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->
    </div>
@endsection