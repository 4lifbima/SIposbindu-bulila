
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login</title>
        <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/vendor/morrisjs/morris.css" rel="stylesheet">
        <link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="<?php echo base_url();?>/assets/asset/img/puskesmas.png" type="image/gif" style="size: 100%">
        <style>
            .bg {
                background-image: url("<?php echo base_url();?>/assets/asset/img/banner.png");
                background-size: cover;
            }
        </style>
    </head>    
<body class='bg'>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <img src="<?php echo base_url();?>/assets/asset/img/logodesabulila.png" height="130px" align="center">
                    <div class="panel-heading">
                        <center><h3 class="panel-title">Silahkan Masuk!</h3></center>
                    </div>
                    <div class="panel-body">
                        <form id="login-form" class="text-left" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                            <h6 align="center"><?php echo $err_message;?></h6>
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="lg_username" name="username" placeholder="Username" autofocus required autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required autocomplete="off">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block" value="login">Login</button>
                                <hr>
                                <span>Developer by <a href="https://portfolioalif.netlify.app/" target="_blank" rel="noopener noreferrer">alif Bima</a></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
