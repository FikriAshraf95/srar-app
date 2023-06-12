<?php

include("../controllers/global.php");

$gl = new GL();
$getGLparameter = $gl->glParameterParentAll();

?>
<!DOCTYPE html>
<html>

<title>Senarai Parameter</title>

<?php include_once("../resources/pages/header.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once("../resources/pages/navbar.php"); ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <?php include_once("../resources/pages/sidebar.php"); ?>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Maklumat Parameter </h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title mt-2">Senarai Parameter</h3>
                            <div class="float-right">
                                <a href="" class="btn btn-success mx-2">
                                    <i class="fas fa-plus"></i>
                                    <span class="mx-2">Tambah</span>
                                </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Parameter</th>
                                        <th>Kod Parameter</th>
                                        <th>Deskripsi Parameter</th>
                                        <th>Sequence</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                $i = 1;
                                foreach($getGLparameter as $value){
                                    $count = $i;
                                    $parameterID = $value['ID'];
                                    $parameterName = $value['PARAMETER_NAME'];
                                    $parameterCode = $value['PARAMETER_CODE'];
                                    $parameterDesc = $value['PARAMETER_DESCRIPTION'];
                                    $sequence = $value['SEQUENCE']; 
                                ?>
                                    <tr>
                                        <td><?= $count; ?></td>
                                        <td><?= $parameterName; ?></td>
                                        <td><?= $parameterCode; ?></td>
                                        <td><?= $parameterDesc; ?></td>
                                        <td><?= $sequence; ?></td>
                                        <td>
                                            <div class="text-center">
                                                <a href="maklumatParameter.php?id=<?=$parameterID?>" class="btn btn-warning mx-2">
                                                    <i class="fas fa-edit"></i>
                                                    <span class="mx-2">Kemaskini</span>
                                                </a>
                                                <a href="" class="btn btn-danger mx-2">
                                                    <i class="fas fa-trash"></i>
                                                    <span class="mx-2">Padam</span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    $i ++;
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include_once("../resources/pages/footer.php"); ?>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <?php 
    include_once("../resources/pages/all-scripts.php"); 
    ?>

    <script>
    $(function () {
        $("#example1").DataTable();
        // $('#example2').DataTable({
        // "paging": true,
        // "lengthChange": false,
        // "searching": false,
        // "ordering": true,
        // "info": true,
        // "autoWidth": false,
        // });
    });
    </script>

</body>

</html>