<?php
include 'koneksi.php';
$id = $_POST['id'];
$sql = "SELECT * FROM wedding where kode='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

$row['kode']=$data['kode'];
$row['nama']=$data['nama'];
$row['ket']=$data['ket'];
$row['harga']=$data['harga'];
$row['foto']=$data['foto'];

echo json_encode($row);

?>