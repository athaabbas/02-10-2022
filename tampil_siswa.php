<?php 
  include "header.php"; 
?> 

<title>Data Siswa</title>

<div class="container-fluid mt-3">
  <h3>Data Siswa</h3>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA SISWA</th>
        <th>TANGGAL LAHIR</th>
        <th>GENDER</th>
        <th>ALAMAT</th>
        <th>USERNAME</th>
        <th>KELAS</th>
        <th>AKSI</th>
      </tr>
    </thead>

    <tbody>
      <?php 
      include "koneksi.php";
      $qry_siswa=mysqli_query($conn,"select * from siswa join 
      kelas on kelas.id_kelas=siswa.id_kelas");
      $no=0;
      while($data_siswa=mysqli_fetch_array($qry_siswa)) {
      $no++; ?>
      <tr>
        <td><?=$no?></td>
        <td><?=$data_siswa['nama_siswa']?></td>
        <td><?=$data_siswa['tanggal_lahir']?></td>
        <td><?=$data_siswa['gender']?></td>
        <td><?=$data_siswa['alamat']?></td>
        <td><?=$data_siswa['username']?></td>
        <td><?=$data_siswa['nama_kelas']?></td>
        <td>
          <a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>"
          onclick="return confirm('Apakah anda yakin ingin mengubah data ini?')" 
          class="btn btn-success"> Ubah </a> |
          <a href="hapus.php?id_siswa=<?=$data_siswa['id_siswa']?>"
          onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
          class="btn btn-danger"> Hapus </a>
        </td>
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