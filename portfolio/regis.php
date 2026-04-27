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
        <form onsubmit="regis(event)" method="get">
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Name" id="fname" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" required>
                <span class="toggle-pass" onclick="togglePass()">👁️</span>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm Password" id="confirm-pass" required>
                <span class="toggle-pass" onclick="togglePass()">👁️</span>
            </div>
            <div class="btn-regis">
                <button type="submit">Register</button>
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