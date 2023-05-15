<?php

	$id = $_GET['id_barang'];

	include "config.php";

	$query = mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id' ");

	header("Location:index.php");

?>