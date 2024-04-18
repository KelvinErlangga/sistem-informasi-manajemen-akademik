<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
    <form class="well form-horizontal needs-validation" novalidate action="services/registrasi-proses.php" method="post">
        <legend>Pendaftaran Mahasiswa Baru :</legend>

        <!-- Text input-->
        <div class="form-group">
            <!-- Success message -->
            <?php
            include "koneksi.php";
            if (isset($_SESSION['notifikasi_berhasil'])) {
                echo '<div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $_SESSION['notifikasi_berhasil'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                // Hapus notifikasi setelah ditampilkan
                unset($_SESSION['notifikasi_berhasil']);
            }
            ?>
            <!-- Baris 1 -->
            <div class="row">
                <label>
                    <i class="bi bi-person"></i> Nama Lengkap
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="nama_mahasiswa" placeholder="Masukkan nama lengkap" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan nama yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-gender-ambiguous"></i> Jenis Kelamin
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <select class="custom-select" id="jenisKelaminDropdown" name="jns_kelamin" required>
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="invalid-feedback mb-2">
                        Pilih jenis kelamin.
                    </div>
                </div>
            </div>

            <!-- Baris 2 -->
            <div class="row">
                <label class="mt-3">
                    <i class="bi bi-pin-map-fill"></i> Tanggal Lahir
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="tgl_lahir" placeholder="Masukkan tempat lahir" class="form-control" type="date" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan tanggal lahir yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-gender-ambiguous"></i> Status Mahasiswa
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <select class="custom-select" id="statusMahasiswaDropdown" name="status_mhs" required>
                        <option value="" selected>Pilih Status</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Menikah">Menikah</option>
                    </select>
                    <div class="invalid-feedback mb-2">
                        Pilih status Anda.
                    </div>
                </div>

            </div>

            <!-- Baris 3 -->
            <!-- #region -->
            <div class="row">
                <div class="input-group">
                    <label class="mt-3">
                        <i class="bi bi-gender-ambiguous"></i> Jurusan
                    </label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"></span>
                        </div>
                        <select class="custom-select" id="jenisKelaminDropdown" name="jurusan" required>
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
                </div>

                <label class="mt-3">
                    <i class="bi bi-telephone"></i> Lulusan Sekolah
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="lulusan_sekolah" placeholder="Masukkan Lulusan Sekolah" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan lulusan sekolah yang valid.
                    </div>
                </div>
            </div>

            <!-- Baris 4 -->
            <div class="row">
                <label class="mt-3">
                    <i class="bi bi-gender-ambiguous"></i> Tahun Ajaran
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <select class="custom-select" id="jenisKelaminDropdown" name="tahun_ajaran" required>
                        <option value="" selected>Pilih Tahun Ajaran</option>
                        <option value="2022/2023">2022/2023</option>
                        <option value="2023/2024">2023/2024</option>
                    </select>
                    <div class="invalid-feedback mb-2">
                        Pilih tahun ajaran yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-geo-alt"></i> Pekerjaan
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="pekerjaan" placeholder="Masukkan pekerjaan" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan pekerjaan yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-geo"></i> Alamat
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="alamat" placeholder="Masukkan alamat" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan alamat yang valid.
                    </div>
                </div>
            </div>

            <!-- Baris 5 -->
            <div class="row">
                <label class="mt-3">
                    <i class="bi bi-geo"></i> Kelurahan
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="kelurahan" placeholder="Masukkan kelurahan" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan kelurahan yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-geo-alt"></i> Kecamatan
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="kecamatan" placeholder="Masukkan kecamatan" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan kecamatan yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-geo"></i> Kota
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="kota" placeholder="Masukkan kota" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan kota yang valid.
                    </div>
                </div>
            </div>

            <!-- Baris 6 -->
            <div class="row">
                <label class="mt-3">
                    <i class="bi bi-geo-alt"></i> Provinsi
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="provinsi" placeholder="Masukkan provinsi" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan provinsi yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-geo-alt"></i> Telp
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="telp" placeholder="Masukkan telp" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan telp yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-geo"></i> Email
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="email" placeholder="Masukkan email" class="form-control" type="email" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan email yang valid.
                    </div>
                </div>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group mt-5 text-center">
            <button type="submit" name="mahasiswa_baru" class="btn btn-warning"><i class="bi bi-floppy mr-2"></i>Daftar<span class="glyphicon glyphicon-send"></span></button>
        </div>
    </form>

    <script>
        (() => {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</div>
</div><!-- /.container -->