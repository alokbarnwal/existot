<?php $user = $this->db->get_where('users', array('id' => $this->session->userdata('user_id')))->row(); ?>

    <main>

        <div class="main-wrapper pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1 pr-4">
                        <aside class="widget-area">

                            <?php if($this->session->userdata('user_id')) { ?>
                            <!-- widget single item start -->
                            <div class="card card-profile widget-item p-0">
                                <div class="profile-banner">
                                    <figure class="profile-banner-small">
                                        <a href="profile.html">
                                            <img src="<?php echo base_url('uploads/'.$this->session->userdata('user_cover')); ?>" alt="">
                                        </a>
                                        <a href="profile.html" class="profile-thumb-2">
                                            <img src="<?php echo base_url('uploads/'.$this->session->userdata('user_image')); ?>" alt="">
                                        </a>
                                    </figure>
                                    <div class="profile-desc text-center">
                                        <h6 class="author"><a href="profile.html"><?php echo $user->name; ?></a></h6>
                                        <p><?php echo $user->description; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!-- widget single item start -->
                            <?php } ?>

                            <!-- share box start -->
                            <div class="card card-small">
                                <div class="share-box-inner">
                                    <?php if($this->session->userdata('user_id')) { ?>
                                    <!-- profile picture end -->
                                    <div class="profile-thumb">
                                        <a href="#">
                                            <figure class="profile-thumb-middle">
                                                <img src="<?php echo base_url('uploads/'.$this->session->userdata('user_image')); ?>" alt="profile picture">
                                            </figure>
                                        </a>
                                    </div>
                                    <!-- profile picture end -->
                                    <?php } ?>

                                    <!-- share content box start -->
                                    <div class="share-content-box w-100">
                                        <form class="share-text-box" method="post" action="<?php echo base_url('user/search_posts'); ?>">
                                            <textarea style="padding: 11px;" name="share" class="share-text-field" aria-disabled="true" name="query" placeholder="Search Post" ></textarea>
                                            <button style="transform: none; position: relative;" class="btn-share" type="submit">Search</button>
                                        </form>
                                    </div>
                                    <!-- share content box end -->

                                    
                                </div>
                            </div>
                            <!-- share box end -->

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

                            <!-- widget single item start -->
                            <div class="card widget-item">
                                <h4 class="widget-title">latest top news</h4>
                                <div class="widget-body">
                                    <ul class="like-page-list-wrapper">
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-28.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">2 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-31.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">20 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-27.jpg" alt="profile picture">
                                                    </figure>
                                                </a>
                                            </div>
                                            <!-- profile picture end -->

                                            <div class="unorder-list-info">
                                                <h3 class="list-title"><a href="#">Any one can join with us if you want</a></h3>
                                                <p class="list-subtitle">30 min ago</p>
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
                                                <p class="list-subtitle">40 min ago</p>
                                            </div>
                                        </li>
                                        <li class="unorder-list">
                                            <!-- profile picture end -->
                                            <div class="profile-thumb">
                                                <a href="#">
                                                    <figure class="profile-thumb-small">
                                                        <img src="<?php echo base_url(); ?>assets/images/profile/profile-small-32.jpg" alt="profile picture">
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
                        </aside>
                    </div>

                    <div class="col-lg-9 order-1 order-lg-2 pl-4">
                                
                        <?php if($this->session->userdata('user_id')) { ?>
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
                                                <div class="form-group">
                                                    <label for="">Title</label>
                                                    <input type="text" name="title" class="form-control" >
                                                </div>
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
                        <?php } ?>

                        

                        <?php  
                            $this->db->order_by('date', "DESC");
                            $posts = $this->db->get('posts')->result();
                        ?>

                        <?php foreach ($posts as $post) { ?>
                            <?php $this->load->view('post_layout', array('post' => $post)); ?>
                        <?php } ?>

                    </div>

                    
                </div>
            </div>
        </div>

    </main>

    