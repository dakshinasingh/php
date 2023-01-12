<?php   
    class Animal{
        public $type;
        public function __construct($t){
            $this->type=$t;
        }
        public function animalType()
        {
            echo "<p>My animal is a $this->type </p>";

        }
    }
    class Dog extends Animal {
        public $name;
        public function __construct(){
            parent::__construct("dog");
        }
        public function showDog($a){
            $this->name=$a;
            echo "<p> $this->name is a $this->type</p>";
        }
    }

?>
