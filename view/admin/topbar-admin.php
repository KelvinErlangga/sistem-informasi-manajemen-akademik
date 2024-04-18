<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <?php
    if ((isset($_GET['page']) && $_GET['page'] == 'pengaturan-admin')) {
        echo '<a class="text-decoration-none" href=dashboard><i class="bi bi-arrow-left-square ml-4 mr-1"></i> Beranda</a>';
    } elseif ((isset($_GET['page']) && $_GET['page'] == 'profil-admin')) {
        echo '<a class="text-decoration-none" href=dashboard><i class="bi bi-arrow-left-square ml-4 mr-1"></i> Beranda</a>';
    }
    ?>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - User Information -->
        <span class="mt-4 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['role'] ?> | Halo, <?php echo $_SESSION['username'] ?>!</span>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profil-admin">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Keluar
                </a>
            </div>

            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin untuk keluar?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Pilih "Keluar" jika anda yakin untuk keluar</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-danger" href="logout">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>

    </ul>

</nav>