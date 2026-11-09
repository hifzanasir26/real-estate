@extends('frontend.layout.layout')
@section('content')
    <style>
        .carousel-indicators {
            justify-content: center;
            margin-top: 60px;
            /* ⬅️ increase this value as needed */
            gap: 10px;
        }

        .carousel-indicators [data-bs-target] {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ccc;
            transition: background-color 0.3s, transform 0.3s;
        }

        .carousel-indicators .active {
            background-color: #ff5a00;
            transform: scale(1.2);
        }

        #propertyCarousel {
            padding-bottom: 70px;
        }

        @media (max-width: 768px) {
            .carousel-item .card {
                max-width: 95%;
                margin: auto;
            }
        }
    </style>

    <style>
         .team-card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
    position: relative;
    background-color: var(--card-bg); /* Supports both light and dark modes */
}

.team-card:hover {
    transform: translateY(-5px);
}

.team-img {
    width: 100%;
    height: 280px;
    object-fit: cover;
}

.team-card-body {
    padding: 20px;
    text-align: center;
    color: var(--text-color); /* Apply text color based on theme */
}

.team-card-body h5 {
    font-weight: bold;
    margin-top: 10px;
}

.team-card-body h5 a {
    color: var(--link-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.team-card-body h5 a:hover {
    color: var(--primary-color);
}

.team-card-body p {
    color: var(--muted-text); /* Subtle text in both themes */
    margin-bottom: 15px;
}

        /* Social Icons Styling (updated) */
        .team-social {
            position: absolute;
            top: 245px;
            /* adjust according to image height */
            left: 70%;
            transform: translateX(-40%);
            padding: 10px 12px;
            border-radius: 15px;
            z-index: 2;
            display: flex;
            flex-direction: row;
            /* icons will stack vertically */
            gap: 0px;
            /* spacing between icons */
            align-items: center;
        }

        .team-social .first {
            background-color: #3B5998;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .team-social .second {
            background-color: #1DA1F2;
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }


        .team-social a {
            color: #0d6efd;
            margin: 0 8px;
            font-size: 18px;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .team-social a:hover {
            color: #ff5722;
        }

        @media (max-width: 767px) {
            .team-img {
                height: 220px;
            }

            .team-social {
                top: 180px;
            }
        }

        @media (max-width: 767.98px) {
            #services h3 {
                font-size: 22px !important;
                margin-top: 20px;
            }
        }
    </style>
    <!-- contact -->
     <style>
        .contact-heading p a {
            color: #6b7280;
            text-decoration: none;
        }

        .contact-heading p a:hover {
            color: #ff5a00;
        }

        .contact-heading p {
            color: #6b7280;
        }
    </style>

    <!-- Header Start -->
   
    <!-- Header End -->

    <!-- section -->
    <div class="container">
        <div class="row my-5 py-5">
            <div class="col-lg-6 pr-lg-5">
                <h5 style="text-transform: uppercase;font-size: 16px; font-weight: 600; color: #418aff;"
                    style="font-weight: bold;">A Higher
                    Quality of Living</h5>
                <h3 class="fw-bold text-capitalize responsive-heading">The ideal
                    space to balance life, work and play.</h3>
                <p class="mt-3"
                    style="font-size: 20px;line-height: 27px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                    Semper at. Lorem ipsum dolor sit amet elit elit. Non quae, ad esse et.
                </p>

                <div class="d-flex flex-row flex-wrap gap-3 mt-lg-4 mt-4 mb-5">
                    <a href="#" class="btn btn-style flex-fill text-center"
                        style="padding: 12px 20px; font-size: 16px; font-weight: 600; text-decoration: none;">
                        Get Started <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#" class="btn btn2 btn-outline-primary flex-fill text-center"
                        style="padding: 12px 20px; font-size: 16px; font-weight: 600; text-decoration: none;">
                        Contact Us <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="../pics/10002.png" alt="" class="img-fluid">
            </div>

        </div>
    </div>

    <!-- section -->
    <section class="py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center">
                <h6 class="title-content1 text-center text-bold" style="font-weight: bold;">Our Services</h6>
                <h1 class="title-content2 text-ceneter mb-sm-5 mb-4 pb-sm-0 pb-2">We provide great services</h1>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card h-100 text-center">
                            <div class="service-icon blue"><i class="fa-brands fa-rebel"></i></div>
                            <h3 class="service-title"><a href="#">Design</a></h3>
                            <p class="service-desc">Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu
                                leo
                                non. Duis sed et dolor amet.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card h-100 text-center">
                            <div class="service-icon pink"><i class="fa-solid fa-chart-line"></i></div>
                            <h3 class="service-title"><a href="#">Strategy</a></h3>
                            <p class="service-desc">Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu
                                leo
                                non. Duis sed dolor et amet.</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card h-100 text-center">
                            <div class="service-icon yellow"><i class="fa-solid fa-rocket"></i></div>
                            <h3 class="service-title"><a href="#">Marketing</a></h3>
                            <p class="service-desc">Vivamus a ligula quam tesque et libero ut justo, ultrices in. Ut eu
                                leo
                                non. Duis sed dolor et amet.</p>
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

    <!-- section -->
    <!-- Start Property Cards Section -->
    <section class="pt-5" style="  background-color: var(--card-bg);">
        <div class="container pt-lg-5 ">

            <!-- Section Heading -->
            <div class="text-center mb-4">
                <h6 class="fw-bold text-primary">Available</h6>
                <h1 class="mb-sm-5 mb-4 pb-sm-0 pb-2">Properties for rent</h1>
            </div>

            <!-- Carousel Start -->
            <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">

                <!-- Carousel Indicators (dots) -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#propertyCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <!-- Carousel Inner -->
                <div class="carousel-inner">

                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10012.jpg" class="card-img-top" alt="Park Avenue Apartment">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Park Avenue Apartment</h5>
                                        <p class="text-primary fw-bold">$440 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10008.jpg" class="card-img-top" alt="Luxury Villa">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Luxury Villa</h5>
                                        <p class="text-primary fw-bold">$640 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10009.jpg" class="card-img-top" alt="Home For Sale">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Home For Sale</h5>
                                        <p class="text-primary fw-bold">$840 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 (Add more cards here) -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10004.jpg" class="card-img-top" alt="Park Avenue Apartment">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Park Avenue Apartment</h5>
                                        <p class="text-primary fw-bold">$240 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10005.jpg" class="card-img-top" alt="Luxury Villa">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Home For Sale</h5>
                                        <p class="text-primary fw-bold">$540 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10006.jpg" class="card-img-top" alt="Home For Sale">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Park Avenue Apartment</h5>
                                        <p class="text-primary fw-bold">$840 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slide three -->
                    <div class="carousel-item">
                        <div class="row g-4">
                            <!-- Card 1 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10012.jpg" class="card-img-top" alt="Park Avenue Apartment">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Park Avenue Apartment</h5>
                                        <p class="text-primary fw-bold">$440 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10008.jpg" class="card-img-top" alt="Luxury Villa">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Luxury Villa</h5>
                                        <p class="text-primary fw-bold">$640 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 shadow-sm"
                                    style="background-color: var(--card-bg); border: none;">
                                    <img src="../pics/10009.jpg" class="card-img-top" alt="Home For Sale">
                                    <div class="card-body" style="color: var(--text-color);">
                                        <h5 class="card-title">Home For Sale</h5>
                                        <p class="text-primary fw-bold">$840 <small class="text-muted">/month</small>
                                        </p>
                                        <p class="card-text">Nulla ex nunc, interdum nec egestas nec, dapibus ac mauris.
                                            Vivamus id tempor nisl.</p>
                                    </div>
                                    <div class="card-footer d-flex small"
                                        style="background-color: var(--card-bg); border: none; color: var(--muted-text);">
                                        <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                        <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Carousel End -->

        </div>
    </section>

    <!-- secton -->
    <section class="py-5">
        <div class="container">
            <h6 class="title-content1 text-center text-bold" style="font-weight: bold;">Leading Team</h6>

            <h2 class="text-center mb-5 text-bold">Meet Our Team</h2>
            <div class="row g-4">
                <!-- Member 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card">
                        <img src="../pics/10016.jpg" alt="Team 1" class="team-img">
                        <div class="team-card-body">
                            <h5><a href="#">Max Stoiber</a></h5>
                            <p>Chief Executive</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f first"></i></a>
                                <a href="#"><i class="fab fa-twitter second"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card">
                        <img src="../pics/10017.jpg" alt="Team 2" class="team-img">
                        <div class="team-card-body">
                            <h5><a href="#">Dhony Abraham</a></h5>
                            <p>Managing Director</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f first"></i></a>
                                <a href="#"><i class="fab fa-twitter second"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card">
                        <img src="../pics/10014.jpg" alt="Team 3" class="team-img">
                        <div class="team-card-body">
                            <h5><a href="#">Marko Dugonji</a></h5>
                            <p>HR Officer</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f first"></i></a>
                                <a href="#"><i class="fab fa-twitter second"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card">
                        <img src="../pics/10015.jpg" alt="Team 4" class="team-img">
                        <div class="team-card-body">
                            <h5><a href="#">Marko Dugonji</a></h5>
                            <p>Worker</p>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f first"></i></a>
                                <a href="#"><i class="fab fa-twitter second"></i></a>
                            </div>
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
            <div class="row align-items-center mt-5">
                <!-- Left Side Image -->
                <div class="col-lg-6">
                    <div class="agent-block-image">
                        <img src="../pics/10013.png" alt="" class="img-fluid">
                    </div>
                </div>

                <!-- Right Side FAQ -->
                <div class="col-lg-6 mt-5 mt-lg-0 pl-lg-5">
                    <h5
                        style="text-transform: uppercase; font-size: 14px; font-weight: 700; color: #2563eb; letter-spacing: 1px;">
                        FAQs
                    </h5>
                    <h2 style="font-size: 36px; line-height: 1.3; font-weight: 800; ">
                        Experts With Experience
                    </h2>
                    <p style="font-size: 18px; line-height: 28px; color: #6b7280; margin-top: 15px;">
                        Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer sit amet
                        mattis quam.
                    </p>

                    <!-- Bootstrap Accordion -->
                    <div class="accordion mt-4" id="faqAccordion">

                        <!-- Item 1 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Sed ut perspiciatis unde omnis?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">

                                    Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                    laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam
                                    culpa, qui voluptates eveniet, incidunt officiis eaque iste minima autem. </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    At vero eos iusto odio ducimus qui?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">

                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum
                                    velit nobis aliquam laboriosam nihil quasi fuga, ad corrupti libero omnis sapiente
                                    non assumenda excepturi aperiam animi vitae eos nisi laudantium. Tempore reiciendis
                                    ipsam culpa, qui voluptates eveniet, incidunt officiis eaque iste minima autem.
                                </div>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold text-dark" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    We denounce with righteous?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">

                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates amet earum
                                    velit nobis aliquam laboriosam nihil debitis facere voluptatibus consectetur quae
                                    quasi fuga, ad corrupti libero omnis sapiente non assumenda excepturi aperiam iste
                                    minima autem. </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->

    <section class="py-5 text-center" >
        <div class="container">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="false"> <!-- No auto-slide -->

                <!-- Slides -->
                <div class="carousel-inner">

                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <img src="../pics/10016.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" >OMG! I cannot believe. It's Awesome”</h3>
                        <p class=" mx-auto" style="max-width: 700px; font-size: 16px; line-height: 1.8;">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula.
                        </p>
                        <h5 class="fw-bold mt-4 mb-1" >Johnson William</h5>
                        <p class=" fs-5">Web Developer</p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <img src="../pics/10017.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: #0f172a;">Simply the best. Better than all the rest."</h3>
                        <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px; line-height: 1.8;">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula. </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: #0f172a;">Alexander sakura</h5>
                        <p class="text-muted fs-5">Digtal Marketer</p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <img src="../pics/10014.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: #0f172a;">OMG! I cannot believe. It's Awesome”</h3>
                        <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px; line-height: 1.8;">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula. </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: #0f172a;">John wilson</h5>
                        <p class="text-muted fs-5">Web Developer</p>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="carousel-item">
                        <img src="../pics/10015.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: #0f172a;">OMG! I cannot believe. It's Awesome”</h3>
                        <p class="text-muted mx-auto" style="max-width: 700px; font-size: 16px; line-height: 1.8;">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula. </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: #0f172a;">Julia Sakura</h5>
                        <p class="text-muted fs-5">Digital Marketer</p>
                    </div>
                </div>

                <!-- Dots with extra margin -->
                <div class="carousel-indicators" style="margin-top: 150px;">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                        class="active bg-orange" aria-current="true"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"
                        class="bg-orange"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"
                        class="bg-orange"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="3"
                        class="bg-orange"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- section -->
    <section class="blog-section py-lg-5">
        <div class="blog-container py-lg-5">
            <!-- Left Side -->
            <div class="blog-left">
                <h5 class="blog-explore">EXPLORE</h5>
                <h2 class="blog-title">Blog Posts</h2>
                <p class="blog-intro">Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer
                    sit amet mattis quam. Vivamus a ligula quam tesque et libero ut justo ultrices in.</p>

                <div class="blog-card">
                    <img src="../pics/10008.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 30, 2020</p>
                    <h4 class="blog-heading">What you need to know when choosing balcony</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>
            </div>

            <!-- Right Side -->
            <div class="blog-right">
                <div class="blog-card">
                    <img src="../pics/10009.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>

                <div class="blog-card">
                    <img src="../pics/10011.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>

                <div class="blog-card">
                    <img src="../pics/10010.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>

                <div class="blog-card">
                    <img src="../pics/10012.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- section -->
    <section class="py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center">
                <h6 class="title-content1 text-center text-bold" style="font-weight: bold;">Contact Us</h6>
                <h1 class="title-content2 text-ceneter mb-sm-5 mb-4 pb-sm-0 pb-2">Send a Message</h1>
                <div class="row">
                    <!-- Left Side Contact Info -->
                    <div class="col-lg-6">
                        <div class="d-flex gap-3 mt-5">
                            <div class="contact-icon">
                                <i class="fa-solid fa-location-dot text-primary"></i>
                            </div>
                            <div class="contact-heading text-start">
                                <h5 class="text-bold">Visit Us</h5>
                                <p>Estates Housing Company, 343 marketing, #2214 cravel street, NY - 62617.</p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mt-5">
                            <div class="contact-icon">
                                <i class="fa-solid fa-phone text-primary"></i>
                            </div>
                            <div class="contact-heading text-start">
                                <h5 class="text-bold">Call Us</h5>
                                <p><a href="#">+1(21) 234 557 4567</a></p>
                                <p><a href="#">+1(21) 234 557 4568</a></p>
                            </div>
                        </div>

                        <div class="d-flex gap-3 mt-5">
                            <div class="contact-icon">
                                <i class="fa-regular fa-envelope text-primary"></i>
                            </div>
                            <div class="contact-heading text-start">
                                <h5 class="text-bold">Email Us</h5>
                                <p><a href="#">support@mail.com</a></p>
                                <p><a href="#">contact@mail.com</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Form -->
                    <div class="col-lg-6">
                        <form action="" method="POST">
                            <div class="row contact-left-grid mt-5">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3 fs-5"
                                        style="background: white; color: #555; border: 1px solid #ebeeef;"
                                        placeholder="Your Name*" name="name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" class="form-control p-3 fs-5"
                                        style="background: white; color: #555; border: 1px solid #ebeeef;"
                                        placeholder="Your Email*" name="email" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3 fs-5"
                                        style="background: white; color: #555; border: 1px solid #ebeeef;"
                                        placeholder="Subject*" name="subject" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control p-3 fs-5"
                                        style="background: white; color: #555; border: 1px solid #ebeeef;"
                                        placeholder="Website URL*" name="website" required>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea class="form-control p-3 fs-5"
                                        style="background: white; color: #555; border: 1px solid #ebeeef;"
                                        placeholder="Type your message here*" rows="5" name="message"
                                        required></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group mt-4">
                                    <input type="submit" class="btn"
                                        style="background-color: #ff5100; color: white; font-weight: 600; padding: 14px 40px; font-size: 18px; border-radius: 50px;"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- section -->
    <section>
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56146.706231404016!2d70.26280277901844!3d28.414152793489073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375c713b45db39%3A0x28af23c1672a0170!2sRahim%20Yar%20Khan%2C%20Pakistan!5e0!3m2!1sen!2s!4v1740807270284!5m2!1sen!2s"
                        width="100%" height="400vh" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>





    <!-- javascript -->
    <!-- propert section card -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const isMobile = window.innerWidth < 768;
            const cardsPerSlide = isMobile ? 1 : 3;

            const allCards = document.querySelectorAll('#propertyCarousel .card');
            const carouselInner = document.querySelector('#propertyCarousel .carousel-inner');
            const indicatorsContainer = document.querySelector('#propertyCarousel .carousel-indicators');

            // Clear old content
            carouselInner.innerHTML = '';
            indicatorsContainer.innerHTML = '';

            let slide;
            allCards.forEach((card, index) => {
                if (index % cardsPerSlide === 0) {
                    // Start new slide
                    slide = document.createElement('div');
                    slide.classList.add('carousel-item');
                    if (index === 0) slide.classList.add('active');

                    const row = document.createElement('div');
                    row.classList.add('row', 'g-4');
                    slide.appendChild(row);
                    carouselInner.appendChild(slide);

                    // Create indicator
                    const indicator = document.createElement('button');
                    indicator.type = "button";
                    indicator.setAttribute('data-bs-target', '#propertyCarousel');
                    indicator.setAttribute('data-bs-slide-to', Math.floor(index / cardsPerSlide));
                    indicator.setAttribute('aria-label', 'Slide ' + (Math.floor(index / cardsPerSlide) + 1));
                    if (index === 0) {
                        indicator.classList.add('active');
                        indicator.setAttribute('aria-current', 'true');
                    }
                    indicatorsContainer.appendChild(indicator);
                }

                // Wrap card in column
                const col = document.createElement('div');
                col.className = isMobile ? 'col-12' : 'col-md-6 col-lg-4';
                col.appendChild(card);
                slide.querySelector('.row').appendChild(col);
            });
        });
    </script>


   @endsection