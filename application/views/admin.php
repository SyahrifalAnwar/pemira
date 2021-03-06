
<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('admin_include/head') ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
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
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>

                        <!-- end page title end breadcrumb -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6 col-xl-3">
                                <div class="card bg-danger m-b-30">
                                    <div class="card-body">
                                        <div class="d-flex row">
                                            <div class="col-3 align-self-center">
                                                <div class="round">
                                                    <i class="mdi mdi-google-physical-web"></i>
                                                </div>
                                            </div>
                                            <div class="col-8 ml-auto align-self-center text-center">
                                                <div class="m-l-10 text-white float-right">
                                                    <h5 class="mt-0 round-inner"><?php foreach ($count_peserta as $key => $count_peserta) {
                                                        echo $count_peserta['count_peserta'];
                                                    } ?></h5>
                                                    <p class="mb-0 ">Peserta Voting</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-info m-b-30">
                                    <div class="card-body">
                                        <div class="d-flex row">
                                            <div class="col-3 align-self-center">
                                                <div class="round">
                                                    <i class="mdi mdi-account-multiple"></i>
                                                </div>
                                            </div>
                                            <div class="col-8 text-center ml-auto align-self-center">
                                                <div class="m-l-10 text-white float-right">
                                                    <h5 class="mt-0 round-inner"><?php foreach ($kandidat_dpm as $key => $kandidat_dpm) {
                                                        echo $kandidat_dpm['kandidat_dpm'];
                                                    } ?></h5>
                                                    <p class="mb-0 ">Kandidat DPM</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-success m-b-30">
                                    <div class="card-body">
                                        <div class="d-flex row">
                                            <div class="col-3 align-self-center">
                                                <div class="round ">
                                                    <i class="mdi mdi-account-multiple"></i>
                                                </div>
                                            </div>
                                            <div class="col-8 ml-auto align-self-center text-center">
                                                <div class="m-l-10 text-white float-right">
                                                 <h5 class="mt-0 round-inner"><?php foreach ($kandidat_bem as $key => $kandidat_bem) {
                                                    echo $kandidat_bem['kandidat_bem'];
                                                } ?></h5>
                                                <p class="mb-0 ">Kandidat BEM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                            <div class="card bg-primary m-b-30">
                                <div class="card-body">
                                    <div class="d-flex row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-account-multiple"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 ml-auto align-self-center text-center">
                                            <div class="m-l-10 text-white float-right">
                                                <h5 class="mt-0 round-inner">2</h5>
                                                <p class="mb-0">Kandidat Senada</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-3">
                            <div class="card bg-danger m-b-30">
                                <div class="card-body">
                                    <div class="d-flex row">
                                        <div class="col-3 align-self-center">
                                            <div class="round">
                                                <i class="mdi mdi-google-physical-web"></i>
                                            </div>
                                        </div>
                                        <div class="col-8 ml-auto align-self-center text-center">
                                            <div class="m-l-10 text-white float-right">
                                                <h5 class="mt-0 round-inner"><?php foreach ($count_peserta_regis as $key => $count_peserta_regis) {
                                                    echo $count_peserta_regis['count_peserta_regis'];
                                                } ?></h5>
                                                <p class="mb-0 ">Peserta Registrasi Ulang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-9 col-xl-9">
                            <div class="card  m-b-30">
                                <div class="card-body">
                                  <div id="live-pemilih" ></div>
                              </div>
                          </div>
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
    function getData_pemilih() {
        $.getJSON( "<?=base_url('secure/live_data_registrasi')?>", function( response ) {
            Highcharts.chart('live-pemilih', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'column'
                },
                title: {
                    text: 'DAFTAR MAHASISWA YANG MELAKUKAN REGISTRASI'
                },
                xAxis: {
                    categories: ['2016','2017', '2018', '2019', '2020']
                },
                tooltip: {
                    formatter: function () {
                        return '<b>' + this.x + '</b><br/>' +
                        this.series.name + ': ' + this.y + '<br/>'
                    }
                },

                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
               
                credits: {
                    enabled: false
                },
               series: [{
        name: 'Sudah Registrasi',
        data: response[0],
        stack: 'sudah'
    }, {
        name: 'Belum Registrasi',
        data: response[1],
        stack: 'belum'
    }]
         })
        }, "json" )
    }
    $(document).ready(function() {
        getData_pemilih()
        setInterval(() => {
            getData_pemilih()
        }, 60000)
    })
</script>


</body>

</html>