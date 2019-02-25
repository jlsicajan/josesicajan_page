@extends('jl.app')

@section('content')
    <div class="main-container">
        <!-- About us -->
        <section class="me-home wrapper">
            <div class="container-fluid h-100">
                <div class="row row-eq-height h-100">
                    <div class="col-md-3 purple-bg">
                        <div class="iq-objects">
                            <!-- BACKGROUND PARTICLES -->
                            <div id="particles-js"></div>

                            <span class="iq-objects-01">
                                    <img class="img-fluid" src="template/images/01.png" alt="drive">
                                </span>
                        </div>
                    </div>
                    <div class="col-md-9 main-content align-self-center">
                        <div id="boxscroll" class="iq-home">
                            <div class="home-deta iq-mt-90">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="boder-img">
                                            <img src="img/jl_main_profile.jpg" class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-8 content-deta">
                                        <h2 class="iq-tw-8 ">Hello,<br>I Am Jose Sicajan</h2>
                                        <div id="typer"></div>
                                        <p class="lead iq-tw-4">I'm a passionate web developer, perfectionist, with a
                                            high
                                            sense of responsibility, I like to get into new projects and leave a part of
                                            myself in them, giving importance to the smallest details. I have worked
                                            with
                                            several international clients and local clients in Guatemala and I have
                                            learned
                                            that constant communication with the client is a very effective tool in
                                            achieving objectives. Not only do I like web development, I have also
                                            learned
                                            how to create Android Apps and desktop applications.</p>
                                        <a class="button iq-mt-30" href="about-us.html">Download my CV</a>
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