<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Artikel Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center mb-4">Buat Artikel Baru</h2>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="POST" action="services/tambah-proses.php">
                            <!-- Nama Penulis -->
                            <div class="mb-3">
                                <label for="penulis" class="form-label">Penulis Artikel</label>
                                <input type="text" id="penulis" name="penulis" class="form-control">
                            </div>
                            <!-- Judul Berita -->
                            <div class="mb-3">
                                <label for="judul_berita" class="form-label">Judul Berita</label>
                                <input type="text" id="judul_berita" name="judul_berita" class="form-control">
                            </div>
                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status_artikel" class="form-label">Status</label>
                                <input type="text" id="status_artikel" name="status_artikel" class="form-control">
                            </div>
                            <!-- Gambar -->
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Upload Gambar</label>
                                <input type="file" id="gambar" accept=".jpg, .jpeg, .png" name="gambar" class="form-control">
                            </div>
                            <!-- Isi Berita -->
                            <div class="mb-3">
                                <label for="isi_berita" class="form-label">Isi Berita</label>
                                <textarea rows="7" id="isi_berita" name="isi_berita" class="form-control"></textarea>
                            </div>
                            <!-- Tanggal Publish -->
                            <div class="mb-3">
                                <label for="tanggal_publish" class="form-label">Jadwal Publish</label>
                                <input type="date" id="tanggal_publish" name="tanggal_publish" class="form-control">
                            </div>

                            <!-- Button submit -->
                            <div class="text-center">
                                <button type="submit" name="simpan" class="btn btn-warning me-2 mb-2">Tambah Artikel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>