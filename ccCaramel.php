<?php
session_start();
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tara's Caramel</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="assets/img/logo.png">
      </a>
      <!-- Sidebar - Brand -->

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Divider -->

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <!-- Nav Item - Dashboard -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Divider -->


      <!-- Nav Item - Pages Collapse Menu -->
      <div class="sidebar-heading">
        Menu
      </div>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
          aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cookie-bite"></i>
          <span>Chocolate</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="ccCaramel.php">Caramel</a>
            <a class="collapse-item" href="ccCandy.php">Candy</a>
            <a class="collapse-item" href="ccPeanut.php">Peanut</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
          aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-birthday-cake"></i>
          <span>Celebration</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="clWedding.php">Wedding</a>
            <a class="collapse-item" href="clBirthday.php">Birthday</a>
            <a class="collapse-item" href="clCostum.php">Costum</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
          aria-controls="collapsePages">
          <i class="fas fa-fw fa-cheese"></i>
          <span>Sweet Cake</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="swRedvelvet.php">Red Velvet</a>
            <a class="collapse-item" href="swCheese.php">Cheese</a>
            <a class="collapse-item" href="swGreentea.php">Green Tea</a>
            <div class="collapse-divider"></div>
          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Divider -->

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user;?></span>
                <img class="img-profile rounded-circle" src='images/account.png'>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                <a class="dropdown-item" href="login.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="#" id="tambahCaramel" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"
              data-toggle="modal" data-target="#modalSaya"><i class="fas fa-fw fa-plus-circle mr-2"></i>TAMBAH DATA</a>
            <a href="ccCaramel1.php" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                class="fas fa-fw fa-eye"></i></i> SHOW FRONT-END WEB</a>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-warning">CARAMEL</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Keterangan</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Gambar</th>
                      <th colspan="3" scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                  include 'koneksi.php';
                  $no = 1;
                  $sql = mysqli_query($koneksi, "select*from caramel");
                  while($data = mysqli_fetch_array($sql)){
                  ?>
                    <tr>
                      <td><?php echo $data['caramelid']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['ket']; ?></td>
                      <td><?php echo $data['harga']; ?></td>
                      <td><?php echo "<img src ='images/ccCaramel/".$data['foto']."' width = '100' height = '100'>" ;?>
                      </td>
                      <td><i class="fas fa-edit bg-success p-2 text-white rounded"></i>
                        <a href="#" data-role="pop" data-id="<?php echo $data['caramelid'];?>">Edit</a>
                        <i class="fas fa-trash-alt bg-danger p-2 text-white rounded"></i>
                        <a href="#" data-role="pop2" data-id="<?php echo $data['caramelid']?>">Delete</a>
                    </tr>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ubah Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="ccCaramel_update.php" enctype="multipart/form-data" method="post">
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>No</label>
                                  <input type="text" name="caramelid" class="form-control" id="caramelid" readonly>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Nama</label>
                                  <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Keterangan</label>
                                  <input type="text" name="ket" class="form-control" id="ket">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Harga</label>
                                  <input type="text" name="harga" class="form-control" id="harga">
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-6">
                                  <label>Gambar</label>
                                  <input type="file" name="foto" id="foto">
                                </div>
                              </div>

                          </div>
                          <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button> -->
                            <button type="submit" class="btn btn-warning">SIMPAN</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /Modal Edit -->

                    <!-- Modal Delete -->
                    <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="ccCaramel_delete.php" method="post">
                              Apakah anda yakin ingin menghapus data <b id="datadel"></b>?
                              <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning">Save changes</button> -->
                                <input type="hidden" name="datadel" id="datadel2">
                                <button type="submit" class="btn btn-warning">DELETE</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /ModalDelete -->
                    <?php
              }
            ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; TARA'S 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!--Contoh Modal Tambah-->
  <div class="modal fade" id="modalSaya" tabindex="-1" role="dialog" aria-labelledby="modalSayaLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalSayaLabel">Tambah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="ccCaramel_upload.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>No</label>
                <input type="text" name="caramelid" class="form-control" id="caramelid">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Keterangan</label>
                <input type="text" name="ket" class="form-control" id="ket">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" id="harga">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Gambar</label>
                <input type="file" name="foto" id="foto">
              </div>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning">Save changes</button> -->
              <button type="submit" class="btn btn-warning">SIMPAN</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <script>
    // Tambah
    $("#tambahcaramel").click(function () {
      $("#modalsaya").modal();
    });
    // Edit
    $("a[data-role=pop]").click(function () {
      var id = $(this).data("id");
      console.log(id);
      // $("#ModalEdit").modal();
      $.ajax({
        type: 'POST',
        url: 'ccCaramel_get.php',
        data: {
          id: id
        },
        success: function (data) {
          console.log(data);
          $('#ModalEdit').modal();
          var row = JSON.parse(data);
          console.log(row['caramelid']);
          $("#caramelid").val(row['caramelid']);
          $("#nama").val(row['nama']);
          $("#ket").val(row['ket']);
          $("#harga").val(row['harga']);
          $("#foto").val(row['foto']);
        }
      });
    });
    // Hapus
    $("a[data-role=pop2]").click(function () {
      var id = $(this).data("id");
      console.log(id);
      $.ajax({
        type: 'post',
        url: 'ccCaramel_get.php',
        data: {
          id: id
        },
        success: function (data) {
          console.log(data);
          $("#ModalDelete").modal();
          var row = JSON.parse(data);
          console.log(row['caramelid']);
          $("#datadel2").val(row['caramelid']);
          $("#datadel").text(row['caramelid']);

        }
      });
    });
  </script>
</body>

</html>