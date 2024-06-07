<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }

        h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #3498db;
            margin-bottom: 20px;
            display: block;
            text-align: center;
        }

        a:hover {
            color: #2980b9;
        }

        form {
            width: 50%;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        input[type="reset"] {
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            margin-left: 10px;
        }

        input[type="reset"]:hover {
            background-color: #c0392b;
        }
    </style>
</head>

<body>
    <h2>Tambah data</h2>
    <a href="index.php">kembali</a>

    <?php
    include 'koneksi.php';

    if (isset($_POST['NIM'])) {
        $NIM = $_POST['NIM'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jenis_kelamin = $_POST['JK'];
        $alamat = $_POST['alamat'];

        if($NIM=="" || $nama=="" || $email=="" || $jenis_kelamin=="" || $alamat==""){
            echo "<script>alert('Semua data harus diisi')</script>";
        }else{
        $query = mysqli_query($koneksi, "INSERT into mahasiswa (NIM, nama, email, jenis_kelamin, alamat) values('$NIM', '$nama', '$email', '$jenis_kelamin', '$alamat')");
            if ($query) {
            echo '<script>alert("Tambah data berhasil")</script>';
            } else {
            echo '<script>alert("Tambah data gagal")</script>';
            }
        }
    }
    ?>

    <form action="" method="post">
        <table>
            <tr>
                <td><input type="text" name="NIM" placeholder="Masukan NIM"></td>
            </tr>
            <tr>
                <td><input type="text" name="nama" placeholder="Masukan nama"></td>
            </tr>
            <tr>
                <td><input type="text" name="email" placeholder="Masukan email"></td>
            </tr>
            <tr>
                <td>
                    <select name="JK">
                        <option value="">--Pilih jenis kelamin--</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="text" name="alamat" placeholder="Masukan alamat"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset" style="margin-left: 10px;">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>