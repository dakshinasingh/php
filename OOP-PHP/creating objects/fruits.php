<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
    <?php
        include "classFruits.php";
        include "constructor.php";
        $a=2;
        $b=3;
        $c=5;
        $f1=new Fruits();
        $val=$f1->sales($a,$b);
        print "value= ".$val."<br>";

        $f2=new FruitsConstructor($a,$b,$c);
        $val1=$f2->add();
        print "value= ".$val1;
        ?>
        
</body>
</html>