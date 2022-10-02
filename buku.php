<?php
  include "header.php";
?>
<title>Buku</title>

<h2>Daftar Buku</h2>
<a href="tambah_buku.php" class="btn btn-primary"> + Tambah Buku</a>
<div class="row">
  <?php
    include "koneksi.php";
    $sql="SELECT * FROM `buku`";
    $qry_buku=mysqli_query($conn, $sql);
    while($data_buku=mysqli_fetch_array($qry_buku)) { 
  ?>

  <div class="col-md-3">
    <div class="card">
      <img src="images/foto_buku/<?=$data_buku['foto']?>"
      class="img-card-top">
      <div class="card-body">
        <h5 class="card-title"><?=$data_buku['nama_buku']?></h5>
        <p class="card-text"><?=substr($data_buku['deskripsi'], 0, 20)?>...</p>
        <a href="pinjam_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">
        Pinjam </a>
      </div>
    </div>
  </div>
  <?php
  }
  ?>
</div>

<?php
  include "footer.php";
?>