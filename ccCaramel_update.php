<?php
// include database connection file
include 'koneksi.php';
$caramelid = $_POST['caramelid'];
$nama = $_POST['nama'];
$ket = $_POST['ket'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$result = mysqli_query($koneksi, "UPDATE caramel SET caramelid='$caramelid', foto='$foto',nama='$nama', ket='$ket', harga='$harga', foto='$foto' WHERE caramelid ='$caramelid'");
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$path = "images/ccCaramel/".$foto;
if(move_uploaded_file($tmp_file, $path)){
    // Cek apakah gambar berhasil diupload atau tidak    
    // Query untuk menampilkan data siswa berdasarkan ID yang dikirim    
    $query ="SELECT * FROM caramel WHERE caramel ='$caramelid' ";
    $sql = mysqli_query($koneksi, $query);  
    // Cek apakah file foto sebelumnya ada di folder images    
if(is_file("images/ccCaramel/".$sql['foto'])) // Jika foto ada      
    unlink("images/ccCaramel/".$sql['foto']); // Hapus file foto sebelumnya yang ada di folder images
    $query ="UPDATE caramel SET caramelid='$caramelid', foto='$foto' WHERE caramelid ='$caramelid'";
    $sql = mysqli_query($koneksi, $query);
if($sql){
        header("Location:ccCaramel.php");
    }else {
        echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href = '#ModalEdit'>Kembali ke Form</a>";
    }
}
if ($result){
    header("Location:ccCaramel.php");
}
?>