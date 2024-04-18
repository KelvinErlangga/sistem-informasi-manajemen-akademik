<?php
include 'koneksi.php';

$nim = $_SESSION['username'];
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_mhsiswa WHERE nim = '$nim'");
$data = mysqli_fetch_array($ambildata);

$datanilai = mysqli_query($conn, "SELECT * FROM tbl_nilai_mahasiswa WHERE nim = '$nim'");
$nilai = array();
while ($roww = mysqli_fetch_assoc($datanilai)) {
    $nilai[] = $roww;
}

if (isset($_POST['simpan'])) {
    $nama_mahasiswa = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $status = $_POST['status'];
    $jurusan = $_POST['jurusan'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    header("Location: ../daftarfakultas.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-semibold text-gray-800">Laporan Nilai Mahasiswa</h1>
            <p class="text-sm text-gray-500">Data Mahasiswa & Nilai Mata Kuliah</p>
        </div>

        <!-- Mahasiswa Profile -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <!-- Profile Info -->
                <div class="flex items-center mb-6">
                    <img src="assets/img/kelvin.jpeg" alt="Profile Picture" class="w-12 h-14 rounded-full">
                    <div class="ml-4">
                        <h2 class="text-xl font-semibold text-gray-800"><?php echo $data['nama_mahasiswa']; ?></h2>
                        <p class="text-sm text-gray-500"><?php echo $data['nim']; ?></p>
                    </div>
                </div>

                <!-- Nilai Mata Kuliah -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Nilai Mata Kuliah</h3>
                    <?php foreach ($nilai as $row) : ?>
                            <li class="flex justify-between items-center py-1">
                                <span><?php echo $row['mata_kuliah']; ?></span>
                                <span class="text-gray-600"><?php echo $row['nilai_mahasiswa']; ?></span>
                            </li>
                        <?php endforeach; ?>
                    <canvas id="nilaiChart" width="400" height="200"></canvas>
                </div>
            </div>

            <!-- Biodata -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Biodata</h2>
                <ul>
                    <!-- Biodata Mahasiswa -->
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Nama Mahasiswa:</span>
                        <span><?php echo $data['nama_mahasiswa']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Jenis Kelamin:</span>
                        <span><?php echo $data['jns_kelamin']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Tanggal Lahir:</span>
                        <span><?php echo $data['tgl_lahir']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Prodi:</span>
                        <span><?php echo $data['jurusan']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Status:</span>
                        <span><?php echo $data['status_mhs']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Asal Sekolah:</span>
                        <span><?php echo $data['lulusan_sekolah']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Pekerjaan:</span>
                        <span><?php echo $data['pekerjaan']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Alamat:</span>
                        <span><?php echo $data['alamat'] . ', ' . $data['kota'] . ', ' . $data['provinsi']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Telepon:</span>
                        <span><?php echo $data['telp']; ?></span>
                    </li>
                    <li class="flex items-center mb-2">
                        <span class="w-1/3 font-semibold">Email:</span>
                        <span><?php echo $data['email']; ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Data nilai dari PHP
        var nilaiData = <?php echo json_encode($nilai); ?>;
        
        // Ekstrak data nilai untuk chart
        var mataKuliah = [];
        var nilaiMataKuliah = [];
        nilaiData.forEach(function(item) {
            mataKuliah.push(item.mata_kuliah);
            nilaiMataKuliah.push(item.nilai_mahasiswa);
        });

        // Buat chart menggunakan Chart.js
        var ctx = document.getElementById('nilaiChart').getContext('2d');
        var nilaiChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: mataKuliah,
                datasets: [{
                    label: 'Nilai Mata Kuliah',
                    data: nilaiMataKuliah,
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
