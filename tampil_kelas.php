<?php
  include "header.php";
?>

<title>Data Kelas</title>

<div class="container-fluid mt-3">
  <h3>Data Kelas</h3>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>KELAS</th>
        <th>ANGKATAN</th>
      </tr>
    </thead>

    <tbody>
      <?php
      include "koneksi.php";
      $qry_kelas=mysqli_query($conn, "select * from kelas");
      $no=0;
      while($data_kelas=mysqli_fetch_array($qry_kelas)) {
        $no++; ?>
      <tr>
        <td><?=$no?></td>
        <td><?=$data_kelas['nama_kelas']?></td>
        <td><?=$data_kelas['angkatan']?></td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>

<?php 
  include "footer.php"; 
?> 