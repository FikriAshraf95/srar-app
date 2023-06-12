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
                            <h1 class="m-0 text-dark">Maklumat Pelajar </h1>
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
                        <form role="form">
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" name="id" value="">
                                    <div class="col-md-6">
                                        <span class="text-bold">Tahun</span>
                                        <div class="my-2">
                                            <select
                                                class="form-control select2 select2-hidden-accessible col-md-10"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="0">-- Sila Pilih --</option>
                                                <option data-select2-id="1">1</option>
                                                <option data-select2-id="2">2</option>
                                                <option data-select2-id="3">3</option>
                                                <option data-select2-id="4">4</option>
                                                <option data-select2-id="5">5</option>
                                                <option data-select2-id="6">6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-bold">Kelas</span>
                                        <div class="my-2">
                                            <select
                                                class="form-control select2 select2-hidden-accessible col-md-10"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="0">-- Sila Pilih --</option>
                                                <option value="IBNU SINA">IBNU SINA</option>
                                                <option value="IBNU KATHIR">IBNU KATHIR</option>
                                                <option value="IBNU KHALDUN">IBNU KHALDUN</option>
                                                <option value="IBNU HAYYAN">IBNU HAYYAN</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <span class="text-bold">No. Kad Pengenalan</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtICNo" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-bold">No. Daftar Lahir</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtICNo" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <span class="text-bold">Tarikh Lahir</span>
                                        <div class="my-2">
                                            <input type="date" class="form-control col-md-10" name="txtICNo" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <span class="text-bold">Tempat Lahir</span>
                                        <div class="my-2">
                                            <input type="text" class="form-control col-md-10" name="txtICNo" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3 mb-4">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <label for="txtNote">Nota</label>
                                            <textarea class="form-control" rows="3" id="txtNote" name="txtNote">
                                            </textarea>
                                        </div>                                     
                                    </div>
                                </div>
                                <div class="row mt-3 mb-4">
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
                                <hr/>
                                <div class="row">
                                    <h3 class="card-title ml-2">Maklumat Penjaga</h3>
                                </div>
                                <hr/>
                                <div class="row">
                                    <label for="namaWaris" class="col-sm-2 col-form-label">Nama Waris/Penjaga</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" id="inputEmail3"
                                            placeholder="Nama Waris/Penjaga">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <label for="noTelefon" class="col-sm-2 col-form-label">No Telefon</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Contoh: 01132563254">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <label for="alamatRumah" class="col-sm-2 col-form-label">Alamat Rumah</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control fixed-height" rows="3"
                                            placeholder="Alamat Rumah ..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-center">Kemaskini Maklumat</button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <h3 class="card-title">Senarai Bayaran</h3>
                                        <div class="col-sm-11">
                                            <button type="submit" class="btn btn-success float-right">Buat
                                                Bayaran</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group-append input-group-sm-1">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Carian">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No Resit</th>
                                                <th>Jumlah Bayaran (RM)</th>
                                                <th>Tarikh</th>
                                                <th>Jenis Bayaran</th>
                                                <th>Maklumat Bayaran</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>SAMYSK2300001</td>
                                                <td>15.00</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-success">Yuran Sekolah</span></td>
                                                <td>March</td>
                                            </tr>
                                            <tr>
                                                <td>SAMBBK2300001</td>
                                                <td>30.00</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-success">Bayaran Buku</span></td>
                                                <td>March</td>
                                            </tr>
                                            <tr>
                                                <td>SAMYSK2300001</td>
                                                <td>15.00</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-success">Yuran Sekolah</span></td>
                                                <td>March</td>
                                            </tr>
                                            <tr>
                                                <td>SAMYSK2300001</td>
                                                <td>15.00</td>
                                                <td>11-7-2014</td>
                                                <td><span class="tag tag-success">Yuran Sekolah</span></td>
                                                <td>March</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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
</body>

</html>