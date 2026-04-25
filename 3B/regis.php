<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
</head>
<body>
    <div>
        <h2>PENDAFTARAN BARU</h2>
        <form action="index.php" method="GET" enctype="multipart/form-data"> 
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="text" required placeholder="Input your Full Name" name="fullname"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="Male">Male 
                        <input type="radio" name="jk" value="Female">Female
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>
                        <select name="kota">
                            <option value="1">Surabaya</option>
                            <option value="2">Sidoarjo</option>
                            <option value="3">Gresik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Foto Diri</td>
                    <td><input type="file" name="foto"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="setuju1"> Saya Setuju Mendaftar <br>
                        <input type="checkbox" name="setuju2"> Saya mau menerima iklan
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Daftar">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</body>
</html>