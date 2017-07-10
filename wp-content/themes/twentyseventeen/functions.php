<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}
define("THEME_NAME", 'legatus');
define("THEME_FULL_NAME", 'legatus');

define("BOSS", 6);
define("TRUONGPHONG", 7);
define("TINTUC", 3);
define("ALBUM", 20);
define("TAP_CHI_NOI_BO", 21);


require_once('functions/thumbs.php');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twentyseventeen_setup()
{
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('twentyseventeen');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

    // Set the default content width.
    $GLOBALS['content_width'] = 525;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus(array(
        'MENU_HEADER' => __('MENU_HEADER', 'twentyseventeen'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
      */
    add_editor_style(array('assets/css/editor-style.css', twentyseventeen_fonts_url()));

    // Define and register starter content to showcase the theme on new sites.
    $starter_content = array(
        'widgets' => array(
            // Place three core-defined widgets in the sidebar area.
            'sidebar-1' => array(
                'text_business_info',
                'search',
                'text_about',
            ),

            // Add the core-defined business info widget to the footer 1 area.
            'sidebar-2' => array(
                'text_business_info',
            ),

            // Put two core-defined widgets in the footer 2 area.
            'sidebar-3' => array(
                'text_about',
                'search',
            ),
        ),

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts' => array(
            'home',
            'about' => array(
                'thumbnail' => '{{image-sandwich}}',
            ),
            'contact' => array(
                'thumbnail' => '{{image-espresso}}',
            ),
            'blog' => array(
                'thumbnail' => '{{image-coffee}}',
            ),
            'homepage-section' => array(
                'thumbnail' => '{{image-espresso}}',
            ),
        ),

        // Create the custom image attachments used as post thumbnails for pages.
        'attachments' => array(
            'image-espresso' => array(
                'post_title' => _x('Espresso', 'Theme starter content', 'twentyseventeen'),
                'file' => 'assets/images/espresso.jpg', // URL relative to the template directory.
            ),
            'image-sandwich' => array(
                'post_title' => _x('Sandwich', 'Theme starter content', 'twentyseventeen'),
                'file' => 'assets/images/sandwich.jpg',
            ),
            'image-coffee' => array(
                'post_title' => _x('Coffee', 'Theme starter content', 'twentyseventeen'),
                'file' => 'assets/images/coffee.jpg',
            ),
        ),

        // Default to a static front page and assign the front and posts pages.
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods' => array(
            'panel_1' => '{{homepage-section}}',
            'panel_2' => '{{about}}',
            'panel_3' => '{{blog}}',
            'panel_4' => '{{contact}}',
        ),

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus' => array(
            // Assign a menu to the "top" location.
            'top' => array(
                'name' => __('Top Menu', 'twentyseventeen'),
                'items' => array(
                    'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),

            // Assign a menu to the "social" location.
            'social' => array(
                'name' => __('Social Links Menu', 'twentyseventeen'),
                'items' => array(
                    'link_yelp',
                    'link_facebook',
                    'link_twitter',
                    'link_instagram',
                    'link_email',
                ),
            ),
        ),
    );

    /**
     * Filters Twenty Seventeen array of starter content.
     *
     * @since Twenty Seventeen 1.1
     *
     * @param array $starter_content Array of starter content.
     */
    $starter_content = apply_filters('twentyseventeen_starter_content', $starter_content);

    add_theme_support('starter-content', $starter_content);
}

add_action('after_setup_theme', 'twentyseventeen_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twentyseventeen_content_width()
{

    $content_width = $GLOBALS['content_width'];

    // Get layout.
    $page_layout = get_theme_mod('page_layout');

    // Check if layout is one column.
    if ('one-column' === $page_layout) {
        if (twentyseventeen_is_frontpage()) {
            $content_width = 644;
        } elseif (is_page()) {
            $content_width = 740;
        }
    }

    // Check if is single post and there is no sidebar.
    if (is_single() && !is_active_sidebar('sidebar-1')) {
        $content_width = 740;
    }

    /**
     * Filter Twenty Seventeen content width of the theme.
     *
     * @since Twenty Seventeen 1.0
     *
     * @param $content_width integer
     */
    $GLOBALS['content_width'] = apply_filters('twentyseventeen_content_width', $content_width);
}

add_action('template_redirect', 'twentyseventeen_content_width', 0);

/**
 * Register custom fonts.
 */
function twentyseventeen_fonts_url()
{
    $fonts_url = '';

    /**
     * Translators: If there are characters in your language that are not
     * supported by Libre Franklin, translate this to 'off'. Do not translate
     * into your own language.
     */
    $libre_franklin = _x('on', 'Libre Franklin font: on or off', 'twentyseventeen');

    if ('off' !== $libre_franklin) {
        $font_families = array();

        $font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
        );

        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url);
}

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function twentyseventeen_resource_hints($urls, $relation_type)
{
    if (wp_style_is('twentyseventeen-fonts', 'queue') && 'preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://fonts.gstatic.com',
            'crossorigin',
        );
    }

    return $urls;
}

add_filter('wp_resource_hints', 'twentyseventeen_resource_hints', 10, 2);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init()
{
    register_sidebar(array(
        'name' => __('Sidebar', 'twentyseventeen'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets here to appear in your sidebar.', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer', 'twentyseventeen'),
        'id' => 'footer',
        'description' => __('Footer', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('muc-tieu', 'twentyseventeen'),
        'id' => 'muc-tieu',
        'description' => __('muc-tieu', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('su-menh', 'twentyseventeen'),
        'id' => 'su-menh',
        'description' => __('su-menh', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar(array(
        'name' => __('sidebar_right', 'twentyseventeen'),
        'id' => 'sidebar_right',
        'description' => __('sidebar_right', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('su-menh-index', 'twentyseventeen'),
        'id' => 'su-menh-index',
        'description' => __('su-menh-index', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('thong-ke', 'twentyseventeen'),
        'id' => 'thong-ke',
        'description' => __('thong-ke', 'twentyseventeen'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'twentyseventeen_widgets_init');

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function twentyseventeen_excerpt_more($link)
{
    if (is_admin()) {
        return $link;
    }

    $link = sprintf('<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url(get_permalink(get_the_ID())),
        /* translators: %s: Name of current post */
        sprintf(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen'), get_the_title(get_the_ID()))
    );
    return ' &hellip; ' . $link;
}

add_filter('excerpt_more', 'twentyseventeen_excerpt_more');

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function twentyseventeen_javascript_detection()
{
    echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

add_action('wp_head', 'twentyseventeen_javascript_detection', 0);

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function twentyseventeen_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">' . "\n", get_bloginfo('pingback_url'));
    }
}

add_action('wp_head', 'twentyseventeen_pingback_header');

/**
 * Display custom color CSS.
 */
function twentyseventeen_colors_css_wrap()
{
    if ('custom' !== get_theme_mod('colorscheme') && !is_customize_preview()) {
        return;
    }

    require_once(get_parent_theme_file_path('/inc/color-patterns.php'));
    $hue = absint(get_theme_mod('colorscheme_hue', 250));
    ?>
    <style type="text/css" id="custom-theme-colors" <?php if (is_customize_preview()) {
        echo 'data-hue="' . $hue . '"';
    } ?>>
        <?php echo twentyseventeen_custom_colors_css(); ?>
    </style>
<?php }

add_action('wp_head', 'twentyseventeen_colors_css_wrap');

/**
 * Enqueue scripts and styles.
 */
function twentyseventeen_scripts()
{

}

add_action('wp_enqueue_scripts', 'twentyseventeen_scripts');

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array $size Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function twentyseventeen_content_image_sizes_attr($sizes, $size)
{
    $width = $size[0];

    if (740 <= $width) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if (is_active_sidebar('sidebar-1') || is_archive() || is_search() || is_home() || is_page()) {
        if (!(is_page() && 'one-column' === get_theme_mod('page_options')) && 767 <= $width) {
            $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}

add_filter('wp_calculate_image_sizes', 'twentyseventeen_content_image_sizes_attr', 10, 2);

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $html The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array $attr Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function twentyseventeen_header_image_tag($html, $header, $attr)
{
    if (isset($attr['sizes'])) {
        $html = str_replace($attr['sizes'], '100vw', $html);
    }
    return $html;
}

add_filter('get_header_image_tag', 'twentyseventeen_header_image_tag', 10, 3);

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function twentyseventeen_post_thumbnail_sizes_attr($attr, $attachment, $size)
{
    if (is_archive() || is_search() || is_home()) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}

add_filter('wp_get_attachment_image_attributes', 'twentyseventeen_post_thumbnail_sizes_attr', 10, 3);

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function twentyseventeen_front_page_template($template)
{
    return is_home() ? '' : $template;
}

add_filter('frontpage_template', 'twentyseventeen_front_page_template');

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path('/inc/custom-header.php');

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path('/inc/template-tags.php');

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path('/inc/template-functions.php');

/**
 * Customizer additions.
 */
require get_parent_theme_file_path('/inc/customizer.php');

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path('/inc/icon-functions.php');

//Mô tả
function description_meta_box()
{
    add_meta_box( 'description', 'Mô tả', 'description_output', 'post' );
}
add_action( 'add_meta_boxes', 'description_meta_box' );
/**
Khai báo callback
@param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function description_output( $post )
{
    $description = get_post_meta( $post->ID, 'description', true );
    // Tạo trường
    echo ('<textarea type="text" rows="5" cols="128" id="description" name="description" style="font-size:16px;font-family: Georgia, Times New Roman, Bitstream Charter, Times, serif;" value="'.esc_attr( $description ).'">'.esc_attr( $description ).'</textarea>');
}

/**
Lưu dữ liệu meta box khi nhập vào
@param post_id là ID của post hiện tại
 **/
function description_save( $post_id )
{
    $description = sanitize_textarea_field( $_POST['description'] );
    update_post_meta( $post_id, 'description', $description );
}
add_action( 'save_post', 'description_save' );


// Box Phone number
function phone_meta_box()
{
    add_meta_box( 'phone', 'Số điện thoại', 'phone_output', 'post' );
}
add_action( 'add_meta_boxes', 'phone_meta_box' );
/**
Khai báo callback
@param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function phone_output( $post )
{
    $phone = get_post_meta( $post->ID, 'phone', true );
    // Tạo trường
    echo ('<input type="text" id="phone" name="phone" value="'.esc_attr( $phone ).'" />');
}

/**
Lưu dữ liệu meta box khi nhập vào
@param post_id là ID của post hiện tại
 **/
function phone_save( $post_id )
{
    $phone = sanitize_text_field( $_POST['phone'] );
    update_post_meta( $post_id, 'phone', $phone );
}
add_action( 'save_post', 'phone_save' );


//Box Email
function email_meta_box()
{
    add_meta_box( 'email', 'Email', 'email_output', 'post' );
}
add_action( 'add_meta_boxes', 'email_meta_box' );
/**
Khai báo callback
@param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function email_output( $post )
{
    $email = get_post_meta( $post->ID, 'email', true );
    // Tạo trường
    echo ('<input type="text" id="email" name="email" value="'.esc_attr( $email ).'" />');
}

/**
Lưu dữ liệu meta box khi nhập vào
@param post_id là ID của post hiện tại
 **/
function email_save( $post_id )
{
    $email = sanitize_text_field( $_POST['email'] );
    update_post_meta( $post_id, 'email', $email );
}
add_action( 'save_post', 'email_save' );

//Box Facebook
function facebook_meta_box()
{
    add_meta_box( 'facebook', 'Link facebook', 'facebook_output', 'post' );
}
add_action( 'add_meta_boxes', 'facebook_meta_box' );
/**
Khai báo callback
@param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function facebook_output( $post )
{
    $facebook = get_post_meta( $post->ID, 'facebook', true );
    // Tạo trường
    echo ('<input type="text" id="facebook" name="facebook" value="'.esc_attr( $facebook ).'" />');
}

/**
Lưu dữ liệu meta box khi nhập vào
@param post_id là ID của post hiện tại
 **/
function facebook_save( $post_id )
{
    $facebook = sanitize_text_field( $_POST['facebook'] );
    update_post_meta( $post_id, 'facebook', $facebook );
}
add_action( 'save_post', 'facebook_save' );

//Link Video
function link_video_meta_box()
{
    add_meta_box( 'link_video', 'Link Video', 'link_video_output', 'post' );
}
add_action( 'add_meta_boxes', 'link_video_meta_box' );
/**
Khai báo callback
@param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function link_video_output( $post )
{
    $link_video = get_post_meta( $post->ID, 'link_video', true );
    // Tạo trường
    echo ('<input type="text" id="link_video" name="link_video" value="'.esc_attr( $link_video ).'" />');
}

/**
Lưu dữ liệu meta box khi nhập vào
@param post_id là ID của post hiện tại
 **/
function link_video_save( $post_id )
{
    $link_video = sanitize_text_field( $_POST['link_video'] );
    update_post_meta( $post_id, 'link_video', $link_video );
}
add_action( 'save_post', 'link_video_save' );

//Position Metabox

/**
 * Adds a box to the main column on the Post add/edit screens.
 */
function wdm_add_meta_box() {

    add_meta_box(
        'wdm_sectionid', 'Chức vụ', 'wdm_meta_box_callback', 'post'
    ); //you can change the 4th paramter i.e. post to custom post type name, if you want it for something else

}

add_action( 'add_meta_boxes', 'wdm_add_meta_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function wdm_meta_box_callback( $post ) {

    // Add an nonce field so we can check for it later.
    wp_nonce_field( 'wdm_meta_box', 'wdm_meta_box_nonce' );

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $value = get_post_meta( $post->ID, 'position', true ); //my_key is a meta_key. Change it to whatever you want

    ?>
    <input type="radio" name="Position" value="tong_giam_doc" <?php checked( $value, 'tong_giam_doc' ); ?> >Tổng giám đốc<br>
    <input type="radio" name="Position" value="pho_tong_giam_doc" <?php checked( $value, 'pho_tong_giam_doc' ); ?> >Phó tổng giám đốc<br>
    <input type="radio" name="Position" value="giam_doc" <?php checked( $value, 'giam_doc' ); ?> >Giám đốc<br>
    <input type="radio" name="Position" value="pho_giam_doc" <?php checked( $value, 'pho_giam_doc' ); ?> >Phó giám đốc<br>
    <input type="radio" name="Position" value="truong_phong" <?php checked( $value, 'truong_phong' ); ?> >Trưởng phòng<br>
    <input type="radio" name="Position" value="pho_phong" <?php checked( $value, 'pho_phong' ); ?> >Phó phòng<br>
    <input type="radio" name="Position" value="truong_nhom" <?php checked( $value, 'truong_nhom' ); ?> >Trưởng nhóm<br>
    <input type="radio" name="Position" value="nhan_vien" <?php checked( $value, 'nhan_vien' ); ?> >Nhân viên<br>
    <?php

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function wdm_save_meta_box_data( $post_id ) {

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if ( !isset( $_POST['wdm_meta_box_nonce'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( !wp_verify_nonce( $_POST['wdm_meta_box_nonce'], 'wdm_meta_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( !current_user_can( 'edit_post', $post_id ) ) {
        return;
    }


    // Sanitize user input.
    $new_meta_value = ( isset( $_POST['Position'] ) ? sanitize_html_class( $_POST['Position'] ) : '' );

    // Update the meta field in the database.
    update_post_meta( $post_id, 'position', $new_meta_value );

}

add_action( 'save_post', 'wdm_save_meta_box_data' );//Phân trang

// Tính ra thứ từ ngày/tháng/năm
function get_day_weekday($weekday = null, $date)
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $weekday = strtolower($weekday);
    switch ($weekday) {
        case 'monday':
            $weekday = 'Thứ 2';
            break;
        case 'tuesday':
            $weekday = 'Thứ 3';
            break;
        case 'wednesday':
            $weekday = 'Thứ 4';
            break;
        case 'thursday':
            $weekday = 'Thứ 5';
            break;
        case 'friday':
            $weekday = 'Thứ 6';
            break;
        case 'saturday':
            $weekday = 'Thứ 7';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    return $weekday . ', ' . $date;
}

//Year
function year_meta_box()
{
    add_meta_box( 'year', 'Năm', 'year_output', 'post' );
}
add_action( 'add_meta_boxes', 'year_meta_box' );
/**
Khai báo callback
@param $post là đối tượng WP_Post để nhận thông tin của post
 **/
function year_output( $post )
{
    $year = get_post_meta( $post->ID, 'year', true );
    // Tạo trường
    echo ('<input type="text" id="year" name="year" value="'.esc_attr( $year ).'" />');
}

/**
Lưu dữ liệu meta box khi nhập vào
@param post_id là ID của post hiện tại
 **/
function year_save( $post_id )
{
    $year = sanitize_text_field( $_POST['year'] );
    update_post_meta( $post_id, 'year', $year );
}
add_action( 'save_post', 'year_save' );

// Resize large thumb
function large_img_thumb($post_id)
{
    $avatar = get_post_thumb($post_id, 630, 420);
    if (empty($avatar)){
        $avatar = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
    }
    $img = $avatar['src'];
    return $img;
}

//Resize average image
function img_thumb($post_id)
{
    $avatar = get_post_thumb($post_id, 320, 240);
    if (!empty($avatar) && $avatar != null){
        $img = $avatar['src'];
    }else{
        $img = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
    }
    return $img;
}

//Resize average photo
function img_thumb_2($post_id)
{
    $avatar = get_post_thumb($post_id, 320, 240);
    if (!empty($avatar) && $avatar != null){
        $img = $avatar['src'];
    }else{
        $img = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
    }
    return $img;
}

//Resize average image
function img_thumb_news($post_id)
{
    $avatar = get_post_thumb($post_id, 400, 552);
    if (!empty($avatar) && $avatar != null){
        $img = $avatar['src'];
    }else{
        $img = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
    }
    return $img;
}
// Resize to small image
function small_img_thumb($post_id)
{
    $avatar = get_post_thumb($post_id, 90, 60);
    if (empty($avatar)){
        $avatar = get_template_directory_uri() . "/assets/images/icon/noavatar.png";
    }
    $img = $avatar['src'];
    return $img;
}

add_action( 'pre_get_posts', function( $query ) {

    // Check that it is the query we want to change: front-end search query
    if( $query->is_main_query() && ! is_admin() && $query->is_search() ) {

        // Change the query parameters
        $query->set( 'posts_per_page', 12 );

    }

} );