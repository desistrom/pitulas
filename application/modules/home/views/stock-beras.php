	<style type="text/css">
		.content {
			margin-top: 10px;
		}
	</style>
	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Stok Beras</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!-- content -->
	<div class="container content">
		<div id="table_harga_beras" class="table-responsive">
			<table class="table table-striped">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Stok (ton)</th>
				</tr>
				<?php 
				for ($i=1; $i <=10 ; $i++) { ?>
					<tr>
						<td><?= $i;?></td>
						<td>Beras Bagus</td>
						<td>7500</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>