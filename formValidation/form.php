<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

<?php
$fname=$lname=$no=$email=" ";

if($_SERVER["REQUEST_METHOD"]=="POST"){


    if(empty($_POST["fname"])){
        echo "<span class=\"error\">Error: First Name Required</span>";

    }
    else if(!preg_match("/^[a-zA-Z-' ]*$/",$_POST["fname"])) {
        echo "<span class=\"error\">Error: only letters are allowed</span>";
      
}
    else if(empty($_POST["email"])){
        echo "<span class=\"error\">Error: Email Required</span>";
    }
    
    else{
        $fname=val($_POST["fname"]);
        $lname=val($_POST["lname"]);
        $email=val($_POST["email"]);
        $no=val($_POST["no"]);
    }
    

}
function val($data){
    
    $data=trim($data);
    
    $data=stripcslashes($data);
   
    $data= htmlspecialchars($data);
    return $data;}
?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        First Name:<input type="text" name="fname">
        <br>
        Last Name:<input type="text" name="lname">
        <br>
        Email:<input type="email" name="email">
        <br>
        Phone Number:
        <input type="number" name="no">
        <br>
        <!-- Comments:
        <input type="text" name="comments">
        <br> -->
        <input type="submit">
    </form>

    <hr>

    <?php
        echo "<h2>user input:</h2>";
        echo "First Name: " .$fname;
        echo "<br>";
        echo "Last Name: " .$lname;
        echo "<br>";
    
    echo "Email: " .$email;
        echo "<br>";
    
    echo "Phone No.: " .$no;
        echo "<br>";
    
    ?>
</body>
</html>