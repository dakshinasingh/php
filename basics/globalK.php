<!DOCTYPE html>
<html>
     <body>

          <?php
          $x = 30;
          $y = 20;
     echo $y;
     echo "<br>";

          function fun1() {
               global $x, $y;
               $y = $x + $y;
          } 

          fun1(); // Execute Function
          echo $y; // Output Value of Variable y

          ?>

     </body>
</html>