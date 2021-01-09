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
				<div class="col-lg-5">
					<h1 class="text-white display-4 font-weight-semibold mb-4 hero-1-title">E-PEMIRA STTNF 2020-2021</h1>
					<p class="text-white-70 mb-4  mb-lg-5">Pemilihan raya Online STT Terpadu Nurul Fikri 2020-2021</p>
					<a href="<?php echo base_url('secure/login') ?>" class="btn btn-lg btn-light rounded-pill me-2">Mulai Voting</a>
					<div class="d-inline-block" data-bs-toggle="modal" data-bs-target="#watchvideomodal">
						<a href="javascript: void(0);" class="video-play-icon text-white">
							<span class="play-icon-circle me-2"><i class="icon-sm icon" data-feather="play"></i></span>
							<span class="">Apa itu pemira ?</span>
						</a>
					</div>


				</div>
				<div class="col-lg-6 col-sm-10 mx-auto ms-lg-auto me-lg-0">
					<div class="mt-lg-0 mt-4">
						<img src="<?php echo base_url() ?>assets/images/logo.png" style="width: 100%" alt="" class="img-md-responsive" />
					</div>

				</div>
			</div>
			<!-- end row -->

			<!-- Modal -->
			<div class="modal fade bd-example-modal-lg" id="watchvideomodal" tabindex="-1" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
					<div class="modal-content home-modal">
						<div class="modal-header border-0">
							<button type="button" class="btn-close float-end" data-bs-dismiss="modal"><i
								class="mdi mdi-close"></i></button>
							</div>
							<div class="ratio ratio-16x9">
								<center><video style="width: 100%" controls>
									<source src="<?php echo base_url('assets/pemira.mp4') ?>" type="video/mp4">
										Your browser does not support the video tag.
									</video></center>
								</div>

							</div>
						</div>
					</div>
					<!-- end modal -->
				</div>
				<!-- end container -->
				<div class="hero-bottom-shape">
					<img src="<?php echo base_url() ?>assets/images/hero-1-bottom-shape.png" alt="" class="img-fluid d-block mx-auto" />
				</div>
				<!-- end hero shape -->
			</section>
			<!-- Hero End -->

			<!-- Services start -->
			<section class="section" id="services">

				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-lg-7 text-center">
							<h2 class="fw-bold">Tata Cara Pemilihan</h2>
							<p class="text-muted">Tata Cara Pemilihan Harap dibaca dengan seksama.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-3">
							<div class="service-box text-center px-4 py-5 position-relative mb-4">
								<div class="service-box-content p-4">
									<div class="icon-mono service-icon avatar-md mx-auto mb-4">
										<i class="" data-feather="log-in"></i>
									</div>
									<h4 class="mb-3 font-size-22">Registrasi Ulang</h4>
									<p class="text-muted mb-0">Registrasi Ulang untuk mengaktifkan akun</p>
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="service-box text-center px-4 py-5 position-relative mb-4">
								<div class="service-box-content p-4">
									<div class="icon-mono service-icon avatar-md mx-auto mb-4">
										<i class="" data-feather="log-in"></i>
									</div>
									<h4 class="mb-3 font-size-22">Login</h4>
									<p class="text-muted mb-0">Login menggunakan akun yang sudah diberikan</p>
								</div>
							</div>
						</div>
						<!-- end col -->

						<div class="col-lg-3">
							<div class="service-box text-center px-4 py-5 position-relative mb-4">
								<div class="service-box-content p-4">
									<div class="icon-mono service-icon avatar-md mx-auto mb-4">
										<i class="" data-feather="user-check"></i>
									</div>
									<h4 class="mb-3 font-size-22">Memilih Kandidat</h4>
									<p class="text-muted mb-0">Pilih kandidat yang ingin anda pilih.</p>
								</div>
							</div>
						</div>
						<!-- end col -->

						<div class="col-lg-3">
							<div class="service-box text-center px-4 py-5 position-relative mb-4">
								<div class="service-box-content p-4">
									<div class="icon-mono service-icon avatar-md mx-auto mb-4">
										<i class="" data-feather="server"></i>
									</div>
									<h4 class="mb-3 font-size-22">Terima Bukti Pemilihan</h4>
									<p class="text-muted mb-0">Kamu akan dikirimkan email bukti kamu telah memilih kandidat.</p>
								</div>
							</div>
						</div>
						<!-- end col -->
					</div>
					<!-- end row -->
				</div>
				<!-- end container -->

			</section>
			<!-- Services end -->

			<!-- Features start -->
			<section class="section bg-light" id="features">
				<div class="container">
					<div class="row justify-content-center mb-5">
						<div class="col-lg-7 text-center">
							<h2 class="fw-bold">Syarat Dan Ketentuan</h2>
							<p class="text-muted">Syarat & Ketentuan Ini Harus dibaca bersamaan dengan Kebijakan Privasi.</p>
						</div>
					</div>

					<div class="row align-items-center mb-5">
						<div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
							<p class="text-muted mb-5">
								<ul>
									<li>Pemilihan Pasangan calon Ketua & Wakil BEM dilaksanakan secara LANGSUNG & TIDAK BOLEH DIWAKILKAN dengan mengedepankan prinsip-prinsip Rahasia, Umum, Bebas, jujur dan adil.</li>
									<li>Pemilih Merupakan mahasiswa aktif STT Terpadu Nurul FIkri Yang Telah Melakukan Registrasi Ulang pada waktu yang telah ditetapkan.</li>
									<li>Pemungutan Suara Secara Daring pada Web E-Pemira Dilakukan Pada Tanggal 29 Januari Pukul 07.00 Sampai Pukul 20.00</li>
									<li>Voting Akan ditutup pada tanggal 29 Januari pada pukul 21.00</li>
									<li>Pemilihan ini hanya dilakukan satu kali dan tidak dapat melakukan pemilihan ulang.</li>
									<li>Kandidat terpilih ditetapkan berdasarkan suara terbanyak hasil pemilihan.</li>
								</ul>
							</p>

						</div>
						<div class="col-md-6 ms-md-auto order-1 order-md-2">
							<div class="position-relative">
								<div class="ms-5 features-img">
									<img src="<?php echo base_url() ?>assets/images/features-1.png" alt="" class="img-fluid d-block mx-auto rounded" />
								</div>
								<img src="<?php echo base_url() ?>assets/images/dot-img.png" alt="" class="dot-img-left" />
							</div>
						</div>
					</div>
					<!-- end row -->
					
				</div>
				<!-- end container -->
			</section>
			<!-- Features end -->




			<!-- Contact us start -->
			<section class="section" id="contact">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<h2 class="fw-bold mb-4">Get in Touch</h2>
							<p class="text-muted mb-5">Ada Pertanyaan lebih lanjut ? bisa hubungi kami di :</p>

							<div>
								<form method="post" name="myForm" onsubmit="return validateForm()">
									<p id="error-msg"></p>
									<div id="simple-msg"></div>
									<div class="row">
										<div class="col-lg-6">
											<div class="mb-4">
												<label for="name" class="text-muted form-label">Name</label>
												<input name="name" id="name" type="text" class="form-control"
												placeholder="Enter name*">
											</div>
										</div>
										<div class="col-lg-6">
											<div class="mb-4">
												<label for="email" class="text-muted form-label">Email</label>
												<input name="email" id="email" type="email" class="form-control"
												placeholder="Enter email*">
											</div>
										</div>
										<div class="col-md-12">
											<div class="mb-4">
												<label for="subject" class="text-muted form-label">Subject</label>
												<input type="text" class="form-control" id="subject" name="subject"
												placeholder="Enter Subject.." />
											</div>

											<div class="mb-4 pb-2">
												<label for="comments" class="text-muted form-label">Message</label>
												<textarea name="comments" id="comments" rows="4" class="form-control"
												placeholder="Enter message..."></textarea>
											</div>

											<button type="submit" id="submit" name="send" class="btn btn-primary">Send
											Message</button>

										</div>
									</div>
								</form>
							</div>

						</div>
						<!-- end col -->

						<div class="col-lg-5 ms-lg-auto">
							<div class="mt-5 mt-lg-0">
								<img src="<?php echo base_url() ?>assets/images/contact.png" alt="" class="img-fluid d-block" />
								<p class="text-muted mt-5 mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="mail"></i>
								info@nurulfikri.ac.id</p>
								<p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>
									<a href="https://wa.me/6285382932485">+62 853-8293-2485</a></p>
								<p class="text-muted mb-3"><i class="me-2 text-muted icon icon-xs" data-feather="map-pin"></i>
								Jl. Raya Lenteng Agung No.20, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12640</p>
								
							</div>
						</div>
						<!-- end col -->
					</div>
					<!-- end row -->
				</div>
				<!-- end container -->
			</section>
			<!-- Contact us end -->

			<?php $this->load->view('include/footer') ?>
			<!-- feather-icons js -->
			<?php $this->load->view('include/script') ?>

		</body>

		</html>