 <?php
/*Toán tử += */
$a = 10;
$a += 10;
$a += 20;
echo $a;
echo '<br>';

/*Toán tử -= */
$a = 5;
$a -= 4;
echo $a;
echo '<br>';


/*Toán tử *= */
$a = 5;
$a *= 4;
echo $a;
echo '<br>';

/*Toán tử /= */
$a = 5;
$a /= 4;
echo $a;
echo '<br>';

/*Toán tử %= */
$a = 10;
$a %= 6;
echo $a;
echo '<br>';

/*Toán tử so sánh*/
// Trả về duy nhất 1 kiểu dũ liệu là boolean(true or false)
$a = 5;
$b = 8;
$check = $a > $b;
$check1 = $a<$b;
var_dump($check);
var_dump($check1);
echo '<br>';

/*Toán tử == chỉ so sánh sự giống nhau về giá trị*/
$a = 10;
$b = '10';//   Chuỗi số
$check = $a==$b;
var_dump($check);
echo '<br>';

/*Toán tử ===  chỉ so sánh sự giống nhau cả giá trị và kiểu dữ liệu*/
$a = 10;
$b = '10';//   Chuỗi số
$check = $a===$b;
var_dump($check);
echo '<br>';

/*Toán tử khác (!=) chỉ so sánh sự khác nhau về giá trị */
$a = 10;
$b = 10.0;//   Chuỗi số
$check = $a != $b;// False vì cả 2 không khác nhau(đều bằng 10)
var_dump($check);
echo '<br>';

/*Toán tử khác (!==) chỉ so sánh sự khác nhau về giá trị và kiểu dữ liệu */
$a = 10;
$b = 10.0;//   Chuỗi số
$check = $a !== $b;// False vì cả 2 không khác nhau(đều bằng 10)
var_dump($check);
echo '<br>';

/*Toán tử quan hệ */
//-  Toán tử &&(and)
/**
 * - Cả biểu thức đúng khi tất cả đều đúng
 * - Một biểu thức con sai thì cả biểu thức sai
 */
$a = 10;
$b = 15;
$c = 20;
$check = $a >= 10 && ($b>=10 && $c >=25);
// Nếu so sánh biểu thức , sẽ tính biểu thức trong ngoặc trước và nếu 1 trogn 2 biểu thức so sánh trong ngoặc sai
// thì sẽ dẫn đến cả biểu thức đó sai, và cả biểu thức trong ngoặc sai mà đem đi so sánh với biểu thức còn lại
// cho dù nó có đúng đi nữa thì vẫn sẽ tả về false 
var_dump($check); // true
echo '<br>';

$a = 10;
$b = 9;
$check = $a >= 10 && $b>=10;
var_dump($check); // false
echo '<br>';

/*Toán tử hoặc (||)*/
/**
 * Cả biểu thức đúng khi 1 trong các biểu thức con đúng
 * Biểu thức sai khi tất cả các biểu thức con đều sai
 */
$a = 10;
$b = 15;
$check = $a >= 10 || $b<=0;
var_dump($check);// true
echo '<br>';

$a = 10;
$b = 15;
$check = $a >= 123 || $b<=0;
var_dump($check);// false
echo '<br>';

/*Toán tử phủ định (!) */
$a = false;
$b = true;
//    Phủ định của false là true và ngược lại true là false
$check2 = !$a; // true
$check3 = !$b; // false
var_dump($check2);
echo '<br>';
var_dump($check3);



