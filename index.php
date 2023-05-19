<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
        <!-- data table -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Latihan PHP</title>
</head>
<body>

<?php
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM barang");
?>
<div class="container mt-3">
        <a href="tambah.php" class="btn btn-success mb-3">Tambah Data</a>
                <form action="" method="post">
                <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Id Distributor</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
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
                                </tbody>
                </table>
                </form>
</div>

<script type="text/javascript">
        $(document).ready( function () {
                $('#myTable').DataTable();
        } );
</script>
</body>
</html>



