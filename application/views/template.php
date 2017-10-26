<!DOCTYPE html>
<html lang="en">
<head>
<title>PT PITULAS BOJONEGORO | Jawa Timur</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farming Company Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="<?=base_url().'assets/css/bootstrap.css';?>" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- icon -->
<link rel="icon" type="icon" href="<?=base_url().'assets/images/logo_pt.png';?>">
<!-- // icon -->
<!-- css -->
<link rel="stylesheet" href="<?=base_url().'assets/css/style.css';?>" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="<?=base_url().'assets/css/font-awesome.css';?>" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font --><!-- 
<link href="//fonts.googleapis.com/css?family=Righteous&subset=latin-ext" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'> -->
<!-- //font -->
<script src="<?=base_url().'assets/js/jquery-1.11.1.min.js';?>"></script>
<script src="<?=base_url().'assets/js/bootstrap.js';?>"></script>
<script src="<?=base_url().'assets/js/SmoothScroll.min.js';?>"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
</head>
<body>
    <!-- header -->
    <div class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <div class="w3layouts-logo">
                        <h1><a href="<?=site_url().'home/Beranda';?>">PT Pitulas <span>Bojonegoro</span></a></h1>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?=site_url().'home/Beranda';?>">Home</a></li>
                            <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tentang Kami<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/profile_perusahaan';?>">Profil Perusahaan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/sejarah';?>">Sejarah Perusahaan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/visi_misi';?>">Visi, Misi dan Strategi</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/logo';?>">Logo Perusahaan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/struktur';?>">Struktur Organisasi</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/sambutan';?>">Sambutan Direktur Utama</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/dewan_komisaris';?>">Dewan Komisaris</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Tentang_kami/dewan_direksi';?>">Dewan Direksi</a></li>          
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bidang Usaha<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Bidang_usaha/perdagangan';?>">Perdagangan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Bidang_usaha/jasa_pergudangan';?>">Jasa Pergudangan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Bidang_usaha/jasa_pertokoan';?>">Jasa Pertokoan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Bidang_usaha/jasa_angkutan';?>">Jasa Angkutan</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Bidang_usaha/resi_gudang';?>">Resi Gudang</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Bidang_usaha/kawasan_pangan';?>">Kawasan Pangan</a></li>
                                </ul>
                            </li>
                            <li><a href="<?=site_url().'home/Event';?>" class="hvr-sweep-to-bottom">Event</a></li>
                            <li><a href="<?=site_url().'home/Produk';?>" class="hvr-sweep-to-bottom">Produk</a></li>
                            <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Galery<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Gallery/gallery_foto';?>">Foto</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Gallery/gallery_video';?>">Video</a></li>          
                                </ul>
                            </li>
                            <li><a href="#" class="dropdown-toggle hvr-sweep-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pusat Informasi<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Pusat_informasi/harga_beras';?>">Harga Beras</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Pusat_informasi/stock_beras';?>">Stock Beras</a></li>          
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Pusat_informasi/harga_polyback';?>">Harga Polyback</a></li>          
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Pusat_informasi/stock_polyback';?>">Stock Polyback</a></li>
                                    <li><a class="hvr-sweep-to-bottom" href="<?=site_url().'home/Pusat_informasi/matrix_10';?>">Matrix 10</a></li>
                                </ul>
                            </li>
                            <li><a href="<?=site_url().'home/Contact';?>" class="hvr-sweep-to-bottom">Hubungi Kami</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
    <!-- //header -->

    <ci:doc type="modules"/>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="agileinfo_footer_grids">
                <div class="col-md-4 agileinfo_footer_grid">
                    <div class="w3layouts-logo">
                        <h1><a href="<?=site_url().'home/Beranda';?>">PT Pitulas <span>Bojonegoro</span></a></h1>
                    </div>
                    <p>Etiam condimentum mi nec tortor euismod, id lobortis odio dictum. Cras 
                        suscipit elit eget mi volutpat facilisis.</p>
                    <div class="agileinfo-social-grids">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#"><i class="fa fa-vk"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Contact Info</h3>
                    <ul class="agileinfo_footer_grid_list">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-4 agileinfo_footer_grid">
                    <h3>Navigation</h3>
                    <ul class="agileinfo_footer_grid_nav">
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?=site_url().'home/Beranda';?>">Home</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="<?=site_url().'home/About';?>">Tentang Kami</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="gallery.html">Gallery</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="typography.html">Typography</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="icons.html">Icons</a></li>
                        <li><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><a href="mail.html">Mail Us</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3agile_footer_copy">
                <p>&copy; <?php echo date('y'); ?> PT PITULAS BOJONEGORO. All rights reserved</p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <script type="text/javascript" src="<?=base_url().'assets/js/move-top.js';?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/js/easing.js';?>"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
</body> 
</html>  