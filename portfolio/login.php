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
        <h1><a href="main.html">Portofolio</a></h1>
    </nav>
    <div class="container">
        <form onsubmit="login(event)" method="get">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" id="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox"> Remember me
                </label>
                <a href="#">Forgot Password?</a>
            </div>
            <div class="btn-login">
                <button type="submit">Login</button>
            </div>
            <div class="regis-link">
                <p>Don't have an account? <a href="regis.php">Register</a></p>
            </div>
        </form>
    </div>

    <footer>
        <p style="text-align: center;">Copyright 2026 All Right Reserved</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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
</script>
</body>
</html>