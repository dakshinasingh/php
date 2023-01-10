<!DOCTYPE html>
<html lang="en">
<head>
    <title>oop</title>
    
</head>
<body>
    <?php

    class person {
        //normal function
        public $var="Dakshina<br>";
        public $msg="bye<br>";
        public function hello($name){
            echo "Hello ". $name."<br>";
        }

        //static function
        public static function greet(){
            echo "Good Morning!!!<br>";
        }
        //using global variables
        public function name(){
            echo $this->var;
        }
        //function using return statement
        public function bye(){
            return $this->msg;
        }
    }

    //calling a normal function by making object of a class
    $p1=new person();
    $p1->hello("Dakshina");

    //calling a static function
    person::greet();
    $p2=new person();

    //calling a global variable function
    $p2->name();

    //calling a return value function
    $returnValue=$p2->bye();
    echo $returnValue;

    ?>
</body>
</html>