<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../../assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Register</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  
<div class="page-header clear-filter" filter-color="orange">
  <div class="page-header-image" style="background-image:url(<?= base_url(); ?>assets/img/login.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">

            <form class="form" role="form" method="post" action="post_register">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="<?= base_url(); ?>assets/img/now-logo.png" alt="Logo">
                </div>
              </div>
              <div class="card-body">

                <!-- User Name -->
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input class="form-control" placeholder="Username" type="text" name="username" required>
                </div>
                <!-- User Name END -->

                <!-- Email -->
                    <div class="input-group no-border input-lg">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="far fa-envelope"></i>
                          </span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="email" required>
                    </div>
                <!-- Email End -->

                <!-- Password -->
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control" placeholder="Password">
                </div>
                <!-- Password END -->
              </div>

              <div class="card-footer text-center">
              <button type="submit" class="btn btn-primary btn-round btn-lg btn-block" name="register">Create Account</button>
                <div class="pull-left">
                  <h6>
                    <a href="<?= base_url(); ?>auth/" class="link">Login</a>
                  </h6>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url(); ?>assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>