
<!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin <sup>TI</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Admin
            </div>

            <!-- Nav Item - Contents Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContent"
                    aria-expanded="true" aria-controls="collapseContent">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Content</span>
                </a>
                <div id="collapseContent" class="collapse" aria-labelledby="headContent" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Contents:</h6>
                        <a class="collapse-item" href="{{ url('/admin/konten-profile')}}">Profile</a>
                        <a class="collapse-item" href="{{ url('/admin/konten-berita')}}">Berita</a>
                        <a class="collapse-item" href="{{ url('/admin/konten-prestasi')}}">Prestasi</a>
                        <a class="collapse-item" href="{{ url('/admin/konten-pengumuman')}}">Pengumuman</a>
                        <a class="collapse-item" href="{{ url('/admin/konten-magang')}}">Magang</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Category Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory"
                    aria-expanded="true" aria-controls="collapseCategory">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Category</span>
                </a>
                <div id="collapseCategory" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Categories:</h6>
                        <a class="collapse-item" href="{{ url('/admin/kategori-berita')}}">Kategori berita</a>
                        <a class="collapse-item" href="{{ url('/admin/kategori-prestasi')}}">Kategori prestasi</a>
                        <a class="collapse-item" href="{{ url('/admin/kategori-magang')}}">Kategori magang</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Superadmin
            </div>


            <!-- Nav Item - Pengaturan admin -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin/pengaturan-admin')}}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pengaturan Admin</span></a>
            </li>

            <!-- Divider -->
            {{-- <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">
                    <i class="fas fa-fw fa-logout"></i>
                    <span>Log out</span></a>
            </li> --}}

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
