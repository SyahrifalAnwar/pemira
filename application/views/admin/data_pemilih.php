
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin_include/head') ?>
<link href="<?= base_url() ?>assets/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>assets/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?= base_url() ?>assets/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->

        <!-- Left Sidebar End -->
        <?php $this->load->view('admin_include/menu') ?>
        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <?php $this->load->view('admin_include/topbar') ?>
                <!-- Top Bar End -->

                <div class="page-content-wrapper dashborad-v">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="btn-group float-right">
                                        <ol class="breadcrumb hide-phone p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">KPR STTNF</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Data Pemilih</h4>
                                </div>
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                    <table id="Datadpt" class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Lengkap</th>
                                                <th>NIM</th>
                                                <th>Email</th>  
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
                            <div class="clearfix"></div>
                        </div>

                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-12 col-xl-12">

                            </div>
                            <!-- Column -->

                        </div>



                    </div>
                    <!-- container -->

                </div>
                <!-- Page content Wrapper -->
            </div>
            <!-- content -->

            <footer class="footer">
                © <?= date('Y') ?> KPR STT TERPADU NURUL FIKRI
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <?php $this->load->view('admin_include/script') ?>

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
                    url :"<?php echo site_url('Admin/get_datadpt_json/'); ?>",
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

    <!-- Required datatable js -->
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url() ?>assets/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
        <!-- Datatable init js -->
        <script src="<?= base_url() ?>assets/assets/pages/datatables.init.js"></script>
</body>

</html>