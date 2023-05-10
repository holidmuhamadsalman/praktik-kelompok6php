<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Tambah Data</title>
</head>
<body>
        <form action="proses.php" method="post">
        <table class="table">
                <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" id=""></td>
                </tr>
                <tr>
                        <td>Jenis</td>
                        <td>
                                <select name="jenis" id="">
                                        <option value="padat">Padat</option>
                                        <option value="cair">Cair</option>
                                        <option value="gas">Gas</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Harga</td>
                        <td><input type="number" name="harga" id=""></td>
                </tr>
                <tr>
                        <td>Stok</td>
                        <td><input type="text" name="stok" id=""></td>
                </tr>
                <tr>
                        <td>Id Distributor</td>
                        <td><input type="text" name="distributor_id"></td>
                </tr>
                <tr>
                        
                        <td><input type="submit" name="Submit" class="btn btn-primary"></td>
                </tr>
        </table>
        </form>
        
</body>
</html>