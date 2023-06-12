<!DOCTYPE html>
<html>
<title>Kemas Kini Kelas</title>

<?php include_once("../controllers/classController.php"); ?>
<?php include_once("../resources/pages/header.php"); ?>

<?php

$id = $_GET['id'];

$DB = new ClassContoller();
$ddlClass = $DB->readClass();
// $countClass = $DB->countClass();
$infoClass = $DB->read($id);

foreach($infoClass as $value){
    $classID = $value['ID'];
    $classYear = $value['YEAR'];
    $parameterCode = $value['PARAMETER_CODE'];
    $classPICID = $value['PIC_ID'];
    $classSequence = $value['SEQUENCE'];
}

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
                            <h1 class="m-0 text-dark">Tambah Kelas </h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maklumat Kelas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST">
                            <input type="hidden" name="csrf_token" id="csrfToken" value="">
                            <input type="hidden" name="id" id="id" value="<?=$classID?>">

                            <div class="card-body">
                                <div class="row">
                                    <label for="tahun" class="col-sm-1 col-form-label">Tahun</label>
                                    <div class="col-sm-4">
                                        <select name="ddlYear"
                                            class="form-control select2 select2-hidden-accessible" id="tahun"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0" readonly="">-- Sila Pilih --</option>
                                            <option value="1" <?php if($classYear == '1'){echo 'selected';} ?>>1</option>
                                            <option value="2" <?php if($classYear == '2'){echo 'selected';} ?>>2</option>
                                            <option value="3" <?php if($classYear == '3'){echo 'selected';} ?>>3</option>
                                            <option value="4" <?php if($classYear == '4'){echo 'selected';} ?>>4</option>
                                            <option value="5" <?php if($classYear == '5'){echo 'selected';} ?>>5</option>
                                            <option value="6" <?php if($classYear == '6'){echo 'selected';} ?>>6</option>
                                        </select>
                                    </div>
                                    <label for="kelas" class="col-sm-1 col-form-label">Kelas</label>
                                    <div class="col-sm-4">
                                        <select name="ddlCLass"
                                            class="form-control select2 select2-hidden-accessible" id="kelas"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0">-- Sila Pilih --</option>
                                            <?php
                                            foreach($ddlClass as $value){
                                                $id = $value['PARAMETER_CODE'];
                                                $parameterName = $value['PARAMETER_NAME'];
                                            ?>
                                            <option value="<?=$id?>" <?php if($id == $parameterCode){echo 'selected';} ?>><?=$parameterName?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>  
                                </div>
                                <div class="row mt-3">
                                    <label for="guru" class="col-sm-1 col-form-label">Guru</label>
                                    <div class="col-sm-4">
                                        <select name="ddlPIC"
                                            class="form-control select2 select2-hidden-accessible" id="guru"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0">-- Sila Pilih --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div> 
                                    <label for="susunan" class="col-sm-1 col-form-label">Susunan</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="txtSeq" id="susunan" class="form-control" value="<?=$classSequence?>">
                                    </div> 
                                </div>
                            </div>
                            <!-- /.card-header --> 
                            <div class="card-footer">
                                <div class="float-left">
                                    <button type="submit" name="updateData" class="btn btn-success float-right">Kemas Kini</button>
                                </div>
                                <div class="float-right">
                                    <a href="senaraiKelas.php" class="btn btn-danger">
                                        <span class="mx-2">Kembali</span>
                                    </a>
                                </div>
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

    <?php include_once("../resources/pages/all-scripts.php"); ?>
    
</body>
</html>

<!-- PHP LOGIC AFTER FORM SEND -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['updateData'])) {

        $id = $_POST['id'];
        $ddlyear = $_POST['ddlYear'];
        $ddlclass = $_POST['ddlCLass'];
        $ddlpic = $_POST['ddlPIC'];
        $txtseq = $_POST['txtSeq'];

        if($txtseq == ""){
            $txtseq = '0';
        }

        $check = array($ddlyear, $ddlclass, $ddlpic, $txtseq);

        if(in_array('0', $check)) {
            echo("<script>sAlert('Gagal','Kelas Gagal Dicipta','error');</script>");
        } else {
            $updateClass = $DB->update($_POST);
            if($updateClass) {
                echo("<script>sAlertRedirect('Berjaya','Kelas Dikemas Kini','success', 'senaraiKelas.php');</script>");
                // echo("<script>sAlert('Berjaya','Kelas Dikemas Kini','success');</script>");
            } else {
                echo($updateClass);
            }
        }
    }
}
?>
