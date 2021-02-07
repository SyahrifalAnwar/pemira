<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>VOTE - PEMIRA STTNF 2020-2021</title>
    <meta content="Admin Dashboard" name="description" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.png" />

    <!--Morris Chart CSS -->
    <link href="<?php echo base_url() ?>assets/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/css/hstyle.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</head>


<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <!-- Logo container-->
                <div class="logo">
                    <!-- Text Logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--Urora-->
                        <!--</a>-->
                        <!-- Image Logo -->
                        <a href="index.html" class="logo">
                            <img src="https://kprsttnf.com/assets/images/logo-dark.png" alt="" height="75" class="logo-small">
                            <img src="https://kprsttnf.com/assets/images/logo-dark.png" alt="" class="logo-large">
                        </a>

                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras topbar-custom">

                        <ul class="list-inline float-right mb-0 ">
                            <!-- language-->

                            <?php foreach ($datauser as $key => $datauser) {} ?>
                            <li class="list-inline-item dropdown notification-list">
                                <div class="dropdown notification-list nav-pro-img">
                                    <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="https://www.pngkey.com/png/detail/115-1150152_default-profile-picture-avatar-png-green.png" alt="user" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Selamat Datang </h5>
                                    </div>

                                    <a class="dropdown-item" href="<?= base_url('secure/logout') ?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Keluar</a>
                                </div>                                                                    
                            </div>
                        </li>
                        <li class="menu-item list-inline-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link" id="mobileToggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>    
                    </ul> 

                </div>
                <!-- end menu-extras -->

                <div class="clearfix"></div>

            </div> <!-- end container -->
        </div>
        <!-- end topbar-main -->

        <!-- MENU Start -->

    </header>
    <div class="wrapper">
        <div class="container-fluid">

            <!-- Page-Title -->


            <div class="row justify-content-md-center">

             <?php foreach ($kandidat as $kandidat) { ?>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4  col-xl-4" style="">
                    <div class="card m-b-30 border-0" >

                        <h5 class="card-header ">
                            <div class="text-center">
                                <h4><?php echo $kandidat['nama'] ?></h4>
                                <p class="text-muted"><?php echo $kandidat['nim'] ?></p>

                            </div>
                        </h5>
                        <div class="card-body  text-center">
                            <img style="border-color: black" src="<?php echo base_url().'upload/'.$kandidat['nim'].'/foto.jpg' ?>" alt="" class=" mx-auto d-block mb-5 w-50">

                        </div>

                        <div class="card-footer text-muted ">
                            <div class="text-center">

                                <div class="row">
                                   <div class="col-12">
                                    <button href="<?php echo base_url('kandidat/detail_bem/').$kandidat['nim'] ?>" id="profile" class="btn btn-raised btn-info btn-lg btn-block">VISI & MISI</button>
                                </div>
                                <div class="col-12">
                                    <button onclick="vote(<?php echo "'".$kandidat["nama"]."'".","."'".$kandidat["nim"]."'" ?>);" id="vote" class="btn btn-raised btn-success btn-lg btn-block"> <i class="fa fa-check-square-o"></i> VOTE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- end page title end breadcrumb -->

</div> <!-- end container -->
</div>
<!-- end wrapper -->

<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
               © <?= date('Y') ?> KPR STT TERPADU NURUL FIKRI
           </div>
       </div>
   </div>
</footer>



<script src="<?php echo base_url(); ?>assets/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/bootstrap-material-design.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/modernizr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/assets/js/app.js"></script>

<script type="text/javascript">
    $(document).on('click', '#profile', function(e){
        e.preventDefault();
        

        if($(this).attr('id') == 'profile')
        {

            $('.modal-dialog').removeClass('modal-sm');
            $('.modal-dialog').addClass('modal-md');
            $('#ModalHeader').html('Detail Kandidat');
            $('#ModalContent').load($(this).attr('href'));
            $('#GetModal').modal('show');
        }

    });
</script>
<script type="text/javascript">
    function vote(name, id) {
        Swal.fire({
          title: '<strong>Anda yakin ingin memilih '+name+' ?</strong>',
          icon: 'info',
          html:'',
          showCloseButton: true,
          showCancelButton: true,
          focusConfirm: false,
          confirmButtonText:
          '<i class="fa fa-thumbs-up"></i> Ya',
          confirmButtonAriaLabel: 'Thumbs up, Ya',
          cancelButtonText:
          'Tidak',
          cancelButtonAriaLabel: 'Thumbs down, Tidak'
      }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
                title: 'Masukan Password anda untuk memverifikasi',
                input: 'password',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'OK',
                cancelButtonText:'BATAL',
                showLoaderOnConfirm: true,
                preConfirm: (password) => {
                    return fetch(`<?php echo base_url('secure/konfirmasi_voting/') ?>`+id+`/`+password)
                    .then(response => {
                        if (!response.ok) {
                          throw new Error(response.statusText)
                      }
                      return response.json()
                  })
                    .catch(error => {   
                        Swal.showValidationMessage(
                          `Password yang anda masukan salah`
                          )
                    })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
              if (result.isConfirmed) {
                   Swal.fire({
                    icon: result.value.status,
                    title: result.value.messages,
                    text: result.value.pesan,
                    timer: 5000,
                })
               
               
           }
       })
        }
    })
  }
</script>
<div class="modal" id="GetModal" tabindex="-1" role="dialog"
aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="ModalHeader"></h5>
            <button onclick='$("#GetModal").modal("hide");' type="button" class="close btn btn-sm btn-danger"  data-dismiss="modal" aria-hidden="true">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="ModalContent">

        </div>

    </div>
</div>
</div>


</body>

</html>