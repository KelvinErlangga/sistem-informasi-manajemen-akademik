<?php
include 'koneksi.php';

// Query untuk mengambil jumlah mahasiswa
$query_total = "SELECT COUNT(*) AS total FROM tbl_mhsiswa";
$result_total = mysqli_query($conn, $query_total);
$row_total = mysqli_fetch_assoc($result_total);
$totalStudents = $row_total['total'];

// Query untuk mengambil jumlah mahasiswa laki-laki
$query_male = "SELECT COUNT(*) AS male FROM tbl_mhsiswa WHERE jns_kelamin = 'L'";
$result_male = mysqli_query($conn, $query_male);
$row_male = mysqli_fetch_assoc($result_male);
$maleStudents = $row_male['male'];

// Query untuk mengambil jumlah mahasiswa perempuan
$query_female = "SELECT COUNT(*) AS female FROM tbl_mhsiswa WHERE jns_kelamin = 'P'";
$result_female = mysqli_query($conn, $query_female);
$row_female = mysqli_fetch_assoc($result_female);
$femaleStudents = $row_female['female'];

// Query untuk mengambil jumlah mahasiswa per jurusan
$query_department = "SELECT jurusan, COUNT(*) AS total_per_department FROM tbl_mhsiswa GROUP BY jurusan";
$result_department = mysqli_query($conn, $query_department);
$departments = mysqli_fetch_all($result_department, MYSQLI_ASSOC);

// Tutup koneksi ke database
mysqli_close($conn);
?>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-xl-4 col-md-6 mb-4'>
            <div class='card border-left-primary shadow h-100 py-2'>
                <div class='card-body' style="display: flex; justify-content: space-between;">
                    <div>
                        <div class='text-xl font-weight-bold text-primary text-uppercase mb-1'>Jumlah Total Mahasiswa</div>
                        <div class='h5 mb-0 font-weight-bold text-gray-800'><?php echo $totalStudents; ?></div>
                    </div>
                    <div>
                        <i class='fas fa-users fa-2x text-gray-300'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-xl-4 col-md-6 mb-4'>
            <div class='card border-left-success shadow h-100 py-2'>
                <div class='card-body' style="display: flex; justify-content: space-between;">
                    <div>
                        <div class='text-xl font-weight-bold text-success text-uppercase mb-1'>Mahasiswa Laki-Laki</div>
                        <div class='h5 mb-0 font-weight-bold text-gray-800'><?php echo $maleStudents; ?></div>
                    </div>
                    <div>
                        <i class='fas fa-male fa-2x text-gray-300'></i>
                    </div>
                </div>
            </div>
        </div>
        <div class='col-xl-4 col-md-6 mb-4'>
            <div class='card border-left-info shadow h-100 py-2'>
                <div class='card-body' style="display: flex; justify-content: space-between;">
                    <div>
                        <div class='text-xl font-weight-bold text-info text-uppercase mb-1'>Mahasiswa Perempuan</div>
                        <div class='h5 mb-0 font-weight-bold text-gray-800'><?php echo $femaleStudents; ?></div>
                    </div>
                    <div>
                        <i class='fas fa-female fa-2x text-gray-300'></i>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class='card border-left-warning shadow h-100 py-2'>
                <div class='card-body' style="display: flex; justify-content: space-between;">
                    <div>
                        <div class='text-xl font-weight-bold text-warning text-uppercase mb-1'>Jumlah Mahasiswa Semua Jurusan</div>
                        <?php foreach ($departments as $department) : ?>
                            <div><?php echo $department['jurusan'] . ": " . $department['total_per_department']; ?></div>
                        <?php endforeach; ?>
                    </div>
                    <div>
                        <i class='fas fa-building fa-2x text-gray-300'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>