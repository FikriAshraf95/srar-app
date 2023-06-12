<!DOCTYPE html>
<html>

<?php include_once("../controllers/classController.php"); ?>
<?php include_once("../controllers/studentController.php"); ?>
<?php include_once("../resources/pages/header.php"); ?>

<?php
$ClassDB = new ClassContoller();
$ddlClass = $ClassDB->readClass();

$StudentDB = new StudentController();

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
                            <h1 class="m-0 text-dark">Tambah Pelajar </h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Maklumat Pelajar</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <!-- hidden fields -->
                                    <!-- <input type="hidden" name="id" value=""> -->
                                    <input type="hidden" name="csrfToken" id="csrfToken" value="">
                                    <!-- hidden fields -->
                                    <div class="col-md-6">
                                        <span class="text-bold">Tahun</span>
                                        <div class="my-2">
                                            <select name="ddlYear" id="ddlYear"
                                                class="form-control select2 select2-hidden-accessible col-md-10"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="0">-- Sila Pilih --</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-bold">Kelas</span>
                                        <div class="my-2">
                                            <select name="ddlCLass" id="ddlCLass"
                                                class="form-control select2 select2-hidden-accessible col-md-10" 
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
                                    <div class="col-md-6">
                                        <span class="text-bold">No. Kad Pengenalan</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtICNo" id="txtICNo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-bold">Nama</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtName" id="txtName" value="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-3 mb-4">
                                    <div class="col-md-6">
                                        <span class="text-bold">Tarikh Lahir</span>
                                        <div class="my-2">
                                            <input type="date" class="form-control col-md-10" name="txtDOB" id="txtDOB" value='2023-06-03'>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <span class="text-bold">No. Daftar Lahir</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtBirthNo" id="txtBirthNo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <span class="text-bold">Tempat Lahir</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtPOB" id="txtPOB">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-bold">Warganegara</span>
                                        <div class="my-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radioWarganegara" id="radCitizen" value="1">
                                                <label class="form-check-label" for="radCitizen">
                                                    Warganegara
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radioWarganegara" id="radNotCitizen" value="0">
                                                <label class="form-check-label" for="radNotCitizen">
                                                    Bukan Warganegara
                                                </label>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="row mt-3 mb-4">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <label for="txtNote">Nota</label>
                                            <textarea class="form-control fixed-height" rows="3" 
                                            id="txtNote" name="txtNote" placeholder="Nota">
                                            </textarea>
                                        </div>                                     
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <h3 class="card-title ml-2">Maklumat Penjaga</h3>
                                </div>
                                <hr/>
                                <div class="row mt-3">
                                    <label for="txtParent" class="col-sm-2 col-form-label">Nama Waris/Penjaga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtParent" id="txtParent"
                                            placeholder="Nama Waris/Penjaga">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="txtTelNo" class="col-sm-2 col-form-label">No Telefon</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="txtTelNo" id="txtTelNo"
                                            placeholder="Contoh: 01132563254">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="txtAddress" class="col-sm-2 col-form-label">Alamat Rumah</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control fixed-height" rows="3" name="txtAddress" id="txtAddress"
                                            placeholder="Alamat Rumah"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 my-4 ml-4">
                                    <div class="float-left">
                                        <button type="submit" class="btn btn-primary" style="width:200px;">Simpan</button>
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                        <!-- <div class="card-footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div> -->
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
</body>
</html>

<!-- PHP LOGIC AFTER FORM SEND -->

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // if (isset($_POST['addData'])) {
        $createStudent = $StudentDB->create($_POST);
        // $ddlyear = $_POST['ddlYear'];
        // $ddlclass = $_POST['ddlCLass'];
        // $ddlpic = $_POST['ddlPIC'];
        // $txtseq = $_POST['txtSeq'];

        // if($txtseq == ""){
        //     $txtseq = '0';
        // }

        // $check = array($ddlyear, $ddlclass, $ddlpic, $txtseq);

        // if(in_array('0', $check)) {
        //     echo("<script>sAlert('Gagal','Kelas Gagal Dicipta','error');</script>");
        // } else {
        //     echo("<script>sAlertRedirect('Berjaya','Kelas Dicipta','success', 'senaraiKelas.php');</script>");
        // }

        // if(in_array('0', $check)) {
        //     echo("<script>sAlert('Gagal','Pelajar Gagal Dicipta','error');</script>");
        // } else {
        //     $createStudent = $DB->create($_POST);
        //     if($createStudent) {
        //         echo("<script>sAlertRedirect('Berjaya','Pelajar Dicipta','success', 'senaraiPelajar.php');</script>");
        //     } else {
        //         echo($createStudent);
        //     }
        // }
    // }
}
?>
