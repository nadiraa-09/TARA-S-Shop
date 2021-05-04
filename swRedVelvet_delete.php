<?php
// include database connection file
include 'koneksi.php';
echo $kode = $_POST['datadel'];
echo $sql = "DELETE FROM redvelvet WHERE kode ='$kode'";
mysqli_query($koneksi,$sql );

header("Location:swRedvelvet.php");

?>