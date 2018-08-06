<?php
include "connect.php";

// ambil variabel yang dikirim dari form
$id    = $_GET['id'];
$nama  = $_GET['nama'];
$email = $_GET['email'];
$no_induk = $_GET['no_induk'];
$alamat = $_GET['alamat'];

$update = "UPDATE siswa SET nama='$nama', email='$email', no_induk='$no_induk', alamat='$alamat' WHERE id='$id'";
$hasil  = mysqli_query($conn, $update);

// apabila query untuk mengupdate data benar
if ($hasil){ 
	// lakukan redirect
	header("location:index-siswa.php");
}
else{
  echo "Update Data Siswa Gagal";
}
?>
