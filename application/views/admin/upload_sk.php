<form action="<?php echo base_url('admin/upload_sk_dpm'); ?>" enctype="multipart/form-data" method="POST">
	<input type="hidden" value="<?php echo $nim ?>" name="nim">
	<input type="file" required="" accept="application/msword, application/pdf" name="sk">
	<button type="submit" class="btn btn-primary">UPLOAD SK</button>
</form>