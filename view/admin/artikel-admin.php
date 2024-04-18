<?php
include "../../koneksi.php";

$idartikel = $_GET['id_artikel'];

$artikel = mysqli_query($conn, "SELECT * FROM tbl_artikel WHERE id_artikel = '$idartikel'");
$tampil_artikel = mysqli_fetch_array($artikel);

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id_komentar'])) {
    $id_komentar = $_GET['id_komentar'];
    $delete_query = mysqli_query($conn, "DELETE FROM tbl_komentar WHERE id_komentar = '$id_komentar'");
    if ($delete_query) {
        header("Location: artikel-user.php?id_artikel=$idartikel");
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

if (isset($_POST['id_artikel'])) {
    $id_artikel = $_POST['id_artikel'];
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $query = "INSERT INTO tbl_komentar (id_berita_kampus, nama, isi_komentar, tanggal_komentar) VALUES ('$id_artikel', '$nama', '$komentar', NOW())";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: artikel-user.php?id_artikel=$id_artikel");
    } else {
        // Jika terjadi kesalahan, tampilkan pesan kesalahan
        echo "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel Untag Surabaya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="row">
            <div class="col">
                <a href="../../kelola-data-artikel" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
        <!-- Konten Artikel -->
        <div class="flex justify-content-center items-center">
            <h1 class="text-xl font-medium">Kabar Hari Ini</h1>
        </div>

        <div class="border-l-4 border-red-500 pl-4 mt-4">
            <h2 class="text-3xl font-bold text-red-600 mb-2">
                <?php echo $tampil_artikel['judul_berita'] ?>
            </h2>
            <span class="text-sm text-gray-500">
                <?php echo date("j F Y", strtotime($tampil_artikel['tanggal_publish'])) ?>
            </span>
        </div>

        <div class="mt-8 flex flex-col lg:flex-row lg:space-x-4">
            <img src="../../services/file/<?php echo $tampil_artikel['gambar'] ?>" alt="Gambar Artikel" class="w-full lg:w-1/2 rounded-lg shadow-md object-cover">
            <div class="mt-4 lg:mt-0 lg:w-1/2">
                <h2 class="font-normal text-sm uppercase">
                    penulis -
                    <span class="text-red-700 font-medium uppercase">
                        <?php echo $tampil_artikel['penulis'] ?>
                    </span>
                </h2>
                <div class="py-8">
                    <p class="text-base leading-7">
                        <?php echo $tampil_artikel['isi_berita'] ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-gray-300 pt-4">
            <?php
            // komentar
            $komentar_query = mysqli_query($conn, "SELECT * FROM tbl_komentar WHERE id_berita_kampus = '$idartikel'");
            while ($tampil_komentar = mysqli_fetch_array($komentar_query)) {
            ?>
                <div class="mt-4">
                    <h6 class="text-red-600 font-medium mb-1">
                        <?php echo $tampil_komentar['nama']; ?>
                        <span class="text-sm text-gray-500">
                            - <?php echo $tampil_komentar['tanggal_komentar'] ?>
                        </span>
                    </h6>
                    <p class="text-sm text-gray-600">
                        <?php echo $tampil_komentar['isi_komentar']; ?>
                    </p>
                    <button class="text-sm text-gray-600 edit-comment-btn">Edit</button>
                    <form class="hidden edit-comment-form" action="" method="POST">
                        <input type="hidden" name="id_komentar" value="<?php echo $tampil_komentar['id_komentar']; ?>">
                        <textarea name="edited_komentar" class="mt-1 p-2 w-full border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:ring-opacity-50"><?php echo $tampil_komentar['isi_komentar']; ?></textarea>
                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 mt-1 mb-1">Simpan</button>
                    </form>
                    <a href="?id_artikel=<?php echo $idartikel; ?>&action=delete&id_komentar=<?php echo $tampil_komentar['id_komentar']; ?>" class="text-sm text-red-600 ml-2">Hapus</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editBtns = document.querySelectorAll('.edit-comment-btn');
            editBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    const parentDiv = this.parentElement;
                    const form = parentDiv.querySelector('.edit-comment-form');
                    const commentText = parentDiv.querySelector('.text-gray-600');
                    form.classList.toggle('hidden');
                    commentText.classList.toggle('hidden');
                });
            });

            const editForms = document.querySelectorAll('.edit-comment-form');
            editForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const formData = new FormData(this);
                    fetch('', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => {
                            if (response.ok) {
                                return response.text();
                            }
                            throw new Error('Network response was not ok.');
                        })
                        .then(data => {
                            // Update comment text on the page
                            const parentDiv = form.parentElement;
                            const commentText = parentDiv.querySelector('.text-gray-600');
                            commentText.textContent = formData.get('edited_komentar');
                            // Hide edit form
                            form.classList.add('hidden');
                            commentText.classList.remove('hidden');
                        })
                        .catch(error => {
                            console.error('Error:', error);
                        });
                });
            });
        });
    </script>

</body>

</html>