<?php
get_header();
?>
    <!-- Section About ======================== -->
    <section id="about" class="about-section">
        <div class="bg1-top"></div>
        <div class="bg1-bottom"></div>

        <!-- Section Services -->
        <?php dynamic_sidebar('su-menh-index '); ?>
        <div class="clearfix"></div>
    </section>

<?php dynamic_sidebar('thong-ke '); ?>
    <!-- Sản phẩm - Product -->
    <section id="product" class="product-section product_img section-space-padding bg-cover"
             data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h2 class="section-heading"><b>Sản Phẩm</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                </div>
            </div>

            <div class="row">
                <div class="testimonial-carousel-list margin-top-20">
                    <div class="testimonial-word text-center">
                        <a target="_blank" href="http://blogtamsu.vn/"><img
                                    src="<?php echo get_theme_file_uri(); ?>/assets/images/product/blogtamsu.png"
                                    class="img-responsive" alt=""></a>
                        <a target="_blank" href="http://blogtamsu.vn/"><h2>Blog tâm sự</h2></a>
                        <p><i>Blogtamsu.vn</i></p>
                        <p data-toggle="tooltip" title="Trang tin tổng hợp đa chiều về Đời sống - Giải trí, Tâm sự của Phụ nữ và Gia đình trẻ. Tổng
                            hợp Kiến thức chăm sóc bản thân và gia đình, cập nhật mọi thông tin mới và nóng hổi nhất
                            trong ngày." >Trang tin tổng hợp đa chiều về Đời sống - Giải trí, Tâm sự của Phụ nữ và Gia đình trẻ. Tổng
                            hợp Kiến thức chăm sóc bản thân và gia đình, cập nhật mọi thông tin mới và nóng hổi nhất
                            trong ngày.</p>
                        <a target="_blank" href="http://blogtamsu.vn/" class="btVietDetail">Xem chi tiết</a>
                    </div>

                    <div class="testimonial-word text-center">
                        <a target="_blank" href="http://kenhthethao.vn/"><img
                                    src="<?php echo get_theme_file_uri(); ?>/assets/images/product/KTT.png"
                                    class="img-responsive" alt=""></a>
                        <a target="_blank" href="http://kenhthethao.vn/"><h2>Kênh thể thao</h2></a>
                        <p><i>Kenhthethao.vn</i></p>
                        <p data-toggle="tooltip" title="Trang tin tổng hợp, cập nhật tin tức đa chiều về Bóng Đá trong và ngoài nước. Kênh chia sẻ
                            tin tức nóng hổi, mới nhất về các bộ môn thể thao được ưa chuộng nhất.">Trang tin tổng hợp, cập nhật tin tức đa chiều về Bóng Đá trong và ngoài nước. Kênh chia sẻ
                            tin tức nóng hổi, mới nhất về các bộ môn thể thao được ưa chuộng nhất.</p>
                        <a target="_blank" href="http://kenhthethao.vn/" class="btVietDetail">Xem chi tiết</a>
                    </div>
                    <div class="testimonial-word text-center">
                        <a target="_blank" href="http://feedy.vn/"><img
                                    src="<?php echo get_theme_file_uri(); ?>/assets/images/product/feedy.png"
                                    class="img-responsive" alt=""></a>
                        <a target="_blank" href="http://feedy.vn/"><h2>Feedy</h2></a>
                        <p><i>Feedy.vn</i></p>
                        <p data-toggle="tooltip" title="Chuyên trang dành cho những người đam mê ẩm thực. Nơi chia sẻ và cập nhật hàng ngàn công thức
                            nấu ăn, cũng như những thông tin bổ ích về chế độ dinh dưỡng, địa điểm quán xá trong và
                            ngoài nước.">Chuyên trang dành cho những người đam mê ẩm thực. Nơi chia sẻ và cập nhật hàng ngàn công thức
                            nấu ăn, cũng như những thông tin bổ ích về chế độ dinh dưỡng, địa điểm quán xá trong và
                            ngoài nước. </p>
                        <a target="_blank" href="http://feedy.vn/" class="btVietDetail">Xem chi tiết</a>
                    </div>
                    <div class="testimonial-word text-center">
                        <a target="_blank" href="http://1news.video"><img
                                    src="<?php echo get_theme_file_uri(); ?>/assets/images/product/1news.png"
                                    class="img-responsive" alt=""></a>
                        <a target="_blank" href="http://1news.video/"><h2>1 News Video</h2></a>
                        <p><i>1news.video</i></p>
                        <p data-toggle="tooltip" title="Trang video tổng hợp các tin tức hot nhất trong ngày về Giải trí - Đời sống - Xã hội."> Trang video tổng hợp các tin tức hot nhất trong ngày về Giải trí - Đời sống - Xã hội. </p>
                        <a target="_blank" href="http://1news.video/" class="btVietDetail">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product End -->

    <!-- team-section -->
    <section id="team" class="team-section section-space-padding bg-cover" data-stellar-background-ratio="0.3">
        <div class="bg1-top"></div>
        <div class="bg1-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h2 class="section-heading"><b> E+ Team</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                </div>
            </div>

            <div class="row">
                <div class="team-boss">
                    <?php global $post;
                    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                    $args = array('posts_per_page' => 2, 'order' => 'DESC', 'orderby' => 'post_date', 'paged' => $paged, 'category' => BOSS);
                    $postslist = get_posts($args);
                    ?>
                    <?php foreach ($postslist as $post) :
                        setup_postdata($post);
                        $post_id = $post->ID;
                        $fullname = $post->post_title;
                        $content = $post->post_content;
                        $title = get_metadata('post', $post_id, $key = 'description', $single);
                        $position = get_metadata('post', $post_id, $key = 'position', $single);
                        if ($position == 'tong_giam_doc') {
                            $position = 'Tổng giám đốc Eyeplus Media';
                        } elseif ($position == 'pho_tong_giam_doc') {
                            $position = 'Tổng giám đốc Eyeplus Online';
                        } elseif ($position == 'giam_doc') {
                            $position = 'Giám đốc';
                        } elseif ($position == 'pho_giam_doc') {
                            $position = 'Phó giám đốc';
                        } elseif ($position == "truong_phong") {
                            $position = 'Trưởng phòng';
                        } elseif ($position == 'pho_phong') {
                            $position = "Phó phòng";
                        } elseif ($position == 'truong_nhom') {
                            $position = 'Trưởng nhóm';
                        } elseif ($position == 'nhan_vien') {
                            $position = 'Nhân viên';
                        }
                        $avatar = img_thumb($post_id);
                        ?>
                        <div class="col-lg-6 text-center">
                            <div class="imgUser"><img class="img-responsive" alt="" src="<?php echo $avatar; ?>"></div>
                            <h3><?php echo $position . ': ' . $fullname ?></h3>
                            <h1><?php echo $title; ?></h1>

                            <p class="note-acc"><?php echo $content; ?></p>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>

                <div class="team-carousel-list margin-top-20">
                    <?php global $post;
                    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                    $args = array('posts_per_page' => 12, 'order' => 'DESC', 'orderby' => 'post_date', 'paged' => $paged, 'category' => TRUONGPHONG);
                    $postslist = get_posts($args);
                    ?>
                    <?php foreach ($postslist as $post) :
                        setup_postdata($post);
                        $post_id = $post->ID;
                        $fullname = $post->post_title;
                        $content = $post->post_content;
                        $title = get_metadata('post', $post_id, $key = 'description', $single);
                        $categories = get_the_category($post->ID);
                        $facebook = get_metadata('post', $post_id, $key = 'facebook', $single);
                        $email = get_metadata('post', $post_id, $key = 'email', $single);
                        $phone = get_metadata('post', $post_id, $key = 'phone', $single);
                        $avatar = img_thumb($post_id);
                        $position = get_metadata('post', $post_id, $key = 'position', $single);
                        if ($avatar == "" || $avatar == null) {
                            $avatar = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
                        }
                        if ($position == 'tong_giam_doc') {
                            $position = 'Tổng giám đốc Eyeplus Media';
                        } elseif ($position == 'pho_tong_giam_doc') {
                            $position = 'Tổng giám đốc Eyeplus Online';
                        } elseif ($position == 'giam_doc') {
                            $position = 'Giám đốc';
                        } elseif ($position == 'pho_giam_doc') {
                            $position = 'Phó giám đốc';
                        } elseif ($position == "truong_phong") {
                            $position = 'Trưởng phòng';
                        } elseif ($position == 'pho_phong') {
                            $position = "Phó phòng";
                        } elseif ($position == 'truong_nhom') {
                            $position = 'Trưởng nhóm';
                        } elseif ($position == 'nhan_vien') {
                            $position = 'Nhân viên';
                        }
                        ?>
                        <div class="testimonial-word text-center">
                            <div class="imgUser"><img src="<?php echo $avatar; ?>"
                                                      class="img-responsive" alt=""></div>
                            <div class="shadow"></div>
                            <h3><?php echo $fullname; ?></h3>
                            <h4><i><?php
                                    foreach ($categories as $category) {
                                        if ($category->term_id === 16){
                                            echo 'Kế toán trưởng' ;
                                        }else
                                        {
                                            if ($category->parent != 0) {
                                                echo $position . ' ' . $category->name;
                                            }
                                        }
                                    }
                                    ?></i></h4>
<!--                            <h1>--><?php //echo $title; ?><!--</h1>-->
<!--                            <p class="sup-acc">-->
<!--                                <a href="--><?php //echo $facebook; ?><!--"><i-->
<!--                                            class="fa fa-facebook" data-toggle="tooltip"-->
<!--                                            title="--><?php //echo $facebook; ?><!--"></i></a>-->
<!--                                <a href="mailto:--><?php //echo $email; ?><!--"><i-->
<!--                                            class="fa fa-envelope"-->
<!--                                            data-toggle="tooltip"-->
<!--                                            title="--><?php //echo $email; ?><!--"></i>-->
<!--                                </a>-->
<!---->
<!--                                <a href="callto:--><?php //echo $phone; ?><!--"><i-->
<!--                                            class="fa fa-volume-control-phone"-->
<!--                                            data-toggle="tooltip" title="--><?php //echo $phone; ?><!--"></i>-->
<!--                                </a>-->
<!--                            </p>-->
                            <p class="note-acc"> <?php echo $content; ?></p>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </section>
    <!-- team-section  End -->


    <!-- Chuyển động movementE-->
    <section id="movementE" class="movementE-section section-space-padding bg-cover"
             data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center about-infor">
                    <h2 class="section-heading"><b>Chuyển động E+</b></h2>
                    <h5 class="lineStar text-center"><i class="fa fa-star"></i></h5>
                    <p>
                        <i> Eyeplus là môi trường trẻ, năng động, luôn tạo điều kiện cho các bạn cháy hết mình vì đam mê. Thành công của công ty cũng chính là thành công của các bạn.</i>
                    </p>
                </div>
            </div>


        </div>
        <?php global $post;
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
        $args = array('posts_per_page' => 20, 'order' => 'DESC', 'orderby' => 'post_date', 'paged' => $paged, 'category' => ALBUM);
        $postslist = get_posts($args);
        ?>
        <div class="row">
            <div class="slideMovement">
                <div class="team-carousel-list">
                    <?php
                    foreach ($postslist as $post) : setup_postdata($post);

                        $content = $post->post_content;

                        preg_match_all('/\< *[img][^\>]*[src] *= *[\"\']{0,1}([^\"\']*)/i', $content, $matches);
                            foreach ($matches[1] as $item):
                        ?>
                        <div class="testimonial-word text-center">
                            <a href="javascript:void(0)">
                                <img src="<?php echo $item; ?>" class="img-responsive" alt="">
                            </a>
                        </div>
                    <?php endforeach; endforeach;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
<!--     Tin tức News-->
    <section id="newsE" class="newsE-section section-space-padding bg-cover"
             data-stellar-background-ratio="0.3">

        <div class="container">
            <div class="row">
                <div class="title_magazine">
                    <h3>Tạp chí nội bộ</h3>
                </div>
                <div class="team-carousel-list testimonial_magazine">
                    <?php global $post;
                    $link_post = get_permalink();
                    $args = array(
                        'posts_per_page' => 10,
                        'category__in' => TAP_CHI_NOI_BO,
                        'post_status ' => 'publish',
                        'post_type' => 'post',
                        'order' => 'ASC',
                        'orderby' => 'date'
                    );
                    $news_array = get_posts($args);

                    ?>
                    <?php foreach ($news_array as $post) :
                        setup_postdata($post);
                        $post_id = $post->ID;
                        $title = $post->post_title;
                        $content = $post->post_content;
                        $link = get_metadata('post', $post_id, $key = 'link_video', $single);


                        if (has_post_thumbnail($post_id)) {
                            $img = img_thumb_news($post_id);
                        } else {
                            $img = get_template_directory_uri() . '/assets/images/icon/nophoto.png';
                        }
                        ?>
                        <div class="testimonial-word text-center">
                            <a href="<?php echo $link ?>" target="_blank" class="imgNews">
                                <img src="<?php echo $img ?>"/>
                                <div class="shadow2"></div>
                            </a>
                            <a href="<?php echo $link ?>" target="_blank" class="title">
                                <h2><?php echo $title; ?></h2>
                            </a>
                            <p> <?php echo $content; ?></p>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
<!--     Testimonial End-->
<?php get_footer();
