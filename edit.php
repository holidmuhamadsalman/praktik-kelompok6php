<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Edit Data Barang</title>
</head>
<body>
        <?php
        include ('config.php'); 
        $id_barang = $_GET ['id_barang'];
        $query = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");

        while ($data = mysqli_fetch_array($query)){
                        $nama = $data['nama'];
                        $jenis = $data['jenis'];
                        $harga = $data['harga'];
                        $stok = $data['stok'];
                        $distributor_id = $data['distributor_id'];
        }
        ?>
        <form action="proses_edit.php?id_barang=<?php echo $id_barang;?>" method="post">
        <table class="table">
                <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                        <td>Jenis</td>
                        <td>
                                <select name="jenis" value="<?php echo $jenis; ?>">
                                        <option value="padat">Padat</option>
                                        <option value="cair">Cair</option>
                                        <option value="gas">Gas</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Harga</td>
                        <td><input type="number" name="harga" value="<?php echo $harga; ?>"></td>
                </tr>
                <tr>
                        <td>Stok</td>
                        <td><input type="text" name="stok" value="<?php echo $stok; ?>"></td>
                </tr>
                <tr>
                        <td>Id Distributor</td>
                        <td><input type="text" name="distributor_id" value="<?php echo $distributor_id; ?>"></td>
                </tr>
                <tr>
                        
                        <td><input type="submit" name="Submit" class="btn btn-primary"></td>
                </tr>
        </table>
        </form>
        
</body>
</html>