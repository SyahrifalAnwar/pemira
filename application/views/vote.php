
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
            <?php if ($this->session->userdata('level') == 1) {
                # code...
            } ?>
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
                                                <li class="breadcrumb-item active">Dashboard</li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title">Dashboard</h4>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <!-- end page title end breadcrumb -->
                            <div class="row">
                                <!-- Column -->
                                <!-- Column -->
                               <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title mt-0">DPM</h5>
                                            
                                            <a href="#" class="btn btn-primary">LIHAT KANDIDAT</a>   
                                        </div>
                                    </div>
                                </div>
                                <!-- Column -->
                                <!-- Column -->
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title mt-0">BEM</h5>
                                            
                                            <a href="#" class="btn btn-primary">LIHAT KANDIDAT</a>  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4">
                                    <div class="card m-b-30">
                                        <img class="card-img-top img-fluid" src="assets/images/small/img-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title mt-0">SENADA</h5>
                                            
                                            <a href="#" class="btn btn-primary">LIHAT KANDIDAT</a>   
                                        </div>
                                    </div>
                                </div>
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