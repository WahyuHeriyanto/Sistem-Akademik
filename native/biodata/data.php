<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">   
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
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
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
              <a class="nav-link d-flex align-items-center gap-2" href="../khs/index.php" style="color:black;">
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

<div class="foto m-4">
  <img src="heri.jpeg" alt="..." style="width:150px;">
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 m-3">
<h1 class="h2"></h1>
  <div class="col-auto">
    <button type="button" style="background-color:yellow;">Edit Biodata</button>
  </div>

</div>


<h5>Data Diri</h5>
    <table class="table table-bordered">
  <tbody>
    <tr>
      <td>Nama</td>
      <td>Wahyu Heriyanto</td>
    </tr>
    <tr>
    <td>NIM</td>
      <td>I0721077</td>
    </tr>
    <tr>
      <td>Tempat, Tanggal lahir</td>
      <td>MAGELANG, 4 November 2002</td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td>Laki-Laki</td>
    </tr>
    <tr>
      <td>Agama</td>
      <td>Islam</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>Aktif</td>
    </tr>
  </tbody>
</table>


    </main>
  </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
