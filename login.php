<?php

if (!empty($_SESSION['username']) && $_SESSION['role'] == 'Admin') {
    header('location:beranda-admin');
} elseif (!empty($_SESSION['username']) && $_SESSION['role'] == 'Mahasiswa') {
    header('location:beranda-mahasiswa');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Academic Information System Untag Surabaya</title>
    <link rel="icon" href="assets/img/untag.svg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/styles/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="text-center">

    <!-- Main login -->
    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" novalidate action="services/login-proses.php" method="post">
            <h3 class="fw-normal mb-3">Selamat Datang!</h3>
            <img src="assets/img/untag.svg" alt="logo untag" width="40%" class="mb-3">

            <div class="form-floating">
                <input name="username" type="text" class="form-control mt-2" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Username</label>
                <div class="invalid-feedback mb-2">
                    Masukkan username yang valid.
                </div>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                <span id="passwordToggle" class="bi bi-eye-slash" style="cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);"></span>
                <div class="invalid-feedback mb-2">
                    Masukkan password yang valid.
                </div>
            </div>

            <button class="w-100 rounded-5 btn btn-lg btn-warning mt-3 mb-2" name="masuk" value="abc" type="submit">Masuk</button>
            <p>Belum memiliki akun? <a href="registrasi">Daftar!</a></p>
            <p class="mt-4 mb-3 text-muted">&copy; 2024 kelvin&trade;. All rights reserved.</p>
        </form>
    </main>
    <!-- End of Main login -->

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        document.getElementById('passwordToggle').addEventListener('click', function() {
            let passwordInput = document.getElementById('floatingPassword');
            let passwordToggleIcon = document.getElementById('passwordToggle');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggleIcon.classList.remove('bi-eye-slash');
                passwordToggleIcon.classList.add('bi-eye');
            } else {
                passwordInput.type = 'password';
                passwordToggleIcon.classList.remove('bi-eye');
                passwordToggleIcon.classList.add('bi-eye-slash');
            }
        });
    </script>

</body>

</html>