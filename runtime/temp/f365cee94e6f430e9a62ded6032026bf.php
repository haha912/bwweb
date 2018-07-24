<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"D:\root\web\bwweb\public/../appls/home\view\services\index.html";i:1527088885;s:45:"D:\root\web\bwweb\appls\home\view\layout.html";i:1497688788;s:45:"D:\root\web\bwweb\appls\home\view\header.html";i:1527087110;s:45:"D:\root\web\bwweb\appls\home\view\footer.html";i:1527087801;}*/ ?>
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
            <header class="header fixed header-small clearfix">
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


<!-- banner start -->
<!-- ================ -->
<div class="banner">
	<div class="fixed-image section light-translucent-bg" style="background-image:url('/static/images/page-services-banner.jpg');">
		<div class="container">
		<div class="space-top"></div>
		<h1>舌尖美食链</h1>
		<div class="separator-2"></div>
		<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae sit excepturi, <br class="hidden-xs hidden-sm"> hic officiis illo dolore sunt assumenda saepe id commodi sint praesentium <br class="hidden-xs hidden-sm"> natus laborum quas cumque facilis, suscipit aliquam dolorum.</p>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
					<li class="active">Services</li>
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
				<h1 class="page-title text-center">Core Features</h1>
				<div class="separator"></div>
				<!-- page-title end -->
				
				<div class="row">
					<div class="col-md-6">
						<div class="box-style-3 right animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-bold"></i>
							</div>
							<div class="body">
								<h2>Bootstrap Based</h2>
								<p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
								<a href="page-services.html" class="link"><span>Read More</span></a>
							</div>
						</div>
						<div class="box-style-3 right animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-check"></i>
							</div>
							<div class="body">
								<h2>Unlimited Options</h2>
								<p>Iure sequi unde hic. Sapiente quaerat labore inventore veritatis cumque.</p>
								<a href="page-services.html" class="link"><span>Read More</span></a>
							</div>
						</div>
						<div class="box-style-3 right animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-bicycle"></i>
							</div>
							<div class="body">
								<h2>Easy to Use</h2>
								<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
								<a href="page-services.html" class="link"><span>Read More</span></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="space hidden-lg hidden-md"></div>
						<img class="animated fadeInUpSmall" src="/static/images/services-1.png" alt="iDea">
					</div>
				</div>
				<div class="space"></div>

			</div>
			<!-- main end -->

		</div>
	</div>
</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<div class="section gray-bg clearfix">
	<div class="container">
		<h1 class="text-center title">More Features</h1>
		<div class="row grid-space-10">
			<div class="col-sm-4">
				<div class="box-style-2 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
					<div class="icon-container default-bg">
						<i class="fa fa-leaf"></i>
					</div>
					<div class="body">
						<h2>Clean Design and Code</h2>
						<p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
						<a href="page-services.html" class="link"><span>Read More</span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-style-2 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
					<div class="icon-container default-bg">
						<i class="fa fa-laptop"></i>
					</div>
					<div class="body">
						<h2>Very Flexible</h2>
						<p>Iure sequi unde hic. Sapiente quaerat labore inventore veritatis cumque.</p>
						<a href="page-services.html" class="link"><span>Read More</span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-style-2 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
					<div class="icon-container default-bg">
						<i class="fa fa-sitemap"></i>
					</div>
					<div class="body">
						<h2>Latest Technologies</h2>
						<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
						<a href="page-services.html" class="link"><span>Read More</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row grid-space-10">
			<div class="col-sm-4">
				<div class="box-style-2 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="600">
					<div class="icon-container default-bg">
						<i class="fa fa-bold"></i>
					</div>
					<div class="body">
						<h2>Packed Full of Features</h2>
						<p>Voluptatem ad provident non veritatis beatae cupiditate amet reiciendis.</p>
						<a href="page-services.html" class="link"><span>Read More</span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-style-2 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="800">
					<div class="icon-container default-bg">
						<i class="fa fa-check"></i>
					</div>
					<div class="body">
						<h2>100% Responsive</h2>
						<p>Iure sequi unde hic. Sapiente quaerat labore inventore veritatis cumque.</p>
						<a href="page-services.html" class="link"><span>Read More</span></a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="box-style-2 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="1000">
					<div class="icon-container default-bg">
						<i class="fa fa-bicycle"></i>
					</div>
					<div class="body">
						<h2>After Sale Support</h2>
						<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi! Eum est.</p>
						<a href="page-services.html" class="link"><span>Read More</span></a>
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
		<h1>The Process We Follow</h1>
		<!-- pills start -->
		<div class="process">
			<!-- Nav tabs -->
			<ul class="nav nav-pills white space-top" role="tablist">
				<li class="active"><a href="#pill-1" role="tab" data-toggle="tab" title="Step 1"><i class="fa fa-dot-circle-o pr-5"></i> Step 1</a></li>
				<li><a href="#pill-2" role="tab" data-toggle="tab" title="Step 2"><i class="fa fa-dot-circle-o pr-5"></i> Step 2</a></li>
				<li><a href="#pill-3" role="tab" data-toggle="tab" title="Step 3"><i class="fa fa-dot-circle-o pr-5"></i> Step 3</a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content clear-style">
				<div class="tab-pane active" id="pill-1">
					<h3>Consectetur adipisicing elit</h3>
					<div class="row">
						<div class="col-md-6">
							<p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
						</div>
						<div class="col-md-6">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="//player.vimeo.com/video/29198414?byline=0&amp;portrait=0"></iframe>
								<p><a href="http://vimeo.com/29198414">Introducing Vimeo Music Store</a> from <a href="http://vimeo.com/staff">Vimeo Staff</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="pill-2">
					<h3>Lorem ipsum dolor sit amet</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="/static/images/section-image-1.png" alt="">
						</div>
						<div class="col-md-6">
							<p>Ipsum dolor sit amet, consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea sit enim sint deleniti saepe esse nisi nesciunt fuga eaque dicta tenetur, cupiditate illo, consequuntur unde dolores quis dolore rem ex asperiores error. Labore saepe beatae harum quod fuga ipsam! Iusto earum iste similique, quam esse rerum, quae atque inventore consequuntur voluptatum amet deserunt mollitia? Tempore fugit, cumque dolor eaque doloremque iusto nostrum excepturi unde! Similique ipsum fugit eius laboriosam nihil quos, quia et! Earum iure, sapiente. Molestiae unde earum fugiat voluptate incidunt.</p>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="pill-3">
					<h3>Dolor lorem ipsum sit amet</h3>
					<p>Consectetur adipisicing elit. Sit, labore iste! Pariatur tempore, dicta voluptatibus quis blanditiis voluptates in. Molestiae asperiores sed, pariatur nesciunt saepe. Culpa ipsam ut enim reiciendis!</p>
					<p>Ipsum dolor sit amet, consectetur adipisicing elit. Debitis eaque nihil obcaecati minus perferendis officiis cumque nesciunt quae dolorem ad tenetur voluptate blanditiis labore libero id veritatis similique facere, fugiat soluta omnis minima? Iusto optio hic a reiciendis, inventore numquam impedit quaerat deserunt, voluptatum illum in magni, aspernatur corporis mollitia nam? Ipsum, cumque facilis recusandae commodi dolorum sequi quis possimus, aut, ab incidunt dolorem perferendis rerum tenetur. Labore exercitationem magni perspiciatis laborum, aliquam officia molestias obcaecati, voluptatum quidem eum iure aut, officiis dicta cupiditate ab, sit aliquid. Corporis ducimus ab commodi officia? Inventore suscipit saepe dolorem vitae aperiam autem, iusto id, enim assumenda modi a voluptate aliquam molestiae quidem sapiente, obcaecati recusandae. Magni repellat dignissimos sint iste dolorem maxime accusantium quas repellendus quam ipsa, sapiente, beatae enim ab ex. Optio eveniet necessitatibus, tempora dolor eaque saepe, ipsam vero at officiis cumque, maxime consequuntur in ea, voluptate quae nesciunt hic delectus.</p>
				</div>
			</div>
		</div>
		<!-- pills end -->
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix">
	<div class="container">

		<!-- pricing tables start -->
		<div class="pricing-tables gray object-non-visible" data-animation-effect="fadeInUpSmall">
			<div class="row grid-space-0">
				<!-- pricing table start -->
				<div class="col-sm-4 plan">
					<div class="header">
						<h3>Basic</h3>
						<div class="price"><span>Free</span></div>
					</div>
					<ul>
						<li>1 User</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15GB Storage" data-trigger="hover">1GB Storage</a>
						</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="15 Email Acounts">1 Email Acounts</a>
						</li>
						<li>Subdomains</li>
						<li>Security</li>
						<li>Bandwidth</li>
						<li>Databases</li>
						<li><a class="btn btn-gray">Subscribe</a></li>
					</ul>
				</div>
				<!-- pricing table end -->

				<!-- pricing table start -->
				<div class="col-sm-4 plan best-value">
					<div class="header">
						<h3>Premium</h3>
						<div class="price"><span>$19.99</span>/m.</div>
					</div>
					<ul>
						<li>80 Users</li>
						<li>Unlimited Disk Space</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Unlimited Subdomains">Unlimited Email Acounts</a>
						</li>        
						<li>Subdomains</li>
						<li>Security</li>
						<li>500 Visitors per month</li>
						<li>1 Database</li>
						<li><a class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->

				<!-- pricing table start -->
				<div class="col-sm-4 plan">
					<div class="header">
						<h3>Pro</h3>
						<div class="price"><span>$24.99</span>/m.</div>
					</div>
					<ul>
						<li>Unlimited Users</li>
						<li>Unlimited Disk Space</li>
						<li>Unlimited Email Acounts</li>
						<li>Unlimited Subdomains</li>
						<li>
							<a href="#" class="pt-popover" data-toggle="popover" data-placement="right" data-content="Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." title="" data-original-title="Enchaned Security">Enchaned Security</a>
						</li>
						<li>Unlimited Bandwidth</li>
						<li>Unlimited Databases</li>
						<li><a class="btn btn-gray"><i class="fa fa-shopping-cart pr-10"></i>Order Now</a></li>
					</ul>
				</div>
				<!-- pricing table end -->
			</div>
		</div>
		<!-- pricing tables end -->

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