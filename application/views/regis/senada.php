   <div class="mb-3">
    <label for="userpassword" class="form-label">NIM</label>
    <input name="nim"  required="" placeholder="Masukkan nim anda"
    id="nim" type="number" class="form-control" value="<?php echo $this->session->userdata('nim'); ?>" />
</div>
<div class="mb-3">
    <label for="userpassword" class="form-label">Nama Lengkap</label>
    <input name="nama"  required="" placeholder="Masukkan Nama Lengkap anda"
    id="nama" type="text" class="form-control" value="<?php echo $this->session->userdata('nama'); ?>" />
</div>
<div class="mb-3">
    <label for="userpassword" class="form-label">Email</label>
    <input name="email"  required="" placeholder="Masukkan Email anda"
    id="nama" type="email" class="form-control" value="<?php echo $this->session->userdata('email'); ?>" />
</div>
<div class="mb-3">
    <label for="userpassword" class="form-label">Nomor Telepon</label>
    <input name="no_telp"  required="" placeholder="Masukkan Nomor Telepon anda"
    id="nama" type="no_telp" class="form-control" value="<?php echo $this->session->userdata('no_telp'); ?>" />
</div>