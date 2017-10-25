<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<h1>Rekap Data Bina Ketahanan Keluarga <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>
<hr>

<h2>Jumlah Jiwa Menurut Kelompok Umur</h2>
<table border="1" width="100%">
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

<hr>

<h2>Balita dalam Kegiatan Taman Posyandu dan BKB</h2>

<table border="1" width="100%">
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

<hr>

<h2>Remaja dalam PIK dan BKR</h2>

<table border="1" width="100%">
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

<hr>

<h2>Data Jumlah Kelompok BKB, BKR, BKL dan UPPKS</h2>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>No. </th>
      <th>Kelompok</th>
      <th>Jumlah Kel.</th>
      <th>Anggota</th>
      <th>Hadir</th>
    </tr>
  </thead>
  <tbody>
  <?php if (is_array($kelompok)) {    ?>            
    <?php $i = 1; ?>
    <?php foreach ($kelompok as $key => $value) : ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?=$value['kelompok'];?></td>
      <td><?=$value['jml_kelompok'];?></td>
      <td><?=$value['ada'];?></td>
      <td><?=$value['hadir'];?></td>
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
  </tfoot>
</table>

<hr>

<h2>Data Jumlah PIK</h2>

<table border="1" width="100%">
  <thead>
    <tr>
      <th>No. </th>
      <th>Kelompok</th>
      <th>Jumlah Kel.</th>
      <th>Anggota</th>
      <th>Hadir</th>
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
  </tfoot>
</table>