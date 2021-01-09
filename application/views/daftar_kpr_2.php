<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('include/head') ?>
<body oncontextmenu="return false" 
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
<!-- KETUA -->
<section  id='step1' class="step step1 vh-100 align-items-center position-relative" style="display:block">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12 col-lg-12 col-xl-12">
      <div class="bg-white shadow">
       <div class="p-4">
        <div class="text-center mt-3">
         <a href="<?php echo base_url(); ?>">
             <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="logo-dark" height="150" />
         </a>
         <p class="text-muted mt-2"><b>UPLOAD BERKAS PRESMA</b></p>
     </div>
     <div class="p-3">
         <form id="step1" action="<?php echo base_url('registrasi/kirimberkas_presma') ?>" method="POST"  enctype="multipart/form-data" class="av-invalid">
          <div class="pesan"></div>
          <div class="mb-3">
           <label for="nim" class="form-label">Surat Keterangan Mahasiswa Aktif<br>
           <small style="color: red" id="pesan"></small></label>
           <div class="row">
            <div class="col-md-12">
             <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="ketua_surat_mahasiswaaktif" class="form-control" >
         </div>
         <div class="col-md-3">
         </div>
     </div>
 </div>
 <div class="mb-3">
   <label for="nim" class="form-label">Kartu Hasil Studi dari Semester 1 hingga saat ini<br>
    <small style="color: red" id="pesan2"></small></label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required="" name="ketua_surat_hasilstudi" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Surat Keterangan Aktif Mentoring</label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_mentoring" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Surat Keterangan Cuti Organisasi</label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_cutiorganisasi" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Sertifikat Kepanitiaan / Organisasi di Lingkungan STT NF<br>
    <small style="color: red" id="pesan3"></small></label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_kepanitiaan1" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_kepanitiaan2" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_kepanitiaan3" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_kepanitiaan4" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_kepanitiaan5" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Grand Design meliputi : <br><small> Visi, Misi, dan Program</small><br>
           <small style="color: red" id="pesan4"></small></label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_visi_misi_program" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-5">
   <label for="nim" class="form-label">Surat Dukungan Mahasiswa meliputi : <br><small>Nama Lengkap, NIM, dan Tanda Tangan</small><br>
           <small style="color: red" id="pesan5"></small></label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="ketua_surat_dukungan" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container -->
<section class="fixed-bottom detail-footer bg-white shadow">
   <div class="font-secondary px-2 single">
       <div class="container">
           <div class="row">
               <div class="col-6 col-sm-8">
                   <div class=" mt-3 mb-3">
                       <div class="home btn btn-warning btn-none"><i class="fa fa-angle-left"></i>  Kembali</div>
                   </div>
               </div>
               <div class="col-6 col-sm-4">
                   <div class="d-grid mt-3 mb-3">
                       <button type="submit" class="next btn btn-primary btn-none">Berikutnya</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
</section>
<!-- END KETUA -->

<!-- WAKIL -->
<section style="display: none"  id='step2' class="step step2 vh-100 align-items-center position-relative">
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-md-12 col-lg-12 col-xl-12">
      <div class="bg-white shadow">
       <div class="p-4">
        <div class="text-center mt-3">
         <a href="<?php echo base_url(); ?>">
             <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" class="logo-dark" height="150" />
         </a>
         <p class="text-muted mt-2"><b>UPLOAD BERKAS WAPRESMA</b></p>
     </div>
     <div class="p-3">
         
          <div class="pesan"></div>
          <div class="mb-3">
           <label for="nim" class="form-label">Surat Keterangan Mahasiswa Aktif</label>
           <div class="row">
            <div class="col-md-12">
             <input type="file" onchange="validate_fileupload(this.value);" required="" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_mahasiswaaktif" class="form-control" >
         </div>
         <div class="col-md-3">
         </div>
     </div>
 </div>
 <div class="mb-3">
   <label for="nim" class="form-label">Kartu Hasil Studi dari Semester 1 hingga saat ini</label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" required="" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_hasilstudi" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Surat Keterangan Aktif Mentoring</label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_mentoring" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Surat Keterangan Cuti Organisasi</label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_cutiorganisasi" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Sertifikat Kepanitiaan / Organisasi di Lingkungan STT NF</label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_kepanitiaan1" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_kepanitiaan2" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_kepanitiaan3" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_kepanitiaan4" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
<div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_kepanitiaan5" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-3">
   <label for="nim" class="form-label">Grand Design meliputi : <br><small> Visi, Misi, dan Program</small></label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_visi_misi_program" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
<div class="mb-5">
   <label for="nim" class="form-label">Surat Dukungan Mahasiswa meliputi : <br><small>Nama Lengkap, NIM, dan Tanda Tangan</small></label>
   <div class="row">
    <div class="col-md-12">
     <input type="file" onchange="validate_fileupload(this.value);" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" name="wakil_surat_dukungan" class="form-control" >
 </div>
 <div class="col-md-3">
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- end container -->
<section class="fixed-bottom detail-footer bg-white shadow">
   <div class="font-secondary px-2 single">
       <div class="container">
           <div class="row">
               <div class="col-6 col-sm-8">
                   <div class=" mt-3 mb-3">
                       <div class="prev btn btn-warning btn-none"><i class="fa fa-angle-left"></i>  Kembali</div>
                   </div>
               </div>
               <div class="col-6 col-sm-4">
                   <div class="d-grid mt-3 mb-3">
                       <button type="submit" class="btn btn-primary btn-none">Kirim Berkas</button>
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
</form>
</section>
<!-- END WAKIL -->
<!-- feather-icons js -->
<script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
<?php $this->load->view('include/script') ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script type="text/javascript">
  function validate_fileupload(fileName)
  {
    var allowed_extensions = new Array("pdf","doc","png","jpg","docx");
    var file_extension = fileName.split('.').pop().toLowerCase();

    for(var i = 0; i < allowed_extensions.length; i++)
    {
      if(allowed_extensions[i]==file_extension)
      {
        return true;
      }
    }

    alert('Dokumen hanya boleh pdf, gambar atau doc');
    return false;
  }
</script>
<script>
 $(document).ready(function(){



  $('.next').click(function(e) {
      if (!$(this).hasClass('disabled')) {
        let a = document.forms["step1"]["ketua_surat_mahasiswaaktif"].value;
        let b = document.forms["step1"]["ketua_surat_hasilstudi"].value;
        let c = document.forms["step1"]["ketua_surat_kepanitiaan1"].value;
        let d = document.forms["step1"]["ketua_visi_misi_program"].value;
        let e = document.forms["step1"]["ketua_surat_dukungan"].value;
        if (a == "") {
          document.getElementById("pesan").innerHTML = "*Dokumen tidak boleh kosong";
          return false;
        }else if (b == "") {
          document.getElementById("pesan2").innerHTML = "*Dokumen tidak boleh kosong";
          return false;
        }else if (c == "") {
          document.getElementById("pesan3").innerHTML = "*Dokumen tidak boleh kosong";
          return false;
        }else if (d == "") {
          document.getElementById("pesan4").innerHTML = "*Dokumen tidak boleh kosong";
          return false;
        }else if (e == "") {
          document.getElementById("pesan5").innerHTML = "*Dokumen tidak boleh kosong";
          return false;
        }

        let current = this.closest('.step');
        $(current).css('display', 'none');
        $(current).next().fadeIn('fast');
        $('body,html').animate({ scrollTop : 0 }, 500);
    }


});

  $('.prev').click(function() {
     var current = this.closest('.step');
     $(current).css('display', 'none');
     $(current).prev().fadeIn('fast');
     $('body,html').animate({ scrollTop : 0 }, 500);
 });
  $('.home').click(function() {
      window.history.back();
  });
});
</script>
</html>