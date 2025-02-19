@extends('jl.app')
@section('title', 'Jose Sicajan')

@section('content')
    <div class="main-container">
        <!-- About Me -->
        <section class="me-home wrapper">
            <div class="container-fluid h-100">
                <div class="row row-eq-height h-100">
                    <div class="col-md-3 purple-bg">
                        <div class="iq-objects">
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
                                            <img src="img/jl_second_profile.jpg" class="img-fluid" alt="Profile Image">
                                        </div>
                                    </div>
                                    <div class="col-md-8 content-deta">
                                        <h2 class="iq-tw-8">Hello,<br>I Am Jose Sicajan</h2>
                                        <div id="typer"></div>
                                        <p class="lead iq-tw-4">
                                            With nine years of experience, I have developed and deployed applications in finance, healthcare, real estate, food & beverage technology, and GIS platforms. Driven by a passion for innovation, I adapt swiftly to diverse projects, languages, and tools.
                                            <br><br>
                                        <hr>
                                        <br>
                                        <strong>► Functional Expertise:</strong><br>
                                        - **Programming Languages:** Python & JavaScript<br>
                                        - **Infrastructure as Code & Automation:** Terraform, CI/CD<br>
                                        - **Databases:** Relational & NoSQL (PostgreSQL, MySQL, MongoDB)<br>
                                        - **Cloud Platforms:** AWS & GCP<br>
                                        - **Cloud Orchestration:** Docker, Kubernetes, Helm<br>
                                        - **ETL & Data Pipelines:** Snowflake, Airflow, FME<br>
                                        <br>
                                        <strong>► Work Experience:</strong><br>
                                        **Tricura Insurance Group** (Oct 2024 - Present)<br>
                                        - Designed and deployed ELT/ETL pipelines with Snowflake, Apache Airflow, and AWS.<br>
                                        - Developed FastAPI-based services for seamless integration with third-party platforms.<br>
                                        - Integrated FastAPI with HubSpot to optimize operations and automate workflows.<br>
                                        <br>
                                        **Telus International** (Oct 2019 - Oct 2024)<br>
                                        - Developed a Web & Mobile GIS Platform for telecom infrastructure.<br>
                                        - Built GIS applications optimizing telecom network planning.<br>
                                        - Developed ETL pipelines using GeoKettle and FME for spatial data processing.<br>
                                        - Automated ETL workflows, optimized Linux servers, and integrated GeoServer APIs.<br>
                                        <br>
                                        **Vital Interaction** (Jun 2018 - Aug 2019)<br>
                                        - Developed healthcare automation solutions integrating Django with Twilio.<br>
                                        - Built a real-time task management system with Firebase.<br>
                                        - Managed AWS S3 storage and optimized Linux-based infrastructure.<br>
                                        <br>
                                        **Lionmane Software** (Nov 2016 - May 2018)<br>
                                        - Developed web applications for US-based clients, handling cloud infrastructure and database migrations.<br>
                                        - Built scalable applications using Python (Flask, Django) and PHP (Laravel, CodeIgniter).<br>
                                        - Managed MySQL, MongoDB, and Redis databases.<br>
                                        - Configured AWS EC2, migrated RDS databases, and optimized web servers.<br>
                                        <br>
                                        **Velfasa** (Nov 2015 - Oct 2016)<br>
                                        - Designed and deployed ERP-CRM solutions for banking institutions.<br>
                                        - Developed with Odoo v8, Python, PHP (Symfony), and PostgreSQL.<br>
                                        <br>
                                        <strong>► Education:</strong><br>
                                        - **Bachelor of Information Technology**, Illinois Tech (Coursera)<br>
                                        - **Astronomy and Astrophysics**, University Galileo (Guatemala)<br>
                                        - **Science and Systems Engineering**, University Mariano Galvez (Guatemala)<br>
                                        - **Computer Expert**, KINAL (Guatemala)<br>
                                        <br>
                                        <strong>► Additional Professional Development:</strong><br>
                                        - Scrum Master Certified (Cert. #RSM-2886135) - Scrum Inc (2021)<br>
                                        <br>
                                        <strong>► Other Relevant Information:</strong><br>
                                        - **Additional Languages:** Spanish (Native), French (Beginner)<br>
                                        - **Technical Skills:** GitHub, Bitbucket, JIRA, HubSpot, Heap, SendGrid, Twilio, Stripe, PyCharm<br>
                                        - **Freelance Platforms:** Upwork<br>
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
        <!-- About Me End -->
    </div>
@endsection
