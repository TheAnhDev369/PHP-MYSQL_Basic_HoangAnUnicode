<?php
/**
 * 1.     Hiển thị số chẵn, số lẻ trong dãy số từ 1,2,3,4,5, ... 100
 */

$startIndex = 1;
$endIndex = 100;
// $endIndex = 1;

$resultEven = null; //   Số chẵn
$resultOld = null; //    Số lẻ

$evenCount = 0; //   Đếm số chẵn
$oldCount = 0; //    Đếm số lẻ

for ($index = $startIndex; $index <= $endIndex; $index++) {
    //   Kiểm tra số chẵn
    if ($index % 2 == 0) {
        // echo $index. ' là số chẵn </br>';
        $resultEven .= $index . ' ';
        $evenCount++;
    } else {
        // echo $index. ' là số lẻ </br>';
        $resultOld .= $index . ' ';
        $oldCount++;
    }
}

if ($evenCount > 0) {
    echo 'Tìm thấy ' . $evenCount . ' số chẵn: ' . $resultEven . '<br>';
} else {
    echo 'Không tìm thấy số chẵn <br>';
}
echo '<br>';
echo '<hr>';

if ($oldCount > 0) {
    echo 'Tìm thấy ' . $oldCount . ' số lẻ: ' . $resultOld . '<br>';
} else {
    echo 'Không tìm thấy số lẻ <br>';
}

// Biến để lưu lại tất cả số chẵn và số lẻ
// echo 'Tìm thấy '.$oldCount.' số chẵn: ' . $resultOld . '<br>';
// echo 'Tìm thấy '.$evenCount.' số chẵn: ' . $resultEven . '<br>';

