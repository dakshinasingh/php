<!DOCTYPE html>
<html>
    <head>
      <title> objects in PHP </title>
    </head>
    <body>

        <?php
        echo "<h1>objects in PHP</h1>";
        class Person{
            public $fname;
            public $lname;
            public $age;
            public function __construct($fname, $lname, $age){
                $this->fname = $fname;
                $this->lname = $lname;
                $this->age = $age;
            }
            public function hello(){
                return "I am " . $this->fname . " ". $this->lname . " and my age is " . $this->age . "";       
            }
        }
        $person1 = new Person('Dakshina', 'Singh' , 22);
        echo $person1->hello();
        echo "<br>";


        //static function
        class Person2{
            public static function hello($fname, $lname, $age){
                echo "I am " .$fname . " ". $lname . " and my age is " . $age . "";       
            }
        }
        Person2::hello('Daksh', 'Singh', 18);

        ?>

    </body>
</html>