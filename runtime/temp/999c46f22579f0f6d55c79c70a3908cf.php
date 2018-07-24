<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:66:"D:\root\web\bwweb\public/../appls/admin\view\usermanage\index.html";i:1527582400;s:46:"D:\root\web\bwweb\appls\admin\view\layout.html";i:1489735872;s:46:"D:\root\web\bwweb\appls\admin\view\header.html";i:1527369943;s:44:"D:\root\web\bwweb\appls\admin\view\left.html";i:1527696318;s:46:"D:\root\web\bwweb\appls\admin\view\footer.html";i:1527108086;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo \think\Config::get('object_name'); ?> | 后台管理系统</title>
        <link rel="icon" type="image/ico" href="/static/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="/static/css/admin/bootstrap.min.css">
        <link rel="stylesheet" href="/static/css/admin/docs.min.css">
        <!-- <link rel="stylesheet" href="/static/css/vendor/animate.css"> -->
        <link rel="stylesheet" href="/static/fonts/font-awesome/css/font-awesome.css">
        <!-- <link rel="stylesheet" href="/static/js/vendor/magnific-popup/magnific-popup.css"> -->
        <link rel="stylesheet" href="/static/css/admin/daterangepicker-bs3.css">
        <!-- <link rel="stylesheet" href="/static/js/vendor/morris/morris.css"> -->
        <link rel="stylesheet" href="/static/css/admin/owl.carousel.css">
        <link rel="stylesheet" href="/static/css/admin/owl.theme.css">
        <!-- <link rel="stylesheet" href="/static/js/vendor/rickshaw/rickshaw.min.css"> -->
        <link rel="stylesheet" href="/static/css/admin/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="/static/css/admin/jquery.dataTables.min.css">
        <link rel="stylesheet" href="/static/css/admin/datatables.bootstrap.min.css">
        <!-- <link rel="stylesheet" href="/static/js/vendor/chosen/chosen.css"> -->
        <link rel="stylesheet" href="/static/css/admin/summernote.css">
        <!-- <link rel="stylesheet" href="/static/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css"> -->
        <!-- <link rel="stylesheet" href="/static/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css"> -->
        <!-- <link rel="stylesheet" href="/static/js/vendor/nestable/css/style.css"> -->

        <!-- project main css files -->
        <link rel="stylesheet" href="/static/css/admin/main.css">
        <!--/ stylesheets -->
        <link rel="stylesheet" href="/static/css/admin/custom.css">
        <!-- ==========================================dfsdf
        ================= Modernizr ===================
        =========================================== -->
        <script src="/static/js/admin/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->

        <script src="/static/js/admin/jquery-1.11.2.min.js"></script>

        <script src="/static/plugins/ckeditor/ckeditor.js"></script>

        <script src="/static/js/admin/bootstrap.min.js"></script>

        <script src="/static/js/admin/jRespond.min.js"></script>
        <SCRIPT type="text/javascript">
            function del(content){
                if(confirm(content)){
                    return true;
                }else{
                    return false;
                }
            }
        </SCRIPT>

    </head>
    <body id="minovate" class="appWrapper">


        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">


            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="<?php echo url('/admin'); ?>" target="_blank">
                            <span><?php echo \think\Config::get('object_name'); ?></span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">

                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo \think\Session::get('admin_avatar'); ?>" class="" style = 'width:39px;margin-bottom:3px;border-radius: 4px;'>
                                <span><?php echo \think\Session::get('admin_nickname'); ?> <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0" href="<?php echo url('/admin/administrator/'.\think\Session::get('uid')); ?>">    
                                        <i class="fa fa-user"></i>管理员信息 
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo url('/admin/logout'); ?>" role="button" tabindex="0">
                                        <i class="fa fa-sign-out"></i>登出
                                    </a>
                                </li>

                            </ul>

                        </li>
                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->

<!-- =================================================
================= CONTROLS Content ===================
================================================== -->
<div id="controls">

    <!-- ================================================
    ================= SIDEBAR Content ===================
    ================================================= -->
    <aside id="sidebar">


        <div id="sidebar-wrap">

            <div class="panel-group slim-scroll" role="tablist">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#sidebarNav">
                                BITEOFWORLD <i class="fa fa-angle-up"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                        <div class="panel-body">
                            <script  type="text/javascript">
                                $(window).on('load',function(){
                                    var moduleUrl = '<?php echo !empty($data['module_slug'])?$data['module_slug'] : "admin"; ?>';
                                    
                                    if(moduleUrl){
                                        var currentMenuItem = $('#navigation .'+moduleUrl);
                                        if(currentMenuItem.hasClass('dropdown')){
                                            currentMenuItem.addClass('open');
                                            currentMenuItem.find('ul').show();

                                        }else{
                                            currentMenuItem.addClass('active');
                                        }
                                    }
                                });
                            </script>
                            <!-- ===================================================
                            ================= NAVIGATION Content ===================
                            ==================================================== -->
                            <ul id="navigation">
                                <li class="manage"><a class="ajax-link" href="<?php echo url('/admin'); ?>"><i class="fa fa-home" aria-hidden="true"></i>
                					起始页</a>
                				</li>
                                <li class="administrator">
                                    <a role="button" tabindex="0"><i class="fa fa-user-secret" aria-hidden="true"></i> <span>管理员</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/administrator'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>管理员列表</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/administrator/create'); ?>"><i class="fa fa-caret-right"></i>新增管理员</a></li>
                                    </ul>
                                </li>
                                <li class="baseinfomanage">
                                    <a role="button" tabindex="0"><i class="fa fa-info" aria-hidden="true"></i> <span>基础信息</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/baseinfomanage'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>联系方式</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/baseinfomanage/pictxtmng'); ?>"><i class="fa fa-caret-right"></i>图文管理</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/teammanage'); ?>"><i class="fa fa-caret-right"></i>成员管理</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/baseinfomanage/whitepaper'); ?>"><i class="fa fa-caret-right"></i>白皮书</a></li>                                       
                                    </ul>
                                </li>
                                <li class="usermanage">
                                    <a role="button" tabindex="0"><i class="fa fa-user" aria-hidden="true"></i> <span>用户管理</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/usermanage'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>联系我们</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/usermanage/faqmng'); ?>"><i class="fa fa-caret-right"></i>FAQ</a></li>
										<li><a class="ajax-link" href="<?php echo url('/admin/usermanage/subscribemng'); ?>"><i class="fa fa-caret-right"></i>订阅</a></li>
                                    </ul>
                                </li>
                                <li class="blogmng">
                                    <a role="button" tabindex="0"><i class="fa fa-list" aria-hidden="true"></i> <span>文章管理</span></a>
                                    <ul>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/blogmng'); ?>"><i class="fa fa-caret-right" aria-hidden="true"></i>文章列表</a></li>
                                        <li><a class="ajax-link" href="<?php echo url('/admin/blogmng/create'); ?>"><i class="fa fa-caret-right"></i>新增文章</a></li>
                                    </ul>
                                </li>                                
                            </ul>
                            <!--/ NAVIGATION Content -->
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </aside>
    <!--/ SIDEBAR Content -->

</div>
<!--/ CONTROLS Content -->


<section id="content">

    <div class="page page-fullwidth-layout">

        <div class="pageheader">

            <h2><?php echo $data['module_name']; ?></h2>

            <div class="page-bar">

                <ul class="page-breadcrumb">
                    <li>
                        <a href="<?php echo url('/admin'); ?>"><i class="fa fa-home"></i> 起始页</a>
                    </li>
                    <li>
                        <a href="<?php echo url($data['module_url']); ?>"><?php echo $data['module_name']; ?>列表</a>
                    </li>
                </ul>

            </div>

        </div>

        <!-- page content -->
        <div class="pagecontent">

            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-md-12">




                    <!-- tile -->
                    <section class="tile">

                        <!-- tile header -->
                        <div class="tile-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>联系信息</strong> 列表</h1>
                        </div>
                        <!-- /tile header -->

                        <!-- tile body -->
                        <div class="tile-body">
                           <div class="alert alert-info" style="display:none;">正在执行操作···</div>

                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-custom" id="products-list">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>提问者</th>
                                            <th>问题</th>                                            
											<th>时间</th>
                                            <th style='padding-bottom:0px;'>
                                                <div class="col-xs-3" style='padding:8px 0px 0px 0px;width: 45px;'>状态
                                                </div>
                                                <div class="col-xs-6" style='padding:0px 0px 4px 0px;'>
                                                    <div class="form-group" style='margin-bottom: 0px;'>
                                                        <select  name="typeselect" class="form-control" onchange="self.location.href=options[selectedIndex].value" style="max-width: 300px;">
                                                                    <option <?php if(!strcmp($data['type_select'],'all')): ?> selected="selected"<?php endif; ?>
                                                                        value="<?php echo url($data['module_url'].'all'); ?>">全部</option>
                                                                    <option <?php if(!strcmp((string)($data['type_select']),'0')): ?> selected="selected"<?php endif; ?>
                                                                        value="<?php echo url($data['module_url'].'0'); ?>">待处理</option>
                                                                    <option <?php if($data['type_select'] == 1): ?> selected="selected"<?php endif; ?>
                                                                        value="<?php echo url($data['module_url'].'1'); ?>">已阅</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </th>
											<th>操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        <?php if(($list)): foreach($list as $item): ?>
                                                <tr id="tr_<?php echo $item->id; ?>">
                                                <td><?php echo $item->id; ?></td> 
                                                <td><?php echo $item->username; ?></td> 
                                                <td><?php echo $item->subject; ?></td>
                                                <td><?php echo $item->create_time; ?></td>   
                                                <td><?php echo $item->status; ?></td>                                               
                                                <td>
                                                    <a class="btn btn-info" href="<?php echo url($data['module_url'].'read_contact'.'/'.$item->id); ?>">
                                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                                        查看
                                                    </a>
                                                    <a class="btn btn-danger" href="javascript:;"  onclick="if(confirm('确定要删除该条信息吗？')){ deleteData(<?php echo $item->id; ?>) }">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                                        删除
                                                    </a>

                                                </td>
                                            </tr>
                                            <?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>

                           <?php if((!count($list))): ?><div id="nobject" style="text-align:center;margin-top:15px;">暂无信息！</div><?php endif; ?>
                            <div class="text-center"><?php echo $list->render(); ?></div>
                        </div>
                        <!-- /tile body -->

                    </section>
                    <!-- /tile -->

                </div>
                <!-- /col -->
            </div>
            <!-- /row -->




        </div>
        <!-- /page content -->
        <script type="text/javascript">
        function deleteData(id){
            $.ajax({
                type:"POST",
                url:"<?php echo $data['module_url']; ?>delete_contact/"+id,
                success:function(data){					
                    if(data.error == 0){
                        //$('#tr_'+data.id).remove();
						//refresh(); 
                    }
                    $('.alert').html(data.msg).show();
                    setTimeout(function() {
                        $('.alert').hide();
						window.location.reload(); 
                    }, 1500);					
                }
            });
			
        }

        function updateExpireTime(id){
			//console.log($etype);
            $.ajax({
                type:"POST",
				//url:'/admin/exam/updatestatus/'+id,
                url:"<?php echo url($data['module_url'].'updatestatus'); ?>/"+id,
                success:function(data){
                    if(data.error == 0){
                        //$('#tr_'+data.id+' .expire_time').html(data.expire_time);
                    }
                    $('.alert').html(data.msg).show();
                    setTimeout(function() {
                        $('.alert').hide();
						window.location.reload(); 
                    }, 1500);					
                }
            });					
        }
        </script>

    </div>

</section>
<!--/ CONTENT -->


        </div>
        <!--/ Application Content -->



        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->


        <!-- <script src="/static/js/vendor/d3/d3.min.js"></script> -->
        <!-- <script src="/static/js/vendor/d3/d3.layout.min.js"></script> -->

        <!-- <script src="/static/js/vendor/rickshaw/rickshaw.min.js"></script> -->

        <!-- <script src="/static/js/vendor/sparkline/jquery.sparkline.min.js"></script> -->

        <script src="/static/js/admin/jquery.slimscroll.min.js"></script>

        <script src="/static/js/admin/jquery.animsition.min.js"></script>

        <script src="/static/js/admin/moment.min.js"></script>
        <!-- <script src="/static/js/vendor/daterangepicker/daterangepicker.js"></script> -->

        <!-- <script src="/static/js/vendor/screenfull/screenfull.min.js"></script> -->

        <!-- <script src="/static/js/vendor/flot/jquery.flot.min.js"></script> -->
        <!-- <script src="/static/js/vendor/flot/jquery.flot.resize.min.js"></script> -->
        <!-- <script src="/static/js/vendor/flot/jquery.flot.orderBars.js"></script> -->
        <!-- <script src="/static/js/vendor/flot/jquery.flot.stack.min.js"></script> -->
        <!-- <script src="/static/js/vendor/flot/jquery.flot.pie.min.js"></script> -->
        <!-- <script src="/static/js/vendor/flot-spline/jquery.flot.spline.min.js"></script> -->
        <!-- <script src="/static/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script> -->

        <!-- <script src="/static/js/vendor/gaugejs/gauge.min.js"></script> -->

        <!-- <script src="/static/js/vendor/raphael/raphael-min.js"></script> -->
        <!-- <script src="/static/js/vendor/d3/d3.v2.js"></script> -->
        <!-- <script src="/static/js/vendor/rickshaw/rickshaw.min.js"></script> -->



        <!-- <script src="/static/js/vendor/morris/morris.min.js"></script> -->

        <!-- <script src="/static/js/vendor/easypiechart/jquery.easypiechart.min.js"></script> -->



        <script src="/static/js/admin/owl.carousel.min.js"></script>

        <script src="/static/js/admin/bootstrap-datetimepicker.min.js"></script>

        <script src="/static/js/admin/jquery.dataTables.min.js"></script>
        <script src="/static/js/admin/dataTables.bootstrap.js"></script>

        <!-- <script src="/static/js/vendor/chosen/chosen.jquery.min.js"></script> -->

        <script src="/static/js/admin/summernote.min.js"></script>

        <!-- <script src="/static/js/vendor/coolclock/coolclock.js"></script> -->
        <!-- <script src="/static/js/vendor/coolclock/excanvas.js"></script> -->

        <!-- <script src="/static/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script> -->

        <!-- <script src="/static/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script> -->
        <!--/ vendor javascripts -->


        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="/static/js/admin/main.js"></script>
        <!--/ custom javascripts -->








        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                // Initialize Statistics chart
                var data = [{
                    data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 4
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
                    }
                }];

                var options = {
                    colors: ['#e05d6f','#61c8b8'],
                    series: {
                        shadowSize: 0
                    },
                    legend: {
                        backgroundOpacity: 0,
                        margin: -7,
                        position: 'ne',
                        noColumns: 2
                    },
                    xaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        },
                        position: 'bottom',
                        ticks: [
                            [ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
                        ]
                    },
                    yaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        }
                    },
                    grid: {
                        borderWidth: {
                            top: 0,
                            right: 0,
                            bottom: 1,
                            left: 1
                        },
                        borderColor: 'rgba(255,255,255,.3)',
                        margin:0,
                        minBorderMargin:0,
                        labelMargin:20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius:6
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };




                // Initialize owl carousels
                $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });

                $('#appointments-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    navigation: true,
                    navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
                    singleItem : true
                });
                //* Initialize owl carousels


                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker

                //todo's
                $('.widget-todo .todo-list li .checkbox').on('change', function() {
                    var todo = $(this).parents('li');

                    if (todo.hasClass('completed')) {
                        todo.removeClass('completed');
                    } else {
                        todo.addClass('completed');
                    }
                });
                //* todo's


                //initialize datatable
                $('#project-progress').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                });
                //*initialize datatable

                //load wysiwyg editor
                $('#summernote').summernote({
                    toolbar: [
                        //['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
                    ],
                    height: 143   //set editable area's height
                });
                //*load wysiwyg editor
            });
        </script>
        <!--/ Page Specific Scripts -->


    </body>
</html>
