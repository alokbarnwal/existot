<style>
    .btn-share {
        
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        line-height: 1;
        padding: 11px 25px;
        margin-right: 2px;
        border-radius: 40px;
        background-color: #dc4734;
        
        text-transform: uppercase;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .btn-share:hover {
        background-color: #333333;
        color: #fff;
    }
    .share-box-inner {
        margin-top: 15px;
    }
</style>
<!-- post status start -->
<div class="card">
    <!-- post title start -->
    <div class="post-title d-flex align-items-center">
        <?php $user = $this->db->get_where('users', array('id' => $post->user_id), 1)->row(); ?>
        <!-- profile picture end -->
        <div class="profile-thumb">
            <a href="#">
                <figure class="profile-thumb-middle">
                    <img src="<?php echo base_url('uploads/'.$user->profile_image); ?>" alt="profile picture">
                </figure>
            </a>
        </div>
        <!-- profile picture end -->

        <div class="posted-author">
            <h6 class="author"><a href="profile.html"><?php echo $user->name; ?></a></h6>
            <span class="post-time"><?php echo gmdate('d M Y', $post->date); ?></span>
        </div>

        <div class="post-settings-bar">
            <span></span>
            <span></span>
            <span></span>
            <div class="post-settings arrow-shape">
                <ul>
                    <li><button>copy link to adda</button></li>
                    <li><button>edit post</button></li>
                    <li><button>embed adda</button></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- post title start -->
    <div class="post-content">
        <p class="post-desc">
            <?php echo $post->text; ?>
        </p>
        <?php if($post->files != "") { ?>
        <?php $file_parts = pathinfo($post->files); ?>
        <?php $image_exts = array('jpg', 'png', 'jpeg', 'gif'); ?>
            <?php if(in_array($file_parts['extension'], $image_exts)) { ?>
                <div class="post-thumb-gallery">
                        <figure class="post-thumb img-popup">
                            <a href="<?php echo base_url('uploads/'.$post->files); ?>">
                                <img src="<?php echo base_url('uploads/'.$post->files); ?>" alt="post image">
                            </a>
                        </figure>
                    </div>
            <?php } else { ?>
                <a href="<?php echo base_url('uploads/'.$post->files); ?>" class="btn-share" type="submit">Download</a>
            <?php } ?>
        <?php } ?>
        <!-- <div class="post-thumb-gallery">
            <figure class="post-thumb img-popup">
                <a href="<?php echo base_url(); ?>assets/images/post/post-large-1.jpg">
                    <img src="<?php echo base_url(); ?>assets/images/post/post-1.jpg" alt="post image">
                </a>
            </figure>
        </div> -->
        <div class="post-meta">
            <?php if($post->likes == "") { ?>
                <a href="<?php echo base_url('post/like/'.$post->id); ?>" class="post-meta-like">
                    <i class="bi bi-heart-beat"></i>
                    <span>0 people like this</span>
                    <strong>0</strong>
                </a>
            <?php } else {  ?>
                <?php $likes = explode('::::', $post->likes); ?>
                <?php if(in_array($user->id, $likes)) { ?>
                <button class="post-meta-like">
                    <i class="bi bi-heart-beat"></i>
                    <span>You and <?php echo count($likes)-2; ?> people like this</span>
                    <strong><?php echo count($likes)-2; ?></strong>
                </button>
                <?php } else { ?>
                    <a href="<?php echo base_url('post/like/'.$post->id); ?>" class="post-meta-like">
                        <i class="bi bi-heart-beat"></i>
                        <span><?php echo count($likes)-2; ?> people like this</span>
                        <strong><?php echo count($likes)-2; ?></strong>
                    </a>
                <?php } ?>
            <?php } ?>
            
            <ul class="comment-share-meta">
                <li>
                    <button class="post-comment">
                        <i class="bi bi-chat-bubble"></i>
                        <span><?php echo $post->comments ?></span>
                    </button>
                </li>
                <li>
                    <button class="post-share">
                        <i class="bi bi-share"></i>
                        <span></span>
                    </button>
                </li>
            </ul>
        </div>
        <?php $comments = $this->db->get_where('comments', array('post_id' => $post->id))->result(); ?>
        <?php foreach ($comments as $comment) { ?>
            <?php $comm_user = $this->db->get_where('users', array('id' => $comment->user_id), 1)->row(); ?>
        <div class="share-box-inner">
            <!-- profile picture end -->
            <div class="profile-thumb">
                <a href="#">
                    <figure class="profile-thumb-middle">
                        <img src="<?php echo base_url('uploads/'.$comm_user->profile_image); ?>" alt="profile picture">
                    </figure>
                </a>
            </div>
            <!-- profile picture end -->

                <!-- share content box start -->
                <div class="share-content-box w-100">
                    <p style="padding: 13px 90px 13px 20px;"><?php echo $comment->text;  ?></p>
                </div>
                <!-- share content box end -->

        </div>
        <?php } ?>
        <?php if($this->session->userdata('user_id')) { ?>
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
                <form class="share-text-box" method="post" action="<?php echo base_url('post/comment'); ?>">
                    <textarea name="text" class="share-text-field" placeholder="post a comment" ></textarea>
                    <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id'); ?>">
                    <input type="hidden" name="post_id" value="<?php echo $post->id; ?>">
                    <button class="btn-share" type="submit">Comment</button>
                </form>
            </div>
            <!-- share content box end -->
            

            
        </div>
        <?php } ?>
    </div>
</div>
<!-- post status end -->