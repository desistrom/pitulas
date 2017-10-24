<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <h2>Desa <?php echo $desa['desa']; ?></h2>
    </div>
<!--End-Action boxes-->

<!--Chart-box-->
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Informasi Umum</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span9">
              <h4> Daftar Istilah </h4>
              <p><span class="label label-info"> BKK </span> = Bina Ketahanan Keluarga </p>
              <p><span class="label label-info"> KB </span> = Keluarga Berencana</p>
              <p><span class="label label-info"> MK </span> = Menurut Kelompok </p>
              <p><span class="label label-info"> JK </span> = Jenis Kelamin </p>
              <p><span class="label label-info">K </span> = Kawin</p>
              <p><span class="label label-info">TK </span> = Tidak Kawin</p>
              <p><span class="label label-info">L </span> = Laki-Laki</p>
              <p><span class="label label-info">P </span> = Perempuan</p>
            </div>
            <div class="span3">
              <ul class="site-stats">
                <li class="bg_lh" style="background-color: #d52015;"><i class="icon-user"></i> <strong><?=$jumlah_penduduk['jumlah'];?></strong> <small>Penduduk</small></li>
                <li class="bg_lh" style="background: #7fb219"><i class="icon-home"></i> <strong>120</strong> <small>Jumlah KK </small></li>
                <li class="bg_lh" style="background: #000"><i class="icon-tags"></i> <strong><?=$kb['kb'];?></strong> <small>Anggota KB</small></li>
                <li class="bg_lh" style="background: #0387cf;"><i class="icon-heart"></i> <strong><?=$kb['jumlah'];?></strong> <small>PUS</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->