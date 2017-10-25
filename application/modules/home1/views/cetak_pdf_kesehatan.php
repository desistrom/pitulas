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
    <h1>Rekap data Kesehatan <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
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
                  <th>Anak Ke-1</th>
                  <th>Anak Ke-2</th>
                  <th>Anak Ke-3</th>
                  <th>Jumlah Persalinan</th>
                  <th>Kematian Ibu</th>
                  <th>Kematian Bayi</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($kesehatan)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($kesehatan as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['anak1'];?></td>
                  <td><div class="span1"><?=$value['anak2'];?></div></td>
                  <td><div class="span1"><?=$value['anak3'];?></div></td>
                  <td><?=$value['jml_persalinan'];?></td>
                  <td><div class="span1"><?=$value['jml_kematian_ibu'];?></div></td>
                  <td><div class="span1"><?=$value['jml_kematian_bayi'];?></div></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th colspan="2">jumlah</th>
                  <th><?=$tot_kesehatan['anak1'];?></th>
                  <th><?=$tot_kesehatan['anak2'];?></th>
                  <th><?=$tot_kesehatan['anak3'];?></th>
                  <th><?=$tot_kesehatan['jml_persalinan'];?></th>
                  <th><?=$tot_kesehatan['jml_kematian_ibu'];?></th>
                  <th><?=$tot_kesehatan['jml_kematian_bayi'];?></th>
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