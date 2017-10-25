<?php

header("Content-type: application/vnd-ms-excel");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>

<h1>Rekap data Kesehatan <?php if ($desa != '') { ?>Desa <?=$desa['desa'];?><?php } ?><?php if(isset($kecamatan)) { ?> Kecamatan <?=$kecamatan['kecamatan'];?> <?php } ?></h1>

<hr>

<table border="1" width="100%">
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
                  <td><div class="span1"><?=$value['jml_kematian_ibu'];?></div><div class="span1"></td>
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