<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
</head>

<body>
    <?php
    $server ="localhost";
    $username ="root";
    $password = "";
    $db ="db_pemweb";

    $conn = mysqli_connect("localhost", "root", "", "db_pemweb");

    if (isset($_POST["kirim"])){
        $Username = $_POST['username'];
        $Email = $_POST['email'];
        $Password = $_POST['password'];

        $PasswordHash = password_hash($Password, PASSWORD_DEFAULT);
        $query = "INSERT INTO tb_registrasi_pemweb VALUES (NULL, '$Username', '$Email', '$PasswordHash')";

        mysqli_query ($conn, $query);

        echo"
        <script>
            alert ('Data anda berhasil dikirim');
        </script>
        ";

    }
    ?>

    <div class="container">
        <div class="card">
            <h1>Registrasi</h1>
            <br>
            <form action="" method="post">
                <div class="input-div">
                    <input type="text" class="input" name="username" placeholder="Username">
                </div>
                <div class="input-div">
                    <input class="input" type="email" name="email" placeholder="Email">
                </div>
                <div class="input-div">
                    <input class="input" type="password" name="password" placeholder="Password">
                </div>
                <!-- <div class="input-div">
                    <input type="password" value="rahasia" id="inputPassword" name="password" placeholder="Password">
                    <input type="checkbox" onclick="myFunction()">
                    <script>
                    function myFunction() {
                        var x = document.getElementById("inputPassword");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password"; 
                        }
                    }
                    </script>
                </div> -->

                <div class="button-div">
                    <button type="submit" class="submit" name="kirim">Submit</button>
                </div>
                <div class="peralihan">
                <p>Sudah punya akun?
                <a href="login.php">Login</a>
                </p>
                </div>
            </form>

        </div>
    </div>


</body>

</html>