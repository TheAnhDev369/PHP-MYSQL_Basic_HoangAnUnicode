<?php
for ($i = 0; $i <= 10; $i++) {
    echo $i . '<br>';
    //   Đến 5 thoát luôn thay vì đến 10
    if ($i == 5) {
        break; //  Thoát khỏi vòng lặp khi thoả mãn điều kiện
//     Break chỉ có tác dụng trong vòng lặp hoặc trong switch case
    }
}
echo '<br>';
// exit;
for ($i=1; $i <=10 ; $i++) { 
     //   Giả xử khi không muốn xử lý ở vòng lặp số 2, ta có thể dùng 2 cách
     //   C1:br
     if ($i == 5) continue;// Bỏ qua vòng lặp
     echo $i.'<br>';
}
// die; //   Tất cả những gì bên dưới nằm dưới exit hoặc die , chương trình sẽ không chạy và bỏ qua
echo '<br>';
echo '<p>Học lập trình PHP </p>';

// die('Kết thúc die');//  Truyền dưới dạng hàm 1 message là thông báo: 
// exit('Kết thúc với exit');

//   Bản chất: cả exit và die đều có chức năng giống nhau
/**
 * Sự khác nhau :
 * Exit có nguồn gốc từ ngôn ngữ lập trình C+
 * Die có nguồn gốc từ ngôn ngữ lập trình Perl
 * Dùng nhiều để debug
 */
?>
<!-- <h1>Học lập trình</h1> -->