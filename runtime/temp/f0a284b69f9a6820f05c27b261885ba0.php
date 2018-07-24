<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\root\web\bwweb\public/../appls/admin\view\index\login.html";i:1527235237;}*/ ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo \think\Config::get('object_name'); ?> | Admin 登陆</title>
        <link rel="icon" type="image/ico" href="/static/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="/static/css/admin/bootstrap.min.css">
        <link rel="stylesheet" href="/static/css/admin/animate.css">
        <link rel="stylesheet" href="/static/css/admin/font-awesome.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="/static/css/admin/main.css">
        <!--/ stylesheets -->

        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="/static/js/admin/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->

    </head>

    <body id="minovate" class="appWrapper">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <div class="page page-core page-login">

                <div class="text-center"><h3 class="text-light text-white"><img src="/static/images/logo.png" alt="<?php echo \think\Config::get('object_name'); ?> " width="220" height="95"></h3></div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">


                    <h2 class="text-light">管理员登陆</h2>

                    <form name="form" action="<?php echo url('/admin/login_action'); ?>" class="form-validation mt-20" novalidate method="POST">

                        <div class="form-group">
                            <input type="text" autocomplete="off" class="form-control" placeholder="管理员账号" name="admin_username" >
                        </div>

                        <div class="form-group">
                            <input type="password" autocomplete="off" class="form-control" placeholder="密码" name="admin_password" >
                        </div>

                        <div class="form-group text-left mt-20">
                            <input type="hidden" class="form-control"  name="redirect" value=''>
                            <input type="submit" class="btn btn-blue b-0 br-2 mr-5" name="login_submit" value="登录">
                            <a href="<?php echo url('/admin/lost_password'); ?>" class="pull-right mt-10 hidden">忘记密码?</a>
                        </div>

                    </form>
                </div>

            </div>

        </div>
        <!--/ Application Content -->
         <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="/static/js/admin/jquery-1.11.2.min.js"></script>

        <script src="/static/js/admin/bootstrap.min.js"></script>

        <script src="/static/js/admin/jRespond.min.js"></script>

        <script src="/static/js/admin/jquery.sparkline.min.js"></script>

        <script src="/static/js/admin/jquery.slimscroll.min.js"></script>

        <script src="/static/js/admin/jquery.animsition.min.js"></script>

        <script src="/static/js/admin/screenfull.min.js"></script>
        <!--/ vendor javascripts -->

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="/static/js/admin/main.js"></script>
        <!--/ custom javascripts -->

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <!--/ Page Specific Scripts -->

    </body>
</html>
