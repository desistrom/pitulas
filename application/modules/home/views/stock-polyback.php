	<style type="text/css">
		.content {
			margin-top: 20px;
		}
	</style>
	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Stock Polyback</h2>
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
					<th>Stock/pack</th>
				</tr>
				<?php 
				for ($i=1; $i <=10 ; $i++) { ?>
					<tr>
						<td><?= $i;?></td>
						<td>Beras Bagus</td>
						<td>500</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</div>