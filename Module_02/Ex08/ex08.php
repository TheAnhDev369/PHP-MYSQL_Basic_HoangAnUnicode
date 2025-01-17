<?php
for ($i = 0; $i < 10; $i++) { // Qua mỗi 1 lần sẽ tăng lên 1
    echo $i;
}
//   Vòng lặp chạy khi biến đó thoả mãn điều kiện đúng
//   Biểu thức tăng sẽ tăng biến qua mỗi 1 lần lặp và so sánh với điều kiện đúng
//   Khi nào biểu thức điều kiện đúng sai thì nó sẽ dừng
echo '<hr>';

//   Xác định số lần lặp
$count = 20;
//   Xác định giá trị ban đầu
$start = 1;

//   Vòng lặp for tăng
// $i là biến chạy
// $i = 1: giá trị bắt đầu
//   Điều kiện để vòng lặp tiếp tục chạy: $i <= 10
// Biểu thức tăng
//   Nếu không có biểu thức tăng thì vòng lặp sẽ treo do chạy vô hạn
for ($i = $start; $i <= $count; $i++) {
    echo 'Đây là vòng lặp: ' . $i . '<br>';
}
echo '<hr>';

//   Không phải lúc nào biểu thức $i++ cũng chỉ tăng lên 1, ngoài ra còn có tăng lên 2 hoặc nhiều đơn vị
for ($i = $start; $i <= $count; $i += 2) {
    echo 'Đây là vòng lặp: ' . $i . '<br>';
}
echo '<hr>';
//   Khi nào nên dùng dấu bằng, khi nào bỏ dấu bằng => phụ thuộc vào bài toán, xác định lặp bao nhiêu lần

//-  Ví dụ:    Tính tổng S = 1+2+3+4+5=6+7 ... +n (Không xác định trước n)

$n = 5;
$s = 0; // Giả định bằng 0
for ($i = 1; $i <= $n; $i++) {
    $s += $i; //    Tương đương //S=S+i
}
echo 'Tổng S = ' . $s;

//   Khó tính toán nếu không có vòng lặp for
//   Chỉ tính toán dễ dàng khi biết trước được $n hay số hạng cuối trên dãy số cần tính tổng
/**
 * S = 0
 * i = 1  => S = S + i = 0 + 1 = 1
 * i = 2  => S = S + i = 1 + 2 = 3
 * i = 3  => S = S + i = 3 + 3 = 6
 * i = 4  => S = S + i = 6 + 4 = 10
 * i = 5  => S = S + i = 10 + 5 = 15
 */
echo '<hr>';

/**Vòng lặp for giảm */
$n = 6;
for ($i = $n; $i >= 1; $i--) {
    echo 'Đây là vòng lặp thứ: ' . $i . '<br>';
}
/**
Ta có $n = 6

Bắt đầu: - $i = $n = 6 => $i = 6(giá trị ban đầu)
Kiểm tra điều kiện: $i >= 1.
Nếu đk đúng, in ra giá trị $i và giảm $i đi 1 đơn vị ($i--)
Lặp từng bước
L1: - $i = 6, đk $i >= 1, in ra và giảm $i => 6 - 1 = 5
L2: - $i = 5, đk $i >= 1, in ra và giảm $i => 5 - 1 = 4
L3: - $i = 4, đk $i >= 1, in ra và giảm $i => 4 - 1 = 3
L4: - $i = 3, đk $i >= 1, in ra và giảm $i => 3 - 1 = 2
L5: - $i = 2, đk $i >= 1, in ra và giảm $i => 2 - 1 = 1
L6: - $i = 1, đk $i >= 1, in ra và giảm $i => 1 - 1 = 0
Kết thúc: Khi $i = 0, điều kiện $i >= 1 sai, vòng lặp dừng
 */
