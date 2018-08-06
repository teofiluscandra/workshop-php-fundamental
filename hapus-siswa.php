<?php
include "connect.php";
// ambil id dari hasil klik link Hapus
$id    = $_GET['id'];

$hapus = "DELETE FROM siswa WHERE id='$id'";
$hasil = mysqli_query($conn, $hapus);

// apabila query untuk menghapus data benar
if ($hasil){ 
	// lakukan redirect
	header("location:index-siswa.php");
    //echo $hasil;
}
else{
  echo "Hapus Data Siswa Gagal";
}
?>
