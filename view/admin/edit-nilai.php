<?php
include '../../koneksi.php';

session_start();

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    if (isset($_POST['simpan'])) {
        $mata_kuliah = $_POST['mata_kuliah'];
        $nilai = $_POST['nilai'];
        $pengajar = $_POST['pengajar'];

        $query = "INSERT INTO tbl_nilai_mahasiswa (nim, mata_kuliah, nilai_mahasiswa, dosen_mata_kuliah) 
                VALUES ('$nim', '$mata_kuliah','$nilai','$pengajar')";

        if (mysqli_query($conn, $query)) {
            $_SESSION['notifikasi_nilai_berhasil'] = "Nilai berhasil disimpan.";
        } else {
            $_SESSION['notifikasi_nilai_gagal'] = "Terjadi kesalahan saat menyimpan nilai: " . mysqli_error($conn);
        }

        header("Location: edit-nilai.php?nim=$nim");
        exit();
    }
} else {
    $_SESSION['notifikasi_nilai_berhasil'] = "NIM mahasiswa tidak ditemukan.";
    header("Location: daftar-mahasiswa.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="row">
            <div class="col">
                <a href="../../kelola-data-nilai" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="text-center mb-4">Edit Nilai Mahasiswa</h2>
                <p class="text-center mb-4">Nomor Induk Mahasiswa: <?php echo $nim; ?></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                                <select class="form-select" aria-label="Mata Kuliah" name="mata_kuliah">
                                    <option selected>Pilih Mata Kuliah</option>
                                    <option value="PENGEMBANGAN APLIKASI WEB">PENGEMBANGAN APLIKASI WEB</option>
                                    <option value="ADMINISTRASI JARINGAN">ADMINISTRASI JARINGAN</option>
                                    <option value="BAHASA INGGRIS">BAHASA INGGRIS</option>
                                    <option value="GRAFIKA KOMPUTER">GRAFIKA KOMPUTER</option>
                                    <option value="TEKNOLOGI KECERDASAN BISNIS">TEKNOLOGI KECERDASAN BISNIS</option>
                                    <option value="REKAYASA DAN PROYEK PERANGKAT LUNAK">REKAYASA DAN PROYEK PERANGKAT LUNAK</option>
                                    <option value="KECERDASAN KOMPUTASIONAL">KECERDASAN KOMPUTASIONAL</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nilai" class="form-label">Nilai</label>
                                <input type="number" class="form-control" name="nilai">
                            </div>
                            <div class="mb-3">
                                <label for="pengajar" class="form-label">Dosen Mata Kuliah</label>
                                <select class="form-select" aria-label="Pengajar Mata Kuliah" name="pengajar">
                                    <option selected>Pilih Dosen</option>
                                    <option value="Ahmad Habib, S.Kom.,MM">Ahmad Habib, S.Kom.,MM</option>
                                    <option value="Fridy Mandita, S.Kom., M.Sc">Fridy Mandita, S.Kom., M.Sc</option>
                                    <option value="Geri Kusnanto, S.Kom.,MM">Geri Kusnanto, S.Kom.,MM</option>
                                    <option value="Elsen Ronando, S.Si.,M.Si">Elsen Ronando, S.Si.,M.Si</option>
                                    <option value="Anang Pramono, S.Kom.,MM">Anang Pramono, S.Kom.,MM</option>
                                    <option value="Luvia Friska NS., ST.,MT">Luvia Friska NS., ST.,MT</option>
                                    <option value="Bagus Hardiansyah, S.Kom., M.Si">Bagus Hardiansyah, S.Kom., M.Si</option>
                                </select>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-warning" name="simpan">Simpan</button>
                                <a href="edit-nilai.php?nim=<?php echo $nim ?>" class="btn btn-secondary">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>