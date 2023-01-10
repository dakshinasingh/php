<!DOCTYPE html>
<html>
    <head>
        <title>loops</title>
    </head>
    <body>

        <?php
        
        //WHILE LOOP
		$x = 1;
		  
		while($x < 10) {
		   echo "The number is: $x <br>";
		   $x++;
		} 
		echo "<hr />";
		
		//DO WHILE LOOP
		$x = 6;		
		do {
		echo "The number is: $x <br>";
		$x++;
		} while ($x <= 5);
		echo "<hr />";

        //FOR LOOP
        for ($i = 0; $i <= 10; $i++) {
            echo "$i <br>";
        }
        
        echo "<hr />";
        
        
        
        //FOR EACH LOOP
        $cars = array("volvo", "bmw", "honda", "ford"); 
        
        foreach ($cars as $i) {
            echo "$i <br>";
        }


        ?>

    </body>
</html>