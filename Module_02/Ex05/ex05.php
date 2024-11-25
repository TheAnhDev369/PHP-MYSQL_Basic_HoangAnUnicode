<?php
echo '<pre>';
echo "Type casting hay ép kiểu dữ liệu";

//   1.   Kiểu số nguyên INT
//   PHP tự hiểu và nhận diện biến age là số nguyên(int)
$intAge = 30; // Int
$scoreAverage1 = 30.5; // Float
$scoreAverage2 = "30.5"; // String
var_dump($intAge); // int(30)
var_dump($scoreAverage1); // float(30.5)
var_dump($scoreAverage2); // string(4) "30.5"

// Kiểm tra kiểu số nguyên
$check0 = is_int($intAge);
var_dump($check0); //bool (true)
echo '<br>';
$check1 = is_int($scoreAverage1); // bool (false)
var_dump($check1);

////   Ép các loại kiểu dữ liệu khác sang số nguyên
//   Ép từ float sang int
$scoreAverage1 = (int) $scoreAverage1;
var_dump($scoreAverage1); // Int (30)

//  Ép từ string sang int
$scoreAverage2 = (string) $scoreAverage2;
var_dump($scoreAverage2); // string(4) "30.5"
echo '<br>';

//   2.   Kiểu Boolean hay Logic
// Khai báo biến
$trueBool = true;
$falseBool = false;
$checkBool = 1;
$checkBool = (bool) $checkBool; // Nếu không có ép kiểu sẽ ra int

$trueBool = is_bool($checkBool); // true vì là kiểu boolean
$falseBool = is_bool($intAge); //   False vì đây là kiểu int

var_dump($checkBool);
var_dump($trueBool);
var_dump($falseBool);

var_dump($trueBool);
var_dump($falseBool);
echo '<br>';

//   3.   Kiểu số thực(float)
// Số thực sử dụng dấu . để ngăn cách phần nguyên với thập phân, không dùng dấu ,
$float1 = 10.5;
var_dump($float1);

// Ép kiểu số nguyên
$soNguyen = 100;
$soNguyen = (float) $soNguyen; // Int ép sang Float-> 100.0
var_dump($soNguyen);

// Kiểm tra 1 số có phải số thực hay không ?
is_float($float1); // true
is_float($soNguyen); // false
var_dump(is_float($float1));
var_dump(is_float($intAge));
echo '<br>';

//   4.   Kiểu dữ liệu chuỗi(string)
$message = "Thông báo"; // string(11) "Thông báo"; Là độ dài của chuỗi khi dùng var_dump();
var_dump($message);

//   Kiểm tra 1 chuỗi có phải string hay không bằng cách sử dụng hàm is_string($ten_bien);
$checkString = is_string($message);
var_dump($checkString); // Trả về true vì là string

// Thử với trường hợp false
$messageFalse = 11; // Int nên chắc chắn trả về false
$checkStringFalse = is_string($messageFalse);
var_dump($checkStringFalse);

//   Ép kiểu dữ liệu chuỗi
$intToString = 2024;
$intToString = (string) $intToString;
var_dump($intToString);
echo '<br>';

//   5.   Kiểu mảng (Array)
$carArr = [];
$carArr = (array) $carArr;
var_dump((array) $carArr);

// Array(0) {}
// Số 0 là đại diện cho số lượng phần tử trong mảng (không có phần tử nào trong mảng)
//   Ép kiểu mảng (xử lý bằng cách ép kiểu từ Object sang Array)
//   (Ép kiểu đối tượng thành mảng)
//   (Chuyển đổi đói tượng thành mảng bằng cách ép kiểu)
// Nếu $carArr là 1 mảng mà vẫn ép kiểu thì không có gì thay đổi

$carObj = new stdClass();
$carObj->make = 'Toyota';
$carObj->model = 'Corolla';
$carObj = (array) $carObj;
var_dump((array) $carObj);
// Nếu $carArr là 1 đối tượng, sẽ được chuyển thành mảng

$carString = "Vios";
$carString = (array) $carString; // Ép kiểu chuỗi thành mảng
var_dump((array) $carString);
// Nếu $carArr là kiểu khác(chuỗi, số,...), PHP sẽ tạo 1 mảng với phần tử chứa giá trị đó

// Kiểm tra kiểu của mảng
$checkArray = is_array($carArr);
$checkArray = is_array($carObj);
$checkArray = is_array($carString);
var_dump($checkArray);
var_dump($checkArray);
var_dump($checkArray);

// Thử với trường hợp False (Kiểm tra 1 biến nhưng không phải là Array chắc chắn sẽ trả về false)
$motorbikeArr = 155;
$checkMotobikeArray = is_array($motorbikeArr); // False vì mảng trên là Int
var_dump($checkMotobikeArray);
echo '<br>';

//   6.   Kiểu Null (Kiểu rỗng)(Đặc biệt)
$total = null;
$total1 = 35.6;
var_dump($total);
var_dump($total1);

// Kiểm tra 1 hàm có phải null hay không
$checkIsNull = is_null($total);
var_dump($checkIsNull); // True

$checkIsNull = is_null($total1);
var_dump($checkIsNull); // False

// Ép kiểu dữ liệu từ null sang int
$nullToInt = null;
$nullToInt = (int) $nullToInt;
var_dump($nullToInt); // Int 0

// Ép kiểu dữ liệu từ null sang String
$nullToString = null;
$nullToString = (string) $nullToString;
var_dump($nullToString); // string(0) "" (Về bản chất vẫn là 1 chuỗi trống (empty))

// Ép kiểu dữ liệu từ null sang Boolean
$nullToBool = null;
$nullToBool = (bool) $nullToBool;
var_dump($nullToBool); // bool(false)
echo '<br>';

//   7.   Kiểu Resource (Tài nguyên)
$curl = curl_init(); //Trả về một resource (tài nguyên)
var_dump($curl); // dùng để đại diện cho tài nguyên bên ngoài như file, kết nối CURL, kết nối cơ sở dữ liệu, v.v.
echo '<br>';
/**
 * Tóm lại:
Trong PHP 8.0+, curl_init() trả về một đối tượng thuộc lớp CurlHandle.
Trước PHP 8.0, nó trả về một tài nguyên (resource)
resource(1) of type (curl).
 */

//   8.   Kiểu Object (Đối tượng)
$dataCustomer = [
    'Thế Anh',
];
$dataCustomer2 = [
    'Đẹp trai',
];
var_dump($dataCustomer);

// Ép kiểu dữ liệu từ mảng sang object
$dataCustomer = (object) $dataCustomer;
var_dump($dataCustomer);

// Hàm kiểm tra đối tượng (trường hợp true)
$checkObject = is_object($dataCustomer);
var_dump($checkObject); //     True

//  Hàm kiểm tra đối tượng (trường hợp false)
$checkObject = is_object($dataCustomer2);
var_dump($checkObject);

//
$customerObject = new stdClass();
$customerObject->age = 30;
var_dump($customerObject);
echo '<br>';

/**
 * Phân biệt empty và null
 **/

$message1 = null; //Rỗng (không thuộc 1 kiểu dữ liệu nào liên quan đến tính toán)
$message2 = ''; //   Trống (Thuộc kiểu chuỗi)
var_dump($message1); // Không tốn vùng nhớ
var_dump($message2); // string(0) "" vẫn tốn vùng nhớ
