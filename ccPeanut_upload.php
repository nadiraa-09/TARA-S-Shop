<?php
include "koneksi.php";
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$ket = $_POST['ket'];
$harga = $_POST['harga'];
$Foto = $_FILES['Foto']['name'];
$ukuran_file = $_FILES['Foto']['size'];
$tipe_file = $_FILES['Foto']['type'];
$tmp_file = $_FILES['Foto']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/ccPeanut/".$Foto;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){  // Cek apakah tipe file ynag di upload adalah jpg / jpeg
    if($ukuran_file <= 1000000) {
        if (move_uploaded_file($tmp_file, $path)){       
        $query = "insert into peanut values('$kode','$nama','$ket','$harga','$Foto')";
        $sql = mysqli_query($koneksi, $query);
        if($sql){
            header('location: ccPeanut.php');
        }else {
            echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href = 'ccPeanut.php'>Kembali ke Form</a>";
        }
        }else {
            echo "Maaf , Gambar gagal untuk diupload";
            echo "<br><a href = 'ccPeanut.php'>Kembali ke Form</a>";
        }
    }else {
        echo "Maaf , ukuran gambar yang diupload tidak boleh lebih dari 1MB ";
        echo "<br><a href = 'ccPeanut.php'>Kembali ke Form</a>";
    }
}else {
    echo "Maaf , Tipe gambar yang di upload harus JPG / JPEG / PNG";
    echo "<br><a href = 'ccPeanut.php'>Kembali ke Form</a>";
}
?>