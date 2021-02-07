
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>REGISTRASI ULANG - PEMIRA STTNF 2020-2021</title>
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
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
      var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
      s1.async=true;
      s1.src='https://embed.tawk.to/5ff6af1bc31c9117cb6c36e1/1erdpo151';
      s1.charset='UTF-8';
      s1.setAttribute('crossorigin','*');
      s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
  <script type="text/javascript">
    var imNotARobot = function() {document.getElementById('submit').style.visibility = 'visible';};
  </script>
  
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
            <p class="text-muted mt-2">Masukkan Nim dan Email Aktif anda<br> untuk melakukan registrasi Ulang</p>
            <p><?php echo $this->session->flashdata('message'); ?></p>
          </div>
          <div class="p-3">

            <form id="loginForm" action="<?php echo base_url('registrasi_ulang/regis') ?>" method="POST" class="av-invalid">
              <div class="pesan"></div>
              <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input onchange="ceknim()" name="nim" required="" placeholder="Masukkan Nim anda" id="nim"
                type="number" class="form-control" value="" />
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <p><small>Gunakan email kampus <b>@student.nurulfikri.ac.id<b></small></p>
                  <input name="email" required="" placeholder="Masukkan email kampus" pattern=".+@student.nurulfikri.ac.id" placeholder="Masukkan Email anda" id="email"
                  type="email" class="form-control" value="" />
                </div>

                <div class="g-recaptcha"  data-callback="imNotARobot" data-sitekey="6LejB0saAAAAAGHy5AbJxfzDq7Fh4S7LnARB0yO5"></div>

                <div class="d-grid mt-3">
                  <button style="visibility: hidden;" id="submit" type="submit" class="btn btn-primary btn-none">Registrasi Ulang</button></div>

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
  <script src='https://www.google.com/recaptcha/api.js?hl=id'></script>
  <script type="text/javascript">
    function ceknim() {
      let nim = document.getElementById("nim").value;
      let url = "<?php echo base_url('secure/check_user/') ?>"+nim;

      $.ajax({
        url : url,
        type: "POST",
        data : {'nim': nim}, 
        dataType: 'json',
        success: function(response) {
          if (response.success == true) {
            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
              title:  'Hai, Apa kamu <br>'+response.messages+' ?',
              text: 'Yuk isi emailmu untuk mengkonfirmasi akun',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Ya, Ini Saya',
              cancelButtonText: 'Bukan',
              reverseButtons: true
            }).then((result) => {
              if (result.isConfirmed) {

              } else if (

                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
                ) {
                document.getElementById("nim").value = '';
                swalWithBootstrapButtons.fire(
                  'Cancelled',
                  'Periksa kembali nim yang kamu input',
                  'error'
                  )
              }
            })


          }else{
           Swal.fire(
            'Terjadi kesalahan',
            'NIM anda belum terdaftar di database kami, segera hubungi kami lewat livechat jika ini sebuah kesalahan',
            'error'
            )
         }
       }
     });
    }
  </script>
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
           document.getElementById("nim").value = '';
           document.getElementById("email").value = '';
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