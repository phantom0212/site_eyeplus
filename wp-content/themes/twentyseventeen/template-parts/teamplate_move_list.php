<?php
/*
Template Name: Move List
*/
get_header();
?>
<?php
    $doman = get_site_url();

?>


<section class="cd-section-in tab-in bg-cover text-center" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="statistics wow fadeInDown">
                    <div class="statistics-icon"><img src="<?php  echo get_theme_file_uri(); ?>/assets/images/icon/icon-cd.png"/></div>
                    <div class="statistics-content">
                        <h5>Chuyển động</h5>
                    </div>
                </div>
                <div class="tab-gt left w100pt wow fadeInDown">
                    <a href="<?php echo $doman?>/chuyen-dong-e" class="txt-tab">Album ảnh</a>
                    <a href="<?php echo $doman?>/chuyen-dong-e/chuyen-dong-tin-tuc" class="txt-tab active">Tin tức</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics end -->



<!-- team - -->
<section id="newsE-section-list" class="cd-section section-space-padding8 bg-cover"
         data-stellar-background-ratio="0.3">
    <div class="bg1-top"></div>
    <div class="bg1-bottom"></div>
    <div class="container">
        <div class="row">
            <section id="newsE" class="newsE-section section-space-padding bg-cover"
                     data-stellar-background-ratio="0.3" style="background: transparent">

                <div class="container">
                    <div class="row">
                        <div class="title_magazine">
                            <h3>Tạp chí nội bộ</h3>
                        </div>
                        <div class="team-carousel-list testimonial_magazine">
                            <?php global $post;
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
                                <div class="testimonial-word text-center full-img">
                                    <a href="<?php echo $link; ?>" class="imgNews">
                                        <img src="<?php echo $img ?>"/>
                                        <div class="shadow2"></div>
                                    </a>
                                    <a href="<?php echo $link; ?>" class="title">
                                        <h2><?php echo $title; ?></h2>
                                    </a>
                                </div>
                            <?php endforeach;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-lg-9 boxNewsIn-left">
                <?php
                $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
                $iteam_page = 8;
                $args = array(
                    'posts_per_page' => $iteam_page,
                    'paged' => $paged,
                    'category__in' => TINTUC,
                    'post_status ' => 'publish',
                    'post_type' => 'post',
                    'order' => 'DESC',
                    'orderby' => 'date'
                );
                $news_array = get_posts( $args );
                $the_query = new WP_Query($args);
                $total_item = $the_query->found_posts;
                //    $iteam_page = $the_query->post_count;the_title();
                $total_page = ceil($total_item/$iteam_page);
                ?>
                <div class="boxNewsIn-list feature-grids news-grids">
                    <?php
                            foreach ( $news_array as $post ) : setup_postdata( $post );
                        $date = get_the_date();
                        $time = get_the_time();
                        $post_id = get_the_ID();
                        $avatar = !empty(img_thumb($post_id))?img_thumb($post_id):'';
                    ?>
                    <div class="newsItem wow fadeInDown" data-wow-duration=".8s"
                         data-wow-delay=".2s">
                        <div class="left imgNews">
                            <a href="<?php echo get_permalink() ; ?>">
                                <img class="img-responsive wp-post-image" src="<?php echo $avatar; ?>" alt="<?php echo get_the_title($post_id); ?>"/>
                            </a>
                        </div>
                        <h4><a href="<?php echo get_permalink() ; ?>" title="<?php echo get_the_title($post_id); ?>"><?php echo get_the_title($post_id); ?></a></h4>
                        <p class="time"><?php echo $date; ?> - <?php echo $time; ?></p>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <?php  endforeach;
                    wp_reset_postdata();
                    ?>
                    <div class="paginationBox text-left">
                        <ul class="pagination text-center">
                            <?php for($i=1; $i<= $total_page; $i++){ ?>
                            <li><a href="<?php echo $link_post."/?page=".$i; ?>" <?php if($paged == $i){ ?>class="active" <?php } ?> ><?php echo $i ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-lg-3 boxNewsIn-right">
                <?php dynamic_sidebar('sidebar_right'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>

