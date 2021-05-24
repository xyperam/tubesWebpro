<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="./assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Home
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url(); ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url(); ?>member/index" rel="tooltip">
          LOGO
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <h6>
              <a href="<?= base_url(); ?>member/home" class="link">Home</a>
            </h6>
          </li>
          <li class="nav-item">
            <h6>
              <a href="<?= base_url(); ?>member/profile" class="link">Profile</a>
            </h6>
          </li>
          <li class="nav-item">
            <h6>
              <a href="<?= base_url(); ?>auth/logout" class="link">Logout</a>
            </h6>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

  <div class="wrapper">
    <div class="page-header">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?= base_url(); ?>assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <form role="form" method="post" enctype="multipart/form-data" action="<?= base_url('member/create_post'); ?>">

            <div class="form-group mb-3">
              <div class="input-group">
                <input class="form-control" type="text" name="title" placeholder="Title Song">
              </div>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="song">
              <label class="custom-file-label" for="customFile">Music</label>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary my-5" name="update">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="section section-typography">
    <div class="container">
      <div class="mx-auto text-center">
        <h2 class="font-weight-bold mb-5">SALE..!!!</h2>
      </div>

      <?php foreach ($posts as $post) : ?>
        <div class="row py-5 align-items-center">
        
          <div class="card mb-12">
            <img class="card-img-top" src="<?= base_url(); ?>song/<?= $post->song; ?>" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title"><?= $post->username; ?></h4>
              <p class="card-text"><?= $post->title; ?></p>
              <p class="card-text"><small class="text-muted">Last updated <?= $post->created_at; ?></small></p>
            </div>
          </div>

        </div>
      <?php endforeach; ?>

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
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>