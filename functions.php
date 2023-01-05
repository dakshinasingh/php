<!DOCTYPE html>
<html>
    <head>
        <title>functions</title>
    </head>
    <body>

        <?php
        
        //normal function
        function greet($name) {
            echo "Hello ".$name."<br>";
        }

        greet("Dakshina");


        //setting default value of an argument in a function
        function age($age=30){
            echo "$age";
            echo "<br>";
        }
        age();
        age(50);

        //return statement
        function add($a,$b){
            return  $a+$b;
        }
        echo "sun of 3 and 5 is ".add(3,5);
        ?>

    </body>
</html>