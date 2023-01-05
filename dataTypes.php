<!DOCTYPE html>
<html>
    <body>

        <?php
        echo "<h2>Data Types in PHP</h2><br>";
        //string
        $x = 'Hello world!';
        echo $x;
        echo "<br>";
        //int
        $num1 = 1000;
        var_dump($num1);
        echo "<hr/>";
        //float
        $num2 = 4.5;
        echo "float ". $num2;
        echo "<hr/>";
        //array
        $animals=array("dog","cat","cow","lion");
        var_dump($animals);
        //null
        $color = "Blue";
        $color = null;
        var_dump($color);
        //boolean
        $bool =true;
        echo "$bool";
        var_dump($bool);
        ?>

    </body>
</html>