
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->

  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">rekab Data Kesehatan</a> </div>
    <h1>Rekap data Kesehatan</h1>
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
      <a href="<?=site_url('home/cetak_pdf_kesehatan');?>/<?=$id;?>"><button class="btn btn-primary"><i class="icon-file"></i> Download Pdf</button></a>
      <hr width="80%">
      <a href="<?=site_url('home/cetak_excel_kesehatan');?>/<?=$id;?>"><button class="btn btn-success"><i class="icon-table"></i> Download Excel</button></a>
    </div>
    <?php } ?>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data Kesehatan</h5>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php if (is_array($kesehatan)) {    ?>            
                <?php $i = 1; ?>
                <?php foreach ($kesehatan as $key => $value) : ?>
                <tr id="kesehatan_<?=$value['iddata_kesehatan'];?>">
                  <td><?php echo $i; ?></td>
                  <td><?=$value['range'];?></td>
                  <td><?=$value['anak1'];?></td>
                  <td><div class="span1"><?=$value['anak2'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kesehatan/keterangan_anak2');?>/<?=$value['iddata_kesehatan'];?>"><i class="icon-edit"></i></a></div></td>
                  <td><div class="span1"><?=$value['anak3'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kesehatan/keterangan_anak3');?>/<?=$value['iddata_kesehatan'];?>"><i class="icon-edit"></i></a></div></td>
                  <td><?=$value['jml_persalinan'];?></td>
                  <td><div class="span1"><?=$value['jml_kematian_ibu'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kesehatan/keterangan_ibu');?>/<?=$value['iddata_kesehatan'];?>"><i class="icon-edit"></i></a></div></td>
                  <td><div class="span1"><?=$value['jml_kematian_bayi'];?></div><div class="span1"><a class="btn btn-mini btn-info" href="<?=site_url('kesehatan/keterangan_bayi');?>/<?=$value['iddata_kesehatan'];?>"><i class="icon-edit"></i></a></div></td>
                  <td>
                    <a class="btn btn-mini btn-info" href="<?=site_url('kesehatan/edit_kesehatan');?>/<?=$value['iddata_kesehatan'];?>"><i class="icon-edit"></i></a>
                    <a class="btn btn-mini btn-danger hapus_kesehatan" id="kesehatan_<?=$value['iddata_kesehatan'];?>"><i class="fa icon-remove"></i></a>
                  </td>
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
    $('body').on('click','.hapus_kesehatan',function() {
        //alert('jalan');
        var file_name = $(this).attr('id');
        console.log(file_name);
        var id = file_name.split('_')[1];
        console.log(id);
       if(confirm('Are You Sure Wants To Delete this Data ??')){
            $.ajax({
                url: '<?=site_url('kesehatan/delete_kesehatan');?>',
                    type: 'POST',
                    cache: false,
                    data: { 'id' : id}
                }).done(function(data){
                  console.log(data.notif);
                    $('#kesehatan_'+id).remove();
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
