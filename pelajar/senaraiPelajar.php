<!DOCTYPE html>
<html>
<title>Senarai Pelajar</title>

<?php include_once("../controllers/classController.php"); ?>
<?php include_once("../resources/pages/header.php"); ?>

<?php
$DB = new ClassContoller();
$ddlClass = $DB->readClass();
$countClass = $DB->countClass();
$listClass = $DB->readAll();
?>

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
                            <h1 class="m-0 text-dark">Pelajar</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title mt-2">Senarai Pelajar</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="" id="example_wrapper">
                                                <form method="POST">
                                                    <table id="tblStudent" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Nama</th>
                                                                <th>No. IC</th>
                                                                <th>Kelas</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Fikri Ashraf</td>
                                                                <td>9511110146187</td>
                                                                <td>1 Ibnu Sina</td>
                                                                <td>
                                                                    <div class="text-center">
                                                                        <a href="maklumatPelajar.php?id=1" class="btn btn-primary mx-2">
                                                                            <i class="fas fa-search"></i>
                                                                            <span class="mx-2">Bayaran</span>
                                                                        </a>
                                                                        <button type="submit" class="btn btn-danger mx-2" name="id" value="<?php echo($classID); ?>">
                                                                        <i class="fas fa-trash"></i>
                                                                            <span class="mx-2">Padam</span>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    <?php include_once("../resources/pages/all-scripts.php"); ?>
    <script>
    $(document).ready(function() {
        var table = $('#tblStudent').DataTable({
            "columnDefs": [
                { "width": "5%", "targets": 0 },
                { "width": "30%", "targets": 1 },
                { "width": "10%", "targets": 2 },
                { "width": "15%", "targets": 3 },
            ]
        });
    });
    </script>
</body>
</html>

<?php

?>