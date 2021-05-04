<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Celebrations Cake</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default2 navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">
        <a href="index.html" class="navbar-brand navbar-link"><img src="assets/img/logo2.png"></a>
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span
            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span
            class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
      </div>
    </div>
  </nav>
  <!-- navbar -->


  <div class="kotak_login">
    <p class="tulisan_login"><img src="assets/img/logo.png">
      <form method="POST" action="cek_login.php">
        <label>Username</label>
        <input type="text" name="username" class="form_login">
        <label>Password</label>
        <input type="password" name="password" class="form_login">
        <input type="submit" class="btn-warning tombol_login" value="LOGIN">
        <br />
        <br />
        <center>
          <a class="link" href="index.php">kembali</a>
        </center>
      </form>

  </div>

  <!-- about -->
  <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="assets/img/logo2.png" width="180px"></h1>
        <h2>About Us</h2>
        <p>Our Location shop :</p>
        <p>Jl. Gaja Mada blok B13 no.12 </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h2>Contact Us</h2>
        <div class="input-group input-group-lg">
          <input type="text" class="form-control" value="Taracake@gmail.com">
          <div class="input-group-btn">
            <button class="btn btn-primary" type="submit">Subscribe </button>
          </div>
        </div>
        <div id="icon"><i class="fa fa-instagram"></i><i class="fa fa-facebook-official"></i><i
            class="fa fa-twitter-square"></i><i class="fa fa-youtube-play"></i></div>
      </div>
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">TARA (Erna Umi). © 2020</h5>
    </div>
  </div>
  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>