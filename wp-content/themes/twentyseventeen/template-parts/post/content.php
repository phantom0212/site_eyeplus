
<?php
    $doman = get_site_url();
    $link_post = get_permalink();
    $author = get_the_author();
//    $date = get_the_date();
    $time = get_the_time();
    global $post;
    $categories = get_the_category($post->ID);
    $id_cate = $categories[0]->term_id;
    $id_post = get_the_ID();
    $id_post = array($id_post);
    $args = array(
        'category'         => $id_cate,
        'posts_per_page'   => 5,
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'post_type'        => 'post',
        'post_status'      => 'publish',
        'post__not_in'        => $id_post
    );
    $involve = get_posts($args);
    $date = get_day_weekday(get_the_time("l"), get_the_time("d/m/Y"));
//    var_dump(is_new_day());
?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1435020349870744";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript" src="https://apis.google.com/js/platform.js" async defer></script>

    <!-- statistics -->
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
                        <a  href="<?php echo $doman?>/chuyen-dong-e" class="txt-tab album-photo">Album ảnh</a>
                        <a href="<?php echo $doman?>/chuyen-dong-e/chuyen-dong-tin-tuc" class="txt-tab move-news">Tin tức</a>
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
                <div class="col-lg-9 boxNewsIn-left">
                    <div class="detaitxt w100pt left">
                        <h3><?php the_title(); ?></h3>
                        <div class="left w100pt time-share">
                            <div class="col-lg-7"><b><?php echo $author; ?></b> | <?php echo $time; ?> - <?php echo $date; ?></div>
                            <div class="col-lg-5">
                                <div style="display: inline-block; float: right;margin-right: -44px;"><g:plusone></g:plusone></div>
                                <div title="Chia sẻ" class="fb-share-button" style="float: right;margin-right: 5px;" data-href="<?php echo $link_post; ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>
                                <div style="display: inline-block; float: right; margin-right: 5px;" class="fb-like" data-href="<?php echo $link_post; ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>

                            </div>
                        </div>
                       <?php the_content(); ?>
                    </div>
                    <div class="w100pt left comment">
<!--                        <div class="fb-comments" data-href="--><?php //echo $link_post; ?><!--" data-width="100%" data-numposts="5"></div>-->
                        <div class="fb-comments" data-href="<?php echo $link_post; ?>" data-numposts="5"></div>
                    </div>
                    <ul class="left w100pt listNews">
                        <?php
                            foreach ( $involve as $post ) : setup_postdata( $post );
                            $date = get_the_date();
                        ?>
                        <li><span><?php echo $date; ?></span> <a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                        <?php  endforeach;
                            wp_reset_postdata();
                        ?>
                    </ul>
                </div>
                <div class="col-lg-3 boxNewsIn-right">
                    <?php dynamic_sidebar('sidebar_right'); ?>
                </div>
            </div>
        </div>
    </section>
<input type="hidden" id="post-link" value="<?php echo get_permalink(); ?>" class="<?php echo $id_cate; ?>">
