<?php
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$distributor_id = $_POST['distributor_id'];

include "config.php";
$result = mysqli_query($conn, "INSERT INTO `barang` (`nama`, `jenis`, `harga`, `stok`, `distributor_id`) VALUES ('$nama', '$jenis', '$harga', '$stok', '$distributor_id'); ");

header("Location:index.php");
?>