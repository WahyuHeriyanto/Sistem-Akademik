<?php
      require 'function_mahasiswa.php';
      $mahasiswa = query("SELECT * FROM matkul");
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />    
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>






<header class="navbar navbar-fixed-top bg-primary p-0 shadow">
  <a class="navbar-brand me-0 px-3 fs-6 text-white" href="#">
    <h3>Sistem Akademik</h3>
  </a>
  <ul class="nav navbar-nav navbar-right">

    <span class="navbar-brand-right me-0 px-3 fs-6 text-white">
    <img class="user m-2"src="user.png" alt="..." style="width:35px;">  
    Admin</span>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">

            <li class="nav-item">

            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="../dashboard/dashboard_admin.php" style="color:black;">
              <span class="material-symbols-outlined">house</span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../biodata/data_admin.php" style="color:black;">
              <span class="material-symbols-outlined">person</span>
                Admin
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../dosen/datadosen.php" style="color:black;">
              <span class="material-symbols-outlined">person</span>
                Data Dosen
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../mahasiswa/datamahasiswa_dosen.php" style="color:black;">
              <span class="material-symbols-outlined">person</span>
                Data Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
              <span class="material-symbols-outlined">book_5</span>
                Mata Kuliah
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../krs/laporan.php" style="color:black;">
              <span class="material-symbols-outlined">edit</span>
                Berita Acara
              </a>
            </li>

          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
              <span class="material-symbols-outlined">library_books</span>
                Panduan
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../index.php" style="color:black;">
              <span class="material-symbols-outlined">logout</span>
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <main class="content col-lg-10 ">

 
      <div class="head m-2 bg-primary " style=" color:white; height:30px">
          <div class="intext m-2">        <h6>Daftar Mata Kuliah</h6></div>



      </div>



  

    <h1></h1>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Smt</th>
      <th scope="col">Dosen Pengampu</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  <?php $i =1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?= $row["kode_mk"]; ?> </td>
      <td><?= $row["nama_mk"]; ?> </td>
      <td><?= $row["sks"]; ?> </td>
      <td><?= $row["smt"]; ?> </td>
      <td><?= $row["dosen"]; ?> </td>
      <td>
      <a href="#">
        <button type="button" style="background-color:yellow;">
          <span class="material-symbols-outlined"style="color:white">edit</span>      
        </button>
      </a> 
      <a href="#">
        <button type="button" style="background-color:green;">
          <span class="material-symbols-outlined"style="color:white">visibility</span>      
        </button>
      </a> 
      <a href="#">
        <button type="button" style="background-color:red;">
          <span class="material-symbols-outlined"style="color:white">delete</span>      
        </button>
      </a> 
      </td>
    </tr>
    <?php $i++; ?>
    <?PHP endforeach; ?>
    <tr>


    </tr>
  </tbody>
</table>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
    </main>
  </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
