<main>

    <div class="main-wrapper">
        <div class="profile-banner-large bg-img" data-bg="<?php echo base_url('uploads/'.$this->session->userdata('user_cover')); ?>" style="background-image: url(&quot;<?php echo base_url('uploads/'.$this->session->userdata('user_cover')); ?>&quot;);">
        </div>
        <div class="profile-menu-area bg-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="profile-picture-box">
                            <figure class="profile-picture">
                                <a href="#">
                                    <img src="<?php echo base_url('uploads/'.$this->session->userdata('user_image')); ?>" alt="profile picture">
                                </a>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 offset-lg-1">
                        <div class="profile-menu-wrapper">
                            <div class="main-menu-inner header-top-navigation">
                                <nav>
                                    <ul class="main-menu">
                                        <li class="active"><a href="#">timeline</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="photos.html">photos</a></li>
                                        <li><a href="friends.html">friends</a></li>
                                        <li><a href="about.html">more</a></li>
                                        <!-- <li class="d-inline-block d-md-none"><a href="profile.html">edit profile</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 d-none d-md-block">
                        <div class="profile-edit-panel">
                            <a href="<?php echo base_url('user/edit_profile'); ?>" class="edit-btn">edit profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="widget-area profile-sidebar">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title"><?php echo $this->session->userdata('user_name'); ?></h4>
                            <div class="widget-body">
                                <div class="about-author">
                                    <p><?php echo $user->description; ?></p>
                                    <ul class="author-into-list">
                                        <li><a href="#"><i class="bi bi-office-bag"></i>Graphic Designer</a></li>
                                        <li><a href="#"><i class="bi bi-home"></i>Melbourne, Australia</a></li>
                                        <li><a href="#"><i class="bi bi-location-pointer"></i>Pulshar, Melbourne</a></li>
                                        <li><a href="#"><i class="bi bi-heart-beat"></i>Travel, Swimming</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Sweets Memories</h4>
                            <div class="widget-body">
                                <div class="sweet-galley img-gallery">
                                    <div class="row row-5">
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-1.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-1.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-2.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-2.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-3.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-3.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-4.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-4.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-5.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-5.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-6.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-6.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-7.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-7.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-8.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-8.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="gallery-tem">
                                                <figure class="post-thumb">
                                                    <a class="gallery-selector" href="<?php echo base_url(); ?>assets/images/gallery/gallery-9.jpg">
                                                        <img src="<?php echo base_url(); ?>assets/images/gallery/gallery-9.jpg" alt="sweet memory">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">page you may like</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-33.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Travel The World</a></h3>
                                            <p class="list-subtitle"><a href="#">adventure</a></p>
                                        </div>
                                        <button class="like-button active">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-30.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Foodcort Nirala</a></h3>
                                            <p class="list-subtitle"><a href="#">food</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                            <p class="list-subtitle"><a href="#">drama</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-29.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                            <p class="list-subtitle"><a href="#">fitness</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>

                <div class="col-lg-6 order-1 order-lg-2">
                    <!-- share box start -->
                    <div class="card card-small">
                    <div class="share-box-inner">
                                <!-- profile picture end -->
                                <div class="profile-thumb">
                                    <a href="#">
                                        <figure class="profile-thumb-middle">
                                            <img src="<?php echo base_url('uploads/'.$this->session->userdata('user_image')); ?>" alt="profile picture">
                                        </figure>
                                    </a>
                                </div>
                                <!-- profile picture end -->

                                <!-- share content box start -->
                                <div class="share-content-box w-100">
                                    <form class="share-text-box">
                                        <textarea name="share" class="share-text-field" aria-disabled="true" placeholder="Say Something" data-toggle="modal" data-target="#textbox" id="email"></textarea>
                                        <button class="btn-share" type="submit">share</button>
                                    </form>
                                </div>
                                <!-- share content box end -->

                                <!-- Modal start -->
                                <div class="modal fade" id="textbox" aria-labelledby="textbox">
                                    <div class="modal-dialog">
                                        <form class="modal-content" method="post" action="<?php echo base_url('post/create'); ?>" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Share Your Mood</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body custom-scroll">
                                                <textarea name="text" class="share-field-big custom-scroll" placeholder="Say Something"></textarea>
                                                <div class="form-group">
                                                    <label for="">Video Link</label>
                                                    <input type="text" name="video" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Files</label>
                                                    <input type="file" name="file" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="post-share-btn" data-dismiss="modal">cancel</button>
                                                <input type="submit" class="post-share-btn" value="post" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Modal end -->
                            </div>
                    </div>
                    <!-- share box end -->

                    <?php  
                        $this->db->order_by('date', "DESC");
                        $posts = $this->db->get_where('posts', array('user_id' => $user->id))->result();
                    ?>

                    <?php foreach ($posts as $post) { ?>
                        <?php $this->load->view('post_layout', array('post' => $post)); ?>
                    <?php } ?>
                </div>

                <div class="col-lg-3 order-3">
                    <aside class="widget-area">
                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Recent Notifications</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-9.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">5 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-35.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">10 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-15.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">18 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-6.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">25 min ago</p>
                                        </div>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-34.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                            <p class="list-subtitle">39 min ago</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Advertizement</h4>
                            <div class="widget-body">
                                <div class="add-thumb">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>assets/images/banner/advertise.jpg" alt="advertisement">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- widget single item end -->

                        <!-- widget single item start -->
                        <div class="card widget-item">
                            <h4 class="widget-title">Friends Zone</h4>
                            <div class="widget-body">
                                <ul class="like-page-list-wrapper">
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-10.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">arfim bolt</a></h3>
                                            <p class="list-subtitle"><a href="#">10 mutual</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-2.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">marry wither</a></h3>
                                            <p class="list-subtitle"><a href="#">02 mutual</a></p>
                                        </div>
                                        <button class="like-button active">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-5.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Rolin Theitar</a></h3>
                                            <p class="list-subtitle"><a href="#">drama</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                    <li class="unorder-list">
                                        <!-- profile picture end -->
                                        <div class="profile-thumb">
                                            <a href="#">
                                                <figure class="profile-thumb-small">
                                                    <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-14.jpg" alt="profile picture">
                                                </figure>
                                            </a>
                                        </div>
                                        <!-- profile picture end -->

                                        <div class="unorder-list-info">
                                            <h3 class="list-title"><a href="#">Active Mind</a></h3>
                                            <p class="list-subtitle"><a href="#">fitness</a></p>
                                        </div>
                                        <button class="like-button">
                                            <img class="heart" src="<?php echo base_url(); ?>assets/images/icons/heart.png" alt="">
                                            <img class="heart-color" src="<?php echo base_url(); ?>assets/images/icons/heart-color.png" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- widget single item end -->
                    </aside>
                </div>
            </div>
        </div>
    </div>

</main>