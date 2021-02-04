
<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('admin_include/head') ?>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner"></div>
            </div>
        </div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
           
            <!-- Left Sidebar End -->
                <?php $this->load->view('admin_include/menu') ?>
            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <?php $this->load->view('admin_include/topbar') ?>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper dashborad-v">

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">KPR STTNF</a></li>
                                                <li class="breadcrumb-item active">Kandidat BEM</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Kandidat BEM</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <!-- end page title end breadcrumb -->
                            <div class="row">
                               <?php foreach ($kandidat_bem as $kandidat_bem) { ?>
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30 border-0">

                                        <div class="card-body  text-center">
                                              <img src="<?php echo base_url().'upload/'.$kandidat_bem['ketua_nim'].'/foto.jpg' ?>" alt="" class=" mx-auto d-block w-50">


                                            <div class="text-center">
                                                <h5><?php echo $kandidat_bem['ketua_nama'] ?></h5>
                                                <p class="text-muted"><?php echo $kandidat_bem['ketua_nim'] ?></p>
                                                <button class="btn btn-block btn-raised btn-info mb-3">Lihat Profile</button>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                               <?php } ?>
                            </div>

                       

                        </div>
                        <!-- container -->

                    </div>
                    <!-- Page content Wrapper -->
                </div>
                <!-- content -->

                <footer class="footer">
                    © <?= date('Y') ?> KPR STT TERPADU NURUL FIKRI
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php $this->load->view('admin_include/script') ?>

       
       
    </body>

</html>