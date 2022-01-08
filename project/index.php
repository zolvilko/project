
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Project</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
      .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
      }

      @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=list">Buku tamu</a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link" href="index.php?p=profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=login">Login</a>
        </li> -->
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container-fluid">

  <div class="row">
    <div class="col-md-2">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=list_tamu">
              <span data-feather="book"></span>
              Buku Tamu
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=list_mhs">
              <span data-feather="user"></span>
              Mahasiswa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=list_brg">
              <span data-feather="box"></span>
              Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=list_jenis">
              <span data-feather="list"></span>
              Jenis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=list_supplier">
              <span data-feather="users"></span>
              Supplier
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?p=profil">
              <span data-feather="shopping-cart"></span>
              Profil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?p=login">
              <span data-feather="users"></span>
              Login
            </a>
          </li> -->
         
        </ul>

      </div>
    </nav>
    </div>
    <div class="col-md-9 ">
    <?php 
      $p=isset($_GET['p']) ? $_GET['p'] : 'home'; //ternary
      if ($p=='home') include 'home.php';
      if ($p=='list_tamu') include 'tamu/index.php';
      if ($p=='input_tamu') include 'tamu/add.php';
      if ($p=='edit_tamu') include 'tamu/edit.php';
      if ($p=='hapus_tamu') include 'tamu/delete.php';

      if ($p=='list_mhs') include 'mahasiswa/index.php';
      if ($p=='input_mhs') include 'mahasiswa/add.php';
      if ($p=='edit_mhs') include 'mahasiswa/edit.php';
      if ($p=='hapus_mhs') include 'mahasiswa/delete.php';

      if ($p=='list_brg') include 'barang/index.php';
      if ($p=='input_brg') include 'barang/add.php';
      if ($p=='edit_brg') include 'barang/edit.php';
      if ($p=='hapus_brg') include 'barang/delete.php';

      if ($p=='list_jenis') include 'jenis/index.php';
      if ($p=='input_jenis') include 'jenis/add.php';
      if ($p=='edit_jenis') include 'jenis/edit.php';
      if ($p=='hapus_jenis') include 'jenis/delete.php';

      if ($p=='list_supplier') include 'supplier/index.php';
      if ($p=='input_supplier') include 'supplier/add.php';
      if ($p=='edit_supplier') include 'supplier/edit.php';
      if ($p=='hapus_supplier') include 'supplier/delete.php';

    ?> 
    
    </div>
  </div>
</div>


    <!-- <script src="js/bootstrap.bundle.js"></script> -->

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script>
        feather.replace({ 'aria-hidden': 'true' })
      </script>
  </body>
</html>
