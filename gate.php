<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Selamat Datang di SIM Akademik</title>

  <!-- Custom fonts for this template-->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Custom styles for this template-->
  <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />

</head>

<body class="d-flex align-items-center justify-content-center" style="height: 90vh;">
  <div class="col-lg-8">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Role SIM Akademik</h6>
      </div>
      <div class="card-body text-center">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 85%;" src="assets/img/undraw_posting_photo.svg" alt="...">
        </div>
        <?php
        if (isset($_SESSION['role']) && $_SESSION['role'] == 'Mahasiswa') {
          echo '<a class="d-block" href="beranda-mahasiswa">' . $_SESSION['role'] . ' - Teknik Informatika &rarr;</a>';
        } else if (isset($_SESSION['role']) && $_SESSION['role'] == 'Publik') {
          echo '<a class="d-block" href="beranda-publik">' . $_SESSION['role'] .  ' &rarr;</a>';
        } else {
          echo '<a class="d-block" href="dashboard">' . $_SESSION['role'] .  ' &rarr;</a>';
        }
        ?>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="assets/js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofP+WiND5OdF5trF82A8q8StQV2xU+I5x" crossorigin="anonymous"></script>
</body>

</html>