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
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
              <span class="material-symbols-outlined">book_5</span>
                Mata Kuliah
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
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
              <a class="nav-link d-flex align-items-center gap-2" href="#" style="color:black;">
              <span class="material-symbols-outlined">logout</span>
                Sign out
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <main class="content col-lg-10 ">

    <table class="table m-3">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">I0721077</th>
      <th scope="col">Pembimbing Akademik</th>
      <th scope="col">IRWAN IFTADI</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="col">Nama</th>
      <th scope="col">WAHYU HERIYANTO</th>
      <th scope="col">Status Mahasiswa</th>
      <th scope="col">Aktif</th>
    </tr>
  </tbody>
</table>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <div class="search mb-2 mb-md-0"> 
        <form class="row g-2 mb-2 mb-md-0">
  <div class="col-auto">
  <button type="button" class="btn text-white" style="background-color:green;">
  Ambil Mata Kuliah
</button>
  </div>
  <div class="col-auto">
    <button type="button" class="btn" style="background-color:green;">
    <a class="btn-text text-white"href="cetak.php">Cetak KRS</a></button>
  </div>
</form>
        </div>

</div>


    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode MK</th>
      <th scope="col">Nama MK</th>
      <th scope="col">SKS</th>
      <th scope="col">Smt</th>
      <th scope="col">Ruang</th>
      <th scope="col">Hari</th>
      <th scope="col">Jam Kuliah</th>
      <th scope="col">Dosen</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>EE0501-19</td>
      <td>JARINGAN KOMUNIKASI DATA</td>
      <td>2</td>
      <td>5</td>
      <td>Ruang Kuliah 3</td>
      <td>Kamis</td>
      <td>07.30 - 09.10</td>
      <td>Dr. Eng. Ir. Faisal Rahutomo, S.T., M.Kom</td>
      <td>
        <button type="button" style="background-color:rgb(222, 20, 20);">
          <span class="material-symbols-outlined">delete</span>      
        </button>
      </td>
    </tr>
    <tr>


    </tr>
  </tbody>
</table>


    </main>
  </div>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js" integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
