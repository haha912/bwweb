<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:60:"D:\root\web\bwweb\public/../appls/home\view\index\index.html";i:1527703033;s:45:"D:\root\web\bwweb\appls\home\view\layout.html";i:1497688788;s:45:"D:\root\web\bwweb\appls\home\view\header.html";i:1527687349;s:45:"D:\root\web\bwweb\appls\home\view\footer.html";i:1527682386;}*/ ?>
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


<!-- banner start -->
<!-- ================ -->
<div class="banner">

	<!-- slideshow start -->
	<!-- ================ -->
	<div class="slideshow white-bg">

		<!-- slider revolution start -->
		<!-- ================ -->
		<div class="slider-revolution-5-container">
			<div class="slider-banner-fullscreen-2 rev_slider" data-version="5.0">
				<ul class="slides">
					<!-- slide 1 start -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="Slide 1" data-thumb=<?php echo $item['banner1_img']; ?>>

					<!-- main image -->
					<img src=<?php echo str_replace('_thumb', '', $item['banner1_img']); ?>  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<!-- Translucent background -->
					<div class="tp-caption light-translucent-bg"
						data-x="center"
						data-y="bottom"
						data-start="800"
						data-transform_idle="o:0.6;"
						data-transform_in="o:0;s:800;e:Power2.easeInOut;"
						data-transform_out="o:0;s:800;"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						style="background-color:rgba(255,255,255,0.3);">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption very_large_text black tp-resizeme"
						data-x="center"
						data-y="70"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						style="white-space: nowrap;font-size:50px"><?php echo ldf($item['banner1_txt1'],$item['banner1_txt1_en']); ?>
					</div>
					<div class="tp-caption very_large_text black tp-resizeme"
						data-x="center"
						data-y="140"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						style="white-space: nowrap;"><?php echo ldf($item['banner1_txt2'],$item['banner1_txt2_en']); ?>
					</div>
					<!-- LAYER NR. 2 -->
					<div class="tp-caption small_thin_dark tp-resizeme"
						data-x="center"
						data-y="210"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						data-textAlign="['center', 'center', 'center', 'center']"
						style="white-space: nowrap;"><?php echo ldf($item['banner1_txt3'],$item['banner1_txt3_en']); ?>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption tp-resizeme"
						data-x="center"
						data-y="390"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-textAlign="['center', 'center', 'center', 'center']"
						data-responsive_offset="on"><a href="#welcomeBW" class="btn btn-dark btn-lg">Read More <i class="fa fa-angle-double-right pl-10"></i></a>
					</div>

					</li>
					<!-- slide 1 end -->

					<!-- slide 2 start -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="Slide 2" data-thumb=<?php echo $item['banner2_img']; ?>>

					<!-- main image -->
					<img src=<?php echo str_replace('_thumb', '', $item['banner2_img']); ?>  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<!-- Translucent background -->
					<div class="tp-caption light-translucent-bg"
						data-x="center"
						data-y="bottom"
						data-start="800"
						data-transform_idle="o:0.6;"
						data-transform_in="o:0;s:800;e:Power2.easeInOut;"
						data-transform_out="o:0;s:800;"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						style="background-color:rgba(255,255,255,0.3);">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption very_large_text black tp-resizeme"
						data-x="center"
						data-y="70"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						style="white-space: nowrap;"><?php echo ldf($item['banner2_txt1'],$item['banner2_txt1_en']); ?>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption small_thin_dark tp-resizeme"
						data-x="center"
						data-y="170"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						data-textAlign="['center', 'center', 'center', 'center']"
						style="white-space: nowrap;"><?php echo ldf($item['banner2_txt2'],$item['banner2_txt2_en']); ?>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption tp-resizeme"
						data-x="center"
						data-y="350"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-textAlign="['center', 'center', 'center', 'center']"
						data-responsive_offset="on"><a href="#welcomeBW" class="btn btn-dark btn-lg">Read More <i class="fa fa-angle-double-right pl-10"></i></a>
					</div>

					</li>
					<!-- slide 2 end -->

					<!-- slide 3 start -->
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on" data-title="Slide3" data-thumb=<?php echo $item['banner3_img']; ?>>

					<!-- main image -->
					<img src=<?php echo str_replace('_thumb', '', $item['banner3_img']); ?>  alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

					<!-- Translucent background -->
					<div class="tp-caption light-translucent-bg"
						data-x="center"
						data-y="bottom"
						data-start="800"
						data-transform_idle="o:0.6;"
						data-transform_in="o:0;s:800;e:Power2.easeInOut;"
						data-transform_out="o:0;s:800;"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						style="background-color:rgba(255,255,255,0.3);">
					</div>

					<!-- LAYER NR. 1 -->
					<div class="tp-caption very_large_text black tp-resizeme"
						data-x="center"
						data-y="70"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						style="white-space: nowrap;"><?php echo ldf($item['banner3_txt1'],$item['banner3_txt1_en']); ?>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption small_thin_dark tp-resizeme"
						data-x="center"
						data-y="170"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-responsive_offset="on"
						data-textAlign="['center', 'center', 'center', 'center']"
						style="white-space: nowrap;"><?php echo ldf($item['banner3_txt2'],$item['banner3_txt2_en']); ?>
					</div>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption tp-resizeme"
						data-x="center"
						data-y="350"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
			            data-transform_in="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-transform_out="x:-50px;opacity:0;s:600;e:Power3.easeOut;"
						data-start="800"
						data-splitin="none"
						data-splitout="none"
						data-textAlign="['center', 'center', 'center', 'center']"
						data-responsive_offset="on"
						><a href="#welcomeBW" class="btn btn-dark btn-lg" style = "border-color:#f6f6f6;">Read More <i class="fa fa-angle-double-right pl-10 "></i></a>
					</div>

					</li>
					<!-- banner 3 end -->
				</ul>
			</div>
		</div>
		<!-- slider revolution end -->

	</div>
	<!-- slideshow end -->

</div>
<!-- banner end -->

<!-- page-top start-->
<!-- ================ -->
<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center title"><?php echo ldf('服务与特性','Service and Features'); ?></h1>
				<div class="separator"></div>
				<p class="text-center"><?php echo ldf($item['featintro'],$item['featintro_en']); $tsplit = explode("+",$item['featitle']); $csplit = explode("+",$item['featcon']);$tsplit_en = explode("+",$item['featitle_en']); $csplit_en = explode("+",$item['featcon_en']);?>
				<div class="row grid-space-20">
					<div class="col-sm-12 col-md-4 col-md-push-4">
						<img src="/static/images/section-image-5.png" alt="" class="object-non-visible" data-animation-effect="fadeInUp" data-effect-delay="0">
					</div>
					<div class="col-sm-6 col-md-4 col-md-pull-4">
						<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
							<div class="icon-container default-bg">
								<i class="fa fa-thumbs-up"></i>
							</div>
							<div class="body">
								<h2><?php echo ldf($tsplit[0], $tsplit_en[0]); ?></h2>
								<p><?php echo ldf($csplit[1], $csplit_en[1]); ?></p>
								<a href="#" class="link"><span>Read More</span></a>
							</div>
						</div>
						<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
							<div class="icon-container default-bg">
								<i class="fa fa-list"></i>
							</div>
							<div class="body">
								<h2><?php echo ldf($tsplit[1], $tsplit_en[1]); ?></h2>
								<p><?php echo ldf($csplit[2], $csplit_en[2]); ?></p>
								<a href="#" class="link"><span>Read More</span></a>
							</div>
						</div>
						<div class="box-style-3 right object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
							<div class="icon-container default-bg">
								<i class="fa fa-link"></i>
							</div>
							<div class="body">
								<h2><?php echo ldf($tsplit[2], $tsplit_en[2]); ?></h2>
								<p><?php echo ldf($csplit[3], $csplit_en[3]); ?></p>
								<a href="#" class="link"><span>Read More</span></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="0">
							<div class="icon-container default-bg">
								<i class="fa fa-balance-scale"></i>
							</div>
							<div class="body">
								<h2><?php echo ldf($tsplit[3], $tsplit_en[3]); ?></h2>
								<p><?php echo ldf($csplit[4], $csplit_en[4]); ?></p>
								<a href="#" class="link"><span>Read More</span></a>
							</div>
						</div>
						<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
							<div class="icon-container default-bg">
								<i class="fa fa-group"></i>
							</div>
							<div class="body">
								<h2><?php echo ldf($tsplit[4], $tsplit_en[4]); ?></h2>
								<p><?php echo ldf($csplit[4], $csplit_en[4]); ?></p>
								<a href="#" class="link"><span>Read More</span></a>
							</div>
						</div>
						<div class="box-style-3 object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="400">
							<div class="icon-container default-bg">
								<i class="fa fa-search"></i>
							</div>
							<div class="body">
								<h2><?php echo ldf($tsplit[5], $tsplit_en[5]); ?></h2>
								<p><?php echo ldf($csplit[5], $csplit_en[5]); ?></p>
								<a href="#" class="link"><span>Read More</span></a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- page-top end -->

<!-- main-container start -->
<!-- ================ -->
<section class="main-container default-bg" id = "welcomeBW">

	<!-- main start -->
	<!-- ================ -->
	<div class="main">
		<div class="container">
			<div class="call-to-action">
				<div class="row">
					<div class="col-md-8">
						<h1 class="title text-center">欢迎来到舌尖美食链<br>Welcome to BITEOFWORLD</h1>
					</div>
					<div class="col-md-4">
						<div class="text-center">
							<a href="/contact.html" class="btn btn-white btn-lg"><?php echo ldf('联系我们','Contact us'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- main end -->

</section>
<!-- main-container end -->

<!-- section start -->
<!-- ================ -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="200">
	<div class="container">
		<h1 class="text-center"><?php echo ldf('舌尖美食链简介','Introduction of BITEOFWORLD'); ?></h1>
		<div class="separator"></div>
		<p class="lead text-center"><?php echo ldf($item['aboutus'],$item['aboutus_en']); ?></p>
		<br>
		<div class="row">
			<div class="col-md-6">
				<img src="/static/images/section-image-4.png" alt="">
				<div class="space hidden-md hidden-lg"></div>
			</div>
			<div class="col-md-6">
				<?php echo ldf($item['aboutintro'],$item['aboutintro_en']); ?>
				<a href="/static/file/BITEOFWORLD_white_paper.pdf" target="_blank" class="btn btn-lg btn-default"><?php echo ldf('白皮书','White paper'); ?></a>
			</div>
		</div>
	</div>
</div>
<!-- section end -->
<!-- ================  -->
<div class="section gray-bg clearfix object-non-visible parallax-bg-4" data-animation-effect="fadeInUpSmall" data-effect-delay="300">
	<div class="container">

		<h1 class="page-title text-center"  style = "color:#fff"><?php echo ldf('事件/里程碑','Events'); ?></h1>
				<div class="separator"></div>
				<!-- page-title end -->				
				<?php $eventime = explode("+",$item['event_time']); ?>
				<div class="row">
					<div class="col-md-6">
						<div class="box-style-3 left animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-registered"></i>
							</div>
							<div class="body">
								<h2 style = "color:#fff"><?php echo $eventime[0]; ?></h2>
								<p style = "color:#ddd"><?php echo ldf($item['event1'],$item['event1_en']); ?></p>
							</div>
						</div>
						<div class="box-style-3 left animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-newspaper-o"></i>
							</div>
							<div class="body">
								<h2 style = "color:#fff"><?php echo $eventime[1]; ?></h2>
								<p style = "color:#ddd"><?php echo ldf($item['event2'],$item['event2_en']); ?></p>
							</div>
						</div>
						<div class="box-style-3 left animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="body">
								<h2 style = "color:#fff"><?php echo $eventime[2]; ?></h2>
								<p style = "color:#ddd"><?php echo ldf($item['event3'],$item['event3_en']); ?></p>
							</div>
						</div>

						<div class="box-style-3 left animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-heart"></i>
							</div>
							<div class="body">
								<h2 style = "color:#fff"><?php echo $eventime[3]; ?></h2>
								<p style = "color:#ddd"><?php echo ldf($item['event4'],$item['event4_en']); ?></p>
							</div>
						</div>
						<div class="box-style-3 left animated fadeInUpSmall">
							<div class="icon-container default-bg">
								<i class="fa fa-bitcoin"></i>
							</div>
							<div class="body">
								<h2 style = "color:#fff"><?php echo $eventime[4]; ?></h2>
								<p style = "color:#ddd"><?php echo ldf($item['event5'],$item['event5_en']); ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="space"></div>
	</div>
</div>

<!-- section start -->
<!-- ================<div class="section gray-bg clearfix object-non-visible"  -->
<div class="section clearfix object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="300">
	<div class="container">

		<h1><?php echo ldf('核心团队','Core Team'); ?></h1>
		<div class="separator-2"></div>

		<div class="row grid-space-20">
			<?php foreach($team['core'] as $tc): ?> 
				<div class="col-lg-20 col-md-12">
					<div class="image-box team-member option-3">
						<div class="overlay-container"  style = "width: 35%;">
							<img src="<?php echo str_replace('_thumb', '', $tc['pic']); ?>" alt="" style = "height: 300px;">
							<div class="overlay">
								<ul class="social-links colored clearfix">
									<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="image-box-body" style = "width: 60%;">
							<h3 class="title"><?php echo $tc['name']; ?></h3>
							<small><?php echo ldf($tc['title'],$tc['title_en']); ?></small>
							<div class="separator-2"></div>
								<?php echo $tc['experi']; ?>
							<ul class="list-unstyled" style = "margin-bottom: 0;">
								<li><i class="fa fa-id-card pr-10"></i><a href="mailto:">了解更多</a></li>
							</ul>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="space"></div>
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section gray-bg clearfix">
	<div class="container">

		<h1><?php echo ldf('顾问团队','Consultant Tteam'); ?></h1>
		<div class="separator-2"></div>

		<div class="row grid-space-20">
			<?php foreach($team['assi'] as $as): ?> 
				<div class="col-sm-4">
					<div class="image-box team-member white-bg" style = 'height:615px;'>
						<div class="overlay-container">
							<img src="<?php echo str_replace('_thumb', '', $as['pic']); ?>" alt="">
							<a href="#" class="overlay small">
								<i class="fa fa-link"></i>
								<span style="font-size:20px">read more</span>
							</a>
						</div>
						<div class="image-box-body">
							<h3 class="title"><?php echo $as['name']; ?></h3>
							<div class="separator-2"></div>
							<?php echo $as['experi']; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>		
		</div>
		<div class="space"></div>
	</div>
</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="parallax parallax-bg-3 dark-translucent-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">

	<div class="container">
		<div class="stats row grid-space-10">
			<div class="col-md-3 col-sm-6">
				<div class="box-style-1">
					<h2 class="title"><?php echo ldf('线上粉丝','Online Fans'); ?></h2>
					<i class="fa fa-users"></i>
					<span class="stat-num" data-to="21" data-speed="3000">0</span><span class="stat-num">万</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="box-style-1">
					<h2 class="title"><?php echo ldf('天使轮估值','angel rounds valuation'); ?></h2>
					<i class="fa fa-gavel"></i>
					<span class="stat-num" data-to="250" data-speed="3000">0</span><span class="stat-num">万</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="box-style-1">
					<h2 class="title"><?php echo ldf('人群覆盖率','Population Covers'); ?></h2>
					<i class="fa fa-pie-chart"></i>
					<span class="stat-num" data-to="60" data-speed="3000">0</span><span class="stat-num">%</span>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="box-style-1">
					<h2 class="title"><?php echo ldf('线下报刊发行','Offline Publication'); ?></h2>
					<i class="fa fa-newspaper-o"></i>
					<span class="stat-num" data-to="23" data-speed="3000">0</span><span class="stat-num">万</span>
				</div>
			</div>
		</div>
	</div>

</div>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<div class="section gray-bg text-muted footer-top clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-6" style = "width:70%" >
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
			<div class="col-md-6" style = "width:30%">							
				<p class="margin-clear"><img src="/static/images/corporation.png" alt=""></p>							
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