<?php 
  include "header.php"
?>

<title>Tambah Buku</title>

<div class="container-fluid mt-3">
<h3>Tambah Buku</h3>
  <form action="proses_tambah_buku.php"method="post" enctype="multipart/form-data">
    Nama :
    <input type="text" name="nama_buku" value="" class="form-control">

    Deskripsi :
    <textarea name="deskripsi" cols = 147 class = "form-control"></textarea>

    Foto :
    <input type="file" name="foto" class="form-control">
    <br>
    <input type="submit" name="submit" value="Tambah Buku" class="btn btn-primary">
  </form>
</div>
  

<?php
  include "footer.php";
?>