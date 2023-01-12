<?php
    class Animal{
        public $type;
        public function __construct($aType){
            $this->type=$aType;
        }
        public function showType(){
            print "<p> My animal is a $this->type</p>";
        }
        public function showAnimal(){
            print "<p> My animal is a $this->type</p>";
        }

    }
    class Dog extends Animal{
        public $name;
        public function __construct(){
            parent::__construct("Dog");
        }

        public function showAnimal(){
            print "<p> This is a  $this->type</p>";
        }

        public function showName($a_name){
            $this->name=$a_name;
            print "<p> His name is  $this->name</p>";
        }
    }
        $myDog=new Dog();
        $myDog->showAnimal();
        $myDog->showName("zack");
       
    
?>