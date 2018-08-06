<h3>Edit Siswa</h3>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<?php
include "connect.php";
// ambil id dari hasil klik link Edit
$id    = $_GET['id'];

$edit  = "SELECT * FROM siswa WHERE id='$id'";
$hasil = mysqli_query($conn, $edit);
$data  = mysqli_fetch_array($hasil);

?>
<form method="GET" action="update-siswa.php">
<input type="hidden" name="id" value="<?php echo $id?>">
      <div class='col-md-6'>
    <div class="form-group">
        <label for="nama">Nama Siswa</label>
        <input id="nama" name = "nama" type="text" class="form-control"  value = "<?php echo $data['nama'];?>" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name = "email" type="email" class="form-control" value = "<?php echo $data['email'];?>" required>
    </div>
    <div class="form-group">
        <label for="no_induk">Nomor Induk</label>
        <input id="no_induk" name = "no_induk" type="text" class="form-control" value = "<?php echo $data['no_induk'];?>" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name = "alamat" type="text" class="form-control" required><?php echo $data['alamat'];?></textarea>
    </div>

    <input class="btn btn-success" type="submit" value="Kirim">
</div>
</form>
