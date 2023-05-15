<?php
$id_barang = $_GET ['id_barang'];

include "config.php";
$result = mysqli_query($conn, "DELETE FROM barang WHERE id_barang='$id_barang'");
header("Location:index.php");
?>