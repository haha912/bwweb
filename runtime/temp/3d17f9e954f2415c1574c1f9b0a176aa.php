<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:58:"D:\root\web\bwweb\public/../appls/home\view\faq\index.html";i:1527687723;s:45:"D:\root\web\bwweb\appls\home\view\layout.html";i:1497688788;s:45:"D:\root\web\bwweb\appls\home\view\header.html";i:1527687349;s:45:"D:\root\web\bwweb\appls\home\view\footer.html";i:1527682386;}*/ ?>
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

<!-- header end -->

<!-- page-intro start-->
<!-- ================ -->
<div class="page-intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ol class="breadcrumb">
					<li><i class="fa fa-home pr-10"></i><a href="index.html">Home</a></li>
					<li class="active"><?php echo ldf('常见问题','FAQ'); ?></li>
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
						<h3 class="title"><?php echo ldf('提交问题','Submit Question'); ?></h3>
						<div class="separator"></div>
						<div class="alert alert-success hidden" id="MessageSent3">
							<!--We have received your message, we will contact you very soon.-->
							<?php echo ldf('您的问题成功发送，我们会尽快处理，请关注邮箱信息，谢谢您的支持！','Message sent successfully'); ?>
						</div>
						<div class="alert alert-danger hidden" id="MessageNotSent3">
							<?php echo ldf('Oops! 出现了一些问题问题，请刷新后重试.','Oops! There is something wrong, please refresh and try again.'); ?>
						</div>
                   
						<form name="form" id="sidebar-form"  method="post">
							<div class="form-group has-feedback">
								<label for="name3"><?php echo ldf('姓名','Name'); ?></label>
								<input type="text" class="form-control" id="name3" placeholder="<?php echo ldf('请输入您的姓名','Enter you name'); ?>" name="name3" autocomplete='name'>
								<i class="fa fa-user form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback">
								<label for="email3">Email</label>
								<input type="email" class="form-control" id="email3" placeholder="<?php echo ldf('请输入您的 email','Enter you email'); ?>" name="email3" autocomplete='email'>
								<i class="fa fa-envelope form-control-feedback"></i>
							</div>
							<div class="form-group">
								<label><?php echo ldf('分类','Subject'); ?></label>
								<select class="form-control" name = 'subject' id="category">
									<option value="bwc"><?php echo ldf('舌尖美食链','BITEOFWORLD'); ?></option>
									<option value="product"><?php echo ldf('产品','Product'); ?></option>
									<option value="support"><?php echo ldf('支持','Support'); ?></option>
									<option value="other"><?php echo ldf('其他','Others'); ?></option>
								</select>
							</div>
							<div class="form-group has-feedback">
								<label for="message3"><?php echo ldf('问题','Question'); ?></label>
								<textarea class="form-control" rows="4" id="message3" placeholder="" name="message3"></textarea>
								<i class="fa fa-pencil form-control-feedback"></i>
							</div>
							<div class="form-group has-feedback capt">
								<label for="verifyCode"><?php echo ldf('验证码','Captcha'); ?></label>
								<input type="text" name="verifyCode"  id="verifyCode" class="form-control" placeholder="<?php echo ldf('请输入验证码','Enter captcha'); ?>">
								<div style = 'margin-top:5px;'><?php echo captcha_img(); ?></div>
							</div>
							<input type="hidden" name="__token__" value="<?php echo \think\Request::instance()->token(); ?>" />
							<input type="submit" value="<?php echo ldf('提交','Submit'); ?>"  id = 'subtn' class="submit-button btn btn-default">
							<a href="/faq.html" id = "another-ques" class="btn btn-default hidden"><?php echo ldf('继续提问','Continue'); ?></a>
							<p id = 'captcha-error' style = 'color:red;visibility:hidden;'><?php echo ldf('验证码错误,请点击图片进行刷新','Captcha error, please click the picture to refresh it.'); ?></p>
						</form>
					</div>
				</div>
			</aside>
			<!-- sidebar end -->

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-9">

				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title"><?php echo ldf('常见问题','FAQ'); ?></h1>
				<p><?php echo ldf('查看常见问题或者通过左侧窗口进行提问，我们会尽快给您答复。','View common questions or ask questions in the left window,We will give you a reply as soon as possible.'); ?></p>
				<!-- page-title end -->

				<!-- tabs start -->
				<div class="tabs-style-2">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">

						<?php foreach($data as $ss => $slabel): ?> 
							<li <?php if($ss == 1): ?> class="active" <?php endif; ?>><a href = "<?php echo '#tab'.$ss; ?>"  role="tab" data-toggle="tab"><i class="fa  fa-life-saver pr-10"></i><?php echo ldf($slabel['label'],$slabel['label_en']); ?></a></li>
						<?php endforeach; ?>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<?php foreach($data as $ss => $slabel): ?> 
							<div class="tab-pane fade in <?php if($ss == 1): ?> active <?php endif; ?>" id="<?php echo 'tab'.$ss; ?>">
								<!-- accordion start -->
								<div class="panel-group" id="accordion-faq">

									<?php foreach($list[$slabel['type']] as $ol): ?> 
											<div class="panel panel-default">
												<div class="panel-heading">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion-faq" href="<?php echo '#accordion'.$ol['id']; ?>" class="collapsed">
															<i class="fa fa-question-circle pr-10"></i> <?php echo ldf($ol['question'],$ol['question_en']); ?>
														</a>
													</h4>
												</div>
												<div id="<?php echo 'accordion'.$ol['id']; ?>" class="panel-collapse collapse">
													<div class="panel-body">
														<?php echo $ol['answer']; ?>
													</div>
												</div>
											</div>
									<?php endforeach; if(!count($list[$slabel['type']])): ?>
										<div class="panel-group" id="accordion-faq-2">
											<?php echo ldf('目前还没有提问!','There is no question yet.'); ?>
										</div>
									<?php endif; ?>
								</div>
								<!-- accordion end -->
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<!-- tabs end -->
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