<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include/head') ?>
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
<!--End of Tawk.to Script-->
<style>
	* {
		box-sizing: border-box;
	}
	/* The actual timeline (the vertical ruler) */
	.timeline {
		position: relative;
		max-width: 1200px;
		margin: 0 auto;
	}

	/* The actual timeline (the vertical ruler) */
	.timeline::after {
		content: '';
		position: absolute;
		width: 6px;
		background-color: white;
		top: 0;
		bottom: 0;
		left: 50%;
		margin-left: -3px;
	}

	/* Container around content */
	.cl {
		padding: 10px 40px;
		position: relative;
		background-color: inherit;
		width: 50%;
	}

	/* The circles on the timeline */
	.cl::after {
		content: '';
		position: absolute;
		width: 25px;
		height: 25px;
		right: -17px;
		background-color: white;
		border: 4px solid #FF9F55;
		top: 15px;
		border-radius: 50%;
		z-index: 1;
	}

	/* Place the container to the left */
	.left {
		left: 0;
	}

	/* Place the container to the right */
	.right {
		left: 50%;
	}

	/* Add arrows to the left container (pointing right) */
	.left::before {
		content: " ";
		height: 0;
		position: absolute;
		top: 22px;
		width: 0;
		z-index: 1;
		right: 30px;
		border: medium solid white;
		border-width: 10px 0 10px 10px;
		border-color: transparent transparent transparent white;
	}

	/* Add arrows to the right container (pointing left) */
	.right::before {
		content: " ";
		height: 0;
		position: absolute;
		top: 22px;
		width: 0;
		z-index: 1;
		left: 30px;
		border: medium solid white;
		border-width: 10px 10px 10px 0;
		border-color: transparent white transparent transparent;
	}

	/* Fix the circle for containers on the right side */
	.right::after {
		left: -16px;
	}

	/* The actual content */
	.content {
		padding: 20px 30px;
		background-color: white;
		position: relative;
		border-radius: 6px;
		width: 100%
	}

	/* Media queries - Responsive timeline on screens less than 600px wide */
	@media screen and (max-width: 600px) {
		/* Place the timelime to the left */
		.timeline::after {
			left: 31px;
		}

		/* Full-width containers */
		.cl {
			width: 100%;
			padding-left: 70px;
			padding-right: 25px;
		}

		/* Make sure that all arrows are pointing leftwards */
		.cl::before {
			left: 60px;
			border: medium solid white;
			border-width: 10px 10px 10px 0;
			border-color: transparent white transparent transparent;
		}

		/* Make sure all circles are at the same spot */
		.left::after, .right::after {
			left: 15px;
		}

		/* Make all right containers behave like the left ones */
		.right {
			left: 0%;
		}
	}
</style>

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
	<section class="hero-2 bg-center bg-primary position-relative" style="background-image: url('<?php echo base_url() ?>assets/images/hero-1-bg.png');"
		id="home">
		<div class="container">
			<div class="row align-items-center hero-content">
				<div class="col-lg-12">
					<h3 class="text-white text-center display-4 font-weight-semibold mb-4 hero-1-title">Pendaftar Sementara</h3>


				</div>
			</div>
			<!-- end row -->

		
			</div>
			<!-- end hero shape -->
		</section>
	<!-- Hero End -->

	<!-- Team start -->
	  <section class="section bg-light" id="team">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Pendaftar Sementara DPM</h2>
                </div>
            </div>

            <div class="row justify-content-center ">
                <?php foreach ($pendaftar_dpm as $pendaftar_dpm) { ?>
                <div class="col-lg-3 col-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url('upload/').$pendaftar_dpm['nim'].'/'.$pendaftar_dpm['foto'] ?>" alt="" class="img-fluid d-block mx-auto" />
                           
                        </div>
                        <div class="p-4">
                            <h3 class="font-size-19 mb-1"><?php echo $pendaftar_dpm['nama']; ?></h3>
                            <p class="text-muted text-uppercase font-size-14 mb-0"><?php echo $pendaftar_dpm['nim']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
                <!-- end col -->

               
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
   
        <div class="container mt-5">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-7 text-center">
                    <h2 class="fw-bold">Pendaftar Sementara Presma & Wapresma</h2>
                </div>
            </div>

            <div class="row justify-content-center">
            	<?php foreach ($pendaftar_presma as $pendaftar_presma) { ?>
                <div class="col-lg-3 col-6">
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url() ?>assets/images/team/0.jpg" alt="" class="img-fluid d-block mx-auto" />
                           
                        </div>
                        <div class="p-4">
                            <h3 class="font-size-19 mb-1"><?php echo $pendaftar_presma['ketua_nama']; ?></h3>
                            <h3 class="font-size-19 mb-1"><?php echo $pendaftar_presma['wakil_nama']; ?></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
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