<?php 
include("controllers/userController.php");

$DB = new UserController();
$csrfToken = bin2hex(random_bytes(32));
// $csrfToken = $_SESSION['csrf_token'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $createUser = $DB->create($_POST);
    $getUser = $DB->readAll();
    // print_r($getUser);
    
    echo('<script src="./resources/plugins/sweetalert2/sweetalert2-latest.min.js"></script><br/>');

    if(!$createUser){
        // echo("data not valid!");
        $content = "Swal.fire(";
        $content .= "'Data not valid!','twe','error'";
        $content .= ")";
        $jsScript = "<script>".$content."</script>";
        echo($jsScript);
    } else {
        $content = "Swal.fire(";
        $content .= "'Data valid!','twe','success'";
        $content .= ")";
        // $content .= ".then(() => {";
        // $content .= "window.location.href = 'index.php';";
        // $content .= " });";
        $jsScript = "<script>".$content."</script>";
        echo($jsScript);

    }
} else {
    $DB = new UserController();

    $getUser = $DB->readAll();
    // $result = $get_data->get_data($query);
    // print_r($getUser);
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SRAR - Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./resources/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./resources/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./resources/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
</head>
<body class="">
<form method="post">
    <div class="row mt-5 ml-3">
        <div class="col-12">
            <input type="text" name="csrfToken" value="<?= $csrfToken ?>">
            <div>
                username:
                <input type="text" name="username">
            </div>
            <div>
                password:
                <input type="password" name="password">
            </div>
            <div>
                name:
                <input type="text" name="name">
            </div>
            <div>
                <button type="submit" class="">Sign In</button>
            </div>
        </div>
    </div>

    <div class="row my-5  ml-3">
        <div class="col-12">
            <div>
                <?php
                foreach($getUser as $value){
                    $username = $value['username'];
                    $password = $value['password'];
                    $name = $value['name'];

                    echo($username  . "=>" . $password . "=>" . $name . "<br/>");
                }
                ?>
            </div>
        </div>
    </div>

</form>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sweet Alert 2 -->
<script src="./resources/plugins/sweetalert2/sweetalert2-latest.min.js"></script>
<!-- AdminLTE App -->
<script src="./resources/dist/js/adminlte.min.js"></script>

<!-- <script>
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Something went wrong!',
  footer: '<a href="">Why do I have this issue?</a>'
})
</script> -->

</body>
</html>
