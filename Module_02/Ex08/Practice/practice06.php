<?php
/**Vẽ tam giác sao với N dòng */
/**
 * Input: Số dòng N
 * Output: Tam giác vuông với N dòng
 */
echo 'Bài 6';
echo '<br>';
$n = 5;
for ($row = 1; $row <= $n; $row++) {
    // echo $n; // Output: 55555
    for ($col = 1; $col <= $row; $col++) {
        if ($col < $row) {
            echo '*';
        } else {
            echo $col;
        }
        // echo $col;  //OutputL: 12345
    }
    echo '<br>';
}
echo '<br>';
echo '<hr>';

echo 'Bài 7';
echo '<br>';

/**7.Vẽ tam giác sao đối xứng với N x 2 dòng**/

$n = 5;
for ($row = 1; $row <= $n; $row++) {
     // echo $n; // Output: 55555
     for ($col = 1; $col <= $row; $col++) {
         if ($col < $row) {
             echo '*';
         } else {
             echo '*';
         }
         // echo $col;  //OutputL: 12345
     }   
     echo '<br>';
}
for ($row = $n; $row >= 1; $row--) {
     // echo $n; // Output: 55555
     for ($col = 1; $col <= $row; $col++) {
         if ($col < $row) {
             echo '*';
         } else {
             echo '*';
         }
         // echo $col;  //OutputL: 12345
     }
     echo '<br>';
}
echo '<br>';
echo '<hr>';

echo 'Bài 8';
echo '<br>';
/*8.   Vẽ tam giác số tăng dần với N dòng*/
$n = 5;
$count = 0;
for ($row = 1; $row <= $n; $row++){
     for ($col = 1; $col <= $row; $col++){
          $count++;
          if ($col < $row){
               echo $count. ' ';
          }else {
               echo $count;
          }
     }
     echo '<br>';
};
