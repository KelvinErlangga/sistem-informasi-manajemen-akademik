<div class="table-responsive">
    <h3>Daftar Nilai Mahasiswa</h3>
    <table class="table table-striped table-hover table-bordered" id="dataTables">
        <thead>
            <tr>
                <th>NIM</th>
                <th>MATA KULIAH</th>
                <th>NILAI MAHASISWA</th>
                <th>DOSEN PENGAMPU MATA KULIAH</th>
            </tr>
        </thead>

        <?php
        include 'koneksi.php';

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Koneksi ke database gagal: " . $conn->connect_error);
        }

        // Query untuk mengambil data mahasiswa dari database
        $query = mysqli_query($conn, "SELECT * FROM tbl_nilai_mahasiswa");

        // Menampilkan data dalam tabel
        if ($query->num_rows > 0) {
            echo "<tbody>";
            while ($row = $query->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nim'] . "</td>";
                echo "<td>" . $row['mata_kuliah'] . "</td>";
                echo "<td>" . $row['nilai_mahasiswa'] . "</td>";
                echo "<td>" . $row['dosen_mata_kuliah'] . "</td>";
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