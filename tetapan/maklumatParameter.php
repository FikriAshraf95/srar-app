<?php

include("../controllers/global.php");

$gl = new GL();
$id = $_GET['id'];
$getGLparameterP = $gl->glParameterParent($id);

$parameterNameP = $getGLparameterP[0]['PARAMETER_NAME'];
$parameterCodeP = $getGLparameterP[0]['PARAMETER_CODE'];
$parameterDescP = $getGLparameterP[0]['PARAMETER_DESCRIPTION'];
$parameterSequP = $getGLparameterP[0]['SEQUENCE'];

$getGLparameter = $gl->glParameter($parameterCodeP);

?>
<!DOCTYPE html>
<html>

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
                            <h1 class="m-0 text-dark">Maklumat Parameter</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title mt-2"></h3>
                        </div> -->
                        <div class="card-body">
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <span>Nama Parameter: </span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="" class="form-control" value="<?=$parameterNameP?>" readonly="">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <span>Kod Parameter: </span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="" class="form-control" value="<?=$parameterCodeP ?>" readonly="">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <span>Deskripsi Parameter: </span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="" class="form-control" value="<?=$parameterDescP ?>" readonly="">
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-3">
                                    <span>Susunan: </span>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="" id="" class="form-control" value="<?=$parameterSequP ?>" readonly="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <a href="" class="btn btn-warning">
                                        <i class="fas fa-plus"></i>
                                        <span class="mx-2">Kemaskini</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Parameter</th>
                                            <th>Kod Parameter</th>
                                            <th>Susunan</th>
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
                                        $sequence = $value['SEQUENCE']; 
                                    ?>
                                        <tr>
                                            <td><?= $count; ?></td>
                                            <td><?= $parameterName; ?></td>
                                            <td><?= $parameterCode; ?></td>
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
                        </form>
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
    <?php include_once("../resources/pages/all-scripts.php"); ?>
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