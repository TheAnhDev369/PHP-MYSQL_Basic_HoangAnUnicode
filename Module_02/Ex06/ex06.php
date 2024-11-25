<?php
echo '<pre>';
/*Biểu thức - Toán tử*/
$a = 1;
$b = 5;
$total = $a + $b + 10; // Biểu thức $a + $b + 10
//   $a, $b, 10, $total: Toán hạng
//   +, = là Toán tử

/*Toán tử gán*/
$age = 30; //   Cú pháp: $ten_bien = gia_tri;
$fullName = 'Nguyễn Thế Anh';
const _WEB_HOST_ROOT = 'https://online.unicode.vn'; //ten_hang = gia_tri
echo $age;
echo '</br>';
echo $fullName;
echo '</br>';
echo _WEB_HOST_ROOT;
echo '</br>';

//   Toán tử .=

//   Nối biến với chuỗi
$outputStr = 'Học lập trình';
// echo $outputStr;
// echo '</br>';
// $outputStr = $outputStr . ' PHP tại Unicode';
// echo '</br>';
// echo $outputStr;
// echo'</br>';

// Cách viết khác nối biến với chuỗi bằng toán tử .=
$outputStr .= ' PHP tại Unicode';
$outputStr.= ' miễn phí';
echo $outputStr;
echo'</br>';

//   Toán tử số học
//-  Toán tử cộng (+)
$a = 10;
$b = 20;
$total = $a+$b;
$total.=  ' là kết quả của biểu thức a + b';
echo $total;
echo'</br>';

//-  Toán tử trừ (-)
$a = 20;
$b = 10;
$result = $a - $b;
$result .= ' là kết quả của biểu thức a - b';
echo $result;
echo'</br>';

//-  Toán tử nhân (*)
$a = 5;
$b = 10;
$result = $a * $b;
$result .= ' là kết quả của biểu thức a * b';// Nhân là * thay vì x, nếu dùng x để nhân PHP sẽ không hiểu
echo $result;

//-  Toán tử chia (/)
$a = 20;
$b = 10;
$result = $a / $b;
$result .= ' là kết quả của biểu thức a / b';
echo $result;
echo '</br>';

//-  Chia lấy phần dư
$a = 15; 
$b = 10;
$result = $a % $b;
$result .= ' là kết quả của biểu thức a % b';
echo $result;
echo '</br>';

//-  Toán tử luỹ thừa (**)
$a = 2;// Cơ số
$b = 3;// Số mũ
$result = $a ** $b;
$result .= ' là kết quả của biểu thức a ** b';
echo $result;
echo '<br><br>'; 


//   Toán tử tăng 1 đơn vị (++)
// $count = 0;
// $count = $count + 1;
// $count = $count + 1;
// echo $count;
// echo '<br>';
// Thay vì viết như trên ta có thể sử dụng ++ để tăng lên và gán luôn để rút gọn biểu thức


//-  Ví dụ 1:
$count = 0;
$count++;
$count .= ' là kết quả của ví dụ 1';
echo $count;// Kết quả là 1
echo '<br>'; 

//-  Ví dụ 2:
$count = 0;
++$count;
$count .= ' là kết quả của ví dụ 2';
echo $count;

echo '</br>';// Kết quả cũng là 1

// Cả 2 ví dụ 1 và 2 đều có kết quả giống nhau

//-  Sự khác nhau giữa ++$ten_bien và $ten_bien++

//   Trường hợp 1: Dùng(gán) trước, cộng sau
$count = 0;
$result = $count++;// $result = $count; $count = $count + 1
echo 'Result: '.$result.'</br>';   // Lấy giá trị ban đầu của $count = 0 gán cho $result trước
echo 'Count: '.$count.'</br>';     // rồi sau đó mới tăng $count lên 1
echo '</br>';

//   Trường hợp 2: Cộng trước, dùng(gán) sau
$count = 2;
$result = ++$count;// $count = $count + 1; $result = $count
echo 'Count: '.$count.'<br>';      // Lấy giá trị ban đầu của $count = 2 cộng trước với 1 (2+1=3) và tăng $count lên 3 luôn,
echo 'Result: '.$result.'<br>';    // sau đó mới gán giá trị mới (3) cho result

echo '<br>';   


//   Toán tử giảm 1 đơn vị (--)
//   Gán trước, trừ sau
// $result = $count; $count = $count - 1
//-  Ví dụ 3:
$count = 10;
$result = $count--;
echo 'Result: '.$result.'<br>';
echo 'Count: '.$count.'<br>';
echo '<br>';


//   Trừ trước, gán sau
// $count = $count - 1; $result = $count
//-  Ví dụ 4:
$count = 10;
$result = --$count;
echo 'Count: '.$count.'<br>';
echo 'Result: '.$result.'<br>';
echo '<br>';