<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 18/09/2018
 * Time: 22:28
 */

require "../product_adapter.php";


$category_id = $_GET['id'];


deleteCategory($category_id);
header('Location: http://localhost/BaiTap/Cau_truy_van/Ung_dung_QL_thu_vien/');
exit();