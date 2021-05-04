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

  <title>Tara's Dahboard</title>

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
            <h1 class="h3 mb-0 text-gray-800">Welcome Administrator!</h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="dashboard.php">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">DASHBOARD</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-fw fa-tachometer-alt fas fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>             
            </div>
          </div>

          <!-- Chocolate -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Chocolate</h1>
          </div>

          <div class="row">

            <!-- Chocolate (Caramel) -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="ccCaramel.php">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">CARAMEL</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cookie-bite fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>              
            </div>
            <!-- Chocolate (Caramel) -->

            <!-- Chocolate (Candy) -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="ccCandy.php">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">CANDY</div>                     
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-cookie-bite fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            <!-- Chocolate (Candy) -->          
            
            <!-- Chocolate (Peanut) -->                      
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="ccPeanut.php">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">PEANUT</div>                     
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-cookie-bite fa-2x text-gray-300"></i>
                    </div>
                  </>
                </div>
              </div>
            </div>
            </a>            
          </div>  
          <!-- Chocolate (Peanut) -->         
        </div> 

          <!-- Celebration -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Celebration</h1>
          </div>

          <div class="row">

            <!-- Celebration (Wedding) -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="clWedding.php">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">WEDDING</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-birthday-cake fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>              
            </div>
            <!-- Celebration (Wedding) -->

            <!-- Celebration (Birthday) -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="clBirthday.php">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">BIRTHDAY</div>                     
                    </div>
                    <div class="col-auto">
                    <i class="fas fa-birthday-cake fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            <!-- Celebration (Birthday) -->        
            
            <!-- Celebration (Costum) -->                 
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="clCostum.php">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">COSTUM</div>                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-birthday-cake fa-2x text-gray-300"></i>
                    </div>
                </div>
              </div>
            </div>
            </a>            
          </div>  
          <!-- Chocolate (Peanut) -->              
        </div>

        <!-- Sweet Cake -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Sweet Cake</h1>
          </div>

          <div class="row">

            <!-- Sweet Cake (Red Velvet) -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="swRedvelvet.php">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">RED VELVET</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cheese fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>              
            </div>
            <!-- Sweet Cake (Red Velvet) -->

            <!-- Sweet Cake (Cheese) -->
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="swCheese.php">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">CHEESE</div>                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cheese fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>
            <!-- Sweet Cake (Cheese) -->     
            
            <!-- Sweet Cake (Green Tea) -->               
            <div class="col-xl-3 col-md-6 mb-4">
            <a href="swGreentea.php">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">GREEN TEA</div>                     
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-cheese fa-2x text-gray-300"></i>
                    </div>
                </div>
              </div>
            </div>
            </a>            
          </div>  
          <!-- Sweet Cake (Green Tea) -->                 
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>