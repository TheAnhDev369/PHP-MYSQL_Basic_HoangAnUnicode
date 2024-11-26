<?php
//   Xét dựa vào điều kiện
//   Điều kiện chỉ chạy khi đúng, còn sai thì không chạy
$number = 1;
if ($number > 0) {
    echo $number . ' là số nguyên dương' . '<br>';
}
var_dump($number > 0);
echo '<br>';

$number = -1;
if ($number > 0) {
    echo $number . ' là số nguyên dương';
}
var_dump($number > 0);
echo '<br>';

$number = 11;
$check = $number > 0; // if ($check == true)
if ($check) {
    echo $number . ' là số nguyên dương';
}

echo '<br>';
//   Nếu chỉ có 1 câu lệnh thì không cần ngoặc
//   Nhưng nếu có từ 2 câu lệnh trở lên sẽ đặt trong cặp ngoặc {} để nhóm lại các câu lệnh
//   Nếu không sẽ chỉ chạy câu đầu tiên

//   Luôn dùng ngoặc để giúp code dễ đọc, giảm rủi ro khi chạy câu lệnh mới
//   Ngoại lệ: trong các khối lệnh ngắn và đơn giản, chỉ có 1 câu lệnh

//   Cấu trúc if_else
//   Câu lệnh if đầy đủ(cả 2 trường hợp)
//   Kiểm tra cả điều kiện đúng và điều kiện sai
$number = 0;
// $number = -1;
if ($number > 0) {
    echo $number . ' là số nguyên dương';
    echo '<br>';
} else {
    echo $number . ' không phải là số nguyên dương';
    echo '<br>';
}
//   Kiểu tra biểu thức xem kết quả trả về là true hay false
//   Nếu là true thì chạy câu lệnh trong if
//   Còn ngược lại là false thì chạy câu lệnh trong else ($number <= 0)

$number = -1;
$number = 0;
$number = 3;
$number = 11;
$number = 20;

//   Cấu trúc if else kết hợp
/**
 * Nếu < 0               => số âm
 * Nếu = 0               => Số 0
 * Nếu > 0 và <= 5       => Số nhỏ
 * Nếu > 5 và <= 10      => số trung bình
 * Nếu > 10 và <= 15     => số lớn
 * Nếu > 15              => số cực lớn
 */
//   Cách này để xét nhiều trường hợp khác nhau trong 1 logic tuyến tính, điều này có nghĩa là các điều kiện loại trừ lẫn nhau, nghĩa là chỉ có 1 điều kiện sẽ được thực thi
if ($number < 0) {
    echo $number . ' là số âm';
} elseif ($number == 0) {
    echo $number . ' là số không';
} elseif ($number > 0 && $number <= 5) {
    echo $number . ' là số nhỏ';
} elseif ($number > 5 && $number <= 10) {
    echo $number . ' là số trung bình';
} elseif ($number > 10 && $number <= 15) {
    echo $number . ' là số lớn';
} else {
    echo $number . ' là số cực lớn';
}

//   Tách riêng từng if độc lập, điều này hợp lý nếu các điều kiện không liên quan đến nhau hoặc có thể cùng xảy ra
//   Có thể dùng cách này cũng được, tuy nhiên phải xét rất nhiều trường hợp
if ($number < 0) {}
if ($number == 0) {}
echo '<br>';

//  Cấu trúc if_else lồng nhau
$number = -2;
if ($number > 0) { //   Điều kiện cha
    if ($number >= 21) { //    Điều kiện con
        echo 'Thoả mãn điều kiện';
    } else {
        echo 'Không thoả mãn điều kiện (else con))';
    }
} else {
    echo 'Không thoả mãn điều kiện (else cha)';
}

/**
 * Trường hợp 1: $number = 10
 * 1.     Điều kiện cha: $number = 10 > 0 => đúng => tiếp tục xét điều kiện trong if con
 * 2.     Điều kiện con: $number >= 21 (10 > -21) => đúng => In ra thoả mãn điều kiện)
 * Kết luận:
 * Chương trình kết thúc mà không thực hiện bất kỳ khối else nào.
 *
 * Trường hợp 2: $number = 10, thay đổi điều kiện con: if($number = 21 )
 * 1.     Điều kiện cha: $number = 10 > 21 => sai => Thực hiện khối else cuả điều kiện con
 * 2.     Vì điều kiện cha đúng, khối else cah không được thực thi
 * Kết luận:
 * Vì điều kiện cha đúng, khối else cha sẽ không được thực hiện
 *
 * Trường hợp 3: $number = -2
 * 1.     Điều kiện cha: $number = -2 > 0 => sai => bỏ qua điều kiện con và thực hiện khối else của điều kiện cha
 * Kết luận:
 * Điều kiện con không được xét vì điều kiện cha sai
 */
