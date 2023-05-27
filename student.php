<?php

session_start();

include("classes/connect.php");
include("classes/login.php");
include("classes/user.php");
include("classes/class.php");

$error = "";

if (isset($_SESSION['userid']) && is_numeric($_SESSION['userid'])) {
  $id = $_SESSION['userid'];
  $login = new Login();
  $result = $login->checkLogin($id, "");

  if ($result) {
    $user = new User();
    $user_data = $user->get_data($id);
    if (!$user_data) {
      header("Location: login.php");
      die;
    } else {
    }
  } else {
    header("Location: login.php");
    die;
  }
} else {
  header("Location: login.php");
}

$check = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $check = True;
  $class_year = $_POST['classYear'];
  $class_name = $_POST['className'];

  $sqlString = "SELECT * FROM class_info ";
  $filter = "WHERE ";
  $order = "ORDER BY year ASC ";


  if (!empty($class_year) or !empty($class_name)) {

    if (!empty($class_year) and empty($class_name)) {
      $filter .= "year = '$class_year' ";
      $query = $sqlString . $filter . $order;
    } else if (empty($class_year) and !empty($class_name)) {
      $filter .= "class_name = '$class_name' ";
      $query = $sqlString . $filter . $order;
    } else {
      $filter .= "year = '$class_year' AND class_name = '$class_name' ";
      $query = $sqlString . $filter . $order;
    }
  } else {
    $query = $sqlString . $order;
  }


  $get_data = new ClassInfo();
  $result = $get_data->get_data($query);

  // $error = $query;
  // echo("<input type='hidden' value='$error' id='error'>");

}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include_once("pages/navbar.php"); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


      <!-- Sidebar -->
      <?php include_once("pages/sidebar.php"); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Students List</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form action="" method="POST">
                    <div class="row">
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-bold">Tahun</div>
                        <select name="classYear" class="form-control mt-2">
                          <option Value="0">-- Sila Pilih --</option>
                          <option Value="1">1</option>
                          <option Value="2">2</option>
                          <option Value="3">3</option>
                          <option Value="4">4</option>
                          <option Value="5">5</option>
                          <option Value="6">6</option>
                        </select>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="text-bold">Kelas</div>
                        <select name="className" class="form-control mt-2">
                          <option Value="0">-- Sila Pilih --</option>
                          <option Value="IBNU SINA">IBNU SINA</option>
                          <option Value="IBNU KATHIR">IBNU KATHIR</option>
                          <option Value="IBNU KHALDUN">IBNU KHALDUN</option>
                          <option Value="IBNU HAYYAN">IBNU HAYYAN</option>
                        </select>
                      </div>
                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class=""><br /></div>
                        <div class="mt-2">
                          <button class=" btn btn-success">Pilih</button>
                        </div>
                      </div>
                    </div>
                  </form>

                  <div class="d-flex justify-content-center flex-wrap mt-3">

                    <?php
                    if ($check) {
                      $count = 0;
                      foreach ($result as $row) {
                        $count++;
                        $year = $row["year"];

                        if($year)
                    ?>
                        <div class="card bg-light my-4 mx-2" style="width: 18rem;">
                          <div class="card-body">
                            <p class="card-text text-center text-bold mt-2 mb-4 h4 ">
                              <?php echo ($row["year"]) . " " . $row["class_name"] ?>
                            </p>
                            <div class="text-center">
                            <a href="studentlist.php?id=<?php echo ($row["id"]) ?>" class="btn btn-primary">Papar</a>                            </div>
                          </div>
                        </div>
                    <?php
                      }
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-12 -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1 dev
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../../plugins/datatables/jquery.dataTables.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <!-- <script src="dist/js/adminlte.js"></script> -->
</body>

</html>