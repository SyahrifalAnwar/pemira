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
					<h3 class="text-white text-center display-4 font-weight-semibold mb-4 hero-1-title">Unduh Undangan</h3>


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
			<div class="row align-items-center hero-content">
				<div class="col-lg-12 text-center">
					<h2 class="fw-bold">Pencarian data pemilih</h2>
					<p class="text-muted">Silahkan isi form dibawah ini untuk mengecek datamu.</p>
				</div>
				<form method="post" id="cekdpt" action="<?php echo base_url('secure/cari_dpt') ?>">
					<p id="error-msg"></p>
					<div id="simple-msg"></div>
					<div class="row">

						<div class="col-md-12">
							
							<div class="mb-4 pb-2">
								<label for="comments" class="text-muted form-label">NIM</label>
								<input type="number" required="" class="form-control" id="subject" name="nim" placeholder="Masukkan Nim kamu disini">
							</div>



						</div>
						<div class="col-lg-12">
							<div class="mb-4">
								<button style="width: 100%" type="submit" id="submit" name="send" class="btn btn-primary"><i class="mdi mdi-account-search"></i> Cari Data</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</section>
	<!-- Team end -->


	<?php $this->load->view('include/footer') ?>
	<!-- feather-icons js -->
	<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
	<?php $this->load->view('include/script') ?>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#cekdpt").unbind('submit').bind('submit', function() {

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
								title: 'Berhasil',
								text: response.messages,
								confirmButtonText: 'Surat Undangan',
								cancelButtonText: 'Tutup',
								showCancelButton: true,
								showCloseButton: false,
								showLoaderOnConfirm: true,
								preConfirm: function() {
									return new Promise(function(resolve) {
										setTimeout(function() {
											resolve()
										}, 1000)
									})
								}
							}).then((result) => {
								if (result.isConfirmed) {
									location.href = "<?=site_url('secure/surat_undangan')?>?nim=" + $('#subject').val()
									Swal.fire({
										icon: 'success',
										title: 'Berhasil',
										text: 'Surat Undangan Berhasil di Unduh'
									})
								}
							})
						}
						else {
							Swal.fire({
								icon: 'error',
								title: 'Gagal',
								text: response.messages
							})

          } // /else
        } // /if
    });

				return false;
			});
		});


	</script>

</body>

</html>