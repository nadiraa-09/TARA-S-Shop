<?php
// include database connection file
include 'koneksi.php';
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$ket = $_POST['ket'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$result = mysqli_query($koneksi, "UPDATE birthday SET kode='$kode', foto='$foto',nama='$nama', ket='$ket', harga='$harga', foto='$foto' WHERE kode ='$kode'");
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$path = "images/clBirthday/".$foto;
if(move_uploaded_file($tmp_file, $path)){
    // Cek apakah gambar berhasil diupload atau tidak    
    // Query untuk menampilkan data berdasarkan ID yang dikirim    
    $query ="SELECT * FROM birthday WHERE birthday ='$kode' ";
    $sql = mysqli_query($koneksi, $query);  
    // Cek apakah file foto sebelumnya ada di folder images    
if(is_file("images/clBirthday/".$sql['foto'])) // Jika foto ada      
    unlink("images/clBirthday/".$sql['foto']); // Hapus file foto sebelumnya yang ada di folder images
    $query ="UPDATE birthday SET kode='$kode', foto='$foto' WHERE kode ='$kode'";
    $sql = mysqli_query($koneksi, $query);
if($sql){
        header("Location:clclBirthday.php");
    }else {
        echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href = '#ModalEdit'>Kembali ke Form</a>";
    }
}
if ($result){
    header("Location:clBirthday.php");
}
?>