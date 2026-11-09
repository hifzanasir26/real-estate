@extends('frontend.layout.layout')
@section('content')

    <!-- section -->
    <section class="blog-section py-lg-5 ">
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

                <div class="blog-card">
                    <img src="../pics/10005.jpg" alt="Blog Image" class="blog-img">
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
                    <img src="../pics/10006.jpg" alt="Blog Image" class="blog-img">
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

                <div class="blog-card">
                    <img src="../pics/10007.jpg" alt="Blog Image" class="blog-img">
                    <p class="blog-date">Dec 31, 2020</p>
                    <h4 class="blog-heading">The ultimate guide to find a flat in your area</h4>
                    <p class="blog-text">Lorem ipsum viverra feugiat. Pellen tesque libero justo.</p>
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
@endsection
