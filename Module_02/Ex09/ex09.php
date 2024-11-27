<?php 
/**Biểu diễn vòng lặp for bằng vòng lặp while */
$i = 1;// 
$i = 11;// Biểu thức ngay ban đầu mà sai thì sẽ bỏ qua phần vòng lặp
while ($i<=5){//   Gán giá trị ban đầu
     echo 'Vòng lặp thứ: '.$i.'<br>';
     $i++;//   Xử lý điều kiện thoát vòng lặp
}
//   Nếu điều kiện đúng thì nó cứ kiểm tra vòng lặp và nó chạy

/** Ban đầu
 * $i = 0; => Kiểm tra đúng => Chạy vòng lặp => $i = 1
 * $i = 1; => Kiểm tra đúng => Chạy vòng lặp => $i = 2
 * $i = 2; => Kiểm tra đúng => Chạy vòng lặp => $i = 3
 * $i = 3; => Kiểm tra đúng => Chạy vòng lặp => $i = 4
 * $i = 4; => Kiểm tra đúng => Chạy vòng lặp => $i = 5
 * $i = 5; => Kiểm tra đúng => Chạy vòng lặp => $i = 6
 * $i = 6; => Kiểm tra sai => Dừng vòng lặp => $i sẽ không bằng 7 nữa
 **/

 /**Ví dụ tính tổng: S = 1+2+3+5+6+...+N */
$n =  10;//    
$i = 1;// Biến chạy gán = 1
$total = 0; // Giả định bằng 0
while ($i <= $n) {
     // $i++;//   Sai kết quả
     $total += $i;
     $i++;//   Đúng kết quả

     //   => Thứ tự của biến tăng cũng rất quan trọng
}
echo 'Tổng = '. $total. '<br>';
echo '<br>';

$n = 10;
$i = 0;
$total = 0;
while ($i < $n) {
     $i++;
     $total += $i;
}
echo 'Tổng = '. $total. '<br>';

/**Tính tổng S = 1/2 + 1/4 + 1/6 + ... + 1/N 
 * Điều kiện: 1/n < 0.0002
*/
$total = 0;//  Giả định tổng = 0
$i = 2;// Giả định biến tnagw
while (1/$i >= 0.0001) {
     $total += 1/$i;
     $i+=2;
} 
echo 'Tổng = ' . $total;

/**
 * Đặc điểm: 
 * Những bài toán viết bằng vòng lặp for thì đều chuyển được thành while
 * Nhưng những bài toán viết bằng while thì chưa chắc viết lại được bằng for
 */
