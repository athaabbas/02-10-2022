<?php
session_start();
  if($_SESSION['status_login']!=true) {
    header('location: index.php');
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="images/icons/book.png"/>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" 
    style="box-shadow: 4px 4px 5px -4px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">PERPUSTAKAAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="buku.php">Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="histori_peminjaman.php">Transaksi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Lainnya </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="tambah_siswa.php">Tambah Siswa</a></li>
                <li><a class="dropdown-item" href="tambah_kelas.php">Tambah Kelas</a></li>
                <li><a class="dropdown-item" href="tampil_siswa.php">Data Siswa</a></li>
                <li><a class="dropdown-item" href="tampil_kelas.php">Data Kelas</a></li>
              </ul>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php"
              onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
            </li>
          </ul>
        </div>
      </div> 
    </nav>
    <div class="container bg-light rounded" style="margin-top:10px">
  