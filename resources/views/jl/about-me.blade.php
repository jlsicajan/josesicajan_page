@extends('jl.app')

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
                                <img class="img-fluid" src="images/01.png" alt="drive">
                            </span>
                        </div>
                    </div>
                    <div class="col-md-9 main-content align-self-center">
                        <div id="boxscroll" class="iq-home about-us">
                            <div class="home-deta iq-mt-80">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="boder-img">
                                            <img src="http://via.placeholder.com/485x629" class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-8 content-deta">
                                        <div class="main-title">
                                            <small>Know About Me</small>
                                            <h1 class="display-4 iq-tw-8 iq-font-purple">About Me</h1>
                                        </div>
                                        <p class="iq-tw-4 iq-mt-10 iq-mb-20">Hello! I’m David.  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <ul class="contact-info">
                                            <li> <span class="iq-tw-6">Name :</span> devio</li>
                                            <li> <span class="iq-tw-6">Freelance :</span> Available</li>
                                            <li> <span class="iq-tw-6">Date of birth :</span> 21-09-1993</li>
                                            <li> <span class="iq-tw-6">Email :</span> <a href="#">devio@website.com</a></li>
                                            <li> <span class="iq-tw-6">Phone :</span> (123)-456-7890</li>
                                            <li> <span class="iq-tw-6">Address :</span> Front Street, Mexico. Us</li>
                                            <li> <span class="iq-tw-6">Nationality :</span> United States</li>
                                            <li><span class="iq-tw-6">Gender :</span> Male</li>
                                            <li><span class="iq-tw-6">Marital Status :</span> Single</li>
                                            <li><span class="iq-tw-6">Work Status :</span> Web Designer</li>
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