<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<h1>Rekap data Keluarga Berencana <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
<hr>
<h2>Jumlah PUS Menurut Kelompok Usia Wanita</h2>
<table border="1" width="100%">
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

<hr>
<h2>Keikutsertaan ber KB per MIX Kontrasepsi</h2>
<table border="1" width="100%">
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

<hr>
<h2>Data Pus Tidak KB</h2>
<table border="1" width="100%">
  <thead>
    <tr>
      <th>No. </th>
      <th>Uraian</th>
      <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <?php if (is_array($tidak_kb)) { ?>            
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