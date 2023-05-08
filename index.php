<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Latihan PHP</title>
</head>
<body>

<?php
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM barang");
?>
<div class="container-fluid">
        <button class="btn btn-success">Tambah Data</button>
                <form action="" method="post">
                        <table class="table table-dark table-striped">
                                <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                </tr>
                                <?php if (mysqli_num_rows($query)>0) {?>
                                <?php 
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                        <td><?php echo $no?></td>
                                        <td><?php echo $data['nama']?></td>
                                        <td><?php echo $data['jenis']?></td>
                                        <td><?php echo $data['harga']?></td>
                                        <td><?php echo $data['stok']?></td>
                                        <td>
                                                <button class="btn btn-primary">Update</button>
                                                <button class="btn btn-danger">Delete</button>
                                        </td>
                                </tr>
                                <?php $no++; } ?>
                                <?php } ?>
                        </table>
                </form>
</div>
</body>
</html>


