@extends('frontend.layout.layout')
@section('content')
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
                <img src="pics/10002.png" alt="" class="img-fluid">
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
                        <img src="pics/10003.png" alt="" class="img-fluid">
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
                            @foreach ($properties as $item)
                                <div class="col-md-6 col-lg-4">
                                    <div class="card h-100 shadow-sm"
                                        style="background-color: var(--card-bg); border: none;">
                                        <img src="{{ asset('image' . $item->image) }}" class="card-img-top"
                                            alt="Park Avenue Apartment">

                                        <div class="card-body" style="color: var(--text-color);">
                                            <h5 class="card-title"><a href="">{{ $item->title }}</a></h5>
                                            <p class="text-primary fw-bold">{{ $item->text1 }}
                                                <small class="text-primary">/month</small>
                                            </p>
                                            <p class="card-text">{{ $item->text2 }}</p>
                                        </div>

                                        <div class="card-footer d-flex justify-content-between align-items-center small"
                                            style="border: none; color: var(--muted-text);">
                                            <div>
                                                <span class="me-3"><i class="fas fa-bed me-1"></i>3</span>
                                                <span class="me-3"><i class="fas fa-bath me-1"></i>3</span>
                                                <span class="me-3"><i class="fas fa-ruler-combined me-1"></i>1200 sq
                                                    ft</span>
                                            </div>
                                        </div>

                                        <!-- ✅ Add to Cart Button -->
                                        <div class="card-footer bg-transparent border-0 ">
                                            <a href="{{ route('property.details', $item->id) }}"
                                                class="btn btn-primary">View Details</a>


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Carousel End -->

                </div>
            </div>
        </div>
    </section>

    <!-- End Property Cards Section -->


    <section class="py-5" style="  background-color: var(--card-bg);">
        <div class="container">
            <div class="row text-center justify-content-center">

                <!-- Stat 1 -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h2 class="fw-bold" style="color: var(--text-color); font-size: clamp(32px, 5vw, 50px);">3450+
                    </h2>
                    <p class=" mb-0" style="font-size: clamp(14px, 2.5vw, 18px); color: var(--text-color);">Total
                        Properties</p>
                </div>

                <!-- Stat 2 -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h2 class="fw-bold" style="color: var(--text-color); font-size: clamp(32px, 5vw, 50px);">1700+
                    </h2>
                    <p class=" mb-0" style="font-size: clamp(14px, 2.5vw, 18px); color: var(--text-color);">Trusted
                        Agencies</p>
                </div>

                <!-- Stat 3 -->
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h2 class="fw-bold" style="color: var(--text-color); font-size:clamp(32px, 5vw, 50px);">2200+</h2>
                    <p class=" mb-0" style="font-size: clamp(14px, 2.5vw, 18px); color: var(--text-color);">Happy
                        Buyers
                    </p>
                </div>

                <!-- Stat 4 -->
                <div class="col-6 col-md-3">
                    <h2 class="fw-bold" style="color: var(--text-color); font-size: clamp(32px, 5vw, 50px);">3270+
                    </h2>
                    <p class=" mb-0" style="font-size: clamp(14px, 2.5vw, 18px); color: var(--text-color); ">Total
                        Agents</p>
                </div>

            </div>
        </div>
    </section>

    <!-- section -->
    <section class="blog-section py-lg-5 " style="  background-color: var(--card-bg);">
        <div class="blog-container py-lg-5">
            <!-- Left Side -->
            <div class="blog-left">
                <h5 class="blog-explore">EXPLORE</h5>
                <h2 class="blog-title">Blog Posts</h2>
                <p class="blog-intro">Vestibulum ante ipsum primis in faucibus orci luctus turpis sodales quis. Integer
                    sit amet mattis quam. Vivamus a ligula quam tesque et libero ut justo ultrices in.</p>

                <div class="blog-card">
                    <img src="pics/10008.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 30, 2020</p>
                    <h4 class="blog-heading">What you need to know when choosing balcony</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>
            </div>

            <!-- Right Side -->
            <div class="blog-right">
                <div class="blog-card">
                    <img src="pics/10009.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>

                <div class="blog-card">
                    <img src="pics/10011.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>

                <div class="blog-card">
                    <img src="pics/10010.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
                </div>

                <div class="blog-card">
                    <img src="pics/10012.jpg" alt="Blog Image" class="blog-img">
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
                        <img src="pics/10013.png" alt="" class="img-fluid">
                    </div>
                </div>

                <!-- Right Side FAQ -->
                <div class="col-lg-6 mt-5 mt-lg-0 pl-lg-5">
                    <h5
                        style="text-transform: uppercase; font-size: 14px; font-weight: 700; color: #2563eb; letter-spacing: 1px;">
                        FAQs
                    </h5>
                    <h2 style="font-size: 36px; line-height: 1.3; font-weight: 800; color: var(--text-color);">
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
                                <button class="accordion-button collapsed fw-bold " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Sed ut perspiciatis unde omnis?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body ">

                                    Sit amet consectetur adipisicing elit. Voluptates amet earum velit nobis aliquam
                                    laboriosam nihil debitis animi vitae eos nisi laudantium. Tempore reiciendis ipsam
                                    culpa, qui voluptates eveniet, incidunt officiis eaque iste minima autem. </div>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="accordion-item mb-3 border rounded shadow-sm">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    At vero eos iusto odio ducimus qui?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body ">

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
                                <button class="accordion-button collapsed fw-bold " type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    We denounce with righteous?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">

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

    <section class="py-5 text-center" style="  background-color: var(--card-bg);">
        <div class="container">
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="false"> <!-- No auto-slide -->

                <!-- Slides -->
                <div class="carousel-inner">

                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <img src="pics/10016.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: var(--text-color);">OMG! I cannot believe. It's Awesome”
                        </h3>
                        <p class=" mx-auto"
                            style="max-width: 700px; font-size: 16px; line-height: 1.8; color: var(--text-color);">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula.
                        </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: var(--text-color);">Johnson William</h5>
                        <p class="fs-5" style="color: var(--text-color);">Web Developer</p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <img src="pics/10017.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: var(--text-color);">Simply the best. Better than all the
                            rest."</h3>
                        <p class=" mx-auto"
                            style="max-width: 700px; font-size: 16px; line-height: 1.8; color: var(--text-color);">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula. </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: var(--text-color);">Alexander sakura</h5>
                        <p class=" fs-5 " style="color: var(--text-color);">Digtal Marketer</p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <img src="pics/10014.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: var(--text-color);">OMG! I cannot believe. It's Awesome”
                        </h3>
                        <p class=" mx-auto"
                            style="max-width: 700px; font-size: 16px; line-height: 1.8; color: var(--text-color);">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula. </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: var(--text-color);">John wilson</h5>
                        <p class=" fs-5" style="color: var(--text-color);">Web Developer</p>
                    </div>

                    <!-- Testimonial 4 -->
                    <div class="carousel-item">
                        <img src="pics/10015.jpg" class="rounded-circle mb-3"
                            style="width: 100px; height: 100px; object-fit: cover;">
                        <div class="text-center mb-3" style="font-size: 24px; color: #f97316;">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <h3 class="fw-bold" style="color: var(--text-color);">OMG! I cannot believe. It's Awesome”
                        </h3>
                        <p class=" mx-auto"
                            style="max-width: 700px; font-size: 16px; line-height: 1.8; color: var(--text-color);">
                            My new site is so much faster and easier to work with than my old site. They are here to
                            help
                            the customers to get their success.Nemo set eos , quod minus euis illo laboure. Pellen
                            tesque libero ut justo, ultrices in ligula. </p>
                        <h5 class="fw-bold mt-4 mb-1" style="color: var(--text-color);">Julia Sakura</h5>
                        <p class=" fs-5" style="color: var(--text-color);">Digital Marketer</p>
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
    <section class="py-5" id="second-last">
        <div class="container py-md-5 py-sm-4 py-2">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="col-lg-8">
                    <div class="header-section">
                        <h3 class="title">Become a Real Estate Agent</h3>
                        <p class="pr-lg-5 mt-3" style="color: #eee;">We only work with the best companies around the
                            globe.</p>
                    </div>
                </div>

                <!-- Button Section -->
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="#" class="btn btn-style"
                        style="padding: 12px 45px; font-size: 16px; font-weight: 600; text-decoration: none;">
                        Join Now <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
@endsection
