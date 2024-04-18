<div class="table-responsive">
    <h3 class='mx-1'>Kelola Nilai Mahasiswa</h3>
    <table class="table table-striped table-hover table-bordered" id="dataTables">
        <thead>
            <tr>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>

            <!-- Success message -->
            <?php
            include "koneksi.php";
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

            $query = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa");

            if ($query->num_rows > 0) {
                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr>
                    <td> $row[nim] </td>
                    <td> $row[nama_mahasiswa] </td>
                    <td> $row[jurusan] </td>
                    <td>
                        <div class='d-flex justify-content-center'>
                            <a href='view/admin/edit-nilai.php?nim=$row[nim]' class='btn btn-success btn-sm mx-1' title='Edit'><i class='bi bi-pencil'></i></a>
                            <form method='post' action='detail-mahasiswa'>
                                <input type='hidden' name='nim' value='$row[nim]'>
                                <button type='submit' class='btn btn-primary btn-sm mx-1' title='Detail'><i class='bi bi-info-circle'></i></button>
                            </form>
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