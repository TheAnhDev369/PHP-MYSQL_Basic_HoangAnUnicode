<?php
/*   Kiểm tra thứ trong tuần
 *   $number = 1 => Chủ nhật
 *   $number = 2 => Thứ 2
 *   $number = 3 => Thứ 3
 *   $number = 4 => Thứ 4
 *   $number = 5 => Thứ 5
 *   $number = 6 => Thứ 6
 *   $number = 7 => Thứ 7
 **/
$number = 0;
switch ($number) {
    case 1:
        echo 'Hôm nay là chủ nhật';
        break;
    case 2:
        # Code case 2
        echo 'Hôm nay là thứ hai';
        break;
    case 3:
        # Code case 3
        echo 'Hôm nay là thứ ba';
        break;
    case 4:
        # Code case 3
        echo 'Hôm nay là thứ tư';
        break;
    case 5:
        # Code case 3
        echo 'Hôm nay là thứ năm';
        break;
    case 6:
        # Code case 3
        echo 'Hôm nay là thứ sáu';
        break;
    case 7:
        # Code case 3
        echo 'Hôm nay là thứ bảy';
        break;
    default:
        #Code defaul
        echo 'Không hợp lệ';
        break;
}
echo '</br>';

/**
 * Kiểm tra số ngày trong tháng
 * Input: Nhập vào tháng, năm
 * Output: Đưa ra số ngày trong tháng
 *
 * Tháng 31 ngày: Tháng 1, 3, 5, 7, 8, 10, 12
 * Tháng 30 ngày: Tháng 4, 6, 9 ,11
 * Tháng 28, 29: Tháng 2 (Năm nhuận = năm chia hết cho 4)
 */
$month = 3;
$year = 21;

switch ($month) {
    case 2:
        # Lồng if để xử lý trường hợp có 28,29 ngày
        if ($year % 4 == 0) {
            echo 'Tháng ' . $month . ' có 29 ngày';
        } else {
            echo 'Tháng ' . $month . ' có 28 ngày';
        }

        break;

    case 4:
    case 6:
    case 9:
    case 11:
        echo 'Tháng ' . $month . ' có 30 ngày';
        break;

    default:
        # code...
        echo 'Tháng ' . $month . ' có 31 ngày';
        break;
}

//   Ưu tiên trường hợp có ít trường hợp nhất
//   rồi dần đến trường hợp ít thứ 2
//   tất cả trường hợp còn lại sẽ đưa vào trường hợp cuối cùng là defaul để tránh khai báo switch case quá dài
echo '<br>';

/**
 * Công thức xác định 1 năm là năm nhuậu nếu thoả mãn các điều kiện sau:
 * Năm đó phải chia hết cho 4 (điều kiện cơ bản)
 * Nếu năm đó chia hết cho 100, thì cũng phải chia hết cho 400 để tính là năm nhuận (điều kiện ngoại lệ)
 * Nếu năm không chia hết cho 100, thì tự động là năm nhuận (kể cả khi chia hết cho 4).
 * 
 * Nếu năm chia hết cho 100 nhưng không chia hết cho 400, nó sẽ không phải năm nhuận.
 */
$month = 2;
$year = 2000;

switch ($month) {
    case 2:
        //   Kiểm tra năm nhuận
        if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
            echo 'Tháng ' . $month . ' có 29 ngày';
        } else {
            echo 'Tháng ' . $month . ' có 28 ngày';
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        echo 'Tháng ' . $month . ' có 30 ngày';
        break;

    default:
        echo 'Tháng ' . $month . ' có 31 ngày';
        break;
}

//   Nếu $year % 100 = 0 → Điều kiện sai (false), vì 0 không thể khác 0 được
//   Nếu $year % 100 != 0 -> Điều kiện đúng (true), vì phần dư khác 0
