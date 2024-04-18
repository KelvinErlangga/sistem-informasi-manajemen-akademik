<?php

session_start();
include "../koneksi.php";

if (!empty($_POST['daftar'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = MD5(htmlspecialchars($_POST['password']));
    $level = 2;
    $role = 'Publik';

    // Cek apakah username sudah ada dalam database
    $cek_username = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '$username'");
    if (mysqli_num_rows($cek_username) > 0) {
        echo '<script>alert("Gagal, Username sudah terdaftar")</script>';
        echo '<script>window.location="../registrasi"</script>';
    } else {
        // Insert data pengguna baru ke dalam tabel tbl_user
        $insert_query = "INSERT INTO tbl_user (username, password, level, role) VALUES ('$username', '$password', '$level', '$role')";
        if (mysqli_query($conn, $insert_query)) {
            echo '<script>alert("Registrasi berhasil")</script>';
            echo '<script>window.location="../login"</script>';
        } else {
            echo '<script>alert("Gagal, Terjadi kesalahan dalam registrasi")</script>';
            echo '<script>window.location="../registrasi"</script>';
        }
    }
}

if (isset($_POST['mahasiswa_baru'])) {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $status_mhs = $_POST['status_mhs'];
    $jurusan = $_POST['jurusan'];
    $lulusan_sekolah = $_POST['lulusan_sekolah'];
    $tahun_ajaran = $_POST['tahun_ajaran'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];

    // Generate NIM
    $nim_prefix = '14622';
    $nim_query = mysqli_query($conn, "SELECT MAX(RIGHT(nim, 5)) AS max_nim FROM tbl_mhsiswa");
    $nim_row = mysqli_fetch_assoc($nim_query);
    $max_nim = $nim_row['max_nim'];
    $next_nim = $max_nim + 1;
    $nim = $nim_prefix . str_pad($next_nim, 5, '0', STR_PAD_LEFT);

    // Buat password dari tanggal lahir
    $hilangkan_tanda = str_replace('-', '', $tgl_lahir);
    $password = MD5($hilangkan_tanda);

    // Isi level dan role
    $level = 2;
    $role = 'Mahasiswa';

    // Query untuk memasukkan data ke dalam tabel tbl_user
    $insert_user_query = "INSERT INTO tbl_user (username, password, level, role) VALUES ('$nim', '$password', '$level', '$role')";
    if (mysqli_query($conn, $insert_user_query)) {
        $simpan = mysqli_query($conn, "INSERT INTO tbl_mhsiswa (nim, nama_mahasiswa, jns_kelamin, tgl_lahir, status_mhs, jurusan, lulusan_sekolah, tahun_ajaran, pekerjaan, alamat, kelurahan, kecamatan, kota, provinsi, telp, email) VALUES (
            '$nim',
            '$nama_mahasiswa',
            '$jns_kelamin',
            '$tgl_lahir',
            '$status_mhs',
            '$jurusan',
            '$lulusan_sekolah',
            '$tahun_ajaran',
            '$pekerjaan',
            '$alamat',
            '$kelurahan',
            '$kecamatan',
            '$kota',
            '$provinsi',
            '$telp',
            '$email'
        )");

        if ($simpan) {
            $id_daftar = $nim;
            $nama_pendaftar = $nama_mahasiswa;
            $insert_cln_mahasiswa_query = "INSERT INTO tbl_cln_mahasiswa (id_daftar, tanggal_daftar, nama_pendaftar, jns_kelamin, status_mhs, lulusan_sekolah, tahun_ajaran, tgl_lahir, pekerjaan, alamat, kelurahan, kecamatan, kota, provinsi, email) VALUES (
                '$id_daftar',
                NOW(),
            '$nama_pendaftar',
            '$jns_kelamin',
            '$status_mhs',
            '$lulusan_sekolah',
            '$tahun_ajaran',
            '$tgl_lahir',
            '$pekerjaan',
            '$alamat',
            '$kelurahan',
            '$kecamatan',
            '$kota',
            '$provinsi',
            '$email')";
            if (mysqli_query($conn, $insert_cln_mahasiswa_query)) {
                $_SESSION['notifikasi_berhasil'] = 'Berhasil daftar! NIM Anda adalah ' . $nim .
                    '<br>Sekarang Anda dapat masuk sebagai Mahasiswa menggunakan Username = ' . $nim . ' dan Password = ' . $hilangkan_tanda;
                header('Location: ../pendaftaran-mahasiswa-baru');
                exit();
            } else {
                // Jika terjadi kesalahan saat menambahkan data ke tabel tbl_cln_mahasiswa
                echo 'Gagal menambahkan data ke tabel tbl_cln_mahasiswa', mysqli_error($conn);
            }
        } else {
            // Jika terjadi kesalahan saat menambahkan data ke tabel tbl_mhsiswa
            echo 'Gagal menambahkan data ke tabel tbl_mhsiswa', mysqli_error($conn);
        }
    } else {
        // Jika terjadi kesalahan saat menambahkan data ke tabel tbl_user
        echo 'Gagal menambahkan data ke tabel tbl_user', mysqli_error($conn);
    }
}
