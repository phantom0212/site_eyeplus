<?php
/*
Template Name: Move
*/
get_header();
?>
<?php
$doman = get_site_url();
$paged = (get_query_var('page')) ? get_query_var('page') : 1;
$link_post = get_permalink();
$iteam_page = 12;
$args = array(
    'posts_per_page' => $iteam_page,
    'paged' => $paged,
    'category__in' => 4,
    'post_status ' => 'publish',
    'post_type' => 'post',
    'order' => 'DESC',
    'orderby' => 'date'
);
$posts_array = get_posts($args);
$the_query = new WP_Query($args);
$total_item = $the_query->found_posts;
$total_page = ceil($total_item / $iteam_page);


?>
<section class="cd-section-in tab-in bg-cover text-center" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="statistics wow fadeInDown">
                    <div class="statistics-icon"><img
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/icon-cd.png"/></div>
                    <div class="statistics-content">
                        <h5>Chuyển động</h5>
                    </div>
                </div>
                <div class="tab-gt left w100pt wow fadeInDown">
                    <a href="<?php echo $doman ?>/chuyen-dong-e" class="txt-tab active">Album ảnh</a>
                    <a href="<?php echo $doman ?>/chuyen-dong-e/chuyen-dong-tin-tuc" class="txt-tab">Tin tức</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics end -->


<!-- team - -->
<section id="newsE-section-list" class="newsE-section-in about-section cd-section section-space-padding8 bg-cover"
         data-stellar-background-ratio="0.3">
    <div class="bg1-top"></div>
    <div class="bg1-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="news-carousel-list-in">
                <?php
                foreach ($posts_array as $post) : setup_postdata($post);
                    $post_id = get_the_ID();
                    $avatar = img_thumb_2($post_id);
                    ?>
                    <div class="testimonial-word text-center">
                        <a href="<?php the_permalink(); ?>" class="imgNews">
                            <img style="max-height: 144px; max-width: 230px;" class="img-responsive wp-post-image"
                                 src="<?php echo $avatar; ?>">
                            <div class="shadow2"></div>
                        </a>
                        <a href="<?php the_permalink(); ?>" class="title">
                            <h2><?php echo get_the_title($post_id); ?></h2>
                        </a>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="paginationBox text-center">
            <ul class="pagination text-center">
                <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                    <li><a href="<?php echo $link_post . "/?page=" . $i; ?>"
                           <?php if ($paged == $i){ ?>class="active" <?php } ?> ><?php echo $i ?></a></li>
                <?php } ?>
            </ul>
        </div>

        <div class="clearfix"></div>
    </div>
</section>
<?php get_footer(); ?>

<!-- Contact Start -->
<section id="contact" class="contact-us section-space-padding bg-cover">
    <div href="#" class="arr-b"><i class="fa fa-angle-up"></i></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Hãy liên lạc với chúng tôi </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact End -->