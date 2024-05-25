<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = htmlspecialchars($_POST['nim']);
    $nama = htmlspecialchars($_POST['nama']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $agama = htmlspecialchars($_POST['agama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $email = htmlspecialchars($_POST['email']);
    $telepon = htmlspecialchars($_POST['telepon']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4b0082, #800080);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .datadiri {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #663399;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f3f3f3;
        }

        tr:nth-child(odd) {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>
    <div class="datadiri">
        <h1>Data Diri Mahasiswa</h1>
        <table>
            <tr>
                <th>NIM:</th>
                <td><?php echo $nim; ?></td>
            </tr>
            <tr>
                <th>Nama:</th>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <th>Tempat Lahir:</th>
                <td><?php echo $tempat_lahir; ?></td>
            </tr>
            <tr>
                <th>Tanggal Lahir:</th>
                <td><?php echo $tanggal_lahir; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin:</th>
                <td><?php echo $jenis_kelamin; ?></td>
            </tr>
            <tr>
                <th>Agama:</th>
                <td><?php echo $agama; ?></td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>Telepon:</th>
                <td><?php echo $telepon; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
