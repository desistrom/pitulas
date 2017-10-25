<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-responsive.min.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/fullcalendar.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/matrix-style.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/matrix-media.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/colorpicker.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/datepicker.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/uniform.css" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/select2.css" />

<link href="<?=base_url();?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="<?=base_url();?>assets/css/jquery.gritter.css" />

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style type="text/css">
  .open>.dropdown-menu {
    position: static;
  }
  body{
    background-color:white;
  }
  #content {
    margin-left: 50px;
    margin-right: 50px;
  }
  table{
    font-size: small;
  }
  #content-header h1{
    margin-top: 50px;
  }
</style>
</head>
<div id="content">
<!--breadcrumbs-->

  <div id="content-header">
    <h1>Rekap data Kependudukan <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Penduduk Menurut Jeni Kelamin</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table ">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Jenis Kelamin</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Perempuan</td>
                  <td class="center"><?=$kependudukan['jml_perempuan'];?></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Laki Laki</td>
                  <td class="center"><?=$kependudukan['jml_pria'];?></td>
                </tr>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah(<?=$kependudukan['periode_awal'];?>)</th>
                  <th class="center"><?=$kependudukan['jumlah'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Jiwa Yang Mempunyai Akte Kelahiran </h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Yang Ada</th>
                  <th>Memiliki Akte</th>
                  <th>Tidak Memiliki Akte</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($akte)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($akte as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?php echo $value['punya_akte'] + $value['tidak_akte'];?></td>
                  <td><?=$value['punya_akte'];?></td>
                  <td><?=$value['tidak_akte'];?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah(<?php if(is_array($akte)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_akte['total'];?></th>
                  <th><?=$tot_akte['ya'];?></th>
                  <th><?=$tot_akte['tidak'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Perkawinan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Jumlah Perkawinan</th>
              </thead>
              <tbody>
              <?php if (is_array($umur)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($umur as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['jml_kawin'];?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah(<?php if(is_array($umur)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_umur['total'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Jiwa Menurut Umur dan Tingkat Pendidikan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Tidak Sekolah</th>
                  <th>Tidak Lulus SD/MI</th>
                  <th>SD/MI</th>
                  <th>SLTP</th>
                  <th>SLTA</th>
                  <th>PT</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($pendidikan)) {  ?>
                <?php $i = 1; ?>
                <?php foreach ($pendidikan as $key => $value) : $a=$value['periode_awal']; ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['tidak_sekolah'];?></td>
                  <td><?=$value['tdk_sd'];?></td>
                  <td><?=$value['sd'];?></td>
                  <td><?=$value['smp'];?></td>
                  <td><?=$value['sma'];?></td>
                  <td><?=$value['pt'];?></td>
                  <td><?php echo $a = $value['tdk_sd'] + $value['tidak_sekolah'] + $value['sd'] + $value['smp'] + $value['sma'] + $value['pt'];?>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">jumlah (<?php if(is_array($pendidikan)){ echo $value['periode_awal']; } ?>)</th>
                  <th><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['tidak_sekolah']; } ?></th>
                  <th><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['tdk_sd']; } ?></th>
                  <th><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['sd']; } ?></th>
                  <th><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['smp']; } ?></th>
                  <th><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['sma']; } ?></th>
                  <th><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['pt']; } ?></th>
                  <th class="center"><?php if(is_array($tot_pendidikan)){ echo $tot_pendidikan['total']; } ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Jiwa Menurut Umur dan Status Perkawinan</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>K.L</th>
                  <th>K.P</th>
                  <th>Jumlah</th>
                  <th>TK.L</th>
                  <th>TK.P</th>
                  <th>jumlah</th>
                  <th>Duda</th>
                  <th>Janda</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($status_kawin)) { ?>            
                <?php $i = 1; ?>
                <?php foreach ($status_kawin as $key => $value) :  ?>
                <tr>
                  <td><?=$i?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['k_pria'];?></td>
                  <td><?=$value['k_wanita'];?></td>
                  <td><?=$value['k_pria'] + $value['k_wanita'];?></td>
                  <td><?=$value['tk_pria'];?></td>
                  <td><?=$value['tk_wanita'];?></td>
                  <td><?=$value['tk_pria'] + $value['tk_wanita'];?></td>
                  <td><?=$value['duda'];?></td>
                  <td><?=$value['janda'];?></td>
                  <td><?php echo $value['k_pria'] + $value['k_wanita'] + $value['tk_pria'] + $value['tk_wanita'] + $value['janda'] + $value['duda']; ?>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah (<?php if(is_array($status_kawin)){ echo $value['periode_awal']; } ?>)</th>
                  <th><?=$tot_status_kawin['k_pria'];?></th>
                  <th><?=$tot_status_kawin['k_wanita'];?></th>
                  <th><?=$tot_status_kawin['kawin'];?></th>
                  <th><?=$tot_status_kawin['tk_pria'];?></th>
                  <th><?=$tot_status_kawin['tk_wanita'];?></th>
                  <th><?=$tot_status_kawin['tidak_kawin'];?></th>
                  <th><?=$tot_status_kawin['duda'];?></th>
                  <th><?=$tot_status_kawin['janda'];?></th>
                  <th><?=$tot_status_kawin['total'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?=base_url();?>assets/js/excanvas.min.js"></script>

<script src="<?=base_url();?>assets/js/jquery.min.js"></script>

<script src="<?=base_url();?>assets/js/jquery.ui.custom.js"></script>

<script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>

<script src="<?=base_url();?>assets/js/jquery.flot.min.js"></script>

<script src="<?=base_url();?>assets/js/jquery.flot.resize.min.js"></script>

<script src="<?=base_url();?>assets/js/jquery.peity.min.js"></script>

<script src="<?=base_url();?>assets/js/fullcalendar.min.js"></script>

<script src="<?=base_url();?>assets/js/matrix.js"></script>

<script src="<?=base_url();?>assets/js/matrix.dashboard.js"></script>

<script src="<?=base_url();?>assets/js/jquery.gritter.min.js"></script>

<script src="<?=base_url();?>assets/js/matrix.interface.js"></script>

<script src="<?=base_url();?>assets/js/matrix.chat.js"></script>

<script src="<?=base_url();?>assets/js/jquery.validate.js"></script>

<script src="<?=base_url();?>assets/js/matrix.form_validation.js"></script>

<script src="<?=base_url();?>assets/js/jquery.wizard.js"></script>

<script src="<?=base_url();?>assets/js/jquery.uniform.js"></script>

<script src="<?=base_url();?>assets/js/select2.min.js"></script>

<script src="<?=base_url();?>assets/js/matrix.popover.js"></script>

<script src="<?=base_url();?>assets/js/jquery.dataTables.min.js"></script>

<script src="<?=base_url();?>assets/js/matrix.tables.js"></script>

<script src="<?=base_url();?>assets/js/bootstrap-colorpicker.js"></script> 

<script src="<?=base_url();?>assets/js/bootstrap-datepicker.js"></script> 

<script src="<?=base_url();?>assets/js/masked.js"></script> 

<script src="<?=base_url();?>assets/js/matrix.form_common.js"></script>



<script type="text/javascript">

$(document).ready(function(){

    // This function is called from the pop-up menus to transfer to

    // a different page. Ignore if the value returned is a null string:

    function goPage (newURL) {



        // if url is empty, skip the menu dividers and reset the menu selection to default

        if (newURL != "") {



            // if url is "-", it is this page -- reset the menu:

            if (newURL == "-" ) {

                resetMenu();

            }

            // else, send page to designated URL

            else {

              document.location.href = newURL;

            }

        }

    }



  // resets the menu selection upon entry to this page:

  function resetMenu() {

     document.gomenu.selector.selectedIndex = 2;

  }

});

</script>