<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="<?php echo base_url('admin/'); ?>assets/images/favicon_1.ico">

        <title>Existot - Admin Login</title>

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

            
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="container">
                <!-- Start content -->
                <div class="content" style="padding: 6rem 4rem;">
                    <div class="row" style="display: flex; justify-content: center;" >
						<div class="col-md-6">
							<div class="card-box">
								<p style="color: red;" ><?php echo $this->session->flashdata('error'); ?></p>
								<form role="form" method="post" action="<?php base_url('admin/login'); ?>">
									<div class="form-group">
										<label for="exampleInputEmail1">Username</label>
										<input type="text" name="username" class="form-control"  placeholder="Enter username">
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
									
									<button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
								</form>
							</div>
						</div>
					</div>
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