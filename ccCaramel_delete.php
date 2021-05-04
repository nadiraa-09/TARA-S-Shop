<?php
// include database connection file
include 'koneksi.php';
echo $caramelid = $_POST['datadel'];
echo $sql = "DELETE FROM caramel WHERE caramelid ='$caramelid'";
mysqli_query($koneksi,$sql );

header("Location:ccCaramel.php");

?>