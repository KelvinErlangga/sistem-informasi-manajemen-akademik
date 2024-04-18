<div class="table-responsive">
    <h3 class='mx-1'>Kelola Data User</h3>
    <a href='tambah-data-admin' class='btn btn-primary mx-1 mt-2 mb-3' title='Tambah Data'><i class="bi bi-person-plus"></i> Tambah Data Admin</a>
    <a href='tambah-data-mahasiswa' class='btn btn-primary mx-1 mt-2 mb-3' title='Tambah Data'><i class="bi bi-person-plus"></i> Tambah Data Mahasiswa</a>
    <table class="table table-striped table-hover table-bordered" id="dataTables">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>EMAIL</th>
                <th>HANDPHONE</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>PROVINSI</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>

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
            } elseif (isset($_SESSION['notifikasi_admin_berhasil'])) {
                echo '<div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $_SESSION['notifikasi_admin_berhasil'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                // Hapus notifikasi setelah ditampilkan
                unset($_SESSION['notifikasi_admin_berhasil']);
            } elseif (isset($_SESSION['notifikasi_edit'])) {
                echo '<div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $_SESSION['notifikasi_edit'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                // Hapus notifikasi setelah ditampilkan
                unset($_SESSION['notifikasi_edit']);
            } elseif (isset($_SESSION['notifikasi_hapus'])) {
                echo '<div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $_SESSION['notifikasi_hapus'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                // Hapus notifikasi setelah ditampilkan
                unset($_SESSION['notifikasi_hapus']);
            }

            // Menampilkan data mahasiswa
            $query = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa");

            if ($query->num_rows > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td> $row[nim] </td>
                    <td> $row[nama_mahasiswa] </td>
                    <td> $row[jns_kelamin] </td>
                    <td> $row[email] </td>
                    <td> $row[telp] </td>
                    <td> $row[alamat] </td>
                    <td> $row[kota] </td>
                    <td> $row[provinsi] </td>
                    <td>
                        <div class='d-flex justify-content-between'>
                        <a href='view/admin/edit-data-mahasiswa.php?nim=$row[nim]' class='btn btn-warning btn-sm mx-1' title='Edit'><i class='bi bi-pencil'></i></a>
                            <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#hapusModal$row[nim]' title='Hapus'><i class='bi bi-trash'></i></button>
                        </div>
                        
                        <!-- Hapus Modal -->
                        <div class='modal fade text-gray-600' id='hapusModal$row[nim]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLabel'>Yakin untuk menghapus?</h5>
                                        <button class='close' type='button' data-dismiss='modal' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body'>Pilih &quot;Hapus&quot; jika anda yakin untuk menghapus</div>
                                    <div class='modal-footer'>
                                        <form method='post' action='services/hapus-proses.php'>
                                            <input type='hidden' name='nim_hapus' value='$row[nim]'>
                                            <button class='btn btn-secondary' type='button' data-dismiss='modal'>Batal</button>
                                            <button class='btn btn-danger' type='submit' name='confirm_delete'>Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data mahasiswa</td></tr>";
            }

            $conn->close();
            ?>

        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

<script>
    new DataTable('#dataTables');
</script>