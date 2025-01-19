<?php
echo '<pre>'; //    Thẻ HTML làm đẹp, căn chỉnh chữ, ký tự

//   Đặt tên biến
$customerName;
$customerDetailEmail;

//   Gán biến
$customer1 = "Thế Anh đẹp trai";                    // Chuỗi trong dấu nháy kép
$customerDetailEmail1 = 'theanhdev369@gmail.com';   // Chuỗi trong dấu nháy đơn
$myFullName = 'Nguyễn Thế Anh';
$myAge = 20;
$customerAge = 21;

//   In dữ liệu
echo $customer1;
echo '<br>';
echo $customerDetailEmail1;
echo '<br>';

//   Biến thay đổi giá trị sau ghi gán và nhận kết quả sau cùng
echo $customerAge;
echo '<br>';
$customerAge = 22;
echo $customerAge;
echo '<br>';

//  In chuỗi nhưng không thông qua biến
echo "Thế Anh tự học lại lập trình";
echo '<br>';
echo $myFullName;
echo '<br>';
echo $myAge;
echo '<br>';

//  In ra số không thông qua biến
echo "24/11/";
echo 2024;
echo '<br>';

//   Ghi chú trên 1 dòng
//   Ghi chú trên 1 dòng

/**
 * Ghi chú dòng 1
 * Ghi chú dòng 2
 */

 //  Trả về kiểu dữ liệu và độ dài của chuỗi và giá trị của biến
var_dump($customerAge);

//  Không trả về kiểu dữ liệu và độ dài, thường dùng để in mảng[array] và đối tượng{object}
$arr = array('xin chào', 'hello', 'world');
print_r($arr);

