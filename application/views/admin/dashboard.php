<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                
            </div>

            <h4 class="page-title">Dashboard</h4>
            <p class="text-muted page-title-alt">Welcome to admin panel !</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-info pull-left">
                    <i class="md md-attach-money text-info"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter"><?php echo $this->db->get('posts')->num_rows(); ?></b></h3>
                    <p class="text-muted">Total Posts</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-custom pull-left">
                    <i class="md md-add-shopping-cart text-custom"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter"><?php echo $this->db->get('users')->num_rows(); ?></b></h3>
                    <p class="text-muted">Total Users</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <!-- <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-info pull-left">
                    <i class="md md-equalizer text-info"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter">0.16</b>%</h3>
                    <p class="text-muted">Conversion</p>
                </div>
                <div class="clearfix"></div>
            </div> -->
        </div>

        <div class="col-md-6 col-lg-3">
            <!-- <div class="widget-bg-color-icon card-box">
                <div class="bg-icon bg-icon-custom pull-left">
                    <i class="md md-remove-red-eye text-custom"></i>
                </div>
                <div class="text-right">
                    <h3 class="text-dark"><b class="counter">64,570</b></h3>
                    <p class="text-muted">Today's Visits</p>
                </div>
                <div class="clearfix"></div>
            </div> -->
        </div>
    </div>

    


</div> <!-- container -->