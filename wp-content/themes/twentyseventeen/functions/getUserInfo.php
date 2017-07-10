<?php
require '../../../../wp-blog-header.php';

try {
    $id = $_REQUEST['id'];
    global $wpdb;
    $result = $wpdb->get_results("SELECT * FROM wp_posts WHERE `id` = $id");
    $item = $result[0];
    $fullname = $item->post_title;
    $content = $item->post_content;
    $title = get_metadata('post', $id, $key = 'description', $single);
    $position = get_metadata('post', $id, $key = 'position', $single);
    $categories = get_the_category($id);
    if ($position == 'tong_giam_doc') {
        $position = 'Tổng giám đốc Eyeplus Media';
    } elseif ($position == 'pho_tong_giam_doc') {
        $position = 'Tổng giám đốc Eyeplus Online';
    } elseif ($position == 'giam_doc') {
        $position = 'Giám đốc';
    } elseif ($position == 'pho_giam_doc') {
        $position = 'Phó giám đốc';
    } elseif ($position == "truong_phong") {
        $position = 'Trưởng phòng';
    } elseif ($position == 'pho_phong') {
        $position = "Phó phòng";
    } elseif ($position == 'truong_nhom') {
        $position = 'Trưởng nhóm';
    } elseif ($position == 'nhan_vien') {
        $position = 'Nhân viên';
    }

    foreach ($categories as $category) {
        if ($category->term_id === 16)
        {
            $team = 'Kế toán trưởng';
            $position = $team;
        }else{
            if ($category->parent != 0) {
                $team = $category->name;
                $position = $position . ' ' . $team;
            }
        }
    };


    $avatar = img_thumb($id);
    $facebook = get_metadata('post', $id, $key = 'facebook', $single);
    $email = get_metadata('post', $id, $key = 'email', $single);
    $phone = get_metadata('post', $id, $key = 'phone', $single);
    $list = array(
        'fullname' => $fullname,
        'position' => $position,
        'content' => $content,
        'title' => $title,
        'avatar' => $avatar,
        'facebook' => $facebook,
        'email' => $email,
        'phone' => $phone,
    );
    $response = json_encode($list);
    echo $response;
} catch (Exception $e) {
    var_dump($e->getMessage());
}

