<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-film"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CRUD Tiket<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ route('tiket') }}">
                    <i class="fas fa-ticket-alt"></i>
                    <span>Input Data Tiket</span></a>

            </li><li class="nav-item active">
                <a class="nav-link" href="{{ route('kategori') }}">
                    <i class="fas fa-film"></i>
                    <span>Input Data Film</span></a>
            </li>
            
            </li><li class="nav-item active">
                <a class="nav-link" href="{{ route('login') }}">
                    <i class="fas fa-power-off"></i>
                    <span>Log Out</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        

        </ul>