<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('admin/'); ?>assets/images/favicon_1.ico">

        <title>Ubold - Responsive Admin Dashboard Template</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="<?php echo base_url('admin/'); ?>assets/plugins/morris/morris.css">

        <link href="<?php echo base_url('admin/'); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('admin/'); ?>assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('admin/'); ?>assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('admin/'); ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('admin/'); ?>assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('admin/'); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo base_url('admin/'); ?>assets/js/modernizr.min.js"></script>


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo">Existot</a>
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="<?php echo base_url('admin/'); ?>assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="<?php echo base_url('admin/'); ?>assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav hidden-xs">
                                
                            </ul>

                            


                            <ul class="nav navbar-nav navbar-right pull-right">
                                
                                <li class="dropdown top-menu-item-xs">
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url('admin/'); ?>assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        <li class="has_sub">
                                <a href="<?php echo base_url('admin/posts'); ?>" class="waves-effect"><i class="ti-light-bulb"></i><span> Posts </span> </a>
                                <!-- <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Grid</a></li>
                                    <li><a href="components-widgets.html">Widgets</a></li>
                                    <li><a href="components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="components-range-sliders.html">Range sliders</a></li>
                                    <li><a href="components-masonry.html">Masonry</a></li>
                                    <li><a href="components-animation.html">Animation</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
                                    <li><a href="components-treeview.html">Treeview</a></li>
                                    <li><a href="components-tour.html">Tour</a></li>
                                </ul> -->
                            </li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('admin/users'); ?>" class="waves-effect"><i class="ti-light-bulb"></i><span> Users </span> </a>
                                <!-- <ul class="list-unstyled">
                                    <li><a href="components-grid.html">Grid</a></li>
                                    <li><a href="components-widgets.html">Widgets</a></li>
                                    <li><a href="components-nestable-list.html">Nesteble</a></li>
                                    <li><a href="components-range-sliders.html">Range sliders</a></li>
                                    <li><a href="components-masonry.html">Masonry</a></li>
                                    <li><a href="components-animation.html">Animation</a></li>
                                    <li><a href="components-sweet-alert.html">Sweet Alerts</a></li>
                                    <li><a href="components-treeview.html">Treeview</a></li>
                                    <li><a href="components-tour.html">Tour</a></li>
                                </ul> -->
                            </li>

                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <?php echo $content; ?>

                </div> <!-- content -->

                <footer class="footer text-right">
                    © 2016. All rights reserved.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/detect.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/fastclick.js"></script>

        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/waves.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/wow.min.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.scrollTo.min.js"></script>

        <script src="<?php echo base_url('admin/'); ?>assets/plugins/peity/jquery.peity.min.js"></script>

        <!-- jQuery  -->
        <script src="<?php echo base_url('admin/'); ?>assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/plugins/counterup/jquery.counterup.min.js"></script>



        <script src="<?php echo base_url('admin/'); ?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url('admin/'); ?>assets/plugins/jquery-knob/jquery.knob.js"></script>

        <script src="<?php echo base_url('admin/'); ?>assets/pages/jquery.dashboard.js"></script>

        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.core.js"></script>
        <script src="<?php echo base_url('admin/'); ?>assets/js/jquery.app.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });

                $(".knob").knob();

            });
        </script>




    </body>
</html>