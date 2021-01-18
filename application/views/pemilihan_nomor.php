<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<?php $this->load->view('include/head') ?>
<body>
        <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <style type="text/css">
        #container {
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .option {
            margin : 10pt;
            width: 200px;
            height: 200px;

            display: inline-block;
            vertical-align: top;
            zoom: 1; /* Fix for IE7 */
            *display: inline; /* Fix for IE7 */

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
    <div class="container mt-4">
         <center ><a href="<?php echo base_url('secure/nomor_urut') ?>" class="btn btn-primary">Acak Nomor Urut</a></center>
       <center>
            <div style="text-align: center;" class="row justify-content-center">
            <?php
            $no = 0; foreach ($pendaftar_dpm as $pendaftar_dpm) { 
                $no++;
                ?>
                <div class="col-lg-4 col-6">
                    
                    <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
                        <div class="position-relative overflow-hidden">
                            <img src="<?php echo base_url('upload/').$pendaftar_dpm['nim'].'/'.$pendaftar_dpm['foto'] ?>" alt="" class="img-fluid d-block mx-auto" />
                           
                        </div>
                        <div class="p-4">
                            <center><h2><?php echo $no; ?></h2></center>
                            <h3 class="font-size-19 mb-1"><?php echo $pendaftar_dpm['nama']; ?></h3>
                            <p class="text-muted text-uppercase font-size-14 mb-0"><?php echo $pendaftar_dpm['nim']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
       </center>
        
   
</div>

    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <?php $this->load->view('include/script') ?>
    
</body>
</html>