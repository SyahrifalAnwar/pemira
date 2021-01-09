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
					<h1 class="text-white display-4 font-weight-semibold mb-4 hero-1-title">REAL COUNT</h1>


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
					<h2 class="fw-bold">DATA REALCOUNT</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-sm-12">

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