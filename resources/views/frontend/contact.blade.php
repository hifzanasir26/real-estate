
@extends('frontend.layout.layout')
@section('content')
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
 @endsection