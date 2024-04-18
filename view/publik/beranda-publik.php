<?php
require "koneksi.php";

$artikel = "SELECT * FROM tbl_artikel";
$tampil_artikel = mysqli_query($conn, $artikel);
date_default_timezone_set('Asia/Jakarta');
$waktu = date("H:i");
$tanggal = date("Y-m-d")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-10">
        <div class="border-b-4 border-red-500 mb-8 pb-4">
            <h2 class="text-3xl font-bold text-gray-800 uppercase">
                KABAR
                <span class="text-red-600">UNTAG</span>
            </h2>
            <span class="text-sm text-gray-600 font-medium uppercase">
                <?php echo $tanggal ?> || <span class="font-bold"> <?php echo $waktu ?></span> WIB</span>
        </div>

        <!-- Konten Menu -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <?php
            if (mysqli_num_rows($tampil_artikel) > 0) {
                while ($row = mysqli_fetch_assoc($tampil_artikel)) {
            ?>
                    <a href="artikel-user.php?id_artikel=<?php echo $row['id_artikel'] ?>" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                        <img src="services/file/<?php echo $row['gambar'] ?>" class="w-full h-40 object-cover" />
                        <div class="p-4">
                            <h2 class="text-lg font-bold text-gray-800">
                                <?php echo $row['judul_berita'] ?>
                            </h2>
                            <p class="text-sm text-gray-600 mt-2">
                                <?php echo $row['penulis'] ?> <span class="font-normal text-gray-500"><?php echo date("j F Y", strtotime($row['tanggal_publish'])) ?></span>
                            </p>
                        </div>
                    </a>
            <?php
                }
            } else {
                echo $tampilerror = "Tidak Ada artikel Sama Sekali";
            }
            ?>
        </div>
    </div>
    
</body>

</html>
