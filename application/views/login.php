
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>LOGIN - PEMIRA STTNF 2020-2021</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="pemilihan raya sttnf 2020" />
  <meta name="keywords" content="pemira sttnf 2020" />
  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.png" />

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/magic-mouse-js-master/css/magic-mouse.css">
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url() ?>assets/css/style.min.css" rel="stylesheet" type="text/css" />

  <script type="text/javascript" src="<?php echo base_url('assets/magic-mouse-js-master/js/magic_mouse.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/magic-mouse-js-master/js/run_prettify.js') ?>"></script>
  
</head>
<body>
  <!-- Loader -->
  <div id="preloader">
    <div id="status">
      <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  </div>

  <section class="bg-account-pages vh-100 d-flex align-items-center bg-center position-relative"
  style="background-image: url('<?php echo base_url() ?>assets/images/auth-bg.png');">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="bg-white shadow">
          <div class="p-4">
            <div class="text-center mt-3">
             <a href="<?php echo base_url(); ?>">
              <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="logo-dark" height="150" />
            </a>
            <p class="text-muted mt-2">Login Untuk memulai Voting</p>
            <div class="alert alert-danger" role="alert">VOTING TELAH DITUTUP
            </div>
            <p><?php echo $this->session->flashdata('message'); ?></p>
          </div>
          <div class="p-3">

            <form id="loginForm" action="<?php echo base_url('secure/check_login') ?>" method="POST" class="av-invalid">
              <div class="pesan"></div>
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input name="nim" required="" placeholder="Masukkan Nim anda" id="nim"
                type="number" class="form-control" value="" />
              </div>
              <div class="mb-3">
                <label for="userpassword" class="form-label">Password</label>
                <input name="password" minlength="4" required="" placeholder="Masukkan password anda"
                id="userpassword" type="password" class="form-control" value="" />
              </div>
              <div class="d-grid mt-3"><button type="submit" class="btn btn-primary btn-none">Log
              In</button></div>

            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- end col -->
  </div>
  <!-- end row -->
</div>
<!-- end container -->
</section>
<!-- end section -->

<!-- feather-icons js -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<?php $this->load->view('include/script') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="<?php echo base_url() ?>assets/js/send.js"></script>

</html>