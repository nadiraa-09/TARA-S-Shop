<?php
// include database connection file
include 'koneksi.php';
echo $kode = $_POST['datadel'];
echo $sql = "DELETE FROM costum WHERE kode ='$kode'";
mysqli_query($koneksi,$sql );

header("Location:clCostum.php");

?>