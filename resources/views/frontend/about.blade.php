@extends('frontend.layout.layout')
@section('content')
    <style>
        .team-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            position: relative;
            background-color: var(--card-bg);
            /* Supports both light and dark modes */
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
            color: var(--text-color);
            /* Apply text color based on theme */
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
            color: var(--muted-text);
            /* Subtle text in both themes */
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

    <!-- section -->
    <section id="services" class="py-4 py-md-5" style="background: var(--card-bg); color: var(--text-color);">
        <div class="container">
            <div class="row py-md-5">
                <!-- Left Column -->
                <div class="col-lg-5 py-4 py-lg-5">
                    <h5
                        style="text-transform: uppercase; font-size: 16px; font-weight: 600; color: #418aff;">
                        OUR STORY
                    </h5>
                    <h3
                        style="font-size: 34px; font-weight: 700; text-transform: capitalize; line-height: 1.4; padding-right: 3rem;">
                        We believe in design as a powerful force for good.
                    </h3>
                </div>

                <!-- Right Column -->
                <div class="col-lg-7 py-4 py-lg-5">
                    <p>
                        Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer sit amet
                        mattis quam.
                        Vivamus a ligula quam tesque et libero ut justo ultrices in. Integer sit amet mattis quam.
                    </p>
                    <p>
                        Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer sit amet
                        mattis quam.
                        Vivamus a ligula quam tesque et libero ut justo ultrices in. Integer sit amet mattis quam.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- section -->
    <section class="py-5" id="why">
        <div class="container py-lg-5">
            <div class="row align-item-center mt-5">
                <div class="col-lg-6 py-lg-5">
                    <div class="agent-block-image px-lg-5">
                        <img src="../pics/10018.png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 pl-lg-5">
                    <h5 style="text-transform: uppercase;font-size: 16px; font-weight: bold; color: #418aff;">Leadership
                    </h5>
                    <h3 style="font-size: 34px;line-height: 44px;font-weight: 700;text-transform: capitalize;">Our Team
                        Work</h3>
                    <p class="mt-3"
                        style="font-size: 16px;line-height: 27px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                        Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer sit amet
                        mattis quam.Vivamus a ligula quam tesque et libero ut justo ultrices in..</p>
                    <p class="mt-3"
                        style="font-size: 16px;line-height: 27px; font-family: 'Poppins', sans-serif; color: #666F6F;">
                        Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer sit amet
                        mattis quam.Vivamus a ligula quam tesque et libero ut justo ultrices in..</p>
                    <a href="" class="btn btn-style mt-lg-4 mt-4 mr-5 me-4 "
                        style="padding: 12px 45px; font-size: 16px;font-weight: 600; text-decoration: none;">Read Now <i
                            class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- section -->
    <section class="py-5" id="services">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="title-content text-center">
                <h6 class="title-content1 text-center text-bold" style="font-weight: bold;">Why choose us</h6>
                <h1 class="title-content2 text-ceneter mb-sm-5 mb-4 pb-sm-0 pb-2">We believe in design as a powerful
                    force for good.</h1>
                <div class="property-cards">
                    <div class="property-card">
                        <div class="icon-wrapper blue"><i class="fa-solid fa-briefcase"></i></div>
                        <div>
                            <h3 class="property-title">Property Management</h3>
                            <p class="property-desc">Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>
                        </div>
                    </div>

                    <div class="property-card">
                        <div class="icon-wrapper pink"><i class="fa-solid fa-eye"></i></div>
                        <div>
                            <h3 class="property-title">Mortgage Service</h3>
                            <p class="property-desc">Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>
                        </div>
                    </div>

                    <div class="property-card">
                        <div class="icon-wrapper green"><i class="fa-brands fa-renren"></i></div>
                        <div>
                            <h3 class="property-title">Consulting Service</h3>
                            <p class="property-desc">Lorem ipsum dolor sit amet,Ea consequuntur illum facere.</p>
                        </div>
                    </div>
                </div>

            </div>
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
@endsection