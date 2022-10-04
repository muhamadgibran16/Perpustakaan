<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Perpustakaan</title>
</head>

<?php session_start(); ?>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="card login-form">
                <div class="card-body">
                    <h2 class="card-title text-center">Login Perpustakaan</h2>
                    <hr class="featurette-divider">
                </div>
                <div class="card-text">
                    <form method="POST" action="user.php">
                        <div class="login-failed mb-3">
                            <?php
                            if(isset($_SESSION["login-failed"])){
                                echo "Username atau Password Salah !!!";
                            } 
                            unset($_SESSION['login-failed']);
                            ?>
                        </div>
                        <div class="mb-2">
                            <label for="#" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="mb-2">
                            <label for="#" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <a href="#">Forgot Password?</a>
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" name="submit" class="btn btn-primary btn-md btn-login"
                                id="btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p class="text-muted text-center pt-5">Copyright &copy; 2022 Perpustakaan Abhitah</p>
    </footer>

</body>

</html>