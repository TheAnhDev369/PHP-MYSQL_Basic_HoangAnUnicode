<?php

//   Nối biến cơ bản trong PHP
$bien1 = 'Thế Anh đẹp zai ';
$bien2 = '- Đào tạo PHP';
echo $bien1 . $bien2;
echo '<br>';

// Nối và hiển thị
$str1 = 'Đào tạo lập trình cơ bản';
$str2 = ' PHP';
echo $str1 . $str2;
echo '<br>';
echo $str1 . ' web với ngôn ngữ' . $str2;
echo '<br>';

//   Nối và gán
$str = $str1 . $str2;
echo $str;
echo '<br>';

//   Trường hợp 1:
//   Chuỗi sử dụng dấu nháy đơn
//   Kết luận:
//   Phải sử dụng dấu . để nối chuỗi,
//   đặt ở bên ngoài chuỗi sử dụng dấu nháy đơn thì mới
//   hiển thị đúng chuỗi cần nối với giá trị của biến(PHP) thay vì tên biến(str2)

//   Lỗi
$str = 'Lớp đào tạo lập trình str2';
echo $str;
echo '<br>';
//   Sửa
$str = 'Lớp đào tạo lập trình' . $str2;

//   Trường hợp
//   Chuỗi sử dụng dấu nháy kép
//   Kết luận:
//   Nếu nối chuỗi với biến mà dùng dấu nháy "" thì sẽ không cần sử dụng dấu .
//   (hay đưa luôn biến vào trong) .

//   Lỗi
//$str = "Lớp đào tạo lập trình  $str2tại Hà Nội" ; // hiểu $str2tại là 1 biến tahy vì $str2
echo $str;
echo '<br>';
//   Sửa
$str = "Lớp đào tạo lập trình {$str2} tại Hà Nội";
echo $str;
echo '<br>';

//   Nối chuỗi trong HTML
$url = 'https:://hoangan.net';
$imgUrl = 'https://tinyurl.com/mry942x5';
$htmpOutput =
    '<a href="' . $url . '">
     <img src="' . $imgUrl . '" width="200">
</a>';
echo $htmpOutput;
echo '<br>';

//   Nối chuỗi trong HTML với form
$authorUrl = 'https://hoangan.net/author/friends10';
$authorName = 'Thế Anh';
$postUrl = '#';
$entryPost = 'https://hoangan.net/wordpress/thu-thuat-wordpress';
$category = 'Category';
$dateTime = '24/11/2024';
$postMeta =
    '<ul class="post_meta">
               <li class="post_author">
                    <a href="' . $authorUrl . '">' . $authorName . '</a>
               </li>
               <!-- .post_author -->

               <li class="posted_date">
                    <a href="' . $postUrl . '">
                         <time class="entry-date published" datetime="2020-05-20T23:02:29+07:00">' . $dateTime . '</time>
                    </a>
               </li>

               <!-- .posted_date -->
               <li class="comments">
                    <a href="' . $postUrl . '">27</a>
               </li>
               <!-- .comments -->

               <li class="entry_cats">
                    <a href="' . $entryPost . '" rel="category">' . $category . '</a>
               </li>
               <!-- .entry_cats -->
     </ul>
     ';
echo $postMeta;

//   Nối số với chuỗi thì là chuỗi (1 số nối với 1 chuỗi thì sẽ ra 1 chuỗi)
$number = 10;
$string = ' điểm đào tạo cơ bản php';
$total = $number . $string;
// echo $total;
echo '<br>';
var_dump($total);

