<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"D:\root\web\bwweb\public/../appls/home\view\blog\index.html";i:1527688599;s:45:"D:\root\web\bwweb\appls\home\view\layout.html";i:1497688788;s:45:"D:\root\web\bwweb\appls\home\view\header.html";i:1527687349;s:45:"D:\root\web\bwweb\appls\home\view\footer.html";i:1527682386;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="ch">
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>BITEOFWORLD | Home</title>
        <meta name="description" content="Official website of BITEOFWORLD">
        <meta name="author" content="rain">

        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicon -->
        <link rel="shortcut icon" href="/static/images/favicon.ico">

        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

        <!-- Bootstrap core CSS -->
        <link href="/static/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="/static/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

        <!-- Fontello CSS -->
        <link href="/static/fonts/fontello/css/fontello.css" rel="stylesheet">

        <!-- Plugins -->
        <link href="/static/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
        <link href="/static/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
        <link href="/static/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
        <link href="/static/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="/static/css/animations.css" rel="stylesheet">
        <link href="/static/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="/static/plugins/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">

        <!-- iDea core CSS file -->
        <link href="/static/css/style.css" rel="stylesheet">

        <!-- Color Scheme (In order to change the color scheme, replace the red.css with the color scheme that you prefer)-->
        <link href="/static/css/skins/dark_cyan.css" rel="stylesheet">

        <!-- Custom css -->
        <link href="/static/css/custom.css" rel="stylesheet">

        <!-- /page content -->
        <script type="text/javascript">
            function changelang(){
                $.ajax({
                    type:"POST",
                    url:"/xlanguage",
                    success:function(data){                 
                        if(data.error == 0){
                            //$('#tr_'+data.id).remove();
                            console.log(data.lang);
                            window.location.reload(); 
                            //window.location.reload(); 
                        }
                        $('.alert').html(data.msg).show();
                        setTimeout(function() {
                            $('.alert').hide();
                            window.location.reload(); 
                        }, 500);                   
                    }
                });
                
            }
        </script>
    </head>
    <?php         
        function ldf($chc,$enc){
            $tk = \think\Session::get('lang');
            if(!strcmp($tk,'ch') && strcmp($enc,'')){
                return $enc;
            }else{
                return $chc;
            }
        }
    ?>
    <!-- body classes:
            "boxed": boxed layout mode e.g. <body class="boxed">
            "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
    -->
    <body>
        <!-- scrollToTop -->
        <!-- ================ -->
        <div class="scrollToTop"><i class="icon-up-open-big"></i></div>

        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
            <!-- header-top start (Add "dark" class to .header-top in order to enable dark header-top e.g <div class="header-top dark">) -->
            <!-- ================ -->
            <div class="header-top"></div>
            <!-- header start classes:
                fixed: fixed navigation mode (sticky menu) e.g. <header class="header fixed clearfix">
                 dark: dark header version e.g. <header class="header dark clearfix">
            ================ -->
            <header class="header fixed header-small clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- header-left start -->
                            <!-- ================ -->
                            <div class="header-left clearfix">

                                <!-- logo -->
                                <div class="logo">
                                    <a href="/"><img id="logo" src=<?php echo \think\Session::get('plogo'); ?> alt="BW"></a>
                                </div>

                                <!-- name-and-slogan 
                                <div class="site-slogan">
                                    Clean &amp; Powerful Bootstrap Theme
                                </div>-->

                            </div>
                            <!-- header-left end -->

                        </div>
                        <div class="col-md-9">

                            <!-- header-right start -->
                            <!-- ================ -->
                            <div class="header-right clearfix">

                                <!-- main-navigation start -->
                                <!-- ================ -->
                                <div class="main-navigation animated">

                                    <!-- navbar start -->
                                    <!-- ================ -->
                                    <nav class="navbar navbar-default" role="navigation">
                                        <div class="container-fluid">

                                            <!-- Toggle get grouped for better mobile display -->
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                            <!-- Collect the nav links, forms, and other content for toggling -->
                                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li id = "menu-home">
                                                        <a href="/"><?php echo ldf('首页','Home'); ?></a>
                                                        
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>                          
                                                        </ul>-->
                                                    </li>
                                                    <!--
                                                    <li id = "menu-product">
                                                        <a href="/shop.html">产品中心</a>
                                                    </li>
                                                    -->
                                                    <li id = "menu-about">
                                                        <a href="/#welcomeBW"><?php echo ldf('关于我们','About us'); ?></a></a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>                                                   
                                                    <!-- mega-menu start -->
                                                    <li id = "menu-faq">
                                                        <a href="/faq.html">FAQ</a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <!-- mega-menu end -->
                                                    <!-- mega-menu start -->
                                                    <li id = "menu-blog">
                                                        <a href="/blog.html"><?php echo ldf('动态','Blog'); ?></a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <!-- mega-menu end -->
                                                    <li id = "menu-contact">
                                                        <a href="/contact.html"><?php echo ldf('联系我们','Contact us'); ?></a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li>
                                                        <a href="/static/file/BITEOFWORLD_white_paper.pdf" target="_blank"><?php echo ldf('白皮书','White paper'); ?></a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;"  onclick="changelang()"><?php echo ldf('English','中文'); ?></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </nav>
                                    <!-- navbar end -->

                                </div>
                                <!-- main-navigation end -->

                            </div>
                            <!-- header-right end -->

                        </div>
                    </div>
                </div>
            </header>
            <!-- header end -->


<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
					<li class="active"><?php echo ldf('动态','Blogs'); ?></li>
				</ol>
			</div>
		</div>
	</div>
</div>
<!-- page-intro end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<div class="container">
		<div class="row">

			<!-- sidebar start -->
			<aside class="col-md-3">
				<div class="sidebar">
					<div class="block clearfix">
						<h3 class="title">menu</h3>
						<div class="separator"></div>
						<nav>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="/">Home</a></li>
								<li><a href="/#welcomeBW"><?php echo ldf('关于我们','About us'); ?></a></li>
								<li class="active"><a href="/blog.html"><?php echo ldf('动态','Blogs'); ?></a></li>
								<li><a href="/faq.html">FAQ</a></li>
								<li><a href="page-contact.html"><?php echo ldf('联系我们','Contact us'); ?></a></li>
							</ul>
						</nav>
					</div>
					<div class="block clearfix">
						<h3 class="title"><?php echo ldf('标签','Labels'); ?></h3>
						<div class="separator"></div>
						<div class="tags-cloud">
							<div class="tag">
								<a href="#">BWC</a>
							</div>
							<div class="tag">
								<a href="#"><?php echo ldf('舌尖美食链','BITROFWORLD'); ?></a>
							</div>
						</div>
					</div>
					<div class="block clearfix">
						<form role="search">
							<div class="form-group has-feedback">
								<input type="text" class="form-control" placeholder="<?php echo ldf('搜索','Search'); ?>">
								<i class="fa fa-search form-control-feedback"></i>
							</div>
						</form>
					</div>
				</div>
			</aside>
			<!-- sidebar end -->

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-8 col-md-offset-1">

				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title"><?php echo ldf('新闻动态','News'); ?></h1>
				<div class="separator-2"></div>
				<p class="lead"><?php echo ldf('欢迎关注官网，即使获取最新动态。','Welcome to BITEOFWORLD, please subscribe for more information.'); ?></p>
				<!-- page-title end -->

				<?php foreach($list as $bl): ?> 
					<!-- blogpost start -->
					<article class="clearfix blogpost object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
						<div class="overlay-container">
							<img src="<?php echo str_replace('_thumb', '',$bl['cover']); ?>" alt="">
							<div class="overlay">
								<div class="overlay-links">
									<a href="<?php echo url('/home/blog/'.'blogpost/id/'.$bl['id']); ?>"><i class="fa fa-link"></i></a>
									<a href="<?php echo str_replace('_thumb', '',$bl['cover']); ?>" class="popup-img-single" title="image title"><i class="fa fa-search-plus"></i></a>
								</div>
							</div>
						</div>
						<div class="blogpost-body">
							<div class="post-info">
								<span class="day"><?php $tsplit = explode("-",$bl['time']); echo $tsplit[2]; ?></span>
								<?php  $mlist = array('JAN', 'FEB', 'MAR', 'APR', 'MAY', 'JUNE', 'JULY', 'AUG', 'SEPT', 'OCT', 'NOV', 'DEC'); ?>
								<span class="month"><?php echo $mlist[(int)$tsplit[1]-1]; ?> <?php echo $tsplit[0]; ?></span>
							</div>
							<div class="blogpost-content">
								<header>
									<h2 class="title"><a href="<?php echo url('/home/blog/'.'blogpost/id/'.$bl['id']); ?>"><?php echo ldf($bl['title'],$bl['title_en']); ?></a></h2>
									<div class="submitted"><i class="fa fa-user pr-5"></i> by <a href="#"><?php echo $bl['author']; ?></a></div>
								</header>
								<p><?php echo ldf($bl['intro'],$bl['intro_en']); ?></p>
							</div>
						</div>
						<footer class="clearfix">
							<ul class="links pull-left">
								<!--<li><i class="fa fa-comment-o pr-5"></i> <a href="#">0 comments</a> |</li> -->
								<?php $lsplit = explode("+",$bl['labels']); $lsplit_en = explode("+",$bl['labels_en']); ?>
								<li><i class="fa fa-tags pr-5"></i> 
									<?php if (!strcmp(\think\Session::get('lang'),'ch')){foreach($lsplit_en as $lo): ?> <a href="#"><?php echo $lo; ?>. </a> <?php endforeach; }else{ foreach($lsplit as $lo): ?> <a href="#"><?php echo $lo; ?>. </a> <?php endforeach; } ?>
								</li>
							</ul>
							<a class="pull-right link" href="<?php echo url('/home/blog/'.'blogpost/id/'.$bl['id']); ?>"><span>Read more</span></a>
						</footer>
					</article>
					<!-- blogpost end -->
				<?php endforeach; ?>
				

				<!-- pagination start -->
				<ul class="pagination">
					<li><a href="#">«</a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<!--<li><a href="#">2</a></li>-->
					<li><a href="#">»</a></li>
				</ul>
				<!-- pagination end -->

			</div>
			<!-- main end -->

		</div>
	</div>
</section>
<!-- main-container end -->
<!-- footer start (Add "light" class to #footer in order to enable light footer) -->
			<!-- ================ -->
			<footer id="footer">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><img id="logo-footer" src="<?php echo \think\Session::get('flogo'); ?>" alt=""></div>
									<div class="row">
										<div class="col-sm-6">
												If you need to change a kind of eating habits,it is best to eat fully adjust again.
												<cite title="Source Title">—English philosophe Francis Bacon</cite>
											<ul class="social-links circle" style = "margin: 10px 0;">
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
										<div class="col-sm-6">
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i> <?php echo $info['address']; ?></li>
												<li><i class="fa fa-phone pr-10"></i> <?php echo $info['cellphone']; ?></li>
												<li><i class="fa fa-fax pr-10"></i><?php echo $info['telephone']; ?></li>
												<li><i class="fa fa-envelope-o pr-10"></i><a href="mailto: <?php echo $info['email']; ?>"> <?php echo $info['email']; ?></a></li>
											</ul>
										</div>
									</div>
									<a href="index.html#welcomeBW" class="link"><span>Read More</span></a>
								</div>
							</div>
							<div class="space-bottom hidden-lg hidden-xs"></div>
							<div class="col-sm-6 col-md-2">
								<div class="footer-content">
									<h2>Links</h2>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="/"><?php echo ldf('首页','Home'); ?></a></li>
											<!-- <li><a href="/shop.html">产品中心</a></li> -->
											<li><a href="/blog.html"><?php echo ldf('动态','Blog'); ?></a></li>
											<li><a href="/faq.htmll">FAQ</a></li>
											<li><a href="/#welcomeBW"><?php echo ldf('关于我们','About us'); ?></a></li>
											<li><a href="/contact.html"><?php echo ldf('联系我们','Contact us'); ?></a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 col-md-offset-1">
								<div class="footer-content">
									<h2><?php echo ldf('其他项目','Other projects'); ?></h2>
									<div class="gallery row">
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-1.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-2.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-3.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-4.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-5.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-6.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-7.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
										<div class="gallery-item col-xs-4">
											<div class="overlay-container">
												<img src="/static/images/gallery-8.jpg" alt="">
												<a href="" class="overlay small">
													<i class="fa fa-link"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="space-bottom hidden-lg hidden-xs"></div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Copyright © 2018 BITEOFWORLD All Rights Reserved</p>
							</div>
							<div class="col-md-6">
								<nav class="navbar navbar-default" role="navigation">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div class="collapse navbar-collapse" id="navbar-collapse-2">
										<ul class="nav navbar-nav">
											<li><a href="/">Home</a></li>
											<!-- <li><a href="/shop.html">产品中心</a></li> -->
											<li><a href="/#welcomeBW"><?php echo ldf('关于我们','About us'); ?></a></li>
											<li><a href="/blog.html"><?php echo ldf('动态','Blog'); ?></a></li>
											<li><a href="/faq.html">FAQ</a></li>
											<li><a href="/contact.html"><?php echo ldf('联系我们','Contact us'); ?></a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->

		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="/static/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="/static/bootstrap/js/bootstrap.min.js"></script>
		<!-- function for navbar button highlight -->
		<script type="text/javascript">
			$(window).on('load',function(){
				var ppage = '<?php if(isset($ppage)){echo $ppage;} ?>';
				//console.log("#menu-"+ppage);
				$("#menu-"+ppage).attr("class", "active");
				//if($("#menu-home").attr("class")!='active'){
				//	$("#top_nav").attr("class","header header-small clearfix");
				//}
			});
		</script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/static/plugins/modernizr.js"></script>
		<script type="text/javascript" src="/static/plugins/jquery.sharrre.min.js"></script>
		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="/static/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
		<script type="text/javascript" src="/static/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="/static/plugins/isotope/imagesloaded.pkgd.min.js"></script>
		<script type="text/javascript" src="/static/plugins/isotope/isotope.pkgd.min.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="/static/plugins/owl-carousel/owl.carousel.js"></script>

		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="/static/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="/static/plugins/jquery.appear.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="/static/plugins/jquery.countTo.js"></script>

		<!-- Parallax javascript -->
		<script src="/static/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="/static/plugins/jquery.validate.js"></script>

		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="/static/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="/static/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/static/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="/static/js/custom.js"></script>

	</body>
</html>