	<style type="text/css">
		p{
			text-align: justify;
			margin: 25px;
		}
		.content {
			margin: 35px 0;
		}
	</style>
	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Jasa Pergudangan</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!-- content -->
	<div class="container">
		<div class="content">
			<div class="row">
			<?php for ($i=1; $i <= 8 ; $i++) { ?>				
				<div class="col-md-3">
					<img class="img-responsive" src="<?=base_url().'assets/images/10.jpg';?>">
					<h5>Nama Produk</h5>
					<img class="img-responsive" src="<?=base_url().'assets/images/12.jpg';?>">
					<h5>Nama Produk</h5>
				</div>
			<?php } ?>
			</div>
		</div>	
		</div>
	</div>