@extends('jl.app')
@section('title', 'Jose Sicajan')

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

                            <span class="iq-objects-01"></span>
                        </div>
                    </div>
                    <div class="col-md-9 main-content align-self-center">
                        <div id="box_scroll" class="iq-home box_scroll">
                            <div class="home-deta iq-mt-90">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="boder-img">
                                            <img src="img/jl_second_profile.jpg" class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-8 content-deta">
                                        <h2 class="iq-tw-8 ">Hello,<br>I Am Jose Sicajan</h2>
                                        <div id="typer"></div>
                                        <p class="lead iq-tw-4">
                                            With a solid background of eight years of experience, I have adeptly
                                            developed and deployed numerous challenging applications spanning various
                                            industries, including finance, healthcare, real estate, wine, translation,
                                            and GIS. My proficiency extends across Software Engineering, allowing me to
                                            seamlessly adapt to diverse frameworks, languages, projects, and tools. I am
                                            deeply passionate about my craft and thrive on engaging with intriguing and
                                            complex projects to continually enhance my skills and remain competitive in
                                            the field.
                                            <br>
                                            <br>
                                            <hr>
                                            <br>
                                            <strong>► Specialized in:</strong><br>
                                            - Linux/Unix systems including Kali, Parrot OS, OpenSUSE, Ubuntu, as well as
                                            Windows Servers<br>
                                            - Python frameworks such as Django, Pyramid, Odoo, and Flask<br>
                                            - PHP frameworks including Laravel, Codeigniter, Symfony, and WordPress<br>
                                            - Cloud services on AWS and GCP<br>
                                            - Containerization technologies like Docker, Kubernetes, Helm, and
                                            Minikube<br>
                                            - Frontend and backend development with JavaScript, React, Vue.js, and
                                            Node.js<br>
                                            - Database management with MySQL, PostgreSQL, MongoDB, SQLite, and Redis<br>
                                            - Web server configuration and optimization with NGINX and Apache<br>
                                            <br>
                                            <strong>► ETL (Extract Transform Load Data):</strong><br>
                                            - GeoKettle for geospatial data processing<br>
                                            - FME (Feature Manipulation Engine) for data integration and
                                            transformation<br>
                                            - GCP Cloud Functions for serverless ETL workflows<br>
                                            - Custom Python scripts for flexible and efficient data processing<br>
                                            <br>
                                            <strong>► Project Management:</strong><br>
                                            - JIRA<br>
                                            - GIT / GitHub / Bitbucket / GitLab<br>
                                            - Basecamp<br>
                                            - Kanban boards / Trello<br>
                                            <br>
                                            <strong>► Favourite IDEs:</strong><br>
                                            - PhpStorm / PyCharm / DataGrip / WebStorm / NetBeans<br>
                                            <br>
                                            <strong>► APIs:</strong><br>
                                            - Facebook API<br>
                                            - Twilio API<br>
                                            - Google Maps API<br>
                                            - SendGrid / Mailgun<br>
                                            - Infusionsoft / Memberium<br>
                                            - Stripe<br>
                                            <br>
                                            <strong>► Mobile:</strong><br>
                                            - Android Java<br>
                                            - Flutter Development<br><br>
                                            <hr>
                                            <br>
                                            Throughout my extensive experience, I've recognized that maintaining open
                                            lines of communication with clients is pivotal for project success. I commit
                                            to being readily available for communication, even beyond standard working
                                            hours, to ensure seamless collaboration and alignment toward achieving
                                            objectives. <br>
                                        </p>
                                        <a class="button iq-mt-30" href="{{ route('download-resume') }}">Download my
                                            CV</a>
                                        <br><br><br>
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
