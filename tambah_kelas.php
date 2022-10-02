<?php include "header.php" ?>

<title>Tambah Kelas</title>

<div class="container-fluid mt-3">
  <h3>Tambah Kelas</h3>
  <form action="proses_tambah_kelas.php" method="post">
    Nama Kelas :
    <input type="text" name="nama_kelas" value="" class="form-control">

    Angkatan :
    <input type="text" name="angkatan" value="" class="form-control">
    <br>
    <input type="submit" name="simpan" value="Tambah Kelas" class="btn btn-primary"> 
  </form>
</div>

<?php 
  include "footer.php"; 
?> 