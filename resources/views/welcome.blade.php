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
                                            <img src="img/jl_main_profile.jpg" class="img-fluid" alt="#">
                                        </div>
                                    </div>
                                    <div class="col-md-8 content-deta">
                                        <h2 class="iq-tw-8 ">Hello,<br>I Am Jose Sicajan</h2>
                                        <div id="typer"></div>
                                        <p class="lead iq-tw-4">
                                            Over 5 years of working experience, I can say that Software Engineering is my passion. I have worked several projects in different companies and local businesses, I have strong Software Engineering foundations which allows me to adapt quickly to any framework, language, project or tool, I feel that working on interesting and challenging projects is the best way to stay competitive. <br> <br>

                                            <strong>► 5 reasons to hire me:</strong><br>
                                            - I go the extra mile, do more than is required, exceed expectations<br>
                                            - I show that I care, I put myself in their shoes<br>
                                            - I always take the things to the finish line<br>
                                            - I bring my best self, always sustaining my motivation, I do my best work and practice good habits<br>
                                            <br>
                                            <strong>► Specialized in:</strong><br>
                                            - Python (Django, Odoo, Flask)<br>
                                            - PHP (Laravel, Codeigniter, Symfony, WordPress)<br>
                                            - Javascript / jQuery / Vue.js / Node.js<br>
                                            - HTML<br>
                                            - Bootstrap / SCSS - SASS / CSS / Flexbox<br>
                                            - AWS<br>
                                            - MySQL, PostgreSQL, MongoDB, SQLite, Redis<br>
                                            - NGINX / Apache<br>
                                            <br>
                                            <strong>► ETL (Extract Transform Load Data):</strong><br>
                                            - GeoKettle<br>
                                            - FME<br>
                                            <br>
                                            <br>
                                            <strong>► Project Management:</strong><br>
                                            - JIRA<br>
                                            - GIT / GitHub / Bitbucket / GitLab<br>
                                            - Basecamp<br>
                                            - Kanban boards / Trello<br>
                                            <br>
                                            <strong>► Tools:</strong><br>
                                            - PhpStorm / PyCharm / DataGrip / WebStorm / NetBeans<br>
                                            - SSH / SFTP<br>
                                            - Webpack, ES6<br>
                                            <br>
                                            <strong>► APIs:</strong><br>
                                            - Facebook API<br>
                                            - Twilio API<br>
                                            - Google maps API<br>
                                            - SendGrid / Mailgun<br>
                                            - Infusionsoft / Memberium<br>
                                            - Stripe<br>
                                            <br>
                                            <strong>► Platforms:</strong><br>
                                            - Mac OS X<br>
                                            - Linux<br>
                                            - Vagrant<br>
                                            - Docker<br>
                                            - Oracle VirtualBox<br>
                                            - AWS EC2 / S3<br>
                                            - GCP<br>
                                            <br>
                                            <strong>► Mobile:</strong><br>
                                            - Android Java<br>
                                            - Flutter Development<br><br>
                                            <br>
                                            During my years of experience, I have learned that constant communication with the client is a very effective tool in achieving objectives, I will be always available for communication, even after working hours.
                                            <br>
                                        </p>
                                        <a class="button iq-mt-30" href="{{ route('download-resume') }}">Download my CV</a>
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
