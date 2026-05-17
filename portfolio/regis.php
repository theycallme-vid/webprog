<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_profile";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_POST['register'])){

    $name     = $_POST['nama'];
    $email    = $_POST['email'];
    $usn = $_POST['username'];
    $pass = $_POST['password'];

    // query insert
    $sql = "call spRegister('$name', '$email', '$usn', '$pass')";

    $result = mysqli_query($koneksi, $sql);

    if($result){

        echo "<script>
                alert('Register berhasil');
                window.location.href='login.php';
              </script>";

    } else {

        echo "<script>
                alert('Register gagal');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="regis-style.css">
</head>
<body>
    <div class="container">
        <form onsubmit="regis(event)" method="post">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" id="fname" name="nama" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" name="email" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" name="password" required>
                <span class="toggle-pass" onclick="togglePass()">👁️</span>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" id="confirm-pass" required>
                <span class="toggle-pass" onclick="togglePass()">👁️</span>
            </div>
            <div class="btn-regis">
                <button type="submit" name="register">Register</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $('document').ready(function(){
            $('.container').hide();
            $('.container').slideDown(1000);

        })
     </script>

    <script>
        function togglePass(){
            const password = document.getElementById("password");
            const confpass = document.getElementById("confirm-pass");

            if (password.type === "password"){
                password.type = "text"; // tampilin password
                confpass.type = "text";
            }
            else {
                password.type = "password";// sembunyiin password
                confpass.type = "password";
            }
        }
    </script>
</body>
</html>