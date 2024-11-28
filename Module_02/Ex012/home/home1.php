<?php 

$path_dir = __DIR__;
echo $path_dir;
echo '<br>';
$path_file = __FILE__;
echo $path_file;
echo '<br>';

$path_dir = __DIR__ . '/../includess';
echo $path_dir;
echo '<br>';

$path_dir . '/header.php';
echo 'Đây là trang header home';

require_once $path_dir . '/header.php';

require_once $path_dir . '/content.php';

require_once $path_dir . '/footer.php';

/**
 * Inclue, include_once => Nếu lỗi => Chương trình phía dưới vẫn chạy
 * Require, Require_Once => Nếu lỗi => Chương trình dừng chạy
 */