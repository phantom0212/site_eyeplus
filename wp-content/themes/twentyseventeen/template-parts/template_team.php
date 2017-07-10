<?php
/*
Template Name: Team
*/
?>
<?php get_header(); ?>
<!-- statistics -->
<section class="team-section-in tab-in bg-cover text-center" data-stellar-background-ratio="0.3">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="statistics wow fadeInDown">
                    <div class="statistics-icon"><img
                                src="<?php echo get_theme_file_uri(); ?>/assets/images/icon/icon_team.png"/></div>
                    <div class="statistics-content">
                        <h5>E+ team</h5>
                    </div>
                </div>
                <div class="tab-gt left w100pt wow fadeInDown">
                    <h2>Danh sánh thành viên EyePlus</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- statistics end -->

<!-- team - -->
<section id="team-section-list" class="team-section-list about-section section-space-padding8 bg-cover"
         data-stellar-background-ratio="0.3">
    <div class="bg1-top"></div>
    <div class="bg1-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="team-boss">
                <?php global $post;
                $args = array('posts_per_page' => 2, 'order' => 'DESC', 'orderby' => 'post_date', 'category' => BOSS);
                $postslist = get_posts($args);
                ?>
                <?php foreach ($postslist as $post) :
                    setup_postdata($post);
                    $post_id = $post->ID;
                    $fullname = $post->post_title;
                    $content = $post->post_content;
                    $title = get_metadata('post', $post_id, $key = 'description', $single);
                    $position = get_metadata('post', $post_id, $key = 'position', $single);
                    if ($position == 'tong_giam_doc'){
                        $position = 'Tổng giám đốc Eyeplus Media';
                    }elseif($position == 'pho_tong_giam_doc'){
                        $position = 'Phó tổng giám đốc Eyeplus Online';
                    }elseif ($position == 'giam_doc'){
                        $position = 'Giám đốc';
                    }elseif($position == 'pho_giam_doc'){
                        $position = 'Phó giám đốc';
                    }elseif ($position == "truong_phong"){
                        $position ='Trưởng phòng';
                    }elseif ($position == 'pho_phong'){
                        $position = "Phó phòng";
                    }elseif ($position == 'truong_nhom'){
                        $position ='Trưởng nhóm';
                    }elseif ($position == 'nhan_vien'){
                        $position = 'Nhân viên';
                    }
                    $avatar = img_thumb($post_id);
                    ?>
                    <div class="col-lg-6 text-center team-boss-item">
                        <div class="imgUser">
                            <button type="button" class="btn btn-info btn-lg btnDetail" data-toggle="modal"
                                    data-target="#myModal" value=" <?php echo $post_id ?>">Xem
                                chi tiết
                            </button>
                            <img class="img-responsive"
                                 alt="" src="<?php echo $avatar; ?>"/>
                        </div>
                        <h3><?php echo $position . ': ' . $fullname; ?></h3>
                        <h1><?php echo $title; ?></h1>

                        <p class="note-acc"><?php echo $content; ?></p>
                    </div>

                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="team-carousel-list-in margin-top-20">
                <?php global $post;
                $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                $post_per_page = 12;
                $args = array(
                    'posts_per_page' => $post_per_page,
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'paged' => $paged,
                    'cat' => TRUONGPHONG
                );
                $postslist = get_posts($args);
                $the_query = new WP_Query($args);
                $total = $the_query->found_posts;
                $total_page = ceil($total / $post_per_page);
                $stt = 1;
                ?>
                <?php foreach ($postslist as $post) :
                    setup_postdata($post);
                    $post_id = $post->ID;
                    $name = $post->post_title;
                    $content = $post->post_content;

                    $categories = get_the_category($post->ID);

                    $facebook = get_metadata('post', $post_id, $key = 'facebook', $single);
                    $email = get_metadata('post', $post_id, $key = 'email', $single);
                    $phone = get_metadata('post', $post_id, $key = 'phone', $single);
                    $title = get_metadata('post', $post_id, $key = 'description', $single);
                    $avatar = img_thumb($post_id);
                    if ($avatar == "" || $avatar == null) {
                        $avatar = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
                    }
                    $position = get_metadata('post', $post_id, $key = 'position', $single);
                    if ($position == 'tong_giam_doc'){
                        $position = 'Tổng giám đốc Eyeplus Media';
                    }elseif($position == 'pho_tong_giam_doc'){
                        $position = 'Tổng giám đốc Eyeplus Online';
                    }elseif ($position == 'giam_doc'){
                        $position = 'Giám đốc';
                    }elseif($position == 'pho_giam_doc'){
                        $position = 'Phó giám đốc';
                    }elseif ($position == "truong_phong"){
                        $position ='Trưởng phòng';
                    }elseif ($position == 'pho_phong'){
                        $position = "Phó phòng";
                    }elseif ($position == 'truong_nhom'){
                        $position ='Trưởng nhóm';
                    }elseif ($position == 'nhan_vien'){
                        $position = 'Nhân viên';
                    }
                    ?>
                    <div class="testimonial-word text-center">
                        <div class="imgUser">
                            <button type="button" class="btn btn-info btn-lg btnDetail" data-toggle="modal"
                                    data-target="#myModal" value="<?php echo $post_id ?>">Xem
                                chi tiết
                            </button>
                            <img class="img-responsive"
                                 alt="" src="<?php echo $avatar; ?>">
                        </div>
                        <div class="shadow"></div>
                        <h3><?php echo $name; ?></h3>
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
                                ?>
                            </i></h4>

<!--                        <p class="sup-acc">-->
<!--                            <a href="--><?php //echo $facebook; ?><!--"><i-->
<!--                                        class="fa fa-facebook" data-toggle="tooltip"-->
<!--                                        title="--><?php //echo $facebook; ?><!--"></i></a>-->
<!--                            <a href="mailto:--><?php //echo $email; ?><!--"><i class="fa fa-envelope"-->
<!--                                                                      data-toggle="tooltip"-->
<!--                                                                      title="--><?php //echo $email; ?><!--"></i></a>-->
<!--                            <a href="callto:--><?php //echo $phone; ?><!--"><i-->
<!--                                        class="fa fa-volume-control-phone"-->
<!--                                        data-toggle="tooltip" title="--><?php //echo $phone; ?><!--"></i></a>-->
<!--                        </p>-->
                        <p class="note-acc">
                            <?php echo $content; ?>
                        </p>
                    </div>
                    <?php if ($stt % 4 == 0) {
                    echo "<div class='clearfix'></div>";
                }
                    $stt++; endforeach;
                wp_reset_postdata(); ?>
            </div>
            <div class="paginationBox text-center">
                <ul class="pagination text-center">
                    <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                        <li><a href="<?php echo the_permalink() . "/?page=" . $i; ?>"
                               <?php if ($paged == $i){ ?>class="active" <?php } ?> ><?php echo $i ?></a></li>
                    <?php } ?>
                </ul>
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal infor-member fade bs-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <div class="col-lg-5">
                    <div class="detail_imgUser">
                    </div>
                    <div class="sup_detailUser sup-acc">
                    </div>
                </div>
                <div class="col-lg-7 content_user">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<?php get_footer(); ?>
<script>
    $(document).ready(function () {
        $('.btnDetail').click(function () {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: "<?php  echo get_theme_file_uri(); ?>/functions/getUserInfo.php",
                data: {id: id},
                success: function (data) {
                    var list = $.parseJSON(data);
                    var title = list.position + ': ' + list.fullname;
                    var avatar = '<img src="' + list.avatar + '"/>';

                    var sup_acc = '<ul>';
//                    if (list.facebook != '') {
//                        sup_acc += '<li>';
//                        sup_acc += '<i class="fa fa-facebook" data-toggle="tooltip" title=""data-original-title="Link Facebook!"></i><a href="' + list.facebook + '">' + list.facebook + '</a>';
//                        sup_acc += '</li>';
//                    }
//                    if (list.email != '') {
//                        sup_acc += '<li>';
//                        sup_acc += '<i class="fa fa-envelope" aria-hidden="true" data-toggle="tooltip" title=""data-original-title="' + list.email + '"></i>' + list.email + '';
//                        sup_acc += '</li>';
//                    }
//                    if (list.phone != '') {
//                        sup_acc += '<li>';
//                        sup_acc += '<i class="fa fa-volume-control-phone" aria-hidden="true" data-toggle="tooltip"title="" data-original-title="Số DT: ' + list.phone + '"></i>' + list.phone + '';
//                        sup_acc += '</li>';
//                    }
                    sup_acc += '</ul>';

                    var content = '<h1>' + list.title + '</h1><p>' + list.content + '</p>';
                    $('.detail_imgUser').html(avatar);
                    $('.modal-title').html(title);
                    $('.sup_detailUser').html(sup_acc);
                    $('.content_user').html(content);
                    $('#myModal').show();
                },
                error: function ($e) {
                    alert($e);
                }
            });
        });
    });
</script>
