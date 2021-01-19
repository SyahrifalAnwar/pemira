<?php foreach ($detail_dpm as $detail_dpm) {
	# code...
} ?>

<div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
							<div class="position-relative overflow-hidden">
								<img src="<?= base_url().'upload/'.$detail_dpm['nim'].'/'.$detail_dpm['foto'] ?>" alt="" class="img-fluid d-block mx-auto">

							</div>
							<div class="p-4">
								<h3 class="font-size-19 mb-1"><?php echo $detail_dpm['nama']; ?></h3>
								<p class="text-muted text-black text-uppercase font-size-14 mb-3">(<?php echo $detail_dpm['nim']; ?>)</p>

								<h3 class="font-size-19 mb-1"><b>VISI</b></h3>
								<p class="text-muted text-black text-uppercase font-size-14 mb-3"><?php echo $detail_dpm['visi']; ?></p>

								<h3 class="font-size-19 mb-1"><b>MISI</b></h3>
								<p class="text-muted text-black text-uppercase font-size-14 mb-3"><?php echo $detail_dpm['misi']; ?></p>
								<h3 class="font-size-19 mb-1"><b>PROGRAM</b></h3>

								<p class="text-muted text-black text-uppercase font-size-14 mb-3"><?php echo $detail_dpm['program']; ?></p>
							</div>
						</div>
