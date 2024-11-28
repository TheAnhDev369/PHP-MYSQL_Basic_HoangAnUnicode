<?php 
//  Hằng số có sẵn của PHP lấy path dẫn đến file, vị trí folder nằm trên server

//   1. Path Files
// echo __FILE__;
$path_file = __FILE__;
echo $path_file.'<br>';   
// D:\laragon\www\NewCode\PHP_Training\Basic\HoangAnUnicode\Module_02\Ex012\ex12.md

//   2.   Path Dir
//   Path_dir
// echo __DIR__;
$path_dir = __DIR__;
echo $path_dir;

//   2.   Path of Url
//   Url
//   https://online.unicode.vn/bai-hoc/bai-21-cau-lenh-include-include-once-require-require-once
//   Với url thì không thể biết file đó là file gì, đường dẫn trên url như thế nào,nằm ở folder nào trên serve
/**
 * - Giao thức HTTP hoặc HTTPS
 * - HostName (Domain hay Tên Miền)
 * - Path: là tất cả những gì phía sau tên miền (Path of Url)
 * - Port
 */
