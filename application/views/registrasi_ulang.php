
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include/head') ?>
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
                        <p class="text-muted mt-2">Registrasi Ulang</p>
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
                                <label for="userpassword" class="form-label">Nama</label>
                                <input name="nama" minlength="4" required="" placeholder="Masukkan nama anda"
                                id="usernama" type="nama" class="form-control" value="" />
                            </div>
                            <div class="d-grid mt-3"><button type="submit" class="btn btn-primary btn-none">Registrasi Ulang</button></div>

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