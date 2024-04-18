<?php
include '../../koneksi.php';

session_start();

$id_artikel = $_GET['id_artikel'];
$ambildata = mysqli_query($conn, "SELECT * FROM tbl_artikel WHERE id_artikel = '$id_artikel'");
$data = mysqli_fetch_array($ambildata);

if (isset($_GET['id_artikel'])) {
    $id_artikel = $_GET['id_artikel'];

    if (isset($_POST['simpan'])) {
        $penulis = $_POST['penulis'];
        $judul_berita = $_POST['judul_berita'];
        $isi_berita = $_POST['isi_berita'];
        $status_artikel = $_POST['status_artikel'];
        $tanggal_publish = $_POST['tanggal_publish'];
        $gambar = $_FILES['gambar']['name'];
        $gambar_temp = $_FILES['gambar']['tmp_name'];
        move_uploaded_file($gambar_temp, 'file/' . $gambar);

        $query = "UPDATE tbl_artikel 
                  SET tanggal_publish = '$tanggal_publish', 
                      penulis = '$penulis', 
                      judul_berita = '$judul_berita', 
                      isi_berita = '$isi_berita', 
                      status_artikel = '$status_artikel', 
                      gambar = '$gambar'
                  WHERE id_artikel = '$id_artikel'";

        $result = mysqli_query($conn, $query);

        if ($result) {
            $_SESSION['notifikasi_edit_artikel'] = 'Data artikel berhasil diubah!';
            header("Location: ../../kelola-data-artikel");
            exit();
        } else {
            $error = "Terjadi kesalahan saat menyimpan data: " . mysqli_error($conn);
        }
    }
} else {
    $_SESSION['notifikasi_edit_artikel'] = "ID Artikel tidak ditemukan.";
    header("Location: ../../kelola-data-artikel");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-gray-100">

    <div class="container mx-auto py-10">
        <div class="row">
            <div class="col">
                <a href="../../kelola-data-artikel" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
        <h2 class="text-center text-4xl font-bold mb-8">Edit Artikel</h2>

        <div class="bg-white shadow-md p-8 rounded-lg">
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger mb-4" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php } ?>

            <form enctype="multipart/form-data" method="POST">
                <div class="mb-4">
                    <label for="penulis" class="font-bold">Penulis Artikel</label>
                    <input type="text" class="form-control w-full mt-1" value="<?php echo $data['penulis']; ?>" name="penulis">
                </div>
                <div class="mb-4">
                    <label for="judul_berita" class="font-bold">Judul Berita</label>
                    <input type="text" value="<?php echo $data['judul_berita']; ?>" class="form-control w-full mt-1" name="judul_berita">
                </div>
                <div class="mb-4">
                    <label for="gambar" class="font-bold">Upload Gambar</label>
                    <input type="file" accept=".jpg, .jpeg, .png" class="form-control w-full mt-1" name="gambar">
                </div>
                <div class="mb-4">
                    <label for="isi_berita" class="font-bold">Isi Berita</label>
                    <textarea rows="7" class="form-control w-full mt-1" name="isi_berita"><?php echo $data['isi_berita']; ?></textarea>
                </div>
                <div class="mb-4">
                    <label for="tanggal_publish" class="font-bold">Jadwal Publish</label>
                    <input type="date" value="<?php echo $data['tanggal_publish']; ?>" class="form-control w-full mt-1" name="tanggal_publish">
                </div>
                <div class="flex justify-content-center">
                    <button type="submit" name="simpan" class="btn btn-warning me-2">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>