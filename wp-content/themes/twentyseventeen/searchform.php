<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="form-control" name="s" value="<?php echo get_search_query(); ?>" placeholder="Thông tin cần tìm kiếm"/>
    <input type="hidden" value="post" name="post_type" id="post_type" />
    <button type="submit" class="btn btn-search"><i class="fa fa-search" aria-hidden="true"></i>
    </button>
</form>
