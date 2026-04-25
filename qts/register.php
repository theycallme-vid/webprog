<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Now!</title>
</head>
<body>
    <header style="background-color:yellow; text-align:center">
        <h1> New Customer Registration</h1>
    </header>
    <div style="justify-items: center;">
        <form action="161124002.php" method="POST">
            <table>
            <tr>
                <td>Fullname</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>Sex</td>
                <td>
                    <input type="radio" name="sex"> Male <br>
                    <input type="radio" name="sex"> Female
                </td>
            </tr>
            <tr>
                <td>Biography</td>
                <td><textarea name="bio"></textarea></td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name='kota' id="kota">
                    <option value="1">Indonesia</option>
                    <option value="2">Bikini Bottom</option>
                    <option value="3">Malaysia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file"></td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;"><input type="checkbox"> I'm agree..</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">
                    <input type="submit" value="Register Now!">
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>