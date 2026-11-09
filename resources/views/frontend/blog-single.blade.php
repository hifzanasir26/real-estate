@extends('frontend.layout.layout')
@section('content')

<style>
    .section-container {
        padding-left: 7vw;
        padding-right: 7vw;
    }

    .author-box {
        display: flex;
        align-items: center;
        background: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px #eee;
        margin-bottom: 40px;
    }

    .author-img img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
    }

    .author-info {
        margin-left: 20px;
    }

    .author-info h5 {
        font-size: 18px;
        font-weight: 600;
    }

    .author-info p {
        margin: 10px 0;
        color: #555;
    }

    .author-social i {
        margin-right: 10px;
        color: #777;
        cursor: pointer;
    }

    @media (max-width: 576px) {
        .author-box {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .author-img {
            margin-bottom: 15px;
        }

        .author-info {
            margin-left: 0;
        }

        .author-img img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-social i {
            margin: 0 6px;
        }
    }


    /* Comments */
    .comments-title {
        font-size: 20px;
        font-weight: 600;
        margin: 20px 0;
    }

    .comment-box {
        display: flex;
        align-items: flex-start;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 0 8px #eee;
    }

    .comment-img img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    .comment-content {
        margin-left: 15px;
    }

    .comment-content strong {
        font-size: 16px;
    }

    .comment-date {
        font-size: 14px;
        color: #777;
        margin-bottom: 5px;
    }

    .comment-date .reply {
        color: #f60;
        cursor: pointer;
    }

    /* Reply Form */
    .reply-box {
        background: #f9f9f9;
        padding: 30px;
        border-radius: 8px;
    }

    .reply-box h3 {
        margin-bottom: 20px;
    }

    .reply-box textarea,
    .reply-box input {
        width: 100%;
        padding: 15px;
        margin-bottom: 15px;
        border: 1px solid #eee;
        border-radius: 8px;
        font-size: 16px;
    }

    .reply-box button {
        background: #ff5300;
        color: #fff;
        padding: 15px 30px;
        border: none;
        font-size: 16px;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
    }

    .left-side span a {
        text-decoration: none;
        color: #f60;
    }

    .left-side h4 a {
        color: black;
        text-decoration: none;
    }

    .left-side h4 a:hover {
        color: #f60;
    }

    /* Dark Mode - Author, Comments, Reply */
    .dark-mode .author-box,
    .dark-mode .comment-box,
    .dark-mode .reply-box {
        background-color: #1e293b;
        /* dark navy-gray */
        color: #f1f5f9;
        /* light text */
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    body.dark-mode .left-side h4 a {
        color: #fff !important;
        text-decoration: none !important;
    }

    body.dark-mode .left-side h4 a:hover {
        color: #f60 !important;
    }
</style>


<section class="py-5" style="background-color: var(--card-bg);">
    <div class="container section-container">
        <!-- Blog Header -->
        <div class="text-center mb-5">
            <p class="text-primary fw-bold text-uppercase">Blog Single</p>
            <h3 class="fw-bold ">Lorem Faucibus Fusce Ante Vitae Justo Efficitur Elementum.<br>Donec Ipsum
                Faucibus Arcu Elementum.</h3>
            <div class="d-flex justify-content-center align-items-center  mt-3">
                <i class="fas fa-user me-2"></i> Johnson
                <span class="mx-3">|</span>
                <i class="fas fa-calendar-alt me-2"></i> Dec 28, 2020
            </div>
        </div>

        <!-- Main Blog Image -->
        <div class="text-center mb-4">
            <img src="../pics/10019.jpg" alt="Blog Main" class="img-fluid rounded">
        </div>

        <!-- First Paragraph -->
        <div class=" align-item-center mb-5 px-lg-5">
            <p class="">
                Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum, luctus
                justo. ac purus semper.
                Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum, luctus
                justo. ac purus semper.
                Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum, luctus
                justo. ac purus semper.
            </p>
            <p class="">Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus arcu
                elementum, luctus
                justo. ac purus semper. Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus
                arcu elementum, luctus justo. ac purus semper. Fusce faucibus ante vitae justo efficitur elementum.
                Donec ipsum faucibus arcu elementum, luctus justo. ac purus semper.</p>
        </div>

        <!-- Quote Box -->
        <div class="row justify-content-center mb-5 align-items-center ">
            <div class="col-lg-10">
                <div class="p-4  border-start border-4 border-primary shadow-sm rounded">
                    <p class="fw-bold fs-5 mb-1">
                        “Lorem faucibus fusce ante vitae justo efficitur elementum. Donec ipsum faucibus arcu
                        elementum, luctus justo.
                        ac purus semper. Fusce faucibus ante vitae justo efficitur elementum.”
                    </p>
                    <p class=" mb-0">— Albert Jain</p>
                </div>
            </div>
        </div>

        <!-- Middle Paragraph -->
        <div class="align-item-center mb-5 px-lg-5">
            <p class="">
                Lorem faucibus fusce ante vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum,
                luctus justo. ac purus semper. Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum
                faucibus. Donec ipsum faucibus arcu elementum. Donec ipsum faucibus arcu elementum, luctus justo. ac
                purus semper. Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus arcu
                elementum, luctus.
            </p>
        </div>

        <!-- Image and Text Section 1 -->
        <div class="row align-items-center mb-5">
            <h3 class="fw-bold mb-3">We provide great services for our customers based on needs</h3>
            <div class="col-lg-6">
                <img src="../pics/10011.jpg" alt="House 1" class="img-fluid rounded">
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <p class="">
                    Lorem faucibus fusce ante vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum,
                    luctus justo. ac purus semper. Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum
                    faucibus. Donec ipsum faucibus arcu elementum. Donec ipsum faucibus arcu elementum, luctus
                    justo. ac purus semper..
                </p>
            </div>
            <p style=" font-size: 18px; line-height: 1.7;" class="mt-3">Lorem faucibus fusce ante
                vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum, luctus justo. ac purus semper.
                Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum faucibus. Donec ipsum faucibus arcu
                elementum. Donec ipsum faucibus arcu elementum, luctus justo. ac purus semper. Fusce faucibus ante
                vitae justo efficitur elementum.</p>
        </div>

        <!-- Image and Text Section 2 -->
        <div style="padding: 0 5vw;">
            <h2 style="font-weight: 800; font-size: 28px;  margin-bottom: 20px;">
                Our works describe why we are the best in the business
            </h2>
            <p style="color: #6b7280; font-size: 18px; line-height: 1.7;">
                Lorem faucibus fusce ante vitae justo efficitur elementum. Donec ipsum faucibus arcu elementum,
                luctus justo. ac purus semper. Fusce faucibus ante vitae justo efficitur elementum. Donec ipsum
                faucibus. Donec ipsum faucibus arcu elementum. Donec ipsum faucibus arcu elementum, luctus justo. ac
                purus semper. Fusce faucibus ante vitae justo efficitur elementum.
            </p>

            <div style="margin-top: 30px; display: flex; gap: 20px;">
                <div><strong style="font-size: 18px; ">Share this post :</strong></div>
                <div style="margin-top: 10px;">
                    <a href="#"
                        style="margin-right: 10px; background-color: #3b5998; padding: 10px; color: #fff; border-radius: 5px;">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        style="margin-right: 10px; background-color: #1da1f2; padding: 10px; color: #fff; border-radius: 5px;">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#"
                        style="margin-right: 10px; background-color: #0077b5; padding: 10px; color: #fff; border-radius: 5px;">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>

            <hr style="margin: 30px 0; border-top: 1px solid #eee;">

            <div style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between;">
                <!-- Previous Post -->
                <div style="flex: 1 1 300px; display: flex; align-items: center; gap: 20px;">
                    <img src="../pics/10004.jpg" alt="Previous" style="width: 130px; height: auto; border-radius: 8px;">
                    <div class="left-side">
                        <span style="color: #ff5100; font-weight: bold;"><i class="fas fa-arrow-left"></i>
                            <a href="#">Previous</a></span>
                        <h4 style="margin: 5px 0; font-weight: 700; font-size: 20px; "> <!-- clean, no inline color -->
                            <a href="#">Lorem faucibus fusce ante vitae justo</a>
                        </h4>
                    </div>
                </div>

                <!-- Next Post -->
                <div
                    style="flex: 1 1 300px; display: flex; align-items: center; gap: 20px; text-align: right; justify-content: flex-end;">
                    <div class="left-side">
                        <span style="color: #ff5100; font-weight: bold;"><a href="#">Next</a> <i
                                class="fas fa-arrow-right"></i></span>
                        <h4 style="margin: 5px 0; font-weight: 700; font-size: 20px; "><a href="#">Lorem
                                faucibus
                                fusce ante vitae justo</a></h4>
                    </div>
                    <img src="../pics/10005.jpg" alt="Next" style="width: 130px; height: auto; border-radius: 8px;">
                </div>
            </div>
        </div>
        <!-- Author Box -->
        <div class="author-box mt-5">
            <div class="author-img">
                <img src="../pics/10016.jpg" alt="Author">
            </div>
            <div class="author-info">
                <h5>Lisa Bella</h5>
                <p>Vivamus a ligula quam. Ut blandit eu leo non suscipit. Nulla quis lorem neque, mattis lectus. In
                    dolor. Lorem ipsum dolor sit amet.</p>
                <div class="author-social">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-pinterest"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-vk"></i>
                </div>
            </div>
        </div>

        <!-- Recent Comments -->
        <div class="comments-title fw-bold fs-3">Recent comments</div>

        <div class="comment-box">
            <div class="comment-img">
                <img src="../pics/10017.jpg" alt="user">
            </div>
            <div class="comment-content">
                <strong>Exexa Kim</strong>
                <div class="comment-date">Dec 28, 2020. <span class="reply">Reply</span></div>
                <p>Mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. ipsum eu nec
                    purus quis tempor dolor set.</p>
            </div>
        </div>

        <div class="comment-box">
            <div class="comment-img">
                <img src="../pics/10014.jpg" alt="user">
            </div>
            <div class="comment-content">
                <strong>Charlie</strong>
                <div class="comment-date">Dec 28, 2020. <span class="reply">Reply</span></div>
                <p>Mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor. Phasellus eu
                    nec purus quis tempor.</p>
            </div>
        </div>

        <div class="comment-box">
            <div class="comment-img">
                <img src="../pics/10015.jpg" alt="user">
            </div>
            <div class="comment-content">
                <strong>Jack Harry</strong>
                <div class="comment-date">Dec 28, 2020. <span class="reply">Reply</span></div>
                <p>Mattis ut hendrerit non, facilisis eget mauris. Sed ultricies nec purus quis tempor, ipsum
                    bibendum purus quis tempor.</p>
            </div>
        </div>

        <!-- Leave a Reply -->
        <div class="reply-box">
            <h3 class="fw-bold">Leave a reply</h3>
            <textarea placeholder="Your Comment"></textarea>
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Email">
            <button type="submit">Post Comment</button>
        </div>


    </div>
</section>

@endsection