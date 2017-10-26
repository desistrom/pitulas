	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Galeri Foto</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<?php for ($i=1; $i <= 3 ; $i++) { ?> 
					<div class="col-md-4 gallery-grid">
					<div class="grid">
						<figure class="effect-roxy">
							<a class="example-image-link" href="<?=site_url().'home/Gallery/detail_foto';?>" data-lightbox="example-set" data-title="In lacinia pharetra ipsum vel dapibus. Ut vitae tristique nisi, mattis pellentesque elit. Proin mollis sed nisi ac sodales.">
								<img src="<?=base_url().'assets/images/g1.jpg';?>" alt="" />
								<figcaption>
									<h3>Maecenas <span>lacus</span></h3>
									<p> Aenean fermentum nisl ac imperdiet commodo</p>
								</figcaption>	
							</a>
						</figure>
					</div>
				</div>
				
				<?php } ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //gallery -->