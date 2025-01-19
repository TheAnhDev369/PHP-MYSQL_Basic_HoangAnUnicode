<?php
//  Chuỗi trong PHP
/**
 *
 * Chuỗi là danh sách các ký tự nằm trong dấu nháy đơn hoặc nháy kép
 *
 */
$exStr = 'Học lập trình PHP'; //  Biến chuỗi
var_dump($exStr);                  //  string (22) "..."
echo '<br/>';

$exStr = "Học lập trình PHP";
var_dump($exStr);
echo '<br/>';

$exStrHtml =
    '<p>
        <a href=
            "http://localhost:81/?file=/NewCode/PHP_Training/Basic/HoangAnUnicode/Module_02/Ex14/StringInPHP/ex14-01.php">
            Localhost
        </a>
    </p>';
echo $exStrHtml;

const _EX_HTML = '<h2>Học lập trình PHP</h2>';
echo _EX_HTML;
echo '<br/>';
//  Chuỗi gán vào biến hay hằng số đều được

//  Ví dụ 1:
echo "Trung tâm đào tạo lập trình \"Unicode\" - Đào tạo lập trình PHP";
echo '<br/>';

//  Ví dụ 2:
$company = "Unicode";
echo "Trung tâm đào tạo lập trình $company";
echo '<br/>';

//  Ví dụ 3:
echo 'Trung tâm đào tạo lập trình \'PHP\'';
echo '<br/>';

//  Ví dụ 4:
echo 'Trung tâm IELTS "PREP" ';
echo '<br/>';

//  Ví dụ 5:
echo "Trung tâm IELTS 'PREP' ";

echo
    "<p>
        <a href=
            \"http://localhost:81/?file=/NewCode/PHP_Training/Basic/HoangAnUnicode/Module_02/Ex14/StringInPHP/ex14-01.php\">
            Localhost
        </a>
    </p>";
//  Khi làm việc với chuỗi, sử dung dùng nháy đơn bọc bên ngoài,
//  còn bên trong html các thuộc tính mặc định là dấu "" .

/**
 * Nối chuỗi trong PHP
 * Để nối chuỗi trong PHP, chúng ta dùng dấu ( . )
 */

$selectHTML = '<select name="category">';

for ($i= 2000; $i <= 2021 ; $i++) { 
    // echo '<option value=" '.$i.' "> Năm '.$i.'</option>';
    $selectHTML.= '<option value="' .$i. '"> Năm ' .$i. '</option>';
}


$selectHTML.='</select>';
echo $selectHTML;