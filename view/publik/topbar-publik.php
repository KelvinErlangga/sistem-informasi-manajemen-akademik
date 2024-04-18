<nav class="navbar navbar-expand bg-white topbar mb-4 static-top shadow justify-content-lg-start">

    <!-- Topbar Navbar -->
    <ul class="navbar-nav">

        <!-- Gear -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span><i class="bi bi-gear-fill"></i></span>
            </a>
            <!-- Dropdown -->
            <div class="dropdown-menu shadow animated--grow-in" aria-labelledby="userDropdown" style="font-size: 14px; width: 90px;">
                <a class="dropdown-item" href="beranda-mahasiswa">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Beranda
                </a>
                <a class="dropdown-item" href="gate">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Menu SIM
                </a>
                <a class="dropdown-item" href="pendaftaran-mahasiswa-baru">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Pendaftaran Mahasiswa Baru
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
        <!-- End of Gear -->

        <li class="nav-item ">
            <a class="nav-link dropdown-item">
                <span>SISTEM INFORMASI AKADEMIK</span>
            </a>
        </li>

    </ul>

</nav>