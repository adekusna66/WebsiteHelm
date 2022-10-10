<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Daftar Member</title>

    <!-- Boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- css ku -->
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="image/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <img src="assets/img/logo2.png" alt="" height="50px" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="index.php"><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="about.php"><span>About</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="gallery.php"><span>Gallery</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="education.php"><span>Education</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end nav -->

    <?php 
    error_reporting(E_ALL ^ E_WARNING||E_NOTICE);
    $nama =$_POST['nama'];
    $alamat =$_POST['alamat'];
    $jeniskel =$_POST['jeniskel'];
    $status =$_POST['status'];

    ?> 
    <div class="container-fluid">
      <div class="container">
        <br/>
        <table border="1">
          <tr>
            <td colspan="2" align="center"><b>Data Member</b></td>
          </tr>
          <tr>
            <td>Nama  : Ade Kusna Eka Syahputra</td>
            <td><?php echo $nama; ?></td>
          </tr>
          <tr>
            <td>Alamat  : Jakarta</td>
            <td><?php echo $alamat; ?></td>
          </tr>
          <tr>
            <td>Jenis Kelamin : Laki-Laki</td>
            <td><?php echo $jeniskel; ?></td>
          </tr>
          <tr>
            <td>Pekerjaan : Karyawan</td>
            <td><?php echo $status; ?></td>
          </tr>
        </table>
      </div>
    </div>
    <br/>
  
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a class="btn btn-primary" href="index.php" role="button">Halaman Awal</a><br/>
    <!--footer-->
    <div class="container-fluid footer">
      <div class="container pt-4">
        <div class="row">
          <div class="col-md-5">
            <h3>Butuh Bantuan?</h3>
            <p>
              Hubungi kami jika ada masukan dan saran <br />
              untuk kemajuan layanan kami
            </p>
            <p>
              Phone : (082) 299844775 <br />
              adekusna66@gmail.com
            </p>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12">
                <h3>Pages</h3>
                <ul class="list-group">
                  <li list-group-item><a href="index.php">Home</a></li>
                  <li list-group-item><a href="about.php">About</a></li>
                  <li list-group-item><a href="gallery.php">Gallery</a></li>
                  <li list-group-item><a href="education.php">Education</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <h3>Social Media</h3>
            <a href="https://www.facebook.com/adekusna"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/adeku_y/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCnld05_Cqe9jZ9Vs4K31Y6A/videos"><i class="fa-brands fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
