<?php
// include database connection file
include 'koneksi.php';
echo $kode = $_POST['datadel'];
echo $sql = "DELETE FROM birthday WHERE kode ='$kode'";
mysqli_query($koneksi,$sql );

header("Location:clBirthday.php");

?>