 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="{{route('admin.index')}}">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Divider -->
     <hr class="sidebar-divider">



     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
             aria-expanded="true" aria-controls="collapsePages">
             <i class="fas fa-fw fa-folder"></i>
             <span>Tables</span>
         </a>
         <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 {{-- <h6 class="collapse-header">Login Screens:</h6>
                 <a class="collapse-item" href="login.html">Login</a>
                 <a class="collapse-item" href="register.html">Register</a>
                 <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                 <div class="collapse-divider"></div>
                 <h6 class="collapse-header">Other Pages:</h6>
                 <a class="collapse-item" href="404.html">404 Page</a>
                 <a class="collapse-item" href="blank.html">Blank Page</a> --}}
                 <a class="collapse-item" href="{{ route('properties.table') }}" class="">
                     <div class="text">Properties</div>
                 </a>
                 {{-- <a class="collapse-item" href="{{ route('detail.table') }}" class="">
                     <div class="text">Details</div>
                 </a> --}}
             </div>
         </div>
     </li>

     <li class="menu-item">
         <form id="logout-form" action="{{ route('admin.dashboard.logout') }}" method="POST"
             enctype="multipart/form-data">
             @csrf
             <a href="{{ route('admin.dashboard.logout') }}"
                 onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                 style="text-decoration: none; " class="">

                 <div class="icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                 <div class="text text-white" style="padding: 1rem; font-size:1rem">Logout</div>
             </a>
         </form>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

     <!-- Sidebar Message -->
    

 </ul>
