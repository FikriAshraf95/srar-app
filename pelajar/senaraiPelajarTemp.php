<!DOCTYPE html>
<html>
<title>Senarai Kelas</title>

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
                            <h1 class="m-0 text-dark">Kelas</h1>
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
                                    <h3 class="card-title mt-2">Senarai Kelas</h3>
                                    <div class="float-right">
                                        <a href="tambahKelas.php" class="btn btn-success mx-2">
                                            <i class="fas fa-plus"></i>
                                            <span class="mx-2">Tambah</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <span class="text-bold">Tahun</span>
                                            <div class="my-2">
                                                <select name="ddlYear" id="ddlYear" onchange="getDdlYearValue()"
                                                    class="form-control select2 select2-hidden-accessible"
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="0" readonly="">-- Sila Pilih --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <span class="text-bold">Kelas</span>
                                            <div class="my-2">
                                                <select name="ddlCLass" id="ddlCLass" onchange="getDdlClassValue()"
                                                    class="form-control select2 select2-hidden-accessible" 
                                                    tabindex="-1" aria-hidden="true">
                                                    <option value="0">-- Sila Pilih --</option>
                                                    <?php
                                                    foreach($ddlClass as $value){
                                                        $id = $value['PARAMETER_CODE'];
                                                        $parameterName = $value['PARAMETER_NAME'];
                                                    ?>
                                                    <option value="<?=$id?>" data-select2-id="<?=$id?>"><?=$parameterName?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="" id="example_wrapper">
                                                <form method="POST">
                                                    <table id="tblStudent" class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Nama Kelas</th>
                                                                <th>Tahun</th>
                                                                <th>Jumlah Pelajar</th>
                                                                <th>Guru Kelas</th>
                                                                <th>Tindakan</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                        <?php
                                                        $i = 1;
                                                        // while($i <= 10){
                                                        foreach($listClass as $value){
                                                            $count = $i;
                                                            $classID = $value['ID'];
                                                            $className = $value['PARAMETER_NAME'];
                                                            $classYear = $value['YEAR'];
                                                            $classTotal = '20';//$value['PARAMETER_DESCRIPTION'];
                                                            $classPIC = 'ADMIN'; //$value['SEQUENCE']; 
                                                        ?>
                                                            <tr>
                                                                <td><?= $i; ?></td>
                                                                <td><?=$className?></td>
                                                                <td><?=$classYear?></td>
                                                                <td><?=$classTotal?></td>
                                                                <td><?=$classPIC?></td>
                                                                <td>
                                                                    <div class="text-center">
                                                                        <a href="senaraiPelajar.php?id=<?=$classID?>" class="btn btn-warning mx-2">
                                                                            <i class="fas fa-edit"></i>
                                                                            <span class="mx-2">Kemaskini</span>
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
        var table = $('#tblStudent').DataTable({});
    });

    function getDdlYearValue() {
        var ddlYear = document.getElementById("ddlYear");
        var selectedValue = ddlYear.value;
        if(selectedValue != '0'){
            // alert(selectedValue);
            filterYear(selectedValue);
        } else {
            resetYearFilter();
        }
    }

    function getDdlClassValue() {
        var ddlClass = document.getElementById("ddlCLass");
        var value = ddlClass.selectedIndex;
        var selectedText = ddlClass.options[value].text;
        if(value != '0'){
            // alert(value);
            filterClass(selectedText);
        } else {
            resetClassFilter();
        } 
    }

    function filterYear(data) {
        var table = $('#tblStudent').DataTable();
        table.column(2).search(data).draw();
    }

    function filterClass(data) {
        var table = $('#tblStudent').DataTable();
        table.column(1).search(data).draw();
    }
    
    function resetYearFilter() {
        var table = $('#tblStudent').DataTable();
        table.column(2).search('').draw();
    }

    function resetClassFilter() {
        var table = $('#tblStudent').DataTable();
        table.column(1).search('').draw();
    }
    </script>
</body>
</html>

<?php

?>