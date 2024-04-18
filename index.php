<?php
// Routes Admin
session_start();

if ((isset($_GET['page']) && $_GET['page'] == 'dashboard') || !isset($_GET['page'])) {
    $page = "view/admin/dashboard.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'gate')) {
    include "gate.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'lihat-data-mahasiswa')) {
    $page = "lihat-data-mahasiswa.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'tambah-data-admin')) {
    $page = "tambah-data-admin.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'tambah-data-mahasiswa')) {
    $page = "tambah-data-mahasiswa.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'tambah-data-artikel')) {
    $page = "tambah-data-artikel.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'kelola-data-nilai')) {
    $page = "kelola-data-nilai.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'kelola-data-artikel')) {
    $page = "kelola-data-artikel.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'kelola-data-user')) {
    $page = "kelola-data-user.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'detail-mahasiswa')) {
    $page = "view/admin/detail-mahasiswa.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'lihat-nilai-mahasiswa')) {
    $page = "lihat-nilai-mahasiswa.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'lihat-daftar-mahasiswa')) {
    $page = "lihat-daftar-mahasiswa.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'lihat-daftar-camaba')) {
    $page = "lihat-daftar-camaba.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'lihat-artikel')) {
    $page = "lihat-artikel.php";
    include "view/admin/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'login')) {
    include "login.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'logout')) {
    include "services/logout-proses.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'profil-admin')) {
    include "view/admin/profil-admin.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'pengaturan-admin')) {
    include "view/admin/pengaturan-admin.php";
}

// Routes Mahasiswa
if ((isset($_GET['page']) && $_GET['page'] == 'beranda-mahasiswa')  || !isset($_GET['page'])) {
    $page = "view/mahasiswa/beranda-mahasiswa.php";
    include "view/mahasiswa/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'laporan-nilai')) {
    $page = "view/mahasiswa/laporan-nilai.php";
    include "view/mahasiswa/main.php";
}

// Routes Publik
if ((isset($_GET['page']) && $_GET['page'] == 'beranda-publik')  || !isset($_GET['page'])) {
    $page = "view/publik/beranda-publik.php";
    include "view/publik/main.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'registrasi')) {
    include "registrasi.php";
} else if ((isset($_GET['page']) && $_GET['page'] == 'pendaftaran-mahasiswa-baru')) {
    $page = "view/publik/pendaftaran-mahasiswa-baru.php";
    include "view/publik/main.php";
}
