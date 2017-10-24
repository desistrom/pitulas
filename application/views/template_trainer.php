<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>Hospitality |  Community Platform for Management System</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/revolution/css/navigation.css">

    <!-- BOOTSTRAP STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/css/bootstrap.css">
    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/css/style.css">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/css/custom.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/front/css/mycustom/front-end.css">
    <?php if(isset($css) && !(empty($css))){ 
            foreach ($css as $key => $file) {
    ?>
        <link rel="stylesheet" type="text/css" href="<?php echo $file; ?>">
     <?php } } ?>
</head>
<body>

	<!-- PRELOADER -->
        <div id="loader">
			<div class="loader-container">
				<img src="<?=base_url();?>assets/front/img/load.gif" alt="" class="loader-site spinner">
			</div>
		</div>
	<!-- END PRELOADER -->

    <!-- START SITE -->
    <div id="wrapper">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left">
                        <div class="topmenu">
                            <span class="hidden-xs"><i class="fa fa-lock"></i> <a href="<?=site_url('login');?>">Member Login</a></span>
                            <span class="hidden-xs"><i class="fa fa-envelope-o"></i> <a href="mailto:admin@hospitality.com">admin@hospitality.com</a></span>
                            <span><i class="fa fa-phone-square"></i> 021-889-998</span>
                        </div><!-- end callus -->
                    </div>

                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="social-icons">
                            <ul class="list-inline">
                            <li class="facebook"><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="google"><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="twitter"><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="pinterest"><a data-toggle="tooltip" data-placement="bottom" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="skype"><a data-toggle="tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                            <li class="vimeo"><a data-toggle="tooltip" data-placement="bottom" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li class="youtube"><a data-toggle="tooltip" data-placement="bottom" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- end social icons -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end topbar -->
        </div><!-- end topbar -->

         <header class="header">
            <div class="container">
                <nav class="navbar navbar-default yamm">
                    <div class="container-f">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active">
                                    <a href="<?=site_url('home');?>">Home</a>
                                </li>
                                <li><a href="<?=site_url('home/about');?>">About</a></li>
                                <li class="dropdown has-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jobs <span class="fa fa-angle-down"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Member Panel <span class="fa fa-angle-right"></span></a>
                                            <ul class="dropdown-menu show-left" role="menu">
                                                <li><a href="member-profile.html">Member Profile</a></li>
                                                <li><a href="member-courses.html">Member Courses</a></li>
                                                <li><a href="member-achievements.html">Member Achievements</a></li>
                                                <li><a href="member-messages.html">Member Messages</a></li>
                                                <li><a href="member-friends.html">Member Friends</a></li>
                                                <li><a href="member-profile-edit.html">Member Profile Edit</a></li>
                                                <li><a href="member-login.html">Member Login</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="course-list.html">Courses List View</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?=site_url('forum');?>">Forums</a></li>
                                <li><a href="<?=site_url('trainer/propose');?>">Propose Training</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown cartmenu searchmenu hasmenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu show-right">
                                        <li>
                                            <div id="custom-search-input">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-lg" placeholder="Search here..." />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-lg" type="button">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li class="cartmenu"><a href="<?=site_url('login/logout');?>"><i class="fa fa-shopping-bag"></i> <sup>2</sup> Logout</a></li> -->
                                <li><a href="<?=site_url('login/logout');?>"><i class="fa fa-power-off"></i>Log out</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </nav><!-- end nav -->
            </div><!-- end container -->
        </header><!-- end header -->

        <!-- 
        <div class="logo-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand" href="index.html">Teach<span>me</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->
        <!-- 
                    <div class="col-md-8 text-right hidden-xs">
                        <div class="postpager">
                            <ul class="pager row-fluid">
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post">
                                        <a href="course-single.html">
                                            <img alt="" src="<?=base_url();?>assets/front/upload/pager_04.jpg" class="img-responsive alignleft">
                                            <h4>Learning Web Design & Development</h4>
                                            <small>View Course</small>
                                        </a>
                                    </div>  
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post">
                                        <a href="course-single.html">
                                            <img alt="" src="<?=base_url();?>assets/front/upload/pager_05.jpg" class="img-responsive alignleft">
                                            <h4>Graphic Design Introduction Course</h4>
                                            <small>View Course</small>
                                        </a>
                                    </div>  
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post">
                                        <a href="course-single.html">
                                            <img alt="" src="<?=base_url();?>assets/front/upload/pager_06.jpg" class="img-responsive alignleft">
                                            <h4>Social Media Marketing Strategy</h4>
                                            <small>View Course</small>
                                        </a>
                                    </div>  
                                </li>
                            </ul>   
                        </div><!-- end postpager -->
 <!--                    </div><!-- end col -->
  <!--               </div><!-- end row -->
   <!--          </div><!-- end container -->
    <!--     </div><!-- end logo-wrapper -->

       

        <!-- dinamis main content -->
        <ci:doc type="modules"/>
       

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <h2 class="related-title">
                                <span>About Teachme</span>
                            </h2>

                            <div class="text-widget">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took...</p>

                                <a href="#" class="btn btn-primary btn-square">Read More</a>
                            </div>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <h2 class="related-title">
                                <span>Recent Tweets</span>
                            </h2>

                            <div class="twitter-widget">
                                <ul class="latest-tweets">
                                    <li>
                                        <p><a href="#" title="">@showwpcom</a> Consectetur adipiscing elit. Integer lorem quam. lorem ipsum dolor sit amet.</p>
                                        <small>2 hours ago</small>
                                    </li>
                                    <li>
                                        <p><a href="#" title="">@Envato</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <small>2 hours ago</small>
                                    </li>
                                </ul><!-- end latest-tweet -->
                            </div><!-- end twitter-widget -->

                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <h2 class="related-title">
                                <span>Instagram</span>
                            </h2>

                            <ul class="popular-courses">
                                <li>
                                    <a href="course-single.html" title=""><img class="img-thumbnail" src="<?=base_url();?>assets/front/upload/pager_01.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="course-single.html" title=""><img class="img-thumbnail" src="<?=base_url();?>assets/front/upload/pager_02.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="course-single.html" title=""><img class="img-thumbnail" src="<?=base_url();?>assets/front/upload/pager_03.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="course-single.html" title=""><img class="img-thumbnail" src="<?=base_url();?>assets/front/upload/pager_04.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="course-single.html" title=""><img class="img-thumbnail" src="<?=base_url();?>assets/front/upload/pager_05.jpg" alt=""></a>
                                </li>
                                <li>
                                    <a href="course-single.html" title=""><img class="img-thumbnail" src="<?=base_url();?>assets/front/upload/pager_06.jpg" alt=""></a>
                                </li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-md-3 col-md-6 col-xs-12">
                        <div class="widget">
                            <h2 class="related-title">
                                <span>Contact Details</span>
                            </h2>

                            <ul class="contact-details">
                                <li><i class="fa fa-link"></i> <a href="#">www.yoursite.com</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                                <li><i class="fa fa-phone"></i> +90 123 45 67</li>
                                <li><i class="fa fa-fax"></i> +90 123 45 68</li>
                                <li><i class="fa fa-home"></i> Envato INC 22 Elizabeth St.</li>
                            </ul>

                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="logo-wrapper background-color">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="site-logo">
                            <a class="navbar-brand" href="index.html">Teach<span>me</span>
                            <small>Learning Management System</small>
                            </a>
                        </div>
                    </div><!-- end col -->

                    <div class="col-md-8 text-right hidden-xs">
                        <div class="postpager">
                            <ul class="pager row-fluid">
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post">
                                        <a href="course-single.html">
                                            <img alt="" src="<?=base_url();?>assets/front/upload/pager_01.png" class="img-responsive alignleft">
                                            <h4>Learning Web Design & Development</h4>
                                            <small>View Course</small>
                                        </a>
                                    </div>  
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post">
                                        <a href="course-single.html">
                                            <img alt="" src="<?=base_url();?>assets/front/upload/pager_02.png" class="img-responsive alignleft">
                                            <h4>Graphic Design Introduction Course</h4>
                                            <small>View Course</small>
                                        </a>
                                    </div>  
                                </li>
                                <li class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="post">
                                        <a href="course-single.html">
                                            <img alt="" src="<?=base_url();?>assets/front/upload/pager_03.jpg" class="img-responsive alignleft">
                                            <h4>Social Media Marketing Strategy</h4>
                                            <small>View Course</small>
                                        </a>
                                    </div>  
                                </li>
                            </ul>   
                        </div><!-- end postpager -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end logo-wrapper -->

        <div class="topbar copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-left hidden-xs">
                        <div class="topmenu">
                            <span><i class="fa fa-home"></i> <a href="index.html">Home</a></span>
                            <span><a href="index.html">About us</a></span>
                            <span><a href="index.html">Contact us</a></span>
                            <span><a href="index.html">Terms of Usage</a></span>
                            <span><a href="index.html">Site Copyrights</a></span>
                        </div><!-- end callus -->
                    </div>

                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="social-icons">
                            <ul class="list-inline">
                            <li class="facebook"><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="google"><a data-toggle="tooltip" data-placement="top" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="twitter"><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="linkedin"><a data-toggle="tooltip" data-placement="top" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li class="pinterest"><a data-toggle="tooltip" data-placement="top" title="Pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="skype"><a data-toggle="tooltip" data-placement="top" title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                            <li class="vimeo"><a data-toggle="tooltip" data-placement="top" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                            <li class="youtube"><a data-toggle="tooltip" data-placement="top" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!-- end social icons -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end topbar -->
        </div><!-- end topbar -->
    </div><!-- end wrapper -->

    <div class="dmtop">Scroll to Top</div>
    <!-- END SITE -->

    <script src="<?=base_url();?>assets/front/js/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/front/js/bootstrap.js"></script>
    <script src="<?=base_url();?>assets/front/js/plugins.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->  
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>assets/front/revolution/js/extensions/revolution.extension.video.min.js"></script>
    
    <script type="text/javascript">var site_url = "<?=site_url();?>"; </script>
    
    <!--CUSTOM JS -->  
    <?php if(isset($js) && !(empty($js))){ 
             foreach ($js as $key => $file) {
    ?>
        <script type="text/javascript" src="<?=$file;?>"></script>
    <?php } }?>
    <script type="text/javascript" src="<?=base_url();?>assets/front/js/mycustom/front-end.js"></script>
    <script type="text/javascript">
    (function($) {
    "use strict";
        var tpj=jQuery;             
        var revapi98;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_98_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_98_1");
                    }else{
                    revapi98 = tpj("#rev_slider_98_1").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"<?=base_url();?>assets/front/revolution/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[600,550,400,300],
                    lazyType:"none",
                    parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    },
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                    }
                });
            }
        }); /*ready*/

        var tpj=jQuery;             
        var revapi98;
            tpj(document).ready(function() {
                if(tpj("#rev_slider_98_2").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_98_2");
                    }else{
                    revapi98 = tpj("#rev_slider_98_2").show().revolution({
                    sliderType:"hero",
                    jsFileLocation:"<?=base_url();?>assets/front/revolution/js/",
                    sliderLayout:"fullwidth",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                    },
                    responsiveLevels:[1240,1024,778,480],
                    gridwidth:[1240,1024,778,480],
                    gridheight:[400,350,300,300],
                    lazyType:"none",
                    parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:2000,
                    levels:[2,3,4,5,6,7,12,16,10,50],
                    },
                    shadow:0,
                    spinner:"off",
                    autoHeight:"off",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                    }
                });
            }
        }); /*ready*/
    })(jQuery);
    </script>   

</body>
</html>