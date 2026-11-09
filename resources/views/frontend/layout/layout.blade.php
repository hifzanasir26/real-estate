 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/dark.css') }}">

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
            background-color: var(--card-bg);
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
        .card-footer {
            background-color: var(--card-footer-bg);
            border-top: 1px solid #ddd;
            color: var(--muted-text);
        }
    </style>

</head>

<body class="homepage ">

     @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')
 
 <script>
        document.addEventListener("DOMContentLoaded", function() {
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
                    indicator.setAttribute('aria-label', 'Slide ' + (Math.floor(index / cardsPerSlide) +
                    1));
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