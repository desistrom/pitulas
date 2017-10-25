 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 <h1>Rekap data Kependudukan <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
 <h2> Data Jumlah Penduduk </h2>
 <table border="1" width="100%">
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

<hr>

<h2>Data Akte</h2>
<table border="1" width="100%">
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

<hr>

<h2>Data Jumlah Perkawinan</h2>

<table border="1" width="100%">
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

<hr>

<h2>Data Jumlah Jiwa menurut Umur dan Tingkat Pendidikan</h2>

<table border="1" width="100%">
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

<hr>

<h2>Jumlah Jiwa menurut Umur dan Status Perkawinan</h2>

<table border="1" width="100%">
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