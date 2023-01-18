<?php

 abstract class Fruits{
        public $fruit;
        public abstract function getFruit($fruit){
        }
        public abstract function setFruit($a_fruit){
        }

    }

    abstract class Mango extends Fruits{
        public $mango;
        public function getMango(){
            return $this->mango;
        }
        public function setMango($a_Mango){
            $this->mango=$a_mango;
        }

    }
    class Color extends Mango{
        public $color;
        function __construct($aspecies,$abreed,$aname){
            $this->fruit=$a_fruit;
            $this->mango=$a_mango;
            $this->color=$a_color;
        }
        public function showDog(){
            $color=$this->getColor();
            $mango=$this->getMango();
            print "<p> my $this->fruit is a $this->mango ";
            print "named $this->color </p>";
        }
    }
$a=new Fruits("Dog","spaniel","zack");
$a->showDog();
$a->setBreed("collie");
$a->showDog();
?>