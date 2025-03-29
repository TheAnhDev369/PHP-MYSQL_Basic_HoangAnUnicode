CÁC HÀM XỬ LÝ CHUỖI TRONG PHP

› addcslashes($str, Schar_list):
    Hàm này sẽ thêm dầu escape (\) phía trước
    những ký tự trong chuỗi $str mà ta liệt kê ở $char_list
› Ví dụ: echo addcslashes('Trung tâm đào tạo lập trình Unicode', 'U');

› addslashes($str): 
    Hàm này sẽ thêm escape (\) phía trước các ký tự ", ', \, 
› Ví dụ: echo addslashes('Trung tâm đào tạo lập trình "Unicode'");

› stripslashes($str):
    Hàm này sẽ xoá bỏ các ký tự escape (\) trong chuỗi

› explode( $delimiter , $string): 
    Hàm này sẽ chuyển một chuỗi $string thành một
    mảng các phần tử với ký tự tách mảng là $delimiter

› Ví dụ: $arr = explode('|', 'Tạ | Hoàng | An');

› implode($delimiter, $piecesarray): 
    Hàm này sẽ nối các phần tử của mảng và
    các phần tử nối với nhau bởi chuỗi $delimiter

› strlen($str): Hàm này trả về độ dài của chuỗi str
Ví dụ: echo strlen('Unicode'); 7 ký tự

›  str_word_count($str): Hàm này trả về chữ số trong chuỗi (không hỗ trợ tiếng Việt)
    Tip hỗ trợ tiếng Việt:  Không đếm các ký tự tiếng Việt

    echo str_word_count('Tạ Hoàng An', 0, 
    'àáãâàêéíi^óôõúÀÁÃÂC,Ê ÉÍI^ÓÕÔÚ  ');