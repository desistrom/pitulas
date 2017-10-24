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
    <h1>Rekap data Keluarga Berencana <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah PUS Menurut Kemlompok Usia Wanita</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kelompok Umur</th>
                  <th>Jumlah Pus</th>
                  <th>Pus Peserta KB</th>
                  <th>Pus Bukan peserta KB</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($pus)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($pus as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?php echo $a = $value['pesertakb'] + $value['bukankb'];?></td>
                  <td><?=$value['pesertakb'];?></td>
                  <td><?=$value['bukankb'];?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah</th>
                  <th class="center"><?=$tot_pus['total'];?></th>
                  <th><?=$tot_pus['pesertakb'];?></th>
                  <th><?=$tot_pus['bukankb'];?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Keikutsertaan ber KB per MIX Kontrasepsi</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Kontrasepsi</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($ikut_kb)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($ikut_kb as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['kontrasepsi'];?></td>
                  <td><?=$value['jumlah'];?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah</th>
                  <th><?=$tot_ikut_kb['total']; ?></th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
        <hr>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>PUS Bukan Peserta KB</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Uraian</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($tidak_kb)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($tidak_kb as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['uraian'];?></td>
                  <td><div class="span1"><?=$value['jumlah'];?></div></td>                  
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah</th>
                  <th class="center"><?=$tot_tidak_kb['total']; ?></th>
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