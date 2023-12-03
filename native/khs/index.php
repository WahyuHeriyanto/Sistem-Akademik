<?php
      require 'function_mahasiswa.php';
      $mahasiswa = query("SELECT * FROM khs");
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
    Wahyu Heriyanto</span>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">

            <li class="nav-item">

              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="../dashboard/dashboard.php" style="color:black;">
              <span class="material-symbols-outlined">house</span>
                Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../biodata/data.php" style="color:black;">
              <span class="material-symbols-outlined">person</span>
                Biodata
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../mahasiswa/datamahasiswa.php" style="color:black;">
              <span class="material-symbols-outlined">list</span>
                Data Mahasiswa
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../matkul/matkul.php" style="color:black;">
              <span class="material-symbols-outlined">book_5</span>
                Mata Kuliah
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="../krs/krs.php" style="color:black;">
              <span class="material-symbols-outlined">edit</span>
                KRS
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
              <span class="material-symbols-outlined">picture_as_pdf</span>
                KHS
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

 
      <div class="head m-4">

<h6>Daftar Nilai Tiap Semester</h6>

      </div>



  

    <h1></h1>

    <table class="table table-bordered" >
		<tr>
			<th width="1%">No</th>
            <th>Tahun</th>
			<th>Semester</th>
			<th>Kelas</th>
			<th width="5%">SKS Semester</th>
			<th>SKS Kumulatif</th>
			<th>IP Semester</th>
			<th>IP Kumulatif</th>
      <th>Lihat Nilai</th>
		</tr>
        <tr>
      <td>1</td>
      <td>2021</td>
      <td>1</td>
      <td>B</td>
      <td>20.00</td>
	  <td>20.0</td>
	  <td>3.80</td>
	  <td>3.80</td>
    <td>
    <a href="khs.php">
        <button type="button" style="background-color:green;">
          <span class="material-symbols-outlined"style="color:white">visibility</span>      
        </button>
      </a>
      </td>
		</tr>


        <tr>
      <td>2</td>
      <td>2022</td>
      <td>2</td>
      <td>B</td>
      <td>19.00</td>
	  <td>39.0</td>
	  <td>3.62</td>
	  <td>3.71</td>
    <td>
    <a href="khs.php">
        <button type="button" style="background-color:green;">
          <span class="material-symbols-outlined" style="color:white">visibility</span>      
        </button>
      </a>
      </td>
		</tr>

    <tr>
      <td>3</td>
      <td>2022</td>
      <td>3</td>
      <td>B</td>
      <td>24.00</td>
	  <td>63.0</td>
	  <td>3.64</td>
	  <td>3.67</td>
    <td>
    <a href="khs.php">
        <button type="button" style="background-color:green;">
          <span class="material-symbols-outlined"style="color:white">visibility</span>      
        </button>
      </a>
      </td>
		</tr>


	
	</table>

    </main>
  </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
