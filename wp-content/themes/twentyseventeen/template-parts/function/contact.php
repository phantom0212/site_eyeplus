<?php
/**
 * Created by PhpStorm.
 * User: The Vinh
 * Date: 27-Apr-17
 * Time: 10:34 AM
 */

try {
    $data = $_POST["data"];
    var_dump($data);
    $name = $_GET['name'];

} catch (Exception $e) {
    var_dump($e->getMessage());
}
