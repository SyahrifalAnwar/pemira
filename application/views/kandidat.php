<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include/head') ?>

<body data-spy="scroll" data-target="#navbar" data-offset="20">

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

	<?php $this->load->view('include/navbar') ?>

	<!-- Hero Start -->
	<section class="hero-1 bg-center bg-primary position-relative" style="background-image: url('<?php echo base_url() ?>assets/images/hero-1-bg.png');"
		id="home">
		<div class="container">
			<div class="row align-items-center hero-content">
				<div class="col-lg-12">
					<h1 class="text-white display-4 font-weight-semibold mb-4 hero-1-title">DATA KANDIDAT</h1>


				</div>
			</div>
			<!-- end row -->

		
			</div>
			<!-- end container -->
			<div class="hero-bottom-shape">
				<img src="<?php echo base_url() ?>assets/images/hero-1-bottom-shape.png" alt="" class="img-fluid d-block mx-auto" />
			</div>
			<!-- end hero shape -->
		</section>
		<!-- Hero End -->

    <!-- Team start -->
    <section class="section bg-light" id="team">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Kandidat Ketua & Wakil Ketua BEM</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/1.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">1</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">1</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/2.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">2</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">2</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/3.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">3</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">3</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/4.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">4</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">4</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
   
        <div class="container mt-5">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Kandidat Ketua & Wakil Ketua Senada</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/1.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">1</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">1</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/2.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">2</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">2</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/3.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">3</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">3</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-lg-3 col-sm-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/4.jpg" alt="" class="img-fluid d-block mx-auto" />
                            <ul class="list-inline p-3 mb-0 team-social-item">
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                                            data-feather="facebook"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                                            data-feather="twitter"></i></a>
                                </li>
                                <li class="list-inline-item mx-3">
                                    <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                                            data-feather="instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                            <h5 class="font-size-19 mb-1">4</h5>
                            <p class="text-muted text-uppercase font-size-14 mb-0">4</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- Team end -->


	<?php $this->load->view('include/footer') ?>
	<!-- feather-icons js -->
	<?php $this->load->view('include/script') ?>

					</body>

					</html>