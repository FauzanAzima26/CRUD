<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            border-collapse: collapse;
            width: 85%;
            max-width: 800px;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #3498db;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #eaeaea;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 200px;
        }

        th:nth-child(6),
        td:nth-child(6) {
            width: 200px;
        }
    </style>
</head>

<body>
    <h2>Daftar mahasiswa berprestasi</h2>
    <a href="add.php">Tambah data</a>
    <table>
        <tr>
            <th>NO.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        <?php
        $i = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM mahasiswa ORDER BY Nama ASC');
        while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data['NIM']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Jenis_Kelamin']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
            </tr>
            <?php
            $i++;
        }
        ?>
    </table>
</body>

</html>