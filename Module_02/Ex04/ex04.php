<?php
//   Nháy đơn hay kép đều có tác dụng để định nghĩa hằng
//   Giá trị của hằng số nhận tất cả các kiểu dữ liệu

define('WEB_ROOT', 'https://online.unicode.vn');
// define('WEB_ROOT', 'https://online.unicode.vn'); Constant WEB_ROOT already defined
echo WEB_ROOT;
echo '<br>';

const _WEB_PATH_ROOT = "C:/xampp/htdocs";
echo _WEB_PATH_ROOT;
echo '<br>';

$checkDefine = defined('_WEB_PATH_ROOT'); // Hàm defined kiểm tra 1 biến có phải hằng số hay không, nếu đúng trả về true, sai trả về false. 
var_dump($checkDefine);
echo '<br>';
