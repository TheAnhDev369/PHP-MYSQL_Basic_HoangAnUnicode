<?php 

/**
 * 2. Tinh giai thừa của 1 số và hiển thị kết quả
 * Input: Nhập vào số N
 * Output: Hiển thị kết quả của N!
 *
 * Công thức: N! = 1*2*3*..*N (N>0)
 */

 $n = -1;
 if ($n > 0) {
     //   Xử lý tính giai thừa
 
     // Giá trị giữ chỗ ban đầu, giả định = 1
     $result = 1;
     for ($index = 1; $index <= $n; $index++) {
         $result *= $index; // $result = $result * index, 
         // 1 x 1 = 1
         // 1 x 2 = 2
         // 2 x 3 = 6
         // 6 x 4 = 24
         // 24 x 5 = 120
     }
     echo $n . '!= ' . $result . '<br>';
 } else {
     echo $n . ' Không hợp lệ <br/>';
 }
 