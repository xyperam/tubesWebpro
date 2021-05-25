<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/img/apple-icon.png">
  <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Profile</title>
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

<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= base_url(); ?>member/index">
          A->Z.com
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?= base_url(); ?>assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>member/index">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>auth/logout">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('<?= base_url(); ?>assets/img/bg5.jpg');">
      </div>
      <div class="container">

        <div class="photo-container">
          <?php if ($user->avatar != null) : ?>
            <img src="avatar/<?= $user->avatar; ?>" width="200" height="200">
          <?php else : ?>
            <img src="<?= base_url(); ?>assets/img/default.jpg">
          <?php endif; ?>
        </div>

        <h3><?= $user->username; ?></h3>
        <div class="h6 font-weight-300"><?= $user->email; ?></div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container">
          <!-- <button href="#button" class="btn btn-primary btn-round btn-lg">Follow</button> -->

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Profile</button>

          <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <form class="mt-5 px-5" action="update_profile" role="form" method="post" enctype="multipart/form-data">

                  <input value="<?= $user->id; ?>" type="hidden" name="id">
                    <input value="<?= $user->avatar; ?>" type="hidden" name="old_avatar">

                  <div class="form-group mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                      </div>
                      <input class="form-control" value="<?= $user->username; ?>" type="text" name="username" required>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" value="<?= $user->email; ?>" type="email" name="email" required>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" value="<?= $user->bio; ?>" type="text" name="bio" required>
                    </div>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="new_avatar">
                    <label class="custom-file-label" for="customFile">Pilih gambar</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4" name="update">Simpan</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>
        <h3 class="title">About me</h3>
        <h5 class="title"><?= $user->bio; ?></h5>
        <div class="section section-typography">

          <!-- awal container post -->
          <div class="container">
            <div class="mx-auto text-center">
              <h2 class="font-weight-bold mb-5">Ceritaku</h2>
            </div>

            <?php foreach ($posts as $post) : ?>

              <div class="row py-5 align-items-center">
                <div class="card mb-12">
                  <img class="card-img-top" src="<?= base_url(); ?>song/<?= $post->song; ?>" alt="Card image cap">
                  <div class="card-body">
                  <div class="wrapper-desc d-flex justify-content-between align-self-center">
                    <h2 class="card-title"><?= $user->username; ?></h2>
                    <h2 class="card-text"><?= $post->price; ?>$</h2>
                  </div>
                    <h5 class="card-text py-3"><?= $post->phone; ?></h5>
                    <p class="card-text"><?= $post->title; ?></p>

                    <div class="d-flex justify-content-between align-self-center">
                      <p class="card-text"><small class="text-muted">Last updated <?= $post->created_at; ?></small></p>
                      <div class="wrapper-button">
                        <a class="btn btn-danger btn-sm" href="delete_post/<?= $post->id; ?>">Hapus</a>
                        <button class="btn btn-primary btn-sm" disabled>Edit</button>
                      </div>
                    </div>


                  </div>
                </div>
              </div>

            <?php endforeach; ?>

          </div>
          <!-- end container -->
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