<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>

    <!-- Boostrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

    <!-- css ku -->
    <link rel="stylesheet" href="style.css" />
    <link rel="shortcut icon" href="image/icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
      $(document).ready(function () {
        $(".slider").bxSlider({
          auto: true,
        });
      });
    </script>
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

    <!-- Header -->
    <section class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4"><span>Hello</span> Everybody!</h1>
      </div>
    </section>
    <!-- end header -->

    <!--Tagline-->
    <div class="container-fluid tagline">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Center of <span>Maintenance</span> Helmet</h1>
            <h5>" Solution for Maintenance your lovely Helmet "</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- end tagline -->

    <!-- education -->
    <div class="container education">
      <div class="row">
        <div class="col-md-6">
          <hr />
          <h1>Education</h1>
          <h5>Tutorial</h5>
          <p>Kita menghadirkan beberapa tutorial dan Tips & Trick merawat helm yang baik dan benar. Silahkan ditonton dengan mengklik link dibawah ini :</p>
          <a class="btn" href="education.php" role="button">View More</a>
        </div>
        <div class="col-md-6">
          <div class="frame-vidio">
            <iframe src="https://www.youtube.com/embed/Rx1TcwOiUCg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- end education -->

    <!-- Service -->
    <div class="container-fluid service">
      <div class="container">
        <h1>Our <span>Service</span></h1>
        <hr />
        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card" style="width: auto">
              <img src="assets/img/cucihelm.jpg" class="card-img-top" alt="cucihelm" />
              <div class="card-body">
                <h5 class="card-title">Inner Washing</h5>
                <p class="card-text">Proses ini adalah pencucian inner helm yang meliputi busa helm</p>
                <p class="card-text">Rp 30.000</p>
                <button type="button" class="btn">Hubungi Kami</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: auto">
              <img src="assets/img/duo.jpg" class="card-img-top" alt="cucihelm" />
              <div class="card-body">
                <h5 class="card-title">Detailing & Treatment</h5>
                <p class="card-text">Proses ini adalah pencucian secara detail meliputi inner & outer helm</p>
                <p class="card-text">Rp 50.000</p>
                <button type="button" class="btn">Hubungi Kami</button>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: auto">
              <img src="assets/img/araiprofile.jpg" class="card-img-top" alt="cucihelm" />
              <div class="card-body">
                <h5 class="card-title">Shell Polish</h5>
                <p class="card-text">Proses ini adalah pemolesan shell helm agar terlihat selalu berkilau</p>
                <p class="card-text">Rp 50.000</p>
                <button type="button" class="btn">Hubungi Kami</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,32L48,37.3C96,43,192,53,288,80C384,107,480,149,576,154.7C672,160,768,128,864,133.3C960,139,1056,181,1152,181.3C1248,181,1344,139,1392,117.3L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
      ></path>
    </svg>
    <!-- end service -->

    <!-- Akhir -->
    <div class="container kata">
      <h1>Dapatkan harga spesial <br /><span>Dari Kami</span></h1>
      <br />
      <p>Silahkan hubungi admin kami untuk promo dan penarawan menarik lainnya</p>
      <a class="btn btn-primary" href="formmember.php" role="button">Daftar Member</a>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <!-- End Akhir -->

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
