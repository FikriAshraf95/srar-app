<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laman Utama</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./resources/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="./resources/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="./resources/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./resources/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./resources/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="./resources/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./resources/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include_once("resources/pages/navbar.php"); ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <?php include_once("resources/pages/sidebar.php"); ?>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Senarai Pelajar</h1>
                        </div>
                    </div>
                </div>
            </div>
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
                                                    <option value="0">-- Sila Pilih --</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class="text-bold">Kelas</div>
                                                <select name="className" class="form-control mt-2">
                                                    <option value="0">-- Sila Pilih --</option>
                                                    <option value="IBNU SINA">IBNU SINA</option>
                                                    <option value="IBNU KATHIR">IBNU KATHIR</option>
                                                    <option value="IBNU KHALDUN">IBNU KHALDUN</option>
                                                    <option value="IBNU HAYYAN">IBNU HAYYAN</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <div class=""><br></div>
                                                <div class="mt-2">
                                                    <button class=" btn btn-success">Pilih</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="d-flex justify-content-center flex-wrap mt-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center text-bold h4 mt-3">
                                        3 IBNU KATHIR </div>
                                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                        <div class="card-body">
                                            <div class="row">
                                                <label for="inputEmail3" class="col-sm-1 col-form-label">Carian</label>
                                                <div class="col-sm-11">
                                                    <input type="email" class="form-control" id="inputEmail3"
                                                        placeholder="Nama Pelajar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-1 mt-n1">
                                            <div class="col-12">
                                                <a href="tambahPelajar.php" class="btn btn-primary mx-2 float-right">
                                                    <label class="mx-1 mb-n1">Tambah
                                                        pelajar</label></a>
                                            </div>
                                        </div>
                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <table id="example2"
                                                    class="table table-bordered table-hover dataTable no-footer dtr-inline"
                                                    role="grid" aria-describedby="example2_info">
                                                    <thead>
                                                        <tr role="row">
                                                            <th class="sorting_asc" tabindex="0"
                                                                aria-controls="example2" rowspan="1" colspan="1"
                                                                aria-sort="ascending"
                                                                aria-label="#: activate to sort column descending">#
                                                            </th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Nama: activate to sort column ascending">
                                                                Nama</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Tahun / Kelas: activate to sort column ascending">
                                                                Tahun / Kelas</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="No. Kad Pengenalan: activate to sort column ascending">
                                                                No. Kad Pengenalan</th>
                                                            <th class="sorting" tabindex="0" aria-controls="example2"
                                                                rowspan="1" colspan="1"
                                                                aria-label="Tindakan: activate to sort column ascending">
                                                                Tindakan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">1</td>
                                                            <td>ALI KHAIRUDDIN BIN MOHD NORKHAIRUL AZRE</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>131023080067</td>
                                                            <td class="text-center">
                                                                <a href="maklumatPelajar.php?id=214"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#modal-default" class="btn btn-danger mx-2"
                                                                    data-toggle="modal" data-target="#modal-default"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">2</td>
                                                            <td>ALIYA ZARA SAFIYA BINTI MUHAMAD NIZAM</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130314080142</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=215"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">3</td>
                                                            <td>CHINTA PUTRI MALAIKA BINTI MOHAMMAD PAIRUL HISHAM</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130722030400</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=216"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">4</td>
                                                            <td>DURRATUL AMANI BINTI MOHD SALEHAN</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130606080304</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=217"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">5</td>
                                                            <td>MARISSA QISYA BINTI MAHMOD FAIRUS</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130124100288</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=218"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">6</td>
                                                            <td>MOHAMAD FALIS AL-HARRAZ BIN MOHAMAD MUKHLIS</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>131223080301</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=219"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">7</td>
                                                            <td>MOHAMAD HAKIM HUZAIMI BIN MOHD RUDUAN</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130627030197</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=220"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">8</td>
                                                            <td>MUHAMMAD ADAM KHAIRI BIN FAIRUL RIZAL</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130628080997</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=221"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1">9</td>
                                                            <td>MUHAMMAD ADIF IRFAN BIN MATZANI</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>130927080567</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=222"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr role="row" class="even">
                                                            <td tabindex="0" class="sorting_1">10</td>
                                                            <td>MUHAMMAD ADLI BIN SUHAIMEE</td>
                                                            <td>3 IBNU KATHIR</td>
                                                            <td>131023110051</td>
                                                            <td class="text-center">
                                                                <a href="./studentinfo.php.php?id=223"
                                                                    class="btn btn-warning mx-2"><i
                                                                        class="fas fa-edit"></i></a>
                                                                <a href="#" class="btn btn-danger mx-2"><i
                                                                        class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="example2_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 29 entries</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="example2_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled"
                                                            id="example2_previous"><a href="#" aria-controls="example2"
                                                                data-dt-idx="0" tabindex="0"
                                                                class="page-link">Previous</a></li>
                                                        <li class="paginate_button page-item active"><a href="#"
                                                                aria-controls="example2" data-dt-idx="1" tabindex="0"
                                                                class="page-link">1</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="2" tabindex="0"
                                                                class="page-link">2</a></li>
                                                        <li class="paginate_button page-item "><a href="#"
                                                                aria-controls="example2" data-dt-idx="3" tabindex="0"
                                                                class="page-link">3</a></li>
                                                        <li class="paginate_button page-item next" id="example2_next"><a
                                                                href="#" aria-controls="example2" data-dt-idx="4"
                                                                tabindex="0" class="page-link">Next</a></li>
                                                    </ul>
                                                </div>
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
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 AtomSoft.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.1 dev
            </div>
        </footer>
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="./resources/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="./resources/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="./resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="./resources/plugins/chart.js/Chart.min.js"></script>
    <!-- daterangepicker -->
    <script src="./resources/plugins/moment/moment.min.js"></script>
    <script src="./resources/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- overlayScrollbars -->
    <script src="./resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./resources/dist/js/adminlte.js"></script>
</body>

</html>