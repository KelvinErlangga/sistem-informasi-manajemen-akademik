<div class="table-responsive">
    <h3 class='mx-1'>Kelola Data Artikel</h3>
    <a href='tambah-data-artikel' class='btn btn-primary mx-1 mt-2 mb-3' title='Tambah Data'><i class="bi bi-person-plus"></i> Tambah Data Artikel</a>
    <table class="table table-striped table-hover table-bordered" id="dataTables">
        <thead>
            <tr>
                <th>ID ARTIKEL</th>
                <th>TANGGAL PUBLISH</th>
                <th>PENULIS</th>
                <th>JUDUL BERITA</th>
                <th>STATUS</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>

            <!-- Success message -->
            <?php
            include "koneksi.php";
            // Cek apakah ada notifikasi
            if (isset($_SESSION['notifikasi_artikel_berhasil'])) {
                echo '<div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ' . $_SESSION['notifikasi_artikel_berhasil'] . '
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>';
                // Hapus notifikasi setelah ditampilkan
                unset($_SESSION['notifikasi_artikel_berhasil']);
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

            // Menampilkan data artikel
            $query = mysqli_query($conn, "SELECT * FROM tbl_artikel");

            if ($query->num_rows > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td> $row[id_artikel] </td>
                    <td> $row[tanggal_publish] </td>
                    <td> $row[penulis] </td>
                    <td> $row[judul_berita] </td>
                    <td> $row[status_artikel] </td>                
                    <td>
                        <div class='d-flex justify-content-between'>
                        <a href='view/admin/edit-data-artikel.php?id_artikel=$row[id_artikel]' class='btn btn-warning btn-sm' title='Edit'><i class='bi bi-pencil'></i></a>
                        <a href='view/admin/artikel-admin.php?id_artikel=$row[id_artikel]' class='btn btn-primary btn-sm' title='Edit'><i class='bi bi-info-circle'></i></a>
                        <button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#hapusModal$row[id_artikel]' title='Hapus'><i class='bi bi-trash'></i></button>
                        </div>
                        
                        <!-- Hapus Modal -->
                        <div class='modal fade text-gray-600' id='hapusModal$row[id_artikel]' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
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
                                            <input type='hidden' name='id_artikel_hapus' value='$row[id_artikel]'>
                                            <button class='btn btn-secondary' type='button' data-dismiss='modal'>Batal</button>
                                            <button class='btn btn-danger' type='submit' name='hapus_artikel'>Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada data artikel</td></tr>";
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