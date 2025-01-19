<?php
    /**
     * 1.   Toán tử 3 ngôi
     * 2.   Cú pháp thay thế if
     * 3.   Cú pháp thay thế for
     * 4.   Cú pháp thay thế while
     * 5.   Cú pháp thay thế foreach
     */

    // Ví dụ 1:
    // Viết if đầy đủ
    $number = 10;
    //  $number = 11;

    if ($number == 10) {
        echo "Bạn đã đủ tuổi";
    } else {
        echo "Bạn không đủ tuổi";
    }
    echo '<br>';

    // 1.  Toán tử 3 ngôi
    // Cách thay thế cho các câu lệnh rẽ nhánh if đơn giản

    echo $number == 10 ? 'Bạn đủ tuổi' : 'Bạn không đủ tuổi'; //    Echo

    $printStr = $number == 10 ? 'Bạn đủ tuổi' : 'Bạn không đủ tuổi'; //    Gán
    echo '<br>';
    var_dump($printStr);

    /**
     * Cú pháp:
     * bieu_thuc_dieu_kien?ket_qua_dung:ket_qua_sai
     *
     * -   Lưu ý:
     * Toán tử 3 ngôi phải gắn với 1 biểu thức (Gán, echo)
     * Luôn luôn phải có kết quả sai
     * (Nếu không muốn hiển thị để là false, null, trống ('') )
     */
    echo '<br>';

    $printStr = $number == 11 ? 'Bạn đủ tuổi' : false;
    var_dump($printStr); //   Bool(false)

    // 2. Cú pháp thay thế câu lệnh if
    // Ví dụ 2:

    // Trường hợp 1:
    if ($number == 10) {
    ?>
      <h3>Tiêu đề 1<h3>
      <h4>Tiêu đề 1<h4>
      <p> Nội dung đoạn văn</p>
   <?php
       } else {
       ?>
   <p>Không hợp lệ<p>
   <?php
       }
       //  Áp dụng trường hợp đóng mở php nhiều lần (html)

       // Trường hợp 2:
       if ($number == 10):
   ?>
      <h3>Tiêu đề 1</h3>
      <h4>Tiêu đề 2</h4>
      <p>Nội dung đoạn văn</p>
   <?php
       else:
   ?>
      <p>Không hợp lệ !</p>
   <?php
       endif;

   // Kết hợp dùng dấu : với từ khoá else, endif để thay thế dấu {}