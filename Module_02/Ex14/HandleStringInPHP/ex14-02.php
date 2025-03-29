<?php
/**
 * Các hàm xử lý chuỗi trong php
 */

$str0 = 'Trung tâm đào tạo lập trình "Unicode"';
// ---- Xử lý chuỗi----- //

// 1.   Thêm ký tự escape vào trước các ký tự mong muốn
//      addcslashes($str, $listChar)
$str1 = addcslashes($str0, 'Ul"');
echo $str1;
echo "<br>";

// 2.  Thêm escape (\) phía trước các ký tự ", ', \,
$str2 = 'Trung tâm đào tạo lập trình "Unicode"';
$str22 = addslashes($str2);
echo $str22;
echo "<br>";

//  3.  Hàm này sẽ xoá bỏ các ký tự escape (\) trong chuỗi
$str3  = stripslashes($str0); //  Loại bỏ, xoá các ký tự escape có trong chuỗi(vd: chuỗi $str, $str1)
$str33 = stripslashes($str1);
echo $str3;
echo "<br>";
echo $str33;
echo "<br>";

//  4.  Chuyển chuỗi thành mảng
$str3 = 'Trung tâm đào tạo lập trình Unicode';
$arr  = explode(' ', $str3);

print_r($arr);
echo "<br>";

//  5.  Chuyển mảng thành chuỗi
//  Ví dụ 1:
$str4 = implode(' ', $arr);
echo $str4;
echo "<br>";
//  Ví dụ 2:
$arrToString = [
    'Name',
    'Id',
    'Address',
];
$str5 = implode('-', $arrToString);
echo $str5;
echo "<br>";

//  6.  Lấy độ dài của chuỗi
//  Ví dụ 1:
$str6 = '123';
$length = strlen($str6);
echo 'Độ dài là: ' . $length;
echo '<br>';
//  Ví dụ 2:
$str66 = 'Trung tâm Unicode';
$length1 = strlen($str66);
echo 'Độ dài của chuỗi 2 là: ' . $length1;
echo '<br>';

//  7.  Lấy số chữ trong chuỗi  
//  Hàm này trả về số chữ trong chuỗi
//  str_word_count($str, 0, $charlist); 

//  Nếu có các tham số được liệt kê cụ thể trong charlist thì
//  hàm sẽ không coi ký tự Tiếng Việt đó là dấu tách từ nữa, mà sẽ được coi là 1 từ duy nhất
//  Có : => không tính, gộp chung

//  Nếu không có tham số thứ 3 liệt kê các ký tự tiếng việt, hàm sẽ tự động hiểu,
//  coi ký tự đó như dấu tách từ và tách từ đó thành 2 phần.  
//  Không có: => tính ,tách riêng

//  Dựa vào ký tự tiếng Việt đặc biệt để biết là có bao nhiêu chữ
//  Keyword: dấu tách từ
//  Ví dụ 1:    
$str7 = 'Xin chao Unicode';
$wordCount = str_word_count($str7);
echo "Số chữ là: " . $wordCount;
echo '<br>';

//  Ví dụ 2:
$str77 = 'Xin chào Unicode'; //  Chữ à là ký tự tiếng Việt, sẽ tách ra và số chữ của chuỗi là 4
$wordCount = str_word_count($str77);
echo "Số chữ là: " . $wordCount;
echo '<br>';

//  Ví dụ 3:     à      ấ      ả    á    ạ     h
$str777 = "Xin ch  o  t   t  c    c  c  b  n  n  é, hihi";
// Xin, ch,ào(à là dấu tách từ => o)
// t
$wordCount1 = str_word_count($str777);
echo "Số chữ có trong chuỗi là: " . $wordCount1;
echo '<br>';

