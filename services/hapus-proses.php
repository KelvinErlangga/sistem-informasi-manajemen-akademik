<?php
session_start();
include '../koneksi.php';

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if (isset($_POST['confirm_delete'])) {
    $nim_hapus = $_POST['nim_hapus'];
    $hapus = mysqli_query($conn, "DELETE FROM tbl_mhsiswa WHERE nim = '$nim_hapus'");

    if ($hapus) {
        $_SESSION['notifikasi_hapus'] = 'Berhasil menghapus data dengan NIM ' . $nim_hapus;
        header('Location: ../kelola-data-user');
        exit();
    } else {
        echo "Gagal menghapus data mahasiswa.";
    }
}

if (isset($_POST['id_user_hapus']) && isset($_POST['confirm_delete'])) {
    $id_user_hapus = $_POST['id_user_hapus'];
    $username = mysqli_query($conn, "SELECT username FROM tbl_user WHERE id_user = '$id_user_hapus'");
    $row = mysqli_fetch_assoc($username);
    $username = $row['username'];

    $hapus = mysqli_query($conn, "DELETE FROM tbl_user WHERE id_user = '$id_user_hapus'");

    if ($hapus) {
        $_SESSION['notifikasi_hapus'] = 'Berhasil menghapus data dengan username ' . $username;
        header('Location: ../kelola-data-user');
        exit();
    } else {
        echo "Gagal menghapus data admin.";
    }
}

if (isset($_POST['hapus_artikel'])) {
    $id_artikel = $_POST['id_artikel_hapus'];
    $hapus = mysqli_query($conn, "DELETE FROM tbl_artikel WHERE id_artikel = '$id_artikel'");

    if ($hapus) {
        $_SESSION['notifikasi_hapus'] = 'Berhasil menghapus artikel dengan id ' . $id_artikel;
        header('Location: ../kelola-data-artikel');
        exit();
    } else {
        echo "Gagal menghapus data artikel.";
    }
}
