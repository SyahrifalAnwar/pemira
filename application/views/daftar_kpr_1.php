
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('include/head') ?>
<body 
    style="background-image: url('<?php echo base_url() ?>assets/images/auth-bg.png');background-repeat: no-repeat;
  background-attachment: fixed;">
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

    <section class="vh-100 align-items-center position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="bg-white shadow">
                    <div class="p-4">
                        <div class="text-center mt-3">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="logo-dark" height="150" />
                            </a>
                            <p class="text-muted mt-2">UPLOAD BERKAS</p>
                        </div>
                        <div class="p-3">
                            <form id="loginForm" action="<?php echo base_url('secure/daftar_kpr/2') ?>" method="POST"  enctype="multipart/form-data" class="av-invalid">
                                <div class="pesan"></div>
                                <div class="mb-3">
                                    <label for="nim" class="form-label">Surat Keterangan Mahasiswa Aktif</label>
                                    <div class="row">
                                        <div class="col-md-12">
                                         <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="surat_mahasiswaaktif" class="form-control" >
                                    

                                     </div>
                                     <div class="col-md-3">
                                        
                                    </div>


                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">Kartu Hasil Studi dari Semester 1 hingga saat ini</label>
                                <div class="row">
                                    <div class="col-md-12">
                                     <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="surat_hasilstudi" class="form-control" >
                                
                                 </div>
                                 <div class="col-md-3">
                                    
                                </div>


                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">Surat Keterangan Aktif Mentoring</label>
                            <div class="row">
                                <div class="col-md-12">
                                 <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="surat_mentoring" class="form-control" >
                                
                             </div>
                             <div class="col-md-3">
                                
                            </div>


                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">Surat Keterangan Cuti Organisasi</label>
                        <div class="row">
                            <div class="col-md-12">
                             <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="surat_cutiorganisasi" class="form-control" >
                            
                         </div>
                         <div class="col-md-3">
                            
                        </div>


                    </div>
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">Sertifikat Kepanitiaan / Organisasi di Lingkungan STT NF</label>
                    <div class="row">
                        <div class="col-md-12">
                         <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="surat_kepanitiaan1" class="form-control" >
                        
                     </div>
                     <div class="col-md-3">
                        
                    </div>


                </div>
            
            <div class="row">
                <div class="col-md-12">
                 <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="surat_kepanitiaan2" class="form-control" >
                
             </div>
             <div class="col-md-3">
                
            </div>


        </div>
        <div class="row">
            <div class="col-md-12">
             <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="surat_kepanitiaan3" class="form-control" >
            
         </div>
         <div class="col-md-3">
            
        </div>


    </div>
    <div class="row">
        <div class="col-md-12">
         <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="surat_kepanitiaan4" class="form-control" >
        
     </div>
     <div class="col-md-3">
        
    </div>


</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="surat_kepanitiaan5" class="form-control" >

 </div>
 <div class="col-md-3">
    
</div>


</div>
</div>

<div class="mb-3">
    <label for="nim" class="form-label">Grand Design meliputi : <br><small> Visi, Misi, dan Program</small></label>
    <div class="row">
        <div class="col-md-12">
         <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="visi_misi_program" class="form-control" >
    
     </div>
     <div class="col-md-3">
        
    </div>


</div>
</div>
<div class="mb-3">
    <label for="nim" class="form-label">Surat Dukungan Mahasiswa meliputi : <br><small>Nama Lengkap, NIM, dan Tanda Tangan</small></label>
    <div class="row">
        <div class="col-md-12">
         <input type="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="surat_dukungan" class="form-control" >
    
     </div>
     <div class="col-md-3">
        
    </div>


</div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="d-grid mt-3">
        <a href="<?php echo base_url('secure/daftar_kpr') ?>" class="btn btn-warning btn-none">Kembali</a>
    </div>
</div>
<div class="col-md-6">
    <div class="d-grid mt-3">
        <button type="submit" class="btn btn-primary btn-none">Kirim</button>
    </div>
</div>
</div>


</div>

</form>
</div>
</div>
</div>

</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container -->
</section>
<!-- end section -->

<!-- feather-icons js -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<?php $this->load->view('include/script') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</html>