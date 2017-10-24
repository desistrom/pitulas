<!--main-container-part-->
<style type="text/css">
  .open>.dropdown-menu {
    position: static;
  }
  td{
    font-size: 12px
  }
</style>
<div id="content">
<!--breadcrumbs-->

  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">rekab kb</a> </div>
    <h1>Rekap data Keluarga Berencana</h1>
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
      <a href="<?=site_url('home/cetak_pdf_kb');?>/<?=$id;?>"><button class="btn btn-primary"><i class="icon-file"></i> Download Pdf</button></a>
      <hr width="80%">
      <a href="<?=site_url('home/cetak_excel_kb');?>/<?=$id;?>"><button class="btn btn-success"><i class="icon-table"></i> Download Excel</button></a>
    </div>
    <?php } ?>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($pus)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($pus as $key => $value) : ?>
                <tr id="pus_<?=$value['idpus_wanita'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?php echo $a = $value['pesertakb'] + $value['bukankb'];?></td>
                  <td><?=$value['pesertakb'];?></td>
                  <td><?=$value['bukankb'];?></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kb/edit_pus');?>/<?=$value['idpus_wanita'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_pus" id="pus_<?=$value['idpus_wanita'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah</th>
                  <th><?=$tot_pus['pesertakb'];?></th>
                  <th><?=$tot_pus['bukankb'];?></th>
                  <th class="center"><?=$tot_pus['total'];?></th>
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($ikut_kb)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($ikut_kb as $key => $value) : ?>
                <tr id="ikut_<?=$value['idikut_kb'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['kontrasepsi'];?></td>
                  <td><?=$value['jumlah'];?></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kb/edit_peserta_kb');?>/<?=$value['idikut_kb'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_ikut" id="ikut_<?=$value['idikut_kb'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah</th>
                  <th><?=$tot_ikut_kb['total']; ?></th>
                  <th>Action</th>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php if (is_array($tidak_kb)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($tidak_kb as $key => $value) : ?>
                <tr id="tidak_<?=$value['idpus_tidak_kb'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['uraian'];?></td>
                  <td><div class="span1"><?=$value['jumlah'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kb/keterangan_tidak_kb');?>/<?=$value['idpus_tidak_kb'];?>"><i class="icon-edit"></i></a></div></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kb/edit_bukan_kb');?>/<?=$value['idpus_tidak_kb'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_tidak" id="tidak_<?=$value['idpus_tidak_kb'];?>"><i class="fa icon-remove"></i></a>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                <?php } ?>
              </tbody>
              <tfoot>
                <tr style="font-weight : bold">
                  <th colspan="2">jumlah</th>
                  <th class="center"><?=$tot_tidak_kb['total']; ?></th>
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
    $('body').on('click','.hapus_pus',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('kb/delete_pus');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#pus_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText); console.log('anu');
                }); 
        }
    });

    $('body').on('click','.hapus_ikut',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('kb/delete_peserta_kb');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#ikut_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText); console.log('anu');
                }); 
        }
    });

    $('body').on('click','.hapus_tidak',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('kb/delete_bukan_kb');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#tidak_'+id).remove();
                }).fail(function(xhr, status, error){
                    alert(xhr.responseText); console.log('anu');
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