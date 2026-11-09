 <header
     style="background: var(--card-bg); padding: 15px 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); position: fixed; top: 0; width: 100%; z-index: 999;">
     <nav class="navbar navbar-expand-lg" style="padding: 0;">
         <div class="container-fluid" style="max-width: 1200px; margin: auto;">
             <!-- Logo -->
             <a class="navbar-brand d-flex align-items-center" href="#">
                 <img src="{{ asset('pics/10001.png') }}" width="50" class="me-2">
                 <h2 style="color: var(--text-color); font-weight: 800; margin: 0;">Estates</h2>
             </a>

             <!-- 🔧 Dark Mode Icon (for small screens only) -->
             <button onclick="toggleDarkMode()" class="btn btn-outline-dark d-lg-none me-2" id="darkModeMobile">
                 <i class="fas fa-moon" style="color: var(--text-color);"></i>
             </button>

             <!-- Toggler -->
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <!-- Navigation Links -->
             <div class="collapse navbar-collapse justify-content-between" id="navbarMenu">
                 <ul class="navbar-nav ms-lg-5 mb-2 mb-lg-0 d-flex align-items-lg-center gap-lg-3">
                     <li class="nav-item">
                         <a class="nav-link active fw-semibold" href="{{ route('home.index') }}"
                             style="color: var(--accent-color);">Home</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link fw-medium" href="{{ route('about.index') }}"
                             style="color: var(--text-color);">About</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link fw-medium" href="{{ route('services.index') }}"
                             style="color: var(--text-color);">Services</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle fw-medium" href="#" data-bs-toggle="dropdown"
                             style="color: var(--text-color);">Pages</a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('blogpost.index') }}">Blog Posts</a></li>
                             <li><a class="dropdown-item" href="{{ route('singlepost.index') }}">Blog Single</a></li>
                             <li><a class="dropdown-item" href="{{ route('landingpage.index') }}">Landing Single</a>
                             </li>
                         </ul>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link fw-medium" href="{{ route('contact.index') }}"
                             style="color: var(--text-color);">Contact</a>
                     </li>
                 </ul>

                 <!-- Search + Enquire -->
                 <!-- Search + Enquire -->
                 <div class="d-flex align-items-center gap-3 mt-3 mt-lg-0 flex-wrap">
                     <!-- Search -->
                     <div class="position-relative" style="min-width: 200px;">
                         <input type="text" class="form-control rounded-pill ps-3 pe-5" placeholder="Search here.."
                             style="border: 1px solid var(--input-border); background: var(--input-bg); color: var(--text-color);">
                         <img src="https://cdn-icons-png.flaticon.com/512/622/622669.png" width="18"
                             style="position: absolute; right: 15px; top: 10px;">
                     </div>

                     <!-- Enquire Button -->
                     <a href="#" class="btn"
                         style="background: var(--accent-color); color: white; padding: 10px 20px; border-radius: 30px; font-weight: 600;">
                         Enquire Here
                     </a>

                     <!-- 🔧 Dark Mode Toggle for large screens only -->
                     <button onclick="toggleDarkMode()" class="btn btn-outline-dark d-none d-lg-block"
                         id="darkModeToggle">
                         <i class="fas fa-moon" style="color: var(--text-color);"></i>
                     </button>

                     <!-- Auth Actions -->
                     @guest
                         <a href="{{ route('login') }}" class="text-dark fs-4" title="Login">
                             <i class="fa-solid fa-user"></i>
                         </a>
                     @endguest

                     @auth
                         <form method="POST" action="{{ route('logout') }}">
                             @csrf
                             <button type="submit" class="btn btn-link fs-4 p-0 m-0" style="color: var(--text-color);"
                                 title="Logout">
                                 <i class="fa-solid fa-right-from-bracket"></i>
                             </button>

                         </form>
                     @endauth
                 </div>

             </div>
         </div>
     </nav>
 </header>
