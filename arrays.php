<!DOCTYPE html>
<html>
    <head>
        <title>arrays</title>
    </head>
    <body>

        <?php
        //declaring indexed array

        $animals =array("cat","dog","cow");
        $animal =array("lion","dog","cow");
        $s=$animals.$animal;
        echo $s;
        //accessing indexed array
        echo "$animals[0]"."<br>";
        echo "$animals[2]"."<br>";
        //count no. of elements in array
        echo count($animals)."<hr/>";
        //looping through an indexed array
        $len=count($animals);
        for($i=0;$i<$len;$i++){
            echo "$i=".$animals[$i]."<br>";
        }
        echo "<hr/>";


        //associative array
        $grades=array("sam"=>"70","john"=>"60","bill"=>"85");
        echo "sam scored:".$grades["sam"]."<hr/>";
        //loop through an associative array
        foreach($grades as $i => $grades){
            echo "key=".$i.",value=".$grades."<br>";
        }
        echo "<hr/>";
        //multidimensional arrays
        $grades = array
        (
        array("John",50,60),
        array("Bob",40,25),
        );
        
        echo $grades[0][0].": Test 1: ".$grades[0][1].", Test 2: ".$grades[0][2].".<br>";
        echo $grades[1][0].": Test 1: ".$grades[1][1].", Test 2: ".$grades[1][2].".<br>";
        
        ?>

    </body>
</html>
