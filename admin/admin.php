<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Asignatura | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini" style="overflow-x: hidden;">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Teacher Web.html" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Teacher Web.html" class="brand-link">
      <img src="../img/MNKLOGO.png" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">Asignatura</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p class="lead" style="color:#fff;">Asignatura Admin</p>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">          
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-info">Click me!</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Course
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>BSCS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>BSIS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>BSIT</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>BSEMC</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Teachers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">                  
                  <p>BSCS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">                  
                  <p>BSIS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">                  
                  <p>BSIT</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <p>BSEMC</p>
                </a>
              </li>
            </ul>
          </li>


          

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
                <!-- <span class="right badge badge-info">Click me!</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Records</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item ACT"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
      	<div class="row">

      		<div class="col-lg-3">
      			<div class="A">
      				<h2>BSCS Students</h2>
      				<p class="lead">350</p>
      			</div>
      		</div>
      		

      		<div class="col-lg-3">
      			<div class="B">
      				<h2>BSIS Student</h2>
      				<p class="lead">251</p>
      			</div>
      		</div>

      		<div class="col-lg-3">
      			<div class="C">
      				<h2>BSIT Student</h2>
      				<p class="lead">301</p>
      			</div>
      		</div>

      		<div class="col-lg-3">
      			<div class="D">
      				<h2>BSEMC Student</h2>
      				<p class="lead">201</p>
      			</div>
      		</div>
      	</div>


      	<h1 class="text-center display-5 p-5">Total Number</h1>
        

      	<div class="row">

      		<div class="col-lg-6">
      			<div class="E">
      				<h1 class="display-4">Teacher Enrolled</h1>
      				<p class="lead">98</p>
      			</div>
      		</div>
      		

      		<div class="col-lg-6">
      			<div class="F">
      				<h1 class="display-4">Student Enrolled</h1>
      				<p class="lead">1,103</p>
      			</div>
      		</div>

      		
      	</div>
        
        
      </div>
    </div>










    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <!-- JOSHUA VILLANUEVA -->
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021-2022 <a href="../../index.html">Asignatura.com</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
