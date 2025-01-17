<?php
$curl = curl_init();

if (is_resource($curl)) {
    // PHP < 8.0: Xử lý tài nguyên
    $checkType = get_resource_type($curl);
    var_dump($checkType);
} elseif ($curl instanceof CurlHandle) {
    // PHP >= 8.0: Xử lý đối tượng CurlHandle
    echo "This is an instance of CurlHandle.\n";
} else {
    echo "Unknown type.\n";
}

echo '<br>';

if ($curl instanceof CurlHandle) {
    echo "This is a CurlHandle object.\n";
} else {
    echo "Failed to create a CurlHandle.\n";
}

echo '<br>';

if (is_resource($curl)) {
    // PHP < 8.0
    echo "Resource type: " . get_resource_type($curl) . "\n";
} elseif ($curl instanceof CurlHandle) {
    // PHP >= 8.0
    echo "This is an instance of CurlHandle.\n";
} else {
    echo "Unknown type.\n";
}

// Đóng CURL sau khi hoàn thành
curl_close($curl);

/**
 *   Fatal error:  Uncaught TypeError: get_resource_type(): Argument #1 ($resource) must be of type resource, CurlHandle given in D:\laragon\www\NewCode\PHP_Training\Basic\HoangAnUnicode\Module_02\Ex05\ex05.php:154
Stack trace:
#0 D:\laragon\www\NewCode\PHP_Training\Basic\HoangAnUnicode\Module_02\Ex05\ex05.php(154): get_resource_type(Object(CurlHandle))
#1 D:\laragon\www\index.php(18): include('D:\\laragon\\www\\...')
#2 {main}
thrown in D:\laragon\www\NewCode\PHP_Training\Basic\HoangAnUnicode\Module_02\Ex05\ex05.php on line 154
 */
// $checkType = get_resource_type($curl);
// var_dump($checkType);

/**
 * Lỗi này xảy ra vì bạn đang chạy PHP phiên bản 8.0 trở lên,
 * nơi curl_init() trả về một đối tượng thuộc lớp CurlHandle thay vì một
 * tài nguyên (resource) như trong các phiên bản trước.
 *
 * Hàm get_resource_type() chỉ hoạt động với các biến kiểu resource.
 * Khi bạn truyền một đối tượng (CurlHandle) vào hàm này,
 * PHP sẽ báo lỗi vì kiểu dữ liệu không phù hợp.
 */

/**
 * Nguyên nhân lỗi
PHP >= 8.0: curl_init() trả về một đối tượng của lớp CurlHandle.
get_resource_type() không thể xử lý đối tượng mà chỉ làm việc với kiểu dữ liệu resource.
 */

/**
 * Cách khắc phục
 * 1. Kiểm tra phiên bản PHP
 * Nếu bạn muốn đảm bảo tính tương thích, bạn có thể kiểm tra kiểu trả về của $curl
 * trước khi sử dụng get_resource_type():
 */

/**
 * 2. Cập nhật logic cho PHP 8.0 trở lên
 * Vì PHP 8.0+ trả về một đối tượng CurlHandle, bạn không cần gọi get_resource_type().
 * Thay vào đó, bạn có thể kiểm tra kiểu đối tượng:
 */

/**
 * 3. Kiểm tra linh hoạt cho mọi phiên bản PHP
 * Nếu bạn cần hỗ trợ cả phiên bản PHP cũ và mới:
 */

/**
 * Kết luận
 * PHP 7.x trở xuống: curl_init() trả về một resource. Bạn có thể dùng get_resource_type().
 * PHP 8.0 trở lên: curl_init() trả về một đối tượng CurlHandle. Bạn cần kiểm tra bằng cách sử dụng instanceof.
Hãy viết mã linh hoạt để đảm bảo tương thích với nhiều phiên bản PHP nếu cần.
 */
