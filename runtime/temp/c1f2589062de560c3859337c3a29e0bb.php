<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:59:"D:\root\web\bwweb\public/../appls/home\view\shop\index.html";i:1527091547;s:45:"D:\root\web\bwweb\appls\home\view\layout.html";i:1497688788;s:45:"D:\root\web\bwweb\appls\home\view\header.html";i:1527090679;s:45:"D:\root\web\bwweb\appls\home\view\footer.html";i:1527090798;}*/ ?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
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


    </head>

    <!-- body classes:
            "boxed": boxed layout mode e.g. <body class="boxed">
            "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1">
    -->
    <body class="front">
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
            <header class="header fixed header-small clearfix" id = "top_nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- header-left start -->
                            <!-- ================ -->
                            <div class="header-left clearfix">

                                <!-- logo -->
                                <div class="logo">
                                    <a href="/"><img id="logo" src="/static/images/logo_dark_red.png" alt="BW"></a>
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
                                                        <a href="/">首页</a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li id = "menu-product">
                                                        <a href="/shop.html">产品中心</a>
                                                    </li>
                                                   
                                                    <li id = "menu-about">
                                                        <a href="/#welcomeBW">关于我们</a>
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
                                                        <a href="/blog.html">动态</a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <!-- mega-menu end -->
                                                    <li id = "menu-contact">
                                                        <a href="/contact.html">联系我们</a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li>
                                                        <a href="/static/file/BITEOFWORLD_white_paper.pdf" target="_blank">白皮书</a>
                                                        <!-- <ul class="dropdown-menu">
                                                            <li><a href="index.html"></a></li>
                                                        </ul>-->
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="blog-right-sidebar.html" class="dropdown-toggle" data-toggle="dropdown">语言</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="/">简体中文</a></li>
                                                            <li><a href="/">English</a></li>
                                                        </ul>
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


<!-- main-container start -->
<!-- ================ -->
<section class="main-container">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">

				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title margin-top-clear">BWC</h1>
				<!-- page-title end -->

				<div class="row">
					<div class="col-md-4">
						<!-- Nav tabs -->
						<ul class="nav nav-pills white space-top" role="tablist">
							<li class="active"><a href="#product-images" role="tab" data-toggle="tab" title="images"><i class="fa fa-camera pr-5"></i> Photo</a></li>
							<li><a href="#product-video" role="tab" data-toggle="tab" title="video"><i class="fa fa-video-camera pr-5"></i> Video</a></li>
						</ul>

						<!-- Tab panes start-->
						<div class="tab-content clear-style">
							<div class="tab-pane active" id="product-images">
								<div class="owl-carousel content-slider-with-controls-bottom">
									<div class="overlay-container">
										<img src="/static/images/product-1-1.png" alt="">
										<a href="/static/images/product-1-1.png" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
									</div>
									<div class="overlay-container">
										<img src="/static/images/product-1-3.png" alt="">
										<a href="/static/images/product-1-3.png" class="popup-img overlay" title="image title"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="product-video">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
									<p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
								</div>
							</div>
						</div>
						<!-- Tab panes end-->
						<hr>
						<span class="price"><del>$159.00</del> $99.00</span>
						<div class="elements-list pull-right clearfix">
							<span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star"></i></span>
							<a href="#" class="wishlist"><i class="fa fa-heart-o pr-5"></i>Wishlist</a>
						</div>
						<div class="clearfix"></div>
						<hr>
						<div class="row">
							<form role="form">
								<div class="col-md-4">
									<div class="form-group">
										<label>Quantity</label>
										<input type="text" class="form-control" value="1">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Color</label>
										<select class="form-control">
											<option>Red</option>
											<option>White</option>
											<option>Black</option>
											<option>Blue</option>
											<option>Orange</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Size</label>
										<select class="form-control">
											<option>5.3"</option>
											<option>5.7"</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<a href="/payment.html" class="btn btn-default">立即购买</a>
								</div>
							</form>
						</div>
					</div>

					<!-- product side start -->
					<aside class="col-md-8">
						<div class="sidebar">
							<div class="side product-item vertical-divider-left">
								<div class="tabs-style-2">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
										<li class="active"><a href="#h2tab1" role="tab" data-toggle="tab"><i class="fa fa-file-text-o pr-5"></i>Description</a></li>
										<li><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-files-o pr-5"></i>Specifications</a></li>
										<li><a href="#h2tab3" role="tab" data-toggle="tab"><i class="fa fa-star pr-5"></i>(3) Reviews</a></li>
									</ul>
									<!-- Tab panes -->
									<div class="tab-content padding-top-clear padding-bottom-clear">
										<div class="tab-pane fade in active" id="h2tab1">
											<h4 class="title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h4>
											<p>Perspiciatis necessitatibus accusamus eligendi ducimus architecto reiciendis odit officiis? Alias repellendus veritatis consectetur, aliquam laborum possimus dolorem quidem, sit saepe explicabo sint.</p>
											<h4>Nostrum, consequuntur laudantium ea suscipit minima</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, consequuntur laudantium ea suscipit minima aliquid vitae possimus dolor voluptatibus autem minus alias quos praesentium debitis veniam nemo et odit dolores!</p>
											<p>Alias odio, cupiditate sed, possimus aut quasi ullam. Provident dicta, officia sunt quis doloribus sed nobis, fuga ab repudiandae. Quam atque, consequuntur non nesciunt enim dolores incidunt quis officiis voluptate est asperiores mollitia quia accusamus a nulla architecto repellendus placeat. Explicabo cum nihil, recusandae numquam repudiandae temporibus aliquid saepe ea nobis aliquam vero eaque odit doloribus tempore dicta ratione! Rerum numquam doloribus delectus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta praesentium unde perferendis beatae asperiores aspernatur vero, veritatis! Vel libero cum, culpa odio, est totam eaque, ipsam voluptates saepe, quo id!</p>
										</div>
										<div class="tab-pane fade" id="h2tab2">
											<h4 class="space-top">Specifications</h4>
											<hr>
											<dl class="dl-horizontal">
												<dt>Screen</dt>
												<dd>4.95” 1920x1080 display</dd>
												<dt>Cameras</dt>
												<dd>1.3MP front facing, 8MP rear facing with Optical Image Stabilization</dd>
												<dt>Dimensions</dt>
												<dd>69.17 x 137.84 x 8.59 mm (130g)</dd>
												<dt>Battery</dt>
												<dd>2300 mAh. Talk time up to 17 hours*. Standby time up to 300 hours†. Internet use time up to 8.5 hours on Wi-Fi, up to 7 hours on LTE‡. Wireless Charging built-in</dd>
												<dt>Audio</dt>
												<dd>Built-in speaker 3.5mm stereo audio connector</dd>
												<dt>Processing</dt>
												<dd>CPU: Qualcomm Snapdragon™ 800, 2.26GHz processor</dd>
												<dd>GPU: Adreno 330, 450MHz</dd>
												<dt>Wireless</dt>
												<dd>Dual-band Wi-Fi (2.4G/5G) 802.11 a/b/g/n/ac</dd>
											</dl>
											<hr>
										</div>
										<div class="tab-pane fade" id="h2tab3">
											<!-- comments start -->
											<div class="comments margin-clear space-top">
												<!-- comment start -->
												<div class="comment clearfix">
													<div class="comment-avatar">
														<img src="/static/images/avatar.jpg" alt="avatar">
													</div>
													<div class="comment-content">
														<h3>Amazing!</h3>
														<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> | Today, 12:31</div>
														<div class="comment-body clearfix">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
															<a href="blog-post.html" class="btn btn-gray more pull-right"><i class="fa fa-reply"></i> Reply</a>
														</div>
													</div>
													
												</div>
												<!-- comment end -->

												<!-- comment start -->
												<div class="comment clearfix">
													<div class="comment-avatar">
														<img src="/static/images/avatar.jpg" alt="avatar">
													</div>
													<div class="comment-content clearfix">
														<h3>Works Perfect!</h3>
														<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> | Oct 15</div>
														<div class="comment-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
															<a href="blog-post.html" class="btn btn-gray more pull-right"><i class="fa fa-reply"></i> Reply</a>
														</div>
													</div>
												</div>
												<!-- comment end -->

												<!-- comment start -->
												<div class="comment clearfix">
													<div class="comment-avatar">
														<img src="/static/images/avatar.jpg" alt="avatar">
													</div>
													<div class="comment-content clearfix">
														<h3>Worth to Buy</h3>
														<div class="comment-meta"> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star text-default"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> | Sep 25</div>
														<div class="comment-body">
															<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
															<a href="blog-post.html" class="btn btn-gray more pull-right"><i class="fa fa-reply"></i> Reply</a>
														</div>
													</div>
												</div>
												<!-- comment end -->

											</div>
											<!-- comments end -->

											<!-- comments form start -->
											<div class="comments-form">
												<h2 class="title">Add your Review</h2>
												<form role="form" id="comment-form">
													<div class="form-group has-feedback">
														<label for="name4">Name</label>
														<input type="text" class="form-control" id="name4" placeholder="" name="name4" required>
														<i class="fa fa-user form-control-feedback"></i>
													</div>
													<div class="form-group has-feedback">
														<label for="subject4">Subject</label>
														<input type="text" class="form-control" id="subject4" placeholder="" name="subject4" required>
														<i class="fa fa-pencil form-control-feedback"></i>
													</div>
													<div class="form-group">
														<label>Rating</label>
														<select class="form-control" id="review">
															<option value="five">5</option>
															<option value="four">4</option>
															<option value="three">3</option>
															<option value="two">2</option>
															<option value="one">1</option>
														</select>
													</div>
													<div class="form-group has-feedback">
														<label for="message4">Message</label>
														<textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required></textarea>
														<i class="fa fa-envelope-o form-control-feedback"></i>
													</div>
													<input type="submit" value="Submit" class="btn btn-default">
												</form>
											</div>
											<!-- comments form end -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</aside>
					<!-- product side end -->
				</div>

			</div>
			<!-- main end -->

		</div>
	</div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<!--
<div class="section gray-bg text-muted footer-top clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="owl-carousel clients">
					<div class="client">
						<a href="#"><img src="/static/images/client-1.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-2.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-3.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-4.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-5.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-6.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-7.png" alt=""></a>
					</div>
					<div class="client">
						<a href="#"><img src="/static/images/client-8.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<blockquote class="inline">
					<p class="margin-clear">If you need to change a kind of eating habits, it is best to eat fully adjust again.</p>	
					<footer><cite title="Source Title">English philosophe Francis Bacon</cite></footer>
				</blockquote>
			</div>
		</div>
	</div>
</div>
-->
<!-- section end -->
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
									<div class="logo-footer"><img id="logo-footer" src="/static/images/logo_red_footer.png" alt=""></div>
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
												<li><i class="fa fa-map-marker pr-10"></i> One infinity loop, 54100</li>
												<li><i class="fa fa-phone pr-10"></i> +00 1234567890</li>
												<li><i class="fa fa-fax pr-10"></i> +00 1234567891 </li>
												<li><i class="fa fa-envelope-o pr-10"></i> info@idea.com</li>
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
											<li><a href="/">Home</a></li>
											<li><a href="/shop.html">产品中心</a></li>
											<li><a href="/blog.html">动态</a></li>
											<li><a href="/faq.htmll">FAQ</a></li>
											<li><a href="/#welcomeBW">关于我们</a></li>
											<li><a href="/contact.html">联系我们</a></li>
										</ul>
									</nav>
								</div>
							</div>
							<div class="col-sm-6 col-md-3 col-md-offset-1">
								<div class="footer-content">
									<h2>其他项目</h2>
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
											<li><a href="/shop.html">产品中心</a></li>
											<li><a href="/#welcomeBW">关于我们</a></li>
											<li><a href="/blog.html">动态</a></li>
											<li><a href="/faq.html">FAQ</a></li>
											<li><a href="/contact.html">联系我们</a></li>
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
				console.log("#menu-"+ppage);
				$("#menu-"+ppage).attr("class", "active");
				//if($("#menu-home").attr("class")!='active'){
				//	$("#top_nav").attr("class","header header-small clearfix");
				//}
			});
		</script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/static/plugins/modernizr.js"></script>

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