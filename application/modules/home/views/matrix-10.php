	<style type="text/css">
		p{
			text-align: justify;
		}
		.content {
			margin: 35px 0;
		}
	</style>
	<!-- banner -->
	<div class="banner about-banner">
		<div class="container">
			<h2>Matrix 10</h2>
			<div class="agileits-line"> </div>
		</div>
	</div>
	<!-- //banner -->
	<!-- content -->
	<div class="container">
		<div class="content">
			<div class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
				<a href="#" class="test">Direktur</a> <span class="caret"></span>
				<ul class="dropdown-menu">
					<li>asdasdas</li>
				</ul>
			</div>
		</div>
	</div>

	<script>
	$(document).ready(function(){
	  $('.dropdown-submenu a.test').on("click", function(e){
	    $(this).next('div').toggle();
	    e.stopPropagation();
	    e.preventDefault();
	  });
	});
	</script>