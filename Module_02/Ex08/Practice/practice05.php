<?php
/**Vẽ bàn cờ vua */
?>

<table border="0" width="100%" cellspacing="0" cellpadding="0">
     <?php 
     $alphaLoop = null;
     for ($row = 'a'; $row <= 'h'; $row++) {
          $alphaLoop .= '<td style="text-align: center">'.$row.'</td>';
     }
          echo '<tr style=height:30px ;> <td></td>'.$alphaLoop.'</tr>';

     // Hàng

     $index = 8;
     for ($row=1; $row <= 8 ; $row++) 
     { 
          echo '<tr>';
          echo '<td width="30px" >'.$index.'</td>';
          for ($col=1; $col <= 8 ; $col++) {
               $total = $row + $col;
               if ($total % 2 == 0){
                    echo '<td style="background: #fff;" width="12%" height="100"></td>';
               }else {
                    echo '<td style="background: #000;" width="12%" height="100"></td>';
               }
          }
          echo '</tr>';

          $index--;
     }
     ?>
</table>

<!-- Bỏ -->
<!-- <tr>
     <td></td>
          <?php 
          // for ($row = 'a'; $row <= 'h'; $row++) { 
          // echo '<td>'.$row.'</td>';
          // } ?>
</tr> -->

<!-- <td> -->
     <?php 
     // echo $index; ?>
<!-- </td> -->


<!-- <tr> -->
          <!-- Cột -->

          <?php 
               // for ($col=1; $col <= 8 ; $col++) {

               //      if($row % 2 != 0){

               //           if($col % 2 != 0){//    Nếu cột không chia hết cho 2 => là ô lẻ 
                              // echo '<td style="background: #fff;" width="12.5%" height="100"></td>';
                    //      } else {
                    //           echo '<td style="background: #000;" width="12.5%" height="100"></td>';
                    //      }
                    // } else {
                    //      if($col % 2 == 0){//    Nếu cột  chia hết cho 2 => là ô chẵn
                    //           echo '<td style="background: #fff;" width="12.5%" height="100"></td>';
                    //      } else {
                    //           echo '<td style="background: #000;" width="12.5%" height="100"></td>';
                    //      } 
                    // }
          ?>
          <!-- <td style="background: #fff;" width="12.5%" height="100"></td> -->
          <?php 
     // }
     ?>
          <!-- <td style="background: #000;" width="12.5%" height="100"></td> -->
<!-- </tr> -->