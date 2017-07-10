<?php
require '../../../../wp-blog-header.php';
    global $wpdb;
try {
    $year = isset($_POST['year'])?$_POST['year']:"";
    $result = $wpdb->get_results("SELECT p.post_title, p.id,
       p.post_content,
       m.meta_value, 
       m.meta_key 
FROM   wp_posts p 
       JOIN wp_postmeta m 
         ON p.id = m.post_id WHERE  m.meta_key = 'year' AND m.meta_value = $year ;");
    $list= [];
    foreach ($result as $item) {
        if(!empty($item) && $item != null){
            $title = !empty($item->post_title)?$item->post_title:'';
            $content = !empty($item->post_content)?$item->post_content:'';
            $post_id = $item->id;
            $avatar = get_the_post_thumbnail($post = $post_id, $size = 'post-thumbnail', $attr = '');
            $list[] = array(
                'title' => $title,
                'content' => $content,
                'post_id' => $post_id,
                'avatar' => $avatar
            );
        }

    }
    if(!empty($list)){
        $response = json_encode($list);
        echo $response;
    }
die;
} catch (Exception $e) {
    var_dump($e->getMessage());
}
