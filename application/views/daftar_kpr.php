
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include/head') ?>
<body oncontextmenu="return false" onload="organisasi()"
style="background-image: url('<?php echo base_url() ?>assets/images/auth-bg.png');background-repeat: no-repeat;
background-attachment: fixed;">
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



<section class="bg-account-pages vh-100 align-items-center bg-center position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-6">
                <div class="bg-white shadow">
                    <div class="p-4">
                        <div class="text-center mt-3">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="logo-dark" height="150" />
                            </a>
                            <p class="text-muted mt-2">REGISTRASI</p>
                        </div>
                        <div class="p-3">
                            <form id="loginForm" action="" method="POST" class="av-invalid">
                                <div class="pesan"></div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Daftar sebagai *</label>
                                    <select id="organisasi" required="" name="organisasi" class="form-control" >
                                        
                                         <option value="">Pilih</option>
                                         <option value="1">Calon Anggota DPM IM</option>
                                         <option value="2">Calon Presma & Wapresma</option>
                                 </select>
                             </div>
                             <div id="form">
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
 <script>
            $(document).ready(function(){
            $('#organisasi').change(function organisasi(){
                //Selected value
                let inputValue = $(this).val();
                let dpm = '<?php $this->load->view('regis/dpm') ?>';
                 let presma = '<?php $this->load->view('regis/presma') ?>';
                if (inputValue ==  1) {
                    document.getElementById("form").innerHTML = dpm;
                    document.getElementById("loginForm").action = '<?php echo base_url('registrasi/dpm') ?>';
                }else if (inputValue ==  2) {
                    document.getElementById("form").innerHTML = presma;
                    document.getElementById("loginForm").action = '<?php echo base_url('registrasi/pemira'); ?>';
                }else{
                    document.getElementById("form").innerHTML = '';
                    document.getElementById("loginForm").action = '';
                }
                
            });
        });
        </script>
</html>