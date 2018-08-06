<html>
<title>Input Siswa</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<body>

<h3>Form Siswa</h3>
<form method="GET" action="input-siswa.php">

<div class='col-md-6'>
    <div class="form-group">
        <label for="nama">Nama Siswa</label>
        <input id="nama" name = "nama" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" name = "email" type="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="no_induk">Nomor Induk</label>
        <input id="no_induk" name = "no_induk" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name = "alamat" type="text" class="form-control" required></textarea>
    </div>

    <input class="btn btn-success" type="submit" value="Kirim">
</div>
</form>
