<!DOCTYPE html>
<html>
    <head>
        <title>operators in PHP</title>
    </head>
    <body>
        <h2>operators in PHP</h1>
        <?php
            $x = 40; 
            $y = 20;
            echo $x + $y;
            echo "<br>";
            echo $x-$y;
            echo "<br>";
            echo $x*$y;
            echo "<br>";
            echo $x/$y;
            echo "<br>";
            echo $x%$y;
            echo "<br>";
        ?>

        <h2>comparison operators in PHP</h1>

        <?php
            $x = 300; 
            $y = "300";
            var_dump($x == $y);//checks the value
            var_dump($x === $y);//checks the types
            var_dump($x != $y);//not equal
            var_dump($x <> $y);//not equal
            var_dump($x !== $y);//types not equal
            var_dump($x > $y);//greater than
            var_dump($x >= $y);//greater than equal to

        ?>

        <h2> Increment/Decrement Operators </h2>
        
        <?php
            $x=10;
            echo $x++;
            echo "<hr />";
            echo ++$x;
            echo "<hr />";
            echo --$x;
            echo "<hr />";
        ?>

        <h2> Logical Operators </h2>

        <?php
            $x=10;
            $y=20;
            if ($x == 20 and $y == 30) {  //logical and
                echo "True";
                echo "<hr />";
            }

            if ($x == 20 or $y == 90) {  //logical or
                echo "True";
                echo "<hr />";
            }
            
            $x=100;
            $y=200;
            if ($x == 100 && $y == 200) {  //logical and
                echo "True";
                echo "<hr />";
            }
                
            if ($x == 200 || $y == 200) {  //logical or
                echo "True";
                echo "<hr />";
            }
            

            if ($x !== 100) {  //logical not
                echo "True";
                echo "<hr />";
                }
            
        ?>

        <h2> PHP String Operators </h2>

        <?php
            //Concatenation - Concatenation of $x and $y
            $x = "Hello";
            $y = " world!";
            echo $x . $y;
            echo "<hr />";
            
            //Concatenation assignment - Appends $txt2 to $txt1
            $x = "Hello";
            $y = "World";
            $x .= $y;
            echo $x;
            echo "<hr />";
        ?>


        <h2> PHP Array Operators </h2>

        <?php

            //declaring arrays
            $x = array("a" => "blue", "b" => "red"); 
            $y = array("c" => "pink", "d" => "brown"); 
                
            print_r($x);
            echo "<hr/>";

            //union of 2 arrays
            print_r($x + $y); //Union
            echo "<hr/>";

            //Equality - Returns true if $x and $y have the same key/value pairs
            var_dump($x == $y);
            echo "<hr/>";

            //Identity - Returns true if $x and $y have the same key/value pairs in the same order and of the same types
            var_dump($x === $y);
            echo "<hr/>";

            //Inequality - Returns true if $x is not equal to $y
            var_dump($x != $y);
            echo "<hr />";
            var_dump($x <> $y);
            echo "<hr />";


            //Non-identity - Returns true if $x is not identical to $y
            var_dump($x !== $y);
            echo "<hr />";
        ?>


    </body>
</html>