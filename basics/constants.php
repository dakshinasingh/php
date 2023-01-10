<!DOCTYPE html>
<html>
    <body>

        <?php
        // Case-Sensitive
        define("WELCOME", "My name is Dakshina");
        echo WELCOME;
       
        echo "<hr />";
        // Constants are Global
        define("CAR", "VOLVO");

        function mycar() {
            echo CAR;
        }
         
        mycar();
        ?>

    </body>
</html>