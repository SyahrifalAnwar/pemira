
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
                <?php $this->load->view('admin_include/menu_kandidat') ?>
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
                                      
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
<?php foreach ($datauser as $key => $datauser) {
    # code...
} ?>
                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <!-- Column -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="<?php echo base_url().'upload/'.$datauser['nim'].'/'.$datauser['foto'] ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title mt-0"><?php echo $datauser['nama']; ?></h5>
                                            <p class="card-text"><?php echo $datauser['nim']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <?php foreach ($kandidat_dpm_detail as $dpm_detail) {?>
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-8">
                                    <div class="card bg-info m-b-30">
                                        <div class="card-body">
                                            <div class="d-flex row">
                                                <div class="col-3 align-self-center">
                                                    <div class="round">
                                                        <i class="mdi mdi-download"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 text-center ml-auto align-self-center">
                                                    <div class="m-l-10 text-white float-right">
                                                        <h5 class="mt-0 round-inner">UNDUH SK</h5>
                                                        <p class="mb-0 "><a href="<?php echo base_url('upload/').$dpm_detail['nim'].'/'.$dpm_detail['sk'] ?>" class="btn btn-primary">UNDUH</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                                <!-- Column -->
                                <!-- Column -->
                               
                                <!-- Column -->
                                <!-- Column -->
                                
                                <!-- Column -->
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