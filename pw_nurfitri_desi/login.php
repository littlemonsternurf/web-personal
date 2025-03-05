<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <?php
    session_start();
    include "function.php";

    if (isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM tb_registrasi_pemweb WHERE username = '$username'");
        $row = mysqli_fetch_array($result);

        if ($row) {
            if (password_verify($password, $row["password"])) {
                $_SESSION["login"] = true;
                $_SESSION["email"] = $row['email'];
                $_SESSION["username"] = $row['username'];
                header("location: dashboard.php");  
            } else {
                echo "<script>alert('Email atau Password salah!')</script>";
            }
        } else {
            echo "<script>alert('Akun tidak ditemukan')</script>";
        }
    }
    ?>
    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center mb-3">Login</h3>
        <form action="" class="form" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="pssword" id="password" placeholder="Enter your password">
            </div>
            <button type="submit" name="login" class="btn btn-custom w-100">Login</button>
            <p class="text-center mt-3">Don't have an account? <a href="register.html" class="text-primary">Register</a></p>
        </form>
    </div>
    <div class="card">
        <div class="card2">
            <form action="" class="form" method="POST">
                <h1 id="heading">Login</h1>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
                        </path>
                    </svg>
                    <input type="text" class="input-field" name="username" placeholder="Username" autocomplete="off">
                </div>
                <div class="field">
                    <svg viewBox="0 0 16 16" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="input-icon">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
                        </path>
                    </svg>
                    <input type="password" class="input-field" name="password" placeholder="Password">
                </div>
                <div class="btn">
                    <button type="submit" name="login" class="button1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                     <button class="button2"><a href="registrasi.php">Register</a></button>
         
                    </div>
                <!-- <button class="button3"> Forgot Password</button> -->
            </form>
        </div>
    </div>
</body>

</html>