<?php
$i = 1;
$i = 11;//     Chạy trước mới kiểm tra, ngược lại với vòng lặp while
do {
echo $i.'<br>';
$i++;     
} while ($i <= 10);
echo '<br>';

/**
 * Ví dụ:
 * Tính tổng: S = 1/2 + 1/4 + 1/6 + ... + 1/n
 * Điều kiện: 1/n < 0.0001
 */


$total = 0;
$i = 2;
do {
     $total += 1/$i;
     $i+= 2;
} while (1/$i >= 0.0001);//   Điều kiện
echo 'Tổng bằng: '.$total.'<br>';

//   Nếu đk đúng thì vẫn sẽ chạy như while, còn điều kiện sai sẽ chạy 1 lần.
