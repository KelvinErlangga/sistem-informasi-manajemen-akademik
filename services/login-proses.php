    <?php

    session_start();
    include "../koneksi.php";

    if (!empty($_POST['masuk'])) {
        $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE username = '" . htmlspecialchars($_POST['username']) . "' && password 
        = '" . MD5(htmlspecialchars($_POST['password' ])) . "'");
        
        if (mysqli_num_rows($query) > 0) {
            $a = mysqli_fetch_object($query);

            $_SESSION['username'] = $a->username;
            $_SESSION['level'] = $a->level;
            $_SESSION['role'] = $a->role;
            echo '<script>window.location="../gate"</script>';
        } else {
            echo '<script>alert("Gagal, Username atau Password salah")</script>';
            echo '<script>window.location="../login"</script>';
        }
    }
