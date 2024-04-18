<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center text-dark" href="dashboard">
        <div class="sidebar-brand-icon">
            <i class="bi bi-person-check-fill m-1"></i>
        </div>
        <div class="sidebar-brand-text">SIAKAD - ADMIN</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link text-dark" href="dashboard">
            <i class="bi bi-house-door-fill text-dark"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-dark">
        Data
    </div>

    <!-- Nav Item - Menu Lihat Data -->
    <li class="nav-item">
        <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="bi bi-eye-fill text-dark"></i>
            <span>Lihat</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-light py-2 collapse-inner rounded">
                <a class="collapse-item text-dark" href="lihat-nilai-mahasiswa">Lihat Nilai Mahasiswa</a>
                <hr class="dropdown-divider">
                <a class="collapse-item text-dark" href="lihat-daftar-mahasiswa">Lihat Daftar Mahasiswa</a>
                <hr class="dropdown-divider">
                <a class="collapse-item text-dark" href="lihat-daftar-camaba">Lihat Daftar Calon <br> Mahasiswa Baru</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Menu Kelola Data -->
    <li class="nav-item">
        <a class="nav-link collapsed text-dark" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench text-dark"></i>
            <span>Kelola</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-light py-2 collapse-inner rounded">
                <a class="collapse-item text-dark" href="kelola-data-nilai">Kelola Nilai Mahasiswa</a>
                <hr class="dropdown-divider">
                <a class="collapse-item text-dark" href="kelola-data-artikel">Kelola Artikel</a>
                <hr class="dropdown-divider">
                <a class="collapse-item text-dark" href="kelola-data-user">Kelola User</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline my-2">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>