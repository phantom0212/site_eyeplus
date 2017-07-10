<?php
get_header();
global $wp_query;
?>
    <!-- statistics -->
    <section class="search-section-in tab-in bg-cover text-center" data-stellar-background-ratio="0.3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="statistics wow fadeInDown">
                        <div class="statistics-icon"><img
                                    src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/search-text-50.png"/>
                        </div>
                        <div class="statistics-content">
                            <h5>
                                Tìm kiếm</h5>
                        </div>
                    </div>
                    <div class="tab-gt left w100pt wow fadeInDown">
                        <!--<h2>Tìm thấy 20 thông tin cần tìm</h2>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statistics end -->

    <section id="search-section" class="newsE-section about-section cd-section bg-cover"
             data-stellar-background-ratio="0.3">
        <div class="bg1-top"></div>
        <div class="bg1-bottom"></div>
        <div class="container">
            <div class="row">
                <?php if (have_posts()) : ?>
                    <h1 class="tittlemameCT"><?php printf(__('Từ khóa bạn đang tìm là: "%s"', 'twentyseventeen'), '<span>' . get_search_query() . '</span>'); ?></h1>
                <?php else : ?>
                    <h1 class="title"><?php _e('Không có kết quả. Vui lòng thử lại từ khóa khác!    ', 'twentyseventeen'); ?></h1>
                <?php endif; ?>
            </div><!-- .page-header -->
            <div class="newsE-section-in about-section cd-section section-space-padding8 bg-cover" style="padding:0;"
                 data-stellar-background-ratio="0.3">
                <div class="container">
                    <?php if (have_posts()) { ?>
                    <h2><?php echo $wp_query->found_posts; ?> kết quả</h2>
                    <div class="row">
                        <div class="news-carousel-list-in">
                            <?php while (have_posts()) {
                            the_post();
                            ?>
                            <div class="testimonial-word text-center">
                                <a href="<?php echo get_permalink(); ?>" class="imgNews">
                                    <?php
                                    $title = the_title();
                                    if ( has_post_thumbnail()){
                                         the_post_thumbnail('medium', ['class' => 'img-responsive', 'title' =>  ]);
                                    }else{  ?>
                                        <img class="img-responsive" src="<?php echo get_theme_file_uri();?>/assets/images/icon/nophoto.png" alt="<?php echo the_title(); ?>">
                                   <?php }?>
                                            <div class=" shadow2"></div>
                            </a>
                            <a href="<?php echo get_the_permalink(); ?>" class="title">
                                <h2><?php echo the_title(); ?></h2>
                            </a>
                            <p><?php echo substr(get_the_excerpt(), 0, 200); ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="paginationBox text-center">
                    <ul class="pagination text-center">
                        <li><?php
                            $big = 999999999; // need an unlikely integer
                            $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string

                            echo paginate_links( array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => max( 1, get_query_var('paged') ),
                                'total' => $wp_query->max_num_pages,
                                'prev_next'          => false,
                            ) );
                            ?></li>
                    </ul>
                </div>

                <div class="clearfix"></div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php get_footer();
