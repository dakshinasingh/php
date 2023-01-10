<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    
    $x = 5; // global variable
  
    function fun1() {
        echo "<p>Value of x is: $x</p>";
    } 
    fun1();

    echo "<p>Value of x is: $x</p><hr />";

    
    function fun2() {
        $y = 5; // local variable
        echo "<p>Value of y is: $y</p>";
    } 
    fun2();

        echo "<p>Value of y is: $y</p>";
    ?>
</body>
</html>