<?php
$id_barang = $_GET ['id_barang'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$distributor_id = $_POST['distributor_id'];

include "config.php";
$result = mysqli_query($conn, "UPDATE barang SET id_barang = $id_barang, nama = '$nama', jenis = '$jenis', harga = '$harga', stok = '$stok', distributor_id = '$distributor_id' WHERE id_barang = '$id_barang';");

header("Location:index.php");
?>