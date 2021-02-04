	<!--Navbar Start-->
	<nav class="navbar navbar-expand-lg fixed-top" id="navbar">
		<div class="container">
			<!-- LOGO -->
			<a class="navbar-brand logo" href="<?php echo base_url() ?>">
				<img src="<?php echo base_url() ?>assets/images/logo-dark.png" alt="" class="logo-dark" height="30" />
				<img src="<?php echo base_url() ?>assets/images/logo-light.png" alt="" class="logo-light" height="30" />
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<i class="" data-feather="menu"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav ms-auto navbar-center" id="navbar-navlist">
				<li class="nav-item magic-hover magic-hover__square">
					<a href="<?php echo base_url() ?>" class="nav-link  active">Home</a>
				</li>
				<li class="nav-item magic-hover magic-hover__square">
					<a href="<?php echo base_url('cek_dpt') ?>" class="nav-link">Cek DPT</a>
				</li> 
				
				<li class="nav-item magic-hover magic-hover__square">
					<a href="<?php echo base_url('agenda_kegiatan') ?>" class="nav-link">Timeline</a>
				</li>
				<li class="nav-item magic-hover magic-hover__square">
					<a href="<?php echo base_url('kandidat') ?>" class="nav-link">Kandidat</a>
				</li>
				<!-- <li class="nav-item  magic-hover magic-hover__square">
					<a href="<?php echo base_url('quick_count') ?>" class="nav-link">Real Count</a>
				</li> -->
				
				
			</ul>
			<a href="<?php echo base_url('registrasi_ulang') ?>" class=" btn btn-sm rounded-pill nav-btn ms-lg-3">Registrasi Ulang</a>
			<a href="<?php echo base_url('secure/login') ?>" class=" btn btn-sm rounded-pill nav-btn ms-lg-3">Login</a>
		</div>
	</div>
	<!-- end container -->
</nav>
<!-- Navbar End -->