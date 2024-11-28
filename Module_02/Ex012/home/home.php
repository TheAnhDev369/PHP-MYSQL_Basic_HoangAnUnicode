<?php 
/**
 * Thứ tự import
 * - HEADER
 * - CONTENT
 * - FOOTER
 */
/**
 * Cú pháp include
 * include 'path_to_php_file
 * include ('path_to_php_file')
 */
// $path_dir = __DIR__ . '/includes';
$path_dir = __DIR__ . '/../includes'; //     Thêm // /../ để ra kết quả mong muốn sau khi di chuyển file home vào thư mục home, nếu không có sẽ không nhận diện được và gây lỗi
//   Back bằng /.. để nó ra ngoài và ngang hàng với file được import để chạy đúng
echo $path_dir;//   Path tuyệt đối

//Path tương đối ứng với thư mục project
//$path_dir = 'includes'; //   Điều kiện: file trong được folder được include vào fdc và file đang chạy phải nằm cùng cấp thư mục


//   Import 3 file header,content,footer
include $path_dir . '/header.php';
// include $path_dir . '/header.php';// Hoạt động bình thường
include_once $path_dir . '/header.php'; //   Chỉ import đúng 1 lần(trường hợp trùng file), còn khác file thì vẫn import bình thường
echo 'Đây là nội dung thêm của file home header';//Nội dung thêm của file home

include $path_dir . '/content.php';
echo 'Đây là nội dung thêm của file home content';//Nội dung thêm của file home

include $path_dir . '/footer.php';
echo 'Đây là nội dung thêm của file home footer';//Nội dung thêm của file home
