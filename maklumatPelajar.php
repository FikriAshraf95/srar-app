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
                                    <label for="tahun" class="col-sm-1 col-form-label">Tahun</label>
                                    <div class="col-sm-4"> <select
                                            class="form-control select2 select2-hidden-accessible" data-select2-id="1"
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
                                    <label for="kelas" class="col-sm-1 col-form-label">Kelas</label>
                                    <div class="col-sm-4"> <select
                                            class="form-control select2 select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0">-- Sila Pilih --</option>
                                            <option value="IBNU SINA">IBNU SINA</option>
                                            <option value="IBNU KATHIR">IBNU KATHIR</option>
                                            <option value="IBNU KHALDUN">IBNU KHALDUN</option>
                                            <option value="IBNU HAYYAN">IBNU HAYYAN</option>
                                        </select>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <label for="nama" class="col-sm-1 col-form-label">Nama</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="inputEmail3"
                                            placeholder="Nama Pelajar">
                                    </div>
                                    <label for="warganegara" class="col-sm-1 col-form-label">Warganegara</label>
                                    <div class="col-sm-4"> <select
                                            class="form-control select2 select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0">-- Sila Pilih --</option>
                                            <option value="IBNU SINA">Warganegara</option>
                                            <option value="IBNU KATHIR">Bukan Warganegara</option>
                                        </select>
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <label for="noKadPengenalan" class="col-sm-1 col-form-label">No Kad
                                        Pengenalan</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Contoh: 100305060310">
                                    </div>
                                    <label for="noDaftar" class="col-sm-1 col-form-label">No Daftar</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Contoh: DH12345">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <label for="tarikhLahir" class="col-sm-1 col-form-label">Tarikh Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="date" class="form-control" id="inputEmail3"
                                            placeholder="Nama Pelajar">
                                    </div>
                                    <label for="tempatLahir" class="col-sm-1 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="inputEmail3"
                                            placeholder="Contoh: Hospital Ipoh">
                                    </div>
                                </div> <br>
                                <div class="row">
                                    <label for="jantina" class="col-sm-1 col-form-label">Jantina</label>
                                    <div class="col-sm-4"> <select
                                            class="form-control select2 select2-hidden-accessible" data-select2-id="1"
                                            tabindex="-1" aria-hidden="true">
                                            <option value="0">-- Sila Pilih --</option>
                                            <option value="IBNU SINA">Lelaki</option>
                                            <option value="IBNU KATHIR">Perempuan</option>
                                        </select>
                                    </div>
                                    <label for="umur" class="col-sm-1 col-form-label">Umur</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="umur" placeholder="Contoh: 7">
                                    </div>
                                </div><br>
                            </div>
                        </form>
                        <div class="card-header">
                            <h3 class="card-title">Maklumat Penjaga</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
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