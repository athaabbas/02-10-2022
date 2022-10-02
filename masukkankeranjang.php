<?php
session_start();
 if($_POST) {
  include 'koneksi.php';
  $sql = "SELECT * FROM `buku` WHERE id_buku = '".$_GET['id_buku']."'";
  $qry_get_buku=mysqli_query($conn, $sql);
  $data_buku=mysqli_fetch_array($qry_get_buku);
  $_SESSION['cart'] []=array(
    'id_buku'=>$data_buku['id_buku'],
    'nama_buku' =>$data_buku['nama_buku'],
    'qty' => $_POST['jumlah_pinjam']
  );
 }
 header('location: keranjang.php');
?>