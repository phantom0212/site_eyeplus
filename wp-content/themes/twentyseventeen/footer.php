<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
dynamic_sidebar('footer');
?>

<!-- Back to Top Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
<!-- Back to Top End -->
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/js/plugin.js"></script>

<!-- Main Javascript File  -->
<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/js/jsMain.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/modernizr.custom.js"></script>
<!-- Responsive Tabs JS -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/jquery.responsiveTabs.js" type="text/javascript"></script>
<!-- wow fadeInDown -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/common.js"></script>
<!-- Sweetalert -->
<script src="<?php echo get_theme_file_uri(); ?>/assets/sweetalert/sweetalert.min.js"></script>



<script>
    var hoverSpan = $('.btn span');
    $(".btn").mouseenter(function () {
        //remove reset and add enter on hover
        $(hoverSpan).removeClass('reset').addClass('enter');

    })
        .mouseleave(function () {
            //remove enter and add leave

            $(hoverSpan).removeClass('enter').addClass('leave');

            //remove leave and add reset after 500ms delay
            setTimeout(function () {
                $(hoverSpan).removeClass('leave').addClass('reset');
            }, 500);

        });
</script>


<!-- listMember -->
<script>

    //listWhy ==============================================================
    $(function () {

        var menu_ul = $('.listWhy > li > ul'),
            menu_a = $('.listWhy > li > a');

        menu_ul.hide();

        menu_a.click(function (e) {
            e.preventDefault();
            if (!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true, true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true, true).slideUp('normal');
            }
        });

    });


    function Activehistory(tag) {
        $('#dates li a').each(function (index) {
            $(this).removeClass('selected');
        });
        $(tag).addClass('selected');
    }

    $(function () {
        var url = window.location.href;
        $('.menu-item').each(function () {
            if($(this).children('a').attr('href') === url){
                $(this).addClass('active');
            }
        });
    });
    $(function () {
        var url = window.location.href;
        $('.fadeInDown > a').each(function () {
            var link_attr = $(this).attr('href');
            if (link_attr == url){
                $('.menu-item-43').addClass('active');
            }
        });
    });
    $(function () {
        var url = window.location.href;
        $('.fadeInDown > a').each(function () {
            var link_attr = $(this).attr('href');
            if (link_attr == url){
                $('.menu-item-43').addClass('active');
            }
        });
    });
    $(function () {
        var url = window.location.href;
        var link_post = $('#post-link').val();
        if(url == link_post) {
            $('.menu-item-43').addClass('active');
        }
    });

    $(function () {
        var id_cate2 = $('#post-link').attr('class');
        if (id_cate2 == 3){
            $('.move-news').addClass('active');
        }else {
            $('.album-photo').addClass('active');
        }
    });
    var vid = document.getElementById("videobg");

    <?php if (is_front_page()){ ?>
    $(function () {
        $('.btn-pause-media').click(function () {
           $(this).toggleClass('isplay');

           if($(this).attr('class') === 'btn-pause-media isplay'){
               vid.play();
           }else {
               vid.pause();
           }
        });
    });

    $(window).scroll(function () {
        var vid = document.getElementById("videobg");


        if ($(this).scrollTop() >= 500) {
            $('.scroll-to-top').fadeIn();
            $('.btn-pause-media').css({"display": "none"});
            vid.muted = true;
        } else {
            $('.scroll-to-top').fadeOut();
            $('.btn-pause-media').css({"display": "block"});
            vid.muted = false;
        }
    });

    <?php }else{?>
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 500) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    <?php } ?>
</script>
</body>
</html>
