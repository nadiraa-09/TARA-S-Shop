<?php
include "koneksi.php";
$candyid = $_POST['candyid'];
$nama = $_POST['nama'];
$ket = $_POST['ket'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
// Set path folder tempat menyimpan gambarnya
$path = "images/ccCandy/".$foto;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){  // Cek apakah tipe file ynag di upload adalah jpg / jpeg
    if($ukuran_file <= 1000000) {
        if (move_uploaded_file($tmp_file, $path)){       
        $query = "insert into candy values('$candyid','$nama','$ket','$harga','$foto')";
        $sql = mysqli_query($koneksi, $query);
        if($sql){
            header('location: ccCandy.php');
        }else {
            echo "Maaf , Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href = 'ccCandy.php'>Kembali ke Form</a>";
        }
        }else {
            echo "Maaf , Gambar gagal untuk diupload";
            echo "<br><a href = 'ccCandy.php'>Kembali ke Form</a>";
        }
    }else {
        echo "Maaf , ukuran gambar yang diupload tidak boleh lebih dari 1MB ";
        echo "<br><a href = 'ccCandy.php'>Kembali ke Form</a>";
    }
}else {
    echo "Maaf , Tipe gambar yang di upload harus JPG / JPEG / PNG";
    echo "<br><a href = 'ccCandy.php'>Kembali ke Form</a>";
}
?>