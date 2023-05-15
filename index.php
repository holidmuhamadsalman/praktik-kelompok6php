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
        <a href="tambah.php" class="btn btn-success">Tambah Data</a>
                <form action="" method="post">
                        <table class="table table-dark table-striped">
                                <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Id Distributor</th>
                                        <th>Aksi</th>
                                </tr>
                                <?php if (mysqli_num_rows($query)>0) {?>
                                <?php 
                                $no = 1;
                                while ($data = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                        <td><?php echo $no?></td>
                                        <!-- <?php echo $data['id_barang']?> -->
                                        <td><?php echo $data['nama']?></td>
                                        <td><?php echo $data['jenis']?></td>
                                        <td><?php echo $data['harga']?></td>
                                        <td><?php echo $data['stok']?></td>
                                        <td><?php echo $data['distributor_id']?></td>
                                        <td>
                                                <a href="edit.php?id_barang=<?php echo $data['id_barang']?>" class="btn btn-primary">Edit</a>
                                                <a href="proses_hapus.php?id_barang=<?php echo $data['id_barang']?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger">Hapus</a>
                                        </td>
                                </tr>
                                <?php $no++; } ?>
                                <?php } ?>
                        </table>
                </form>
</div>
</body>
</html>



