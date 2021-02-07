<?php foreach ($detail_bem as $key => $detail_bem) {?>
	
<center><h2><?php echo $detail_bem['nama'] ?></h2></center>
	<img style="width: 100%" src="<?php echo base_url('upload/').$detail_bem['nim'].'/'.$detail_bem['foto'] ?>"><br><br>
<center><h3><strong>VISI</strong></h3></center><br>
<center><?php echo $detail_bem['visi']; ?></center><br><br>
<center><h3><strong>MISI</strong></h3></center><br>
<center><?php echo $detail_bem['misi']; ?></center><br><br>
<center><h3><strong>PROGRAM</strong></h3></center><br>
<center><?php echo $detail_bem['program']; ?></center><br><br>
<?php } ?>