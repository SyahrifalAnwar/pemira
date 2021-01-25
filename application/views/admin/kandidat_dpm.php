
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
											<li class="breadcrumb-item active">Kandidat DPM</li>
										</ol>
									</div>
									<h4 class="page-title">Kandidat DPM</h4><br><?php echo $this->session->flashdata('pesan'); ?>
								</div>
							</div>
							<div class="clearfix" id="pesan"></div>
						</div>

						<!-- end page title end breadcrumb -->
						<div class="row">
							<?php foreach ($kandidat_dpm as $kandidat_dpm) { ?>
								<div class="col-md-12 col-xl-4">
									<div class="card m-b-30 border-0">

										<div class="card-body  text-center">
											<img src="<?php echo base_url().'upload/'.$kandidat_dpm['nim'].'/'.$kandidat_dpm['foto'] ?>" alt="" class=" mx-auto d-block w-50">

											<div class="text-center">
												<h5><?php echo $kandidat_dpm['nama'] ?></h5>
												<p class="text-muted"><?php echo $kandidat_dpm['nim'] ?></p>
												<div class="row"> 

													<div class="col-6"><button href="<?php echo base_url('admin/profile_kandidat/').$kandidat_dpm['nim'] ?>" id='Profile' class="btn btn-block btn-raised btn-primary mb-3">Lihat Profile</button></div>
													<div class="col-6"><button href="<?php echo base_url('admin/upload_sk/').$kandidat_dpm['nim'] ?>" id='UploadSK' class="btn btn-block btn-raised btn-info mb-3">Upload SK</button></div>
												</div>

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
	<script type="text/javascript">
		$(document).on('click', '#UploadSK, #Profile', function(e){
		e.preventDefault();
		
		if($(this).attr('id') == 'UploadSK')
		{

			$('.modal-dialog').removeClass('modal-sm');
			$('.modal-dialog').removeClass('modal-lg');
			$('.modal-dialog').addClass('modal-md');
			$('#ModalHeader').html('UPLOAD SK');
		}else if($(this).attr('id') == 'Profile')
		{

			$('.modal-dialog').removeClass('modal-sm');
			$('.modal-dialog').removeClass('modal-md');
			$('.modal-dialog').addClass('modal-lg');
			$('#ModalHeader').html('PROFILE');
		}
		
		$('#ModalContent').load($(this).attr('href'));
		$('#GetModal').modal('show');
	});
	</script>

</body>

</html>