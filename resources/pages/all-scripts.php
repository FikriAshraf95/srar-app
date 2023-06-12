<script src="../resources/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../resources/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../resources/plugins/chart.js/Chart.min.js"></script>
<!-- daterangepicker -->
<script src="../resources/plugins/moment/moment.min.js"></script>
<script src="../resources/plugins/daterangepicker/daterangepicker.js"></script>
<!-- overlayScrollbars -->
<script src="../resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../resources/dist/js/adminlte.js"></script>
<!-- DataTables -->

<script src="../resources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../resources/plugins/datatables/dataTables.bootstrap4.min.js"></script>




<!-- Sweet Alert 2 -->
<script src="../resources/plugins/sweetalert2/sweetalert2-latest.min.js"></script>

<!-- online -->






<script>
    function sAlert(status, text, type){
        Swal.fire({
            icon: type,
            title: status,
            text: text
        });
    }

    function sAlertRedirect(status, text, type, url){
        Swal.fire({
            icon: type,
            title: status,
            text: text
        }) .then(() => {
            window.location.href = url;
        });
    }

    function sconfirm(status, text, type){
        Swal.fire({
        title: status,
        text: text,
        icon: type,
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: status
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Berjaya',
            'Rekod dipadam',
            'success'
            )
        }
        })
    }



</script>