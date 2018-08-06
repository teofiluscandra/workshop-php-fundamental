<html>
<title>Daftar Siswa</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<body>

<h3>Data Siswa</h3>
<a href="form_input.php" class="btn btn-info">Input Siswa</a>

<?php
include "connect.php";

$tampil = "SELECT * FROM siswa ORDER BY id";
$hasil  = mysqli_query($conn, $tampil);
$total  = mysqli_num_rows($hasil);

?>

<table class="table table-striped table-bordered table-hover">
      <tr>
        <th>No</th>
        <th>Nama</th>
 	      <th>E-mail</th>
        <th>Nomor Induk</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
<?php

// nomor awal untuk pengurutan
$no = 1;

// tampilkan data tamu
while ($data=mysqli_fetch_array($hasil)){
?>
<tr>
          <td><?php echo $no ?></td>          
          <td><?php echo $data['nama']; ?></td>
          <td><?php echo $data['email']; ?></td>
          <td><?php echo $data['no_induk']; ?></td>
          <td><?php echo $data['alamat']; ?></td>
          <td><a href="edit-siswa.php?id=<?php echo $data['id']?>">Edit</a> | 
              <a href="hapus-siswa.php?id=<?php echo $data['id']?>">Hapus</a></td> 
        </tr>
<?php
// tambahkan $no dengan 1
        $no++;
}

?>
</table>

<p>Jumlah Siswa: <b><?php echo $total ?></b> Orang</p>
