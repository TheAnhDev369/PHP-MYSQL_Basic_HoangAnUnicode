
<?php
/**
4. In bảng cửu chương
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bảng cửu chương</title>
     <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            background-color: #f4f4f9; /* Màu nền nhẹ nhàng */
        }
        table {
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tạo đổ bóng */
            background: white;
            margin-top: 20px;
        }
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        td:nth-child(odd) {
            background-color: #f9f9f9; /* Màu nền xen kẽ cho ô */
        }
        h1 {
            margin: 20px 0;
            font-family: Arial, sans-serif;
            color: #333;
        }
     </style>
</head>
<body>
     <h1 text-align="center">Bảng cửu chương từ 1 đến 10</h1>
<table border="1" width="100%">
          <tr>
               <?php
                    for ($i = 1; $i <= 10; $i++) {
                         if($i == 1 || $i == 6){
                              echo '<tr>';
                         }
                    echo '<td>';
                         for ($j = 1; $j <= 10; $j++) {
                              echo $i. ' x '. $j .' = '. $i * $j. '<br>';
                         }
                    echo '</td>';
                         if ($i == 5 || $i == 10) {
                              echo '</tr>';
                         }
                    }
               ?>
          </tr>
     </table>
 </body>
</body>
</html>
