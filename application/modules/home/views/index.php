	<style type="text/css">
		.banner_text{
			background-image: url(<?=base_url().'assets/images/bg_home.jpg';?>);
		}
	</style>
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="banner_text">
									<h3>Lorem ipsum dolor sit</h3>
									<div class="w3ls-line"> </div>
									<p>PT Pitulas Bojonegoro</p>
									<div class="w3-button">
										<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
							<li>	
								<div class="banner_text">
									<h3>Nam semper nisi enim</h3>
									<div class="w3ls-line"> </div>
									<p>PT Pitulas Bojonegoro</p>
									<div class="w3-button">
										<a href="single.html" class="btn btn-1 btn-1b">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
			</section>
			<!-- flexSlider -->
			<link rel="stylesheet" href="<?=base_url().'assets/css/flexslider.css';?>" type="text/css" media="screen" property="" />
			<script defer src="<?=base_url().'assets/js/jquery.flexslider.js';?>"></script>
			<script type="text/javascript">
				$(window).load(function(){
					$('.flexslider').flexslider({
						animation: "slide",
						speed: 10000,
						timeout: 9000,
						start: function(slider){
						$('body').removeClass('loading');
						}
					});
				});
			</script>
			<!-- //flexSlider -->
		</div>
	</div>
	<!-- //banner -->
	<!-- services -->
	<div class="services">
		<div class="container">
			<div class="services-main">
				<div class="services-heading">
					<h2>produk</h2>
					<div class="agileits-line"> </div>
				</div>
				<div class="services-bottom">
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-envira" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4>Nunc vitae temporg</h4>
								<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="<?=base_url().'assets/images/3.jpg';?>" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">					
						<div class="col-md-6 services-grid-right ulta-grid">
							<img src="<?=base_url().'assets/images/4.jpg';?>" alt="" />
						</div>
						<div class="col-md-6 services-grid-left ulta-grid">
							<div class="services-icon"><i class="fa fa-magnet" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4>Lorem Ipsum</h4>
								<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="services-grid">
						<div class="col-md-6 services-grid-left">
							<div class="services-icon"><i class="fa fa-cog" aria-hidden="true"></i></div> 
							<div class="services-text">
								<h4>Excepteur Sint</h4>
								<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-6 services-grid-right">
							<img src="<?=base_url().'assets/images/6.jpg';?>" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--services -->
	<!-- services-bottom -->
	<div class="text-grid">
		<div class="container">
			<h4>Improve your Farming..!</h4>
			<p>Pellentesque non nibh ante. Cras hendrerit finibus eros eget elementum. Maecenas sed ultrices dui. Fusce id feugiat arcu. Vivamus sodales mauris sagittis sem tincidunt, vel pretium orci viverra. Nunc pretium, eros id aliquam cursus, tellus nisi gravida sapien, et eleifend ipsum erat eget nisl.</p>
		</div>
	</div>
	<!-- //services-bottom -->
	<!-- blog -->
	<div class="blog">
		<div class="container">
			<div class="services-heading">
				<h3>Event</h3>
				<div class="agileits-line"> </div>
			</div>
			<?php for ($i=1; $i <=3 ; $i++) { ?>
				<div class="agileinfo-blog-grids">
				<div class="col-md-4 wthree-blog">
					<div class="w3-agileits-blog">
						<div class="w3-agileits-blog-img">
							<a href="single.html"><img src="images/7.jpg" alt="" /></a>
						</div>
						<div class="w3-agileits-blog-text">
							<h4><a class="event-judul" href="<?=site_url().'home/Beranda/detail_event';?>">Pemanenan Padi</a></h4>
							<p>
								Pemanenan padi dilakukan di desa Mojodelik Kabupaten Bojonegoro, pada bulan November lalu yang menghasilkan ribuat ton padi yang belum jadi beras ....
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
	<!-- //blog -->
	