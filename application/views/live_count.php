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

    <?php $this->load->view('include/navbar') ?>

    <!-- Hero Start -->
    <section class="hero-2 bg-center bg-primary position-relative" style="background-image: url('<?php echo base_url() ?>assets/images/hero-1-bg.png');"
        id="home">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-12">
                    <h3 class="text-white text-center display-4 font-weight-semibold mb-4 hero-1-title">Live Count</h3>
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
        <div id="live-count" class="col-md-12"></div>
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
    <script src="https://code.highcharts.com/highcharts.src.js"></script>
    <script type="text/javascript" language="javascript" >
    function getData() {
      $.get( "<?=site_url('secure/live_data')?>", function( response ) {
        Highcharts.chart('live-count', {
          chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
          },
          title: {
            text: 'Live Count Pemilihan Presma'
          },
          tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          accessibility: {
            point: {
              valueSuffix: '%'
            }
          },
          plotOptions: {
            pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
              }
            }
          },
          series: [{
            name: 'Jumlah Pemilih',
            colorByPoint: true,
            data: response.result
          }]
        })
      }, "json" )
    }
    $(document).ready(function() {
      getData()
      setInterval(() => {
        getData()
      }, 60000)
    })
    </script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
</body>
</html>