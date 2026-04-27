<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        nav{
            background-color: yellow;
            display: flex;
            position: relative;
            align-items: center;
            justify-content: space-between;
        }
        nav .judul{
            padding: 30px;
            text-align: center;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);

        }
        nav .form{
            margin-left: auto;
            align-items: center;
            padding: 10px 10px;
        }

    </style>
</head>
<body>
    <nav>
        <div class="judul">
            <h1>Profesional Appearence  Authinticator</h1>
        </div>
        <div class="form">
            <form action="login.php">
                <table border="1">
                    <tr>
                        <td><label for="username">Username</label></td>
                        <td><input type="text" id="username" placeholder="Username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="text" id="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="Login">
                        </td>
                        <td style="text-align: right;">
                            <a href="register.php">Register</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </nav>
    <div class="text1">
        <strong>A certified and globally recognized assesment of handsome and beautiful people. Rate yourself now to boos your confidence in becoming handsome or beautiful</strong>
    </div>
    <hr>
    <h1>Our Client</h1>
    <div class="logo-spong">
        <div class="spongebob">
            <img src="../../qts/spongebob.png"> <br>
            <hr>
            <table border="1">
                <tr>
                    <td>PAA Score</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Expired Date</td>
                    <td>December 25, 2026</td>
                </tr>
            </table>
        </div>
        <div class="patrick">
            <img src="../../qts/patrick.png"> <br>
            <hr>
            <table border="1">
                <tr>
                    <td>PAA Score</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Expired Date</td>
                    <td>December 25, 2026</td>
                </tr>
            </table>
        </div>
        <div class="squid">
            <img src="../../qts/squidward.png"> <br>
            <hr>
            <table border="1">
                <tr>
                    <td>PAA Score</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Expired Date</td>
                    <td>December 25, 2026</td>
                </tr>
            </table>
        </div>
        <div class="plankton">
            <img src="../../qts/plankton.png"> <br>
            <hr>
            <table border="1">
                <tr>
                    <td>PAA Score</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Expired Date</td>
                    <td>December 25, 2026</td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <footer>
        <p>Copyright 2026 All Right Reserved</p>
    </footer>


</body>
</html>