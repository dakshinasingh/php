<!DOCTYPE html>
<html lang="en">
<head>
     <title>sql</title>
</head>
<body>
    <h2>form</h2>
    <?php
        $mysqli=new mysqli("localhost","root"," ","test");
        if(!$mysqli){
            print "unable to connect";
        }
        $sql_statement="SELECT lastname,firstname,state";
        $sql_statement="FROM author";
        $sql_statement="WHERE state='CA";
        $sql_statement="ORDER BY lastname,firstname";

        $result=$mysqli->query($sql_statement);
        $outputDisplay=" ";
        $myrowCount=0;
        if(!$result){
            $outputDisplay .="<p> MySql No: ".$mySqli->errno. "</p>";
            $outputDisplay .="<p> MySql Error: ".$mySqli->error. "</p>";
            $outputDisplay .="<p> Sql Statement: ".$sql_statement. "</p>";   
            $outputDisplay .="<p> MySql Affected rows: ".$mySqli->affected. "</p>";         
        }
        else{
            $outputDisplay .="<h3> Authors who live in CA </h3>";
            $outputDisplay .='<table border=1 style="color:black">';
            $outputDisplay .='<tr><th> Last Name</th>First Name </th> <th> state</th></tr>';
            $numResults=$result->num_rows;

            for($i=0;$i<$numResults;$i++){
                if(!($i%2)){
                    $outputDisplay.="<tr style=\"background-color:#f5DEB3;\">";
            }
                
            else{
                $outputDisplay.="<tr style=\"background-color:white;\">";
            }
            $myrowCount++;
            $row=$result->fetch_assoc();
            $lastname=$row['lastname'];
            $firstname=$row['firstname'];
            $state=$row['state'];

            $outputDisplay.="<td>".$lastname."</td>";
            $outputDisplay.="<td>".$firstname."</td>";
            $outputDisplay.="<td>".$state."</td>";

            $outputDisplay.="</tr>";
        }
        $outputDisplay.="</table>";
    }
    ?>
    <hr>
    <?php
    $outputDisplay.="<br/> <br/><b>Number of rows in results: $myrowcount </b> <br/>";
    print $outputDisplay;
    ?>
</body>
</html>