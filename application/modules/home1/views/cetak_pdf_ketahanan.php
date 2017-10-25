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
    <h1>Rekap Data Bina Ketahanan Keluarga <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Jiwa Menurut Kelompok Umur</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Sasaran Program</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($kelompok_umur)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($kelompok_umur as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['sasaran'];?></td>
                  <td><?=$value['jumlah'];?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="3">jumlah (<?php if(is_array($kelompok_umur)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_kelompok_umur['total'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Balita dalam Kegiatan Taman Posyandu dan BKB</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Jumlah</th>
                  <th>Ikut Posyandu</th>
                  <th>Tidak Ikut Posyandu</th>
                  <th>Ikut BKB</th>
                  <th>Tidak Ikut BKB</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($bkb)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($bkb as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['p_ikut'] + $value['p_tidak'] + $value['bkb_ikut'] + $value['bkb_tidak'];?></td>
                  <td><?=$value['p_ikut'];?></td>
                  <td><div class="span1"><?=$value['p_tidak'];?></div></td>
                  <td><?=$value['bkb_ikut'];?></td>
                  <td><div class="span1"><?=$value['bkb_tidak'];?></div></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah (<?php if(is_array($bkb)){ echo $value['periode_awal']; } ?>)</th>
                  <th><?=$tot_bkb['p_ikut'];?></th>
                  <th><?=$tot_bkb['p_tidak'];?></th>
                  <th><?=$tot_bkb['bkb_ikut'];?></th>
                  <th><?=$tot_bkb['p_ikut'];?></th>
                  <th class="center"><?=$tot_bkb['total'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Remaja dalam PIK dan BKR</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Jumlah</th>
                  <th>Ikut PIK</th>
                  <th>Tidak Ikut PIK</th>
                  <th>Ikut BKR</th>
                  <th>Tidak Ikut BKR</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($bkr)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($bkr as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['pik_ikut'] + $value['pik_tidak'] + $value['bkr_ikut'] + $value['bkr_tidak'];?></td>
                  <td><?=$value['pik_ikut'];?></td>
                  <td><div class="span1"><?=$value['pik_tidak'];?></div></td>
                  <td><?=$value['bkr_ikut'];?></td>
                  <td><div class="span1"><?=$value['bkr_tidak'];?></div></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah (<?php if(is_array($bkr)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_bkr['total'];?></th>
                  <th><?=$tot_bkr['pik_ikut'];?></th>
                  <th><?=$tot_bkr['pik_tidak'];?></th>
                  <th><?=$tot_bkr['bkr_ikut'];?></th>
                  <th><?=$tot_bkr['bkr_tidak'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Kel. BKB, BKR, BKL dan UPPKS</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok</th>
                  <th>Jumlah Kel.</th>
                  <th>Anggota</th>
                  <th>Hadir</th>
                  <?php if ($desa != '') { ?><th>Action</th><?php } ?>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($kelompok)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($kelompok as $key => $value) : ?>
                <tr <?php if ($desa != '') { ?> id="kelompok_<?=$value['idjumlah_kelompok'];?>" <?php } ?>>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['kelompok'];?></td>
                  <td><?=$value['jml_kelompok'];?></td>
                  <td><?=$value['ada'];?></td>
                  <td><?=$value['hadir'];?></td>
                  <?php if ($desa != '') { ?><td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_kelompok_masyarakat');?>/<?=$value['idjumlah_kelompok'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_kelompok" id="kelompok_<?=$value['idjumlah_kelompok'];?>"><i class="fa icon-remove"></i></a>
                  </td><?php } ?>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <th colspan="2">jumlah (<?php if(is_array($kelompok)){ echo $value['periode_awal']; } ?>)</th>
                <th><?=$tot_kelompok['jml_kelompok'];?></th>
                <th><?=$tot_kelompok['ada'];?></th>
                <th><?=$tot_kelompok['hadir'];?></th>
                <?php if ($desa != '') { ?><th>Action</th><?php } ?>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah PIK</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok</th>
                  <th>Jumlah Kel.</th>
                  <th>Anggota</th>
                  <th>Hadir</th>
                  <?php if ($desa != '') { ?><th>Action</th><?php } ?>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($pik)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($pik as $key => $value) : ?>
                <tr <?php if ($desa != '') { ?> id="pik_<?=$value['idjumlah_pik'];?>" <?php } ?>>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['kelompok'];?></td>
                  <td><?=$value['jml_kelompok'];?></td>
                  <td><?=$value['ada'];?></td>
                  <td><?=$value['hadir'];?></td>
                  <?php if ($desa != '') { ?><td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_pik');?>/<?=$value['idjumlah_pik'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_pik" id="pik_<?=$value['idjumlah_pik'];?>"><i class="fa icon-remove"></i></a>
                  </td><?php } ?>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <th colspan="2">jumlah (<?php if(is_array($pik)){ echo $value['periode_awal']; } ?>)</th>
                <th><?=$tot_pik['jml_kelompok'];?></th>
                <th><?=$tot_pik['ada'];?></th>
                <th><?=$tot_pik['hadir'];?></th>
                <?php if ($desa != '') { ?><th>Action</th><?php } ?>
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