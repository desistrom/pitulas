	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Nama Kegiatan</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- end banner -->
	<!-- content -->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<?php for ($i=0; $i < 3; $i++) { ?>
				<div class="col-md-4 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="<?=base_url().'assets/images/g1.jpg';?>">
								<img src="<?=base_url().'assets/images/g1.jpg';?>" alt="" />	
							</a>
						</figure>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end content