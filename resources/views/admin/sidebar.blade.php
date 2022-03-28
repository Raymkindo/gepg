
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{Auth::user()->name}}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('dashboad')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Main</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('upload')}}">
                    <i class="fas fa-fw fa-upload-alt"></i>
                    <span>Upload</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('register')}}"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-user"></i>
                    <span>Add New User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('login')}}"
                   aria-controls="collapseTwo">
                    <i class="fa-solid fa-user"></i>
                    <span>List All Users</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Upload  Statement
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('register')}}"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-user"></i>
                    <span>Bank</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('register')}}"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-user"></i>
                    <span>TRA</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>{{Auth::user()->user}}</strong>Welcome to Our System </p>
                <a class="btn btn-success btn-sm" href="#">Contact Us</a>
            </div>

        </ul>
        <!-- End of Sidebar -->
