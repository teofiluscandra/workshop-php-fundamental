<?php
// koneksi ke database
include "connect.php";

// ambil variabel yang dikirim dari form
$nama  = $_GET['nama'];
$email = $_GET['email'];
$no_induk = $_GET['no_induk'];
$alamat = $_GET['alamat'];

$input = "INSERT INTO siswa (nama,email,no_induk,alamat) VALUES('$nama','$email','$no_induk','$alamat')";
$hasil = mysqli_query($conn, $input);

// apabila query untuk menginput data benar
if ($hasil){ 
	// lakukan redirect
	header("location:index.php");
}
else{
  echo $hasil;
}
?>
