<?php
/*
Template Name: Về chúng tôi
*/
get_header(); ?>

<!-- statistics -->
<section class="statistics-section tab-in bg-cover text-center" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="statistics wow fadeInDown">
                    <div class="statistics-icon"><img
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/icon_aboutus.png"/>
                    </div>
                    <div class="statistics-content">
                        <h5>Về chúng tôi</h5>
                    </div>
                </div>
                <div class="tab-gt left w100pt wow fadeInDown">
                    <a class="txt-tab active">Giới thiệu chung</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics end --
<!-- Section About ======================== -->
<section id="about" class="about-section ">
    <div class="bg1-top"></div>
    <div class="bg1-bottom"></div>
    <div class="container">
        <div class="row">
            <?php global $post;
            $paged = (get_query_var('page')) ? get_query_var('page') : 1;
            $args = array(
                'posts_per_page' => 1,
                'order' => 'DESC',
                'orderby' => 'post_date',
                'paged' => $paged,
                'category' => 8);
            $postslist = get_posts($args);
            ?>
            <div class="col-lg-12 about-in">
                <?php foreach ($postslist as $post) :
                    setup_postdata($post);
                    $post_id = $post->ID;
                    $title = get_the_title($post_id);
                    $content = $post->post_content;
                    $video = get_metadata('post', $post_id, $key = 'link_video', $single);
                    ?>
                    <div class="videoPlay left col-lg-5 col-xs-12 col-md-12">
                        <video controls  autoplay loop>
                            <source src="<?php echo $video; ?>" type="video/mp4">
                        </video>
                    </div>
                    <h1><b><?php echo $title; ?></b></h1>
                    <?php the_content(); ?>
                <?php endforeach;
                wp_reset_postdata(); ?>
                <?php dynamic_sidebar('muc-tieu'); ?>

            </div>

        </div>
    </div>

    <div class="clearfix"></div>
</section>

<!-- History usage - Lịch sử phát triển -->
<section id="history-usage" class="history-section section-space-padding bg-cover" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center about-infor wow fadeInDown">
                <h2 class="section-heading"><span class="fa iconTime"></span><b>Lịch sử phát triển</b></h2>
            </div>
        </div>

        <div class="row">
            <div id="timeline">
                <ul id="dates">
                    <?php
                    global $wpdb;
                    $result = $wpdb->get_results("SELECT `meta_value` FROM   `wp_postmeta` WHERE  `meta_key` = 'year' GROUP BY `meta_value` ORDER BY  `wp_postmeta`.`meta_value` DESC ");
                    $init = 0;
                    ?>
                    <?php foreach ($result as $value) {
                        $year = isset($value->meta_value) ? $value->meta_value : "";
                        if (!empty($year)) {
                            ?>
                            <li><a href="#<?php echo $value->meta_value; ?>"
                                   class="selected"><?php echo $value->meta_value; ?> <span></span></a></li>
                        <?php }
                    }
                    ?>
                </ul>
                <ul id="issues">
                    <?php foreach ($result as $value) {
                        $year = isset($value->meta_value) ? $value->meta_value : "";
                        if (!empty($year)) {
                            ?>
                            <li id="<?php echo $year; ?>">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'meta_query' => array(
                                        array(
                                            'key' => 'year',
                                            'value' => $year
                                        )
                                    )
                                );
                                $postslist = get_posts($args);
                                ?>
                                <?php foreach ($postslist as $item): setup_postdata( $post );
                                    if (!empty($item) && $item != null):
                                        $post_id = $item->id;
                                        $meta = get_post_meta($post_id,'year',$single = false);
                                        $title = !empty($item->post_title) ? $item->post_title : '';
                                        $content = !empty($item->post_content) ? $item->post_content : '';
                                        $avatar = get_the_post_thumbnail($post = $post_id, $size = 'post-thumbnail', $attr = '');
                                        ?>
                                            <h1><?php echo $title; ?></h1>
                                            <p><?php echo $content; ?></p>
                                    <?php endif;
                                endforeach; ?>
                            </li>
                            <?php wp_reset_postdata(); ?>
                        <?php }
                    } ?>

                </ul>
                <div id="grad_left"></div>
                <div id="grad_right"></div>
                <a href="#" id="next">+</a>
                <a href="#" id="prev">-</a>
            </div>
        </div>
    </div>
</section>
<!-- Product End -->

<!-- Section Timeline == -->
<?php dynamic_sidebar('su-menh'); ?>


<!--    <!--sales doanh số-->
<!--    <section id="salesE" class="sales-section section-space-padding bg-cover" data-stellar-background-ratio="0.3">-->
<!--        <div class="container">-->
<!--            <div class="row text-center">-->
<!--                <img src="--><?php // echo get_theme_file_uri(); ?><!--/assets/images/img/asd.png">-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    </section>-->

<?php get_footer(); ?>
<script src="<?php echo get_theme_file_uri(); ?>/assets/jQueryTimelinr/js/jquery.timelinr-0.9.53.js"></script>
<script>
    $(function(){
        $().timelinr({
            arrowKeys: 'true'
        })
    });
</script>
