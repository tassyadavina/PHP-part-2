<?php
include_once("koneksi.php");

$hasil = mysqli_query($mysqli, "SELECT * FROM tabel_user ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
<a href="tambah.php"> Tambah User Baru</a><br/><br/>
    <table width='80%' border=1>
    <tr>
    <th>Nama</th> <th>Mobile</th> <th>Email</th> <th>Alamat</th>
    <th>Update</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($hasil)) {
        echo "<tr>";
        echo "<td>".$user_data['nama']. "</td>";
        echo "<td>".$user_data['mobile']. "</td>";
        echo "<td>".$user_data['email']. "</td>";
        echo "<td>".$user_data['alamat']. "</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a></td></tr>";
    }
    ?>
    </table>
</body>
</html>