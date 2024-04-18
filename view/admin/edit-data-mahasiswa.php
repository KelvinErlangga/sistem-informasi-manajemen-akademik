<?php
include "../../koneksi.php";

$nim = $_GET['nim'];
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa WHERE nim = '$nim'");
$data = mysqli_fetch_array($ambildata);

if (isset($_POST['simpan'])) {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $status_mhs = $_POST['status_mhs'];
    $jurusan = $_POST['jurusan'];
    $tgl_lahir = $_POST['tgl_lahir'];
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

    $update = mysqli_query($conn, "UPDATE tbl_mhsiswa SET
                nama_mahasiswa = '$nama_mahasiswa',
                jns_kelamin='$jns_kelamin', 
                status_mhs='$status_mhs', 
                jurusan='$jurusan', 
                lulusan_sekolah ='$lulusan_sekolah',
                tahun_ajaran='$tahun_ajaran', 
                pekerjaan='$pekerjaan', 
                alamat='$alamat', 
                kelurahan='$kelurahan',
                kecamatan = '$kecamatan', 
                kota='$kota',
                provinsi='$provinsi',
                telp='$telp', 
                email='$email' 
                WHERE nim='$nim'");

    if ($update) {
        $_SESSION['notifikasi_edit'] = 'Data mahasiswa berhasil diubah!';
        header('Location: ../../kelola-data-user');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <a href="../../kelola-data-user" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
        <form class="row g-3 needs-validation" novalidate action="" method="POST">
            <legend class="mt-5 text-center">Edit Data Mahasiswa</legend>
            <div class="form-group">
                <!-- Success message -->
                <?php
                include "../../koneksi.php";
                // Cek apakah ada notifikasi
                if (isset($_SESSION['notifikasi_nilai_berhasil'])) {
                    echo '<div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $_SESSION['notifikasi_nilai_berhasil'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                    // Hapus notifikasi setelah ditampilkan
                    unset($_SESSION['notifikasi_nilai_berhasil']);
                }
                ?>
                <div>
                    <label for="nim" class="form-label">
                        <i class="bi bi-person"></i> Nomor Induk Mahasiswa
                    </label>
                    <input name="nim" value="<?php echo $nim; ?>" placeholder="Masukkan NIM" class="form-control" type="text" disabled>
                    <div class="invalid-feedback">
                        Masukkan NIM yang valid.
                    </div>

                    <label for="nama_mahasiswa" class="form-label mt-3">
                        <i class="bi bi-person"></i> Nama Lengkap
                    </label>
                    <input name="nama_mahasiswa" id="nama_mahasiswa" value="<?php echo $data['nama_mahasiswa'] ?>" placeholder="Masukkan nama lengkap" class="form-control" type="text" required>
                    <div class="invalid-feedback">
                        Masukkan nama lengkap yang valid.
                    </div>

                    <label for="jenisKelaminDropdown" class="form-label mt-3"><i class="bi bi-gender-ambiguous"></i> Jenis Kelamin</label>
                    <select class="form-select" id="jenisKelaminDropdown" name="jns_kelamin" required>
                        <option value="L" <?php if ($data['jns_kelamin'] == 'L') echo 'selected' ?>>Laki-Laki</option>
                        <option value="P" <?php if ($data['jns_kelamin'] == 'P') echo 'selected' ?>>Perempuan</option>
                    </select>
                    <div class="invalid-feedback">Pilih jenis kelamin.</div>
                </div>

                <!-- Baris 2 -->
                <div class="row">
                    <label class="form-label mt-3">
                        <i class="bi bi-pin-map-fill"></i> Tanggal Lahir
                    </label>
                    <div class="input-group">
                        <input name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" class="form-control" type="date" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan tanggal lahir yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3"><i class="bi bi-gender-ambiguous"></i> Status Mahasiswa</label>
                    <div class="input-group">
                        <select class="form-select" id="statusMahasiswaDropdown" name="status_mhs" required>
                            <option <?php if ($data['status_mhs'] == "") echo 'selected' ?>>Pilih status mahasiswa</option>
                            <option value="Belum Menikah" <?php if ($data['status_mhs'] == "Belum Menikah") echo 'selected' ?>>Belum Menikah</option>
                            <option value="Menikah" <?php if ($data['status_mhs'] == "Menikah") echo 'selected' ?>>Menikah</option>
                        </select>
                        <div class="invalid-feedback mb-2">Pilih Status Mahasiswa.</div>
                    </div>

                </div>

                <!-- Baris 3 -->
                <div class="row">
                    <label class="form-label mt-3">
                        <i class="bi bi-gender-ambiguous"></i> Jurusan
                    </label>
                    <div class="input-group">
                        <select class="form-select" id="jurusanDropdown" name="jurusan" required>
                        <option value="" selected disabled>Pilih Jurusan</option>
                            <optgroup label="Fakultas Teknik">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Arsitektur">Teknik Arsitektur</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                            </optgroup>
                            <optgroup label="Fakultas Ekonomi dan Bisnis">
                                <option value="Akuntansi">Akuntansi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                                <option value="Ilmu Ekonomi">Ilmu Ekonomi</option>
                            </optgroup>
                            <optgroup label="Fakultas Ilmu Sosial dan Ilmu Politik">
                                <option value="Administrasi Negara">Administrasi Negara</option>
                                <option value="Administrasi Publik">Administrasi Publik</option>
                                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
                                <option value="Administrasi Niaga">Administrasi Niaga</option>
                                <option value="Administrasi Bisnis">Administrasi Bisnis</option>
                            </optgroup>
                            <optgroup label="Fakultas Ilmu Budaya">
                                <option value="Sastra Jepang">Sastra Jepang</option>
                                <option value="Sastra Inggris">Sastra Inggris</option>
                            </optgroup>
                            <optgroup label="Fakultas Hukum">
                                <option value="Ilmu Hukum">Ilmu Hukum</option>
                            </optgroup>
                            <optgroup label="Fakultas Psikologi">
                                <option value="Psikologi">Psikologi</option>
                            </optgroup>
                            <optgroup label="Fakultas Vokasi">
                                <option value="Teknologi Manufaktur">Teknologi Manufaktur</option>
                                <option value="Teknologi Listrik">Teknologi Listrik</option>
                                <option value="Agroindustri">Agroindustri</option>
                            </optgroup>
                        </select>
                        <div class="invalid-feedback mb-2">
                            Pilih jurusan.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-telephone"></i> Lulusan Sekolah
                    </label>
                    <div class="input-group">
                        <input name="lulusan_sekolah" value="<?php echo $data['lulusan_sekolah']; ?>" placeholder="Masukkan Lulusan Sekolah" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan lulusan sekolah yang valid.
                        </div>
                    </div>
                </div>

                <!-- Baris 4 -->
                <div class="row">
                    <label class="form-label mt-3">
                        <i class="bi bi-gender-ambiguous"></i> Tahun Ajaran
                    </label>
                    <div class="input-group">
                        <select class="form-select" id="tahunAjaranDropdown" name="tahun_ajaran" required>
                            <option <?php if ($data['tahun_ajaran'] == "") echo 'selected' ?>>Pilih tahun ajaran</option>
                            <option value="2022/2023" <?php if ($data['tahun_ajaran'] == "2022/2023") echo 'selected' ?>>2022/2023</option>
                            <option value="2023/2024" <?php if ($data['tahun_ajaran'] == "2023/2024") echo 'selected' ?>>2023/2024</option>
                        </select>
                        <div class="invalid-feedback mb-2">
                            Pilih tahun ajaran yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-geo-alt"></i> Pekerjaan
                    </label>
                    <div class="input-group">
                        <input name="pekerjaan" value="<?php echo $data['pekerjaan']; ?>" placeholder="Masukkan pekerjaan" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan pekerjaan yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-geo"></i> Alamat
                    </label>
                    <div class="input-group">
                        <input name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Masukkan alamat" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan alamat yang valid.
                        </div>
                    </div>
                </div>

                <!-- Baris 5 -->
                <div class="row">
                    <label class="form-label mt-3">
                        <i class="bi bi-geo"></i> Kelurahan
                    </label>
                    <div class="input-group">
                        <input name="kelurahan" value="<?php echo $data['kelurahan']; ?>" placeholder="Masukkan kelurahan" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan kelurahan yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-geo-alt"></i> Kecamatan
                    </label>
                    <div class="input-group">
                        <input name="kecamatan" value="<?php echo $data['kecamatan']; ?>" placeholder="Masukkan kecamatan" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan kecamatan yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-geo"></i> Kota
                    </label>
                    <div class="input-group">
                        <input name="kota" value="<?php echo $data['kota']; ?>" placeholder="Masukkan kota" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan kota yang valid.
                        </div>
                    </div>
                </div>

                <!-- Baris 6 -->
                <div class="row">
                    <label class="form-label mt-3">
                        <i class="bi bi-geo-alt"></i> Provinsi
                    </label>
                    <div class="input-group">
                        <input name="provinsi" value="<?php echo $data['provinsi']; ?>" placeholder="Masukkan provinsi" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan provinsi yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-geo-alt"></i> Telp
                    </label>
                    <div class="input-group">
                        <input name="telp" value="<?php echo $data['telp']; ?>" placeholder="Masukkan telp" class="form-control" type="text" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan telp yang valid.
                        </div>
                    </div>

                    <label class="form-label mt-3">
                        <i class="bi bi-geo"></i> Email
                    </label>
                    <div class="input-group">
                        <input name="email" value="<?php echo $data['email']; ?>" placeholder="Masukkan email" class="form-control" type="email" required>
                        <div class="invalid-feedback mb-2">
                            Masukkan email yang valid.
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" name="simpan" class="btn btn-warning mb-5"><i class="bi bi-check-square"></i> Ubah Data</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>

</html>

