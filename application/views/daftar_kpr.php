
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
                            <p class="text-muted mt-2">REGISTRASI</p>
                        </div>
                        <div class="p-3">
                            <form id="loginForm" action="<?php echo base_url('secure/daftar_kpr/1') ?>" method="POST" class="av-invalid">
                                <div class="pesan"></div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Daftar sebagai *</label>
                                    <select required="" name="organisasi" class="form-control" >
                                        <?php 
                                        $id_organisasi = $this->session->userdata('organisasi');
                                        if ($id_organisasi == 1) {
                                         ?>
                                        <option value="1">Calon Anggota DPM IM</option>
                                        <option value="2">Calon Presma & Wapresma</option>
                                    <?php }else if ($id_organisasi == 2) {
                                         ?>
                                        <option value="2">Calon Presma & Wapresma</option>
                                        <option value="1">Calon Anggota DPM IM</option>
                                        
                                    <?php }else{ ?>
                                         <option value="">Pilih</option>
                                        <option value="1">Calon Anggota DPM IM</option>
                                        <option value="2">Calon Presma & Wapresma</option>
                                    <?php } ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">NIM</label>
                                    <input name="nim"  required="" placeholder="Masukkan nim anda"
                                    id="nim" type="number" class="form-control" value="<?php echo $this->session->userdata('nim'); ?>" />
                                </div>
                                  <div class="mb-3">
                                    <label for="userpassword" class="form-label">Nama Lengkap</label>
                                    <input name="nama"  required="" placeholder="Masukkan Nama Lengkap anda"
                                    id="nama" type="text" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" />
                                </div>
                                 <div class="mb-3">
                                    <label for="userpassword" class="form-label">Email</label>
                                    <input name="email"  required="" placeholder="Masukkan Email anda"
                                    id="nama" type="email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" />
                                </div>
                                <div class="mb-3">
                                    <label for="userpassword" class="form-label">Nomor Telepon</label>
                                    <input name="no_telp"  required="" placeholder="Masukkan Nomor Telepon anda"
                                    id="nama" type="no_telp" class="form-control" value="<?php echo $this->session->userdata('no_telp'); ?>" />
                                </div>
                               
                                <div class="d-grid mt-3"><button type="submit" class="btn btn-primary btn-none">Berikutnya</button></div>

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
</html>