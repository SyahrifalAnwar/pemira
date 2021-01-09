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
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

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
					<h3 class="text-white text-center display-4 font-weight-semibold mb-4 hero-1-title">CEK Daftar Pemilih Tetap</h3>


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
				</div>
				
					<p id="error-msg"></p>
					<div id="simple-msg"></div>
					<div class="row">

						<div class="col-md-12">
							 <div class="table-responsive">
                                            <table id="Datadpt" class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>NIM</th>
                                                        <th>Angkatan</th>  
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
						</div>
					</div>
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
	<script type="text/javascript" language="javascript" >
    $(document).ready(function() {
        var dataTable = $('#Datadpt').DataTable( {
            "processing":true,
            "serverSide": true,
            "stateSave" : false,
            "AutoWidth": true,
            "oLanguage": {
                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
                "sLengthMenu": "Display _MENU_ records per page",
                "sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
                "sInfoFiltered": "(difilter dari _MAX_ total data)",
                "sZeroRecords": "Pencarian tidak ditemukan",
                "sEmptyTable": "Data kosong",
                "sLoadingRecords": "Harap Tunggu...",
                "oPaginate": {
                    "sPrevious": "Previous",
                    "sNext": "Next"
                }
            },
            "aaSorting": [[ 0, "desc" ]],
            "columnDefs": [
                {
                    "targets": 'no-sort',
                    "orderable": false,
                }
            ],
            "sPaginationType": "simple_numbers",
            "iDisplayLength": 10,
            "aLengthMenu": [[10, 20, 50, 100, 150], [10, 20, 50, 100, 150]],
            "ajax":{
                url :"<?php echo site_url('Secure/get_datadpt_json/'); ?>",
                type: "POST",
                error: function(){
                    $(".my-grid-error").html("");
                    $("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="12">No data found in the server</th></tr></tbody>');
                    $("#my-grid_processing").css("display","none");
                }
            }
        } );
    });
		
	</script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</body>

</html>