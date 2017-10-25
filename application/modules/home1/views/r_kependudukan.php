<!--main-container-part-->
<style type="text/css">
  .open>.dropdown-menu {
    position: static;
  }
</style>
<div id="content">
<!--breadcrumbs-->

  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Kependudukan </a> </div>
    <h1>Rekap data Kependudukan</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="span3">
      <div class="control-group">
        <label class="control-label">Select Bulan</label>
        <div class="controls">
          <select name="bulan">
            <option value="">--- select ---</option>
            <?php if (is_array($periode)) { foreach ($periode as $key => $value) : $namaBulan = array("-","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");?>
                  <option value="<?=$value['bulan'];?>"><?=$namaBulan[$value['bulan']];?></option>
            <?php endforeach; } ?>
          </select>
          <div class="error" id="ntf_bulan"></div>
        </div>
      </div>
    </div>
    <div class="span3">
      <div class="control-group">
        <label class="control-label">Select Tahun</label>
        <div class="controls">
          <select name="tahun">
            <option value="">--- select ---</option>
            <?php if (is_array($tahun)) { foreach ($tahun as $key => $value) : ?>
                  <option value="<?=$value['tahun'];?>"><?=$value['tahun'];?></option>
            <?php endforeach; } ?>
          </select>
          <div class="error" id="ntf_tahun"></div>
        </div>
      </div>
    </div>
    <div class="span2">
      <button class="btn btn-danger" style="margin-top: 25px" id="cari"><i class="icon-search"></i></button>
    </div>
    <?php if (isset($id)) { ?>
    <div class="span2">
      <a href="<?=site_url('home/cetak_pdf_kependudukan');?>/<?=$id;?>"><button class="btn btn-primary"><i class="icon-file"></i> Download Pdf</button></a>
      <hr width="80%">
      <a href="<?=site_url('home/cetak_excel_kependudukan');?>/<?=$id;?>"><button class="btn btn-success"><i class="icon-table"></i> Download Excel</button></a>
    </div>
    <?php } ?>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jumlah Penduduk Menurut Jeni Kelamin</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table " id="penduduk_<?=$kependudukan['idjmlpend_jk'];?>">
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
                  <th class="center"><?=$kependudukan['jumlah'];?>
                    <?php if (!is_null($kependudukan['jml_pria'])) { ?>                      
                    <div class="span7"><button data-toggle="dropdown" class="btn btn-primary btn-mini dropdown-toggle">Action <span class="caret"></span></button>
                      <ul class="dropdown-menu">                        
                        <li><a href="<?=site_url('kependudukan/edit_jumlah_penduduk');?>/<?=$kependudukan['idjmlpend_jk'];?>">Edit Data</a></li>
                        <li class="divider"></li>
                        <li><a class="hapus_penduduk" id="penduduk_<?=$kependudukan['idjmlpend_jk'];?>">Delete Data</a></li>
                      </ul>
                    </div>
                    <?php } ?>
                  </th>
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
                  <th>action</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($akte)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($akte as $key => $value) : ?>
                <tr id="akte_<?=$value['iddata_akte'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?php echo $value['punya_akte'] + $value['tidak_akte'];?></td>
                  <td><?=$value['punya_akte'];?></td>
                  <td><div class="span1"><?=$value['tidak_akte'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/keterangan_akte');?>/<?=$value['iddata_akte'];?>"><i class="fa icon-edit"></i></a></div>
                  </td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/edit_akte');?>/<?=$value['iddata_akte'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_akte" id="akte_<?=$value['iddata_akte'];?>"><i class="fa icon-remove"></i></a>
                  </td>
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
                  <th>action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($umur)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($umur as $key => $value) : ?>
                <tr id="perkawinan_<?=$value['idperkawinan'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><div class="span1"><?=$value['jml_kawin'];?></div><?php if ($value['range'] == '< 15 Tahun' || $value['range'] == '15 - 19 Tahun'){ ?><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/keterangan_perkawinan');?>/<?=$value['idperkawinan'];?>"><i class="fa icon-edit"></i></a></div><?php } ?>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/edit_perkawinan');?>/<?=$value['idperkawinan'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_perkawinan" id="perkawinan_<?=$value['idperkawinan'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah(<?php if(is_array($umur)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_umur['total'];?></th>
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($pendidikan)) {  ?>
                <?php $i = 1; ?>
                <?php foreach ($pendidikan as $key => $value) : $a=$value['periode_awal']; ?>
                <tr id="pendidikan_<?=$value['idtingkat_pendidikan'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><div class="span1"><?=$value['tidak_sekolah'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/keterangan_pendidikan');?>/<?=$value['idtingkat_pendidikan'];?>"><i class="fa icon-edit"></i></a></div></div></td>
                  <td><?=$value['tdk_sd'];?></td>
                  <td><?=$value['sd'];?></td>
                  <td><?=$value['smp'];?></td>
                  <td><?=$value['sma'];?></td>
                  <td><?=$value['pt'];?></td>
                  <td><?php echo $a = $value['tdk_sd'] + $value['tidak_sekolah'] + $value['sd'] + $value['smp'] + $value['sma'] + $value['pt'];?>
                  </td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/edit_pendidikan');?>/<?=$value['idtingkat_pendidikan'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_pendidikan" id="pendidikan_<?=$value['idtingkat_pendidikan'];?>"><i class="fa icon-remove"></i></a>
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
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($status_kawin)) { ?>            
                <?php $i = 1; ?>
                <?php foreach ($status_kawin as $key => $value) :  ?>
                <tr id="status_<?=$value['idjmljiwa'];?>">
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
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kependudukan/edit_status');?>/<?=$value['idjmljiwa'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_status" id="status_<?=$value['idjmljiwa'];?>"><i class="fa icon-remove"></i></a>
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
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('body').on('click','.hapus_penduduk',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('kependudukan/delete_jumlah_penduduk');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#penduduk_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText); console.log('anu');
                }); 
        }
    });

     $('body').on('click','.hapus_akte',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('kependudukan/delete_akte');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#akte_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert('baris ini memiliki data lain');
                }); 
        }
    });

    $('body').on('click','.hapus_perkawinan',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
          $.ajax({
              url: '<?=site_url('kependudukan/delete_perkawinan');?>',
                  type: 'POST',
                  cache: false,
                  data: { 'id' : id}
              }).done(function(data){
                console.log(data.notif);
                  $('#perkawinan_'+id).remove();
              }).fail(function(xhr, status, error){
                  alert('baris ini memiliki data lain');
              }); 
        }
    });

    $('body').on('click','.hapus_pendidikan',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
          $.ajax({
              url: '<?=site_url('kependudukan/delete_pendidikan');?>',
                  type: 'POST',
                  cache: false,
                  data: { 'id' : id}
              }).done(function(data){
                console.log(data.notif);
                  $('#pendidikan_'+id).remove();
              }).fail(function(xhr, status, error){
                  alert('baris ini memiliki data lain');
              }); 
        }
    });

    $('body').on('click','.hapus_status',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
          $.ajax({
              url: '<?=site_url('kependudukan/delete_status');?>',
                  type: 'POST',
                  cache: false,
                  data: { 'id' : id}
              }).done(function(data){
                console.log(data.notif);
                  $('#status_'+id).remove();
              }).fail(function(xhr, status, error){
                  alert('baris ini memiliki data lain');
              }); 
        }
    });

    $('body').on('click','#cari', function(){
      var form_data = new FormData();
      form_data.append('bulan', $('select[name="bulan"]').val());
      form_data.append('tahun', $('select[name="tahun"]').val());
      console.log($('select[name="bulan"]').val());
      console.log($('select[name="tahun"]').val());
      $.ajax({
        url : '<?=current_url();?>',
        type : 'POST',
        dataType : 'json',
        data : form_data ,
        async : false,
        cache : false ,
        contentType : false , 
        processData : false
      }).done(function(data){
        if (data.state == 1) {
          window.location = data.url;
          console.log(data.bulan);
          console.log(data.tahun);
        }else{          
          console.log(data.anu);
        }
      });
    });
  });
</script>

<!--end-main-container-part-->