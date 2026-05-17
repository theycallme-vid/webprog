<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_profile";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if(!$koneksi){
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "CALL spLogin('$username', '$password')";

    $result = mysqli_query($koneksi, $sql);

    if($result){

        if(mysqli_num_rows($result) > 0){

            echo "<script>
                    alert('Login berhasil');
                    window.location.href='main.php';
                  </script>";

        }else{

            echo "<script>
                    alert('Username atau password salah');
                  </script>";
        }

    }else{
        echo "Error Query: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login-style.css">
</head>
<body>
    <nav>
        <h1><a href="main.php">Portofolio</a></h1>
    </nav>
    <div class="container">
        <form method="post" >
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" id="username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forgot Password?</a>
            </div>
            <div class="btn-login">
                <button type="submit" name="login">Login</button>
            </div>
            <div class="regis-link">
                <p>Don't have an account? <a href="regis.php">Register</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p style="text-align: center;">Copyright 2026 All Right Reserved</p>
    </footer>



    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        $('document').ready(function(){
            $('.container').hide();
            $('.container').slideDown(1000);

        })
    </script>
    <script>
    function login(event) {
    event.preventDefault();// biar ga reload langsung

    // Ambil id dari field username
    const username = document.getElementById('username').value;
    
    // loginstatus itu keynya, success adalah valuenya
    localStorage.setItem("loginStatus", "success"); 
    localStorage.setItem("username", username);

    // pindah ke halaman utama
    window.location.href = "main.html";
    }
</script> -->
</body>
</html>