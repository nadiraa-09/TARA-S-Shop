<?php
// include database connection file
include 'koneksi.php';
echo $candyid = $_POST['datadel'];
echo $sql = "DELETE FROM candy WHERE candyid ='$candyid'";
mysqli_query($koneksi,$sql );

header("Location:ccCandy.php");

?>