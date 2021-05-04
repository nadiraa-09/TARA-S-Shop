<!--Gallery-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
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
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="index.php">HOME</a></li>
          <li role="presentation"><a href="menu.php">MENU</a></li>
          <li role="presentation"><a href="gallery.php">GALLERY</a></li>
          <li role="presentation"><a href="about.php">ABOUT</a></li>
          <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background2">
    <div class="jumbotron2">
      <h1>Gallery</h1>
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container news -->
  <div id="news">
    <div class="container">
      <h1>Gallery</h1>
      <p>All our cakes are bespoke & freshly made to order. </p>
      <img src="assets/img/decoration2.png">
      <p>You can select a design to personalise it or let us design something new especially for you.</p>

      <!--Wedding-->
      <h1>Wedding Cake</h1>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from wedding where kode in ('1')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clWedding/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from wedding where kode in ('2')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clWedding/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from wedding where kode in ('3')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clWedding/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from wedding where kode in ('4')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clWedding/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>


      </div>

      <!--Wedding-->

      <!--Celebrations-->
      <h1>Birthday Cake</h1>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from birthday where kode in ('1')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clBirthday/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from birthday where kode in ('2')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clBirthday/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from birthday where kode in ('3')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clBirthday/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from birthday where kode in ('4')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clBirthday/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
      </div>

      <!--Celebrations-->

      <!--Sweet Treats-->
      <h1>Costum Cake</h1>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from costum where kode in ('1')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clCostum/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from costum where kode in ('2')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clCostum/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from costum where kode in ('3')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clCostum/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from costum where kode in ('4')");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
          <div class="thumbnail">
            <td><?php echo "<img src ='images/clCostum/".$data['foto']."' width = '400' height = '400'>" ;?></td>
          </div>
          <?php
              }
            ?>
        </div>
      </div>
      <!--Sweet Treats-->
    </div>
  </div>
  <!-- container news -->

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