<?php 
/**
 * 3. Kiểm tra một số có phải là số nguyên tố hay không và hiển thị kết quả 4
 * Input: Số nguyên n
 * Output: Hiển thị thông báo số N có phải số nguyên tố hay không?
 * 
 * Số nguyên tố: 
 * - Lớn hơn 1
 * - Chỉ chia hết cho 1 và chính nó
 * 
 * Giải thuật:
 * - Kiểm tra số N xem có lớn hơn 1 hay không
 * - Nếu số N lớn hơn 1:
 * + Dùng vòng lặp chạy từ 2 đến N-1
 * + Kiểm tra trong phạm vi từ 2 đến N-1 có chia hết cho số nào không ?
 * + Nếu có chia hết     => Kết luận: Không phải số nguyên tố
 * + Nếu không chia hết  => Kết luận: Là số nguyên tố
 * - Nếu số N nhỏ hơn hoặc bằng 1 => Thông báo không phải số nguyên tố.
 * */

// $n = 1;//     Số cần kiểm tra là các số lớn hơn 1
$n = -1;//     Nếu số $n <= 1, thì số đó không phải số nguyên tố .
if ($n > 1) {
     $check = true;//    Gán cơ kiểm tra số nguyên tố (Giả định n là số nguyên tố)
     //   Sử dụng biến $check và gán = true để lưu trạng thái (không cần biết n có phải là 1 số nguyên tố hay không, 
     //   cứ gán cho nó mặc định là số nguyên tố và lưu trạnh thái đó)

     for ($index = 2; $index < $n ; $index++){
          if ($n % $index == 0){
               $check = false;
          }
     }

     if ($check){ // if ($check = true)
          echo $n . ' là số nguyên tố';
     }else {
          echo $n . ' không phải số nguyên tố';
     }

}else {
     echo $n . '- số âm, không phải là số nguyên tố';
}