<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
    <form class="well form-horizontal needs-validation" novalidate action="services/tambah-proses.php" method="post">
        <legend>Tambahkan Admin Baru :</legend>

        <!-- Text input-->
        <div class="form-group">
            <!-- Success message -->
            <?php
            include "koneksi.php";
            // Cek apakah ada notifikasi
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
            $conn->close();
            ?>
            <!-- Baris 1 -->
            <div class="row">
                <label>
                    <i class="bi bi-person"></i> Username
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="username" placeholder="Masukkan username" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan username yang valid.
                    </div>
                </div>

                <label class="mt-3">
                    <i class="bi bi-person"></i> Password
                </label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"></span>
                    </div>
                    <input name="password" placeholder="Masukkan password" class="form-control" type="text" required>
                    <div class="invalid-feedback mb-2">
                        Masukkan password yang valid.
                    </div>
                </div>
            </div>

        </div>

        <!-- Button -->
        <div class="form-group mt-5 text-center">
            <button type="submit" name="simpan_admin" class="btn btn-warning"><i class="bi bi-floppy mr-2"></i>Simpan<span class="glyphicon glyphicon-send"></span></button>
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