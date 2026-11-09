@extends('frontend.layout.layout')
@section('content')
    <style>
        .services-section {
            background-color: var(--services-bg);
            padding: 80px 0;
            font-family: 'Segoe UI', sans-serif;
            overflow-x: hidden;
            color: var(--services-text-color);
        }

        .section-title {
            text-align: left;
            margin-bottom: 50px;
        }

        .section-title h6 {
            color: #418aff;
            font-weight: 700;
            font-size: 16px;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        .section-title h2 {
            color: var(--services-heading-color);
            font-size: 36px;
            font-weight: 800;
            line-height: 1.4;
        }


        .services-images {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-right: 0;
            margin-left: 0;
            padding-right: 0;
            padding-left: 0;
            overflow-x: hidden;
        }

        .left-large-image {
            flex: 1;
            min-width: 300px;
        }

        .left-large-image img {
            width: 100%;
            border-radius: 10px;
            height: 100%;
            object-fit: cover;
        }

        .right-side {
            flex: 1.5;
            display: flex;
            flex-direction: column;
            gap: 20px;
            min-width: 300px;
        }

        .top-small-images {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .top-small-images img {
            flex: 1 1 calc(50% - 10px);
            border-radius: 10px;
            height: 160px;
            object-fit: cover;
        }

        .right-text {
            margin-top: 10px;
        }

        .right-text p {
            font-size: 17px;
            color: #6b7280;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .read-more-btn {
            display: inline-block;
            background-color: #ff5100;
            color: #fff;
            padding: 14px 32px;
            font-size: 16px;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
        }

        .read-more-btn i {
            margin-left: 10px;
        }

        /* ✅ Mobile Fix: no scroll, no side space */
        @media (max-width: 768px) {
            .services-images {
                flex-direction: column;
                gap: 20px;
                margin: 0;
                padding: 0;
            }

            .left-large-image,
            .right-side {
                width: 100%;
            }

            .top-small-images {
                flex-direction: row;
            }

            .top-small-images img {
                width: calc(50% - 10px);
                height: 150px;
            }

            .right-text {
                padding-left: 10px;
                padding-right: 10px;
            }

            .section-title {
                padding-left: 10px;
                padding-right: 10px;
            }
        }

        .card-title a {
            color: var(--card-title-color);
        }

        .card-title a:hover {
            color: #ff5100;
        }

        .service-card {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .service-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: -75%;
            width: 50%;
            height: 100%;
            background: linear-gradient(120deg,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.4) 50%,
                    rgba(255, 255, 255, 0) 100%);
            transform: skewX(-25deg);
            transition: left 0.75s ease;
        }

        .service-card:hover::after {
            left: 130%;
        }

        section.team-section {
            background-color: var(--section-bg);
            transition: background-color 0.3s ease;
        }
    </style>

        <!-- section -->
        <section class="services-section">
            <div class="container services-container  py-lg-5 py-md-4 py-2">
                <!-- Title -->
                <div class="section-title">
                    <h6>SERVICES WE OFFER</h6>
                    <h2>We Provide Comprehensive Services <br>To Property Investors.</h2>
                </div>

                <!-- Main Content -->
                <div class="services-images">
                    <!-- Large Left Image -->
                    <div class="left-large-image">
                        <img src="../pics/10011.jpg" alt="Large House">
                    </div>

                    <!-- Right Side -->
                    <div class="right-side">
                        <!-- Two Small Images -->
                        <div class="top-small-images">
                            <img src="../pics/10004.jpg" alt="Small House 1">
                            <img src="../pics/10012.jpg" alt="Small House 2">
                        </div>

                        <!-- Text + Button Below Small Images -->
                        <div class="right-text">
                            <p>
                                Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                                tempufddfel.
                                Lorem ipsum dolor sit amet elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet.
                                Lorem ipsum init dolor sit, amet elit. Dolor ipsum non velit, culpa!
                            </p>
                            <a href="#" class="read-more-btn">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section -->
        <section class="py-5 team-section">
            <div class="container py-lg-5 py-md-4 py-2">
                <!-- Title Area -->
                <div class="title-content text-center mb-5">
                    <h6 class="title-content1 text-uppercase fw-bold text-primary mb-2">Services</h6>
                    <h1 class="title-content2 fw-semibold mb-4">Featured Services</h1>
                </div>

                <!-- Services Grid -->
                <div class="row g-4 justify-content-center">
                    <!-- Service Item 1 -->
                    <div class="col-md-6">
                        <div class="h-100 border-0 service-card">
                            <a href="#">
                                <img src="../pics/10012.jpg" alt="Service 1" class="card-img-top img-fluid rounded-top">
                            </a>
                            <div class="card-body ms-4">
                                <p class="text-muted mb-1 mt-3">
                                    <a href="#" class="text-decoration-none text-secondary">Services 1</a>
                                </p>
                                <h5 class="card-title mt-2">
                                    <a href="#" class="text-decoration-none fw-bold">Affordable Urban House</a>
                                </h5>
                            </div>
                        </div>
                    </div>


                    <!-- Service Item 2 -->
                    <div class="col-md-6">
                        <div class="h-100 border-0 service-card">
                            <a href="#">
                                <img src="../pics/10010.jpg" alt="Service 2" class="card-img-top img-fluid rounded-top">
                            </a>
                            <div class="card-body ms-4">
                                <p class="text-muted mb-1 mt-3">
                                    <a href="#" class="text-decoration-none text-secondary">Services 3</a>
                                </p>
                                <h5 class="card-title mt-2">
                                    <a href="#" class="text-decoration-none  fw-bold">Home in Metric Way</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center mt-4">
                    <!-- Service Item 1 -->
                    <div class="col-md-6">
                        <div class="h-100 border-0 service-card">
                            <a href="#">
                                <img src="../pics/10008.jpg" alt="Service 1" class="card-img-top img-fluid rounded-top">
                            </a>
                            <div class="card-body ms-4">
                                <p class="text-muted mb-1 mt-3">
                                    <a href="#" class="text-decoration-none text-secondary">Services 2</a>
                                </p>
                                <h5 class="card-title mt-2">
                                    <a href="#" class="text-decoration-none  fw-bold">Villa on Hollywood
                                        Boulevard</a>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-md-6">
                        <div class="h-100 border-0 service-card">
                            <a href="#">
                                <img src="../pics/10009.jpg" alt="Service 2" class="card-img-top img-fluid rounded-top">
                            </a>
                            <div class="card-body ms-4">
                                <p class="text-muted mb-1 mt-3">
                                    <a href="#" class="text-decoration-none text-secondary">Services 4</a>
                                </p>
                                <h5 class="card-title mt-2">
                                    <a href="#" class="text-decoration-none  fw-bold">Luxurious Apartments</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- section -->
        <section class="py-5" id="services">
            <div class="container py-lg-5 py-md-4 py-2">
                <div class="title-content text-center">
                    <h6 class="title-content1 text-center text-bold" style="font-weight: bold;">Why choose us</h6>
                    <h1 class="title-content2 text-ceneter mb-sm-5 mb-4 pb-sm-0 pb-2">We have the most listings & constant
                        updates.</h1>
                    <div class="property-cards">
                        <div class="property-card">
                            <div class="icon-wrapper blue"><i class="fa-solid fa-briefcase"></i></div>
                            <div>
                                <h3 class="property-title">Buy a new home</h3>
                                <p class="property-desc">Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>
                            </div>
                        </div>

                        <div class="property-card">
                            <div class="icon-wrapper pink"><i class="fa-solid fa-eye"></i></div>
                            <div>
                                <h3 class="property-title">See a home</h3>
                                <p class="property-desc">Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>
                            </div>
                        </div>

                        <div class="property-card">
                            <div class="icon-wrapper green"><i class="fa-brands fa-envira"></i></div>
                            <div>
                                <h3 class="property-title">Rent a home</h3>
                                <p class="property-desc">Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- section -->
        <section class="py-5" id="why">
            <div class="container py-lg-5">
                <div class="row align-item-center mt-5">
                    <div class="col-lg-6">
                        <div class="agent-block-image px-lg-5">
                            <img src="../pics/10003.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 mt-lg-0 pl-lg-5">
                        <h5 style="text-transform: uppercase;font-size: 16px; font-weight: bold; color: #418aff;">Explore
                        </h5>
                        <h1 style="font-size: 38px;line-height: 50px;font-weight: 700;text-transform: capitalize;">Explore
                            by Property Type</h1>
                        <p class="mt-3"
                            style="font-size: 18px;line-height: 27px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                            Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer sit amet
                            mattis quam.Vivamus a ligula quam tesque et libero ut justo ultrices in.</p>
                        <div class="row row-cols-2 mt-5">
                            <div class="col px-2 mb-4">
                                <h5><a href="#" class="property">Office</a></h5>
                                <p class="mt-2"
                                    style="font-size: 16px; line-height: 24px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                                    Lorem ipsum viverra feugiat. Pellen tesque libero justo.
                                </p>
                            </div>
                            <div class="col px-2 mb-4">
                                <h5><a href="#" class="property">House</a></h5>
                                <p class="mt-2"
                                    style="font-size: 16px; line-height: 24px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                                    Lorem ipsum viverra feugiat. Pellen tesque libero justo.
                                </p>
                            </div>
                            <div class="col px-2 mb-4">
                                <h5><a href="#" class="property">Villa</a></h5>
                                <p class="mt-2"
                                    style="font-size: 16px; line-height: 24px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                                    Lorem ipsum viverra feugiat. Pellen tesque libero justo.
                                </p>
                            </div>
                            <div class="col px-2 mb-4">
                                <h5><a href="#" class="property">Apportment</a></h5>
                                <p class="mt-2"
                                    style="font-size: 16px; line-height: 24px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                                    Lorem ipsum viverra feugiat. Pellen tesque libero justo.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script>
            function toggleDarkMode() {
                const body = document.body;
                const icon = document.getElementById('darkModeIcon');

                body.classList.toggle('dark-mode');

                // Toggle icon between moon and sun
                if (body.classList.contains('dark-mode')) {
                    icon.className = 'fas fa-sun';
                } else {
                    icon.className = 'fas fa-moon';
                }
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
    </body>

    </html>
