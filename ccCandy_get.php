<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM candy where candyid='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['candyid']=$data['candyid'];
$row['nama']=$data['nama'];
$row['ket']=$data['ket'];
$row['harga']=$data['harga'];
$row['foto']=$data['foto'];

echo json_encode($row);

?>