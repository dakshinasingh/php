<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "classFruit.php";
        $a=2;
        $b=4;
        $c=3;
        $val2=FruitStatic::addFruits($a,$b,$c);
        echo "Total = ".$val2."<br>";

        include "classFruit2.php";
        $x=FruitStatic2::$apples;
        $y=FruitStatic2::$oranges;
        $z=FruitStatic2::$bananas;
        $val2=FruitStatic2::addFruits($x,$y,$z);
        echo "Total = ".$val2;
    ?>
</body>
</html>