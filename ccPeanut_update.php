<?php
// include database connection file
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$ket = $_POST['ket'];
$harga = $_POST['harga'];
$Foto = $_FILES['Foto']['name'];
$result = mysqli_query($koneksi, "UPDATE peanut SET kode='$kode', Foto='$Foto',nama='$nama', ket='$ket', harga='$harga', Foto='$Foto' WHERE kode ='$kode'");
$ukuran_file = $_FILES['Foto']['size'];
$tipe_file = $_FILES['Foto']['type'];
$tmp_file = $_FILES['Foto']['tmp_name'];
$path = "images/ccPeanut/".$Foto;
if(move_uploaded_file($tmp_file, $path)){
    // Cek apakah gambar berhasil diupload atau tidak    
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim    
    $query ="SELECT * FROM peanut WHERE peanut ='$kode' ";
    $sql = mysqli_query($koneksi, $query);  
    // Cek apakah file foto sebelumnya ada di folder images    
if(is_file("images/ccPeanut/".$sql['Foto'])) // Jika foto ada      
    unlink("images/ccPeanut/".$sql['Foto']); // Hapus file foto sebelumnya yang ada di folder images
    $query ="UPDATE peanut SET kode='$kode', Foto='$Foto' WHERE kode ='$kode'";
    $sql = mysqli_query($koneksi, $query);
if($sql){
        header("Location:ccPeanut.php");
    }else {
        echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href = '#ModalEdit'>Kembali ke Form</a>";
    }
}
if ($result){
    header("Location:ccPeanut.php");
}
?>