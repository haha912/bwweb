<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:61:"D:\root\web\bwweb\public/../appls/home\view\shop\payment.html";i:1527091212;s:45:"D:\root\web\bwweb\appls\home\view\layout.html";i:1497688788;s:45:"D:\root\web\bwweb\appls\home\view\header.html";i:1527091707;s:45:"D:\root\web\bwweb\appls\home\view\footer.html";i:1527090798;}*/ ?>
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
                                                    <!--
                                                    <li id = "menu-product">
                                                        <a href="/shop.html">产品中心</a>
                                                    </li>
                                                    -->
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


<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
					<li class="active">Payment Method</li>
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

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">

				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title margin-top-clear">Payment Method</h1>
				<!-- page-title end -->
				<div class="space-bottom"></div>
				<fieldset>
					<legend>Payment</legend>
					<form role="form" class="form-horizontal" id="payment-information">
						<div class="row">
							<div class="col-lg-3">
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Credit Card<i class="fa fa-cc-visa pl-10"></i><i class="fa fa-cc-amex pl-10"></i><i class="fa fa-cc-mastercard pl-10"></i>
									</label>
								</div>
								<div class="space-bottom"></div>
							</div>
							<div class="col-lg-9">
								<div class="form-group">
									<label for="paymentFirstName" class="col-md-3 control-label">First Name<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control" id="paymentFirstName" value="First Name">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="paymentLastName" class="col-md-3 control-label">Last Name<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-4">
												<input type="text" class="form-control" id="paymentLastName" value="Last Name">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Credit Card<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-4">
												<select class="form-control">
													<option value="visa" selected="selected">VISA</option>
													<option value="master-card">Master Card</option>
													<option value="american-express">American Express</option>
												</select>															
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Card Number<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-xs-6 col-sm-2">
												<input type="text" class="form-control">
											</div>
											<div class="col-xs-6 col-sm-2">
												<input type="text" class="form-control">
											</div>
											<div class="clearfix space-bottom visible-xs"></div>
											<div class="col-xs-6 col-sm-2">
												<input type="text" class="form-control">
											</div>
											<div class="col-xs-6 col-sm-2">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Expiration Date<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-xs-6 col-sm-2">
												<select class="form-control">
													<option value="01" selected="selected">01</option>
													<option value="03">02</option>
													<option value="03">03</option>
													<option value="04">04</option>
													<option value="05">05</option>
													<option value="06">06</option>
													<option value="07">07</option>
													<option value="08">08</option>
													<option value="09">09</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
												</select>
											</div>
											<div class="col-xs-6 col-sm-2">
												<select class="form-control">
													<option value="2014" selected="selected">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">CVS<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-xs-6 col-sm-2">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="space"></div>
						<div class="row">
							<div class="col-lg-3">
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Paypal<i class="fa fa-cc-paypal pl-10"></i>
									</label>
								</div>
								<div class="space-bottom"></div>
							</div>
							<div class="col-lg-9">
								<div class="form-group">
									<label for="paymentEmail" class="col-md-3 control-label">Email<small class="text-default">*</small></label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-8">
												<input type="email" class="form-control" id="paymentEmail" value="Email">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="space"></div>
						<div class="row">
							<div class="col-lg-3">
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										Cash On Delivery
									</label>
								</div>
								<div class="space-bottom"></div>
							</div>
							<div class="col-lg-9">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, quo, non sint nisi, corrupti fuga qui quod autem totam, molestias reiciendis ex unde. Molestias, nostrum numquam, beatae totam esse ab.</p>
							</div>
						</div>
					</form>
				</fieldset>
				<div class="text-right">	
					<a href="shop-checkout.html" class="btn btn-group btn-default btn-sm"><i class="icon-left-open-big"></i> Go Back</a>
					<a href="shop-checkout-review.html" class="btn btn-group btn-default btn-sm">Review and Complete Your Order <i class="icon-right-open-big"></i></a>
				</div>
			</div>
			<!-- main end -->

		</div>
	</div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<div class="parallax-bg-3 parallax light-translucent-bg">
	<div class="container">
		<div class="call-to-action">
			<div class="row">
				<div class="col-md-8">
					<h1 class="title text-center">Unlimited Options</h1>
					<p class="text-center">Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
				</div>
				<div class="col-md-4">
					<div class="text-center">
						<a href="#" class="btn btn-default btn-lg">Purchase</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Featured</h2>
				<div class="separator-2"></div>
				<p>Sed ut Perspiciatis Unde Omnis Iste Sed ut sit  voluptatem accusan tium </p>
				<div class="row grid-space-20">
					<div class="col-md-3 col-sm-6">
						<div class="listing-item">
							<div class="overlay-container">
								<img src="images/product-1.png" alt="">
								<a href="shop-product.html" class="overlay small">
									<i class="fa fa-plus"></i>
									<span>View Details</span>
								</a>
								<span class="badge default-bg">Sale -50%</span>
							</div>
							<div class="listing-item-body clearfix">
								<h3 class="title"><a href="shop-product.html">Adipisicing 7.7" Tempora 4.2</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae tempora debitis, sed illo officiis.</p>
								<div><del>$199.00</del></div>
								<span class="price">$99.00</span>
								<div class="elements-list pull-right">
									<a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-shopping-cart pr-10"></i>Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="listing-item">
							<div class="overlay-container">
								<img src="images/product-2.png" alt="">
								<a href="shop-product.html" class="overlay small">
									<i class="fa fa-plus"></i>
									<span>View Details</span>
								</a>
								<span class="badge default-bg">Sale -40%</span>
							</div>
							<div class="listing-item-body clearfix">
								<h3 class="title"><a href="shop-product.html">Consectetur 5.5" Vitae</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae tempora debitis, sed illo officiis.</p>
								<div><del>$149.00</del></div>
								<span class="price">$89.00</span>
								<div class="elements-list pull-right">
									<a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-shopping-cart pr-10"></i>Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="listing-item">
							<div class="overlay-container">
								<img src="images/product-3.png" alt="">
								<a href="shop-product.html" class="overlay small">
									<i class="fa fa-plus"></i>
									<span>View Details</span>
								</a>
								<span class="badge default-bg">Sale -30%</span>
							</div>
							<div class="listing-item-body clearfix">
								<h3 class="title"><a href="shop-product.html">Rempora 15.4" 4GB illo</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae tempora debitis, sed illo officiis.</p>
								<div><del>$99.00</del></div>
								<span class="price">$69.00</span>
								<div class="elements-list pull-right">
									<a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-shopping-cart pr-10"></i>Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="listing-item">
							<div class="overlay-container">
								<img src="images/product-4.png" alt="">
								<a href="shop-product.html" class="overlay small">
									<i class="fa fa-plus"></i>
									<span>View Details</span>
								</a>
								<span class="badge default-bg">Sale -25%</span>
							</div>
							<div class="listing-item-body clearfix">
								<h3 class="title"><a href="shop-product.html">Dolor 4.4 Smartphone</a></h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae tempora debitis, sed illo officiis.</p>
								<div><del>$199.00</del></div>
								<span class="price">$149.00</span>
								<div class="elements-list pull-right">
									<a href="#" class="wishlist" title="wishlist"><i class="fa fa-heart-o"></i></a>
									<a href="#"><i class="fa fa-shopping-cart pr-10"></i>Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
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