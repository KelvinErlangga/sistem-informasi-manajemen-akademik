<div class="table-responsive">
    <h3>Data Mahasiswa</h3>
    <table class="table table-striped table-hover table-bordered" id="dataTables">
        <thead>
            <tr>
                <th>ID DAFTAR</th>
                <th>TANGGAL DAFTAR</th>
                <th>NAMA PENDAFTAR</th>
                <th>JENIS KELAMIN</th>
                <th>LULUSAN SEKOLAH</th>
                <th>TAHUN AJARAN</th>
                <th>TANGGAL LAHIR</th>
                <th>ALAMAT</th>
            </tr>
        </thead>

        <?php
        include 'koneksi.php';

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data mahasiswa dari database
        $query = mysqli_query($conn, "SELECT * FROM tbl_cln_mahasiswa");

        // Menampilkan data dalam tabel
        if ($query->num_rows > 0) {
            echo "<tbody>";
            while ($row = $query->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id_daftar'] . "</td>";
                echo "<td>" . $row['tanggal_daftar'] . "</td>";
                echo "<td>" . $row['nama_pendaftar'] . "</td>";
                echo "<td>" . $row['jns_kelamin'] . "</td>";
                echo "<td>" . $row['lulusan_sekolah'] . "</td>";
                echo "<td>" . $row['tahun_ajaran'] . "</td>";
                echo "<td>" . $row['tgl_lahir'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
        } else {
            echo "<tbody><tr><td colspan='7'>Tidak ada data mahasiswa</td></tr></tbody>";
        }

        // Menutup koneksi
        $conn->close();
        ?>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>

<script>
    new DataTable('#dataTables');
</script>