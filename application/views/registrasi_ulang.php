
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
                        <h3>REGISTRASI ULANG</h3>
                        <p class="text-muted mt-2">Masukkan NIM anda untuk melakukkan registrasi Ulang</p>
                        <p><?php echo $this->session->flashdata('message'); ?></p>
                    </div>
                    <div class="p-3">
                       
                        <form id="loginForm" action="<?php echo base_url('registrasi_ulang/regis') ?>" method="POST" class="av-invalid">
                            <div class="pesan"></div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input name="nim" required="" placeholder="Masukkan Nim anda" id="nim"
                                type="number" class="form-control" value="" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" required="" placeholder="Masukkan Email anda" id="email"
                                type="email" class="form-control" value="" />
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
<script type="text/javascript">
     $(document).ready(function(){
  $("#loginForm").unbind('submit').bind('submit', function() {

    var form = $(this);
    var url = form.attr('action');
    var type = form.attr('method');

    $.ajax({
      url  : url,
      type : type,
      data : form.serialize(),
      dataType: 'json',
      success:function(response) {
        if(response.success == true) {
           Swal.fire({
            icon: 'success',
            title: 'Registrasi Ulang Berhasil',
             html:response.messages
          })
        }
        else {
          Swal.fire({
            icon: 'error',
            title: 'Registrasi Ulang Gagal',
            html: response.messages
          })

          } // /else
        } // /if
      });

    return false;
  });
});


</script>

</html>