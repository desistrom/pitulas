
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->

  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">rekab BKK</a> </div>
    <h1>Rekap Data Bina Ketahanan Keluarga</h1>
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
      <a href="<?=site_url('home/cetak_pdf_ketahanan');?>/<?=$id;?>"><button class="btn btn-primary"><i class="icon-file"></i> Download Pdf</button></a>
      <hr width="80%">
      <a href="<?=site_url('home/cetak_excel_ketahanan');?>/<?=$id;?>"><button class="btn btn-success"><i class="icon-table"></i> Download Excel</button></a>
    </div>
    <?php } ?>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($kelompok_umur)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($kelompok_umur as $key => $value) : ?>
                <tr id="kelumur_<?=$value['idjiwa_kelumur'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['sasaran'];?></td>
                  <td><?=$value['jumlah'];?></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_kelompok_umur');?>/<?=$value['idjiwa_kelumur'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_kelumur" id="kelumur_<?=$value['idjiwa_kelumur'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="3">jumlah (<?php if(is_array($kelompok_umur)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_kelompok_umur['total'];?></th>
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($bkb)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($bkb as $key => $value) : ?>
                <tr id="posyandu_<?=$value['idkeg_posyandu'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['p_ikut'] + $value['p_tidak'] + $value['bkb_ikut'] + $value['bkb_tidak'];?></td>
                  <td><?=$value['p_ikut'];?></td>
                  <td><div class="span2"><?=$value['p_tidak'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('bkk/keterangan_posyandu');?>/<?=$value['idkeg_posyandu'];?>"><i class="icon-edit"></i></a></div></td>
                  <td><?=$value['bkb_ikut'];?></td>
                  <td><div class="span1"><?=$value['bkb_tidak'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('bkk/keterangan_bkb');?>/<?=$value['idkeg_posyandu'];?>"><i class="icon-edit"></i></a></div></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_posyandu_bkb');?>/<?=$value['idkeg_posyandu'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_posyandu" id="posyandu_<?=$value['idkeg_posyandu'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah (<?php if(is_array($bkb)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_bkb['total'];?></th>
                  <th><?=$tot_bkb['p_ikut'];?></th>
                  <th><?=$tot_bkb['p_tidak'];?></th>
                  <th><?=$tot_bkb['bkb_ikut'];?></th>
                  <th><?=$tot_bkb['bkb_ikut'];?></th>
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($bkr)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($bkr as $key => $value) : ?>
                <tr id="pikbkr_<?=$value['idremaja_pik_bkr'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['pik_ikut'] + $value['pik_tidak'] + $value['bkr_ikut'] + $value['bkr_tidak'];?></td>
                  <td><?=$value['pik_ikut'];?></td>
                  <td><div class="span1"><?=$value['pik_tidak'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('bkk/keterangan_pik');?>/<?=$value['idremaja_pik_bkr'];?>"><i class="icon-edit"></i></a></div></td>
                  <td><?=$value['bkr_ikut'];?></td>
                  <td><div class="span1"><?=$value['bkr_tidak'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('bkk/keterangan_bkr');?>/<?=$value['idremaja_pik_bkr'];?>"><i class="icon-edit"></i></a></div></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_remaja_pik');?>/<?=$value['idremaja_pik_bkr'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_pikbkr" id="pikbkr_<?=$value['idremaja_pik_bkr'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah (<?php if(is_array($bkr)){ echo $value['periode_awal']; } ?>)</th>
                  <th class="center"><?=$tot_bkb['total'];?></th>
                  <th><?=$tot_bkb['p_ikut'];?></th>
                  <th><?=$tot_bkb['p_tidak'];?></th>
                  <th><?=$tot_bkb['bkb_ikut'];?></th>
                  <th><?=$tot_bkb['bkb_ikut'];?></th>
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($kelompok)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($kelompok as $key => $value) : ?>
                <tr id="kelompok_<?=$value['idjumlah_kelompok'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['kelompok'];?></td>
                  <td><?=$value['jml_kelompok'];?></td>
                  <td><?=$value['ada'];?></td>
                  <td><?=$value['hadir'];?></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_kelompok_masyarakat');?>/<?=$value['idjumlah_kelompok'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_kelompok" id="kelompok_<?=$value['idjumlah_kelompok'];?>"><i class="fa icon-remove"></i></a>
                  </td>
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
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($pik)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($pik as $key => $value) : ?>
                <tr id="pik_<?=$value['idjumlah_pik'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['kelompok'];?></td>
                  <td><?=$value['jml_kelompok'];?></td>
                  <td><?=$value['ada'];?></td>
                  <td><?=$value['hadir'];?></td><td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('bkk/edit_pik');?>/<?=$value['idjumlah_pik'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_pik" id="pik_<?=$value['idjumlah_pik'];?>"><i class="fa icon-remove"></i></a>
                  </td>
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
                  <th>Action</th>
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
    $('body').on('click','.hapus_kelumur',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('bkk/delete_kelompok_umur');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#kelumur_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText);
                }); 
        }
    });

    $('body').on('click','.hapus_posyandu',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('bkk/delete_posyandu');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#posyandu_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert('baris ini memiliki data lain');
                }); 
        }
    });

    $('body').on('click','.hapus_pikbkr',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('bkk/delete_pikbkr');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#pikbkr_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText);
                }); 
        }
    });

    $('body').on('click','.hapus_kelompok',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('bkk/delete_kelompok');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#kelompok_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText);
                }); 
        }
    });

    $('body').on('click','.hapus_pik',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('bkk/delete_pik');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#pik_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText);
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
