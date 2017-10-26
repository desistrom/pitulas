	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Foto Event Perusahaan</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="container event">
		<?php 
			for ($i=1; $i <=5 ; $i++) { ?>
			<div class="row">
				<div class="col-md-2">
					<img class="img-responsive" src="<?=base_url().'assets/images/pp.png';?>">
				</div>
				<div class="col-md-10">
					<h3><a class="event-judul" href="<?=site_url().'home/Event/detail_event';?>">Pemanenan Padi</a></h3>
					<p>
						Pemanenan padi dilakukan di desa Mojodelik Kabupaten Bojonegoro, pada bulan November lalu yang menghasilkan ribuat ton padi yang belum jadi beras ....
					</p>
					<a href="<?=site_url().'home/Event/detail_event';?>">Read more ...</a>
				</div>
			</div>
			<hr>
		<?php } ?>
		
		<center>
			<div class="btn-inline">
				<button class="btn-akhir" type="button"><< Prev</button>
				<button type="button">1</button>
				<button type="button">2</button>
				<button type="button">3</button>
				<button type="button">4</button>
				<button type="button">...</button>
				<button class="btn-akhir" type="button">Next >></button>
			</div>
		</center>
	</div>
	<!-- end content -->