<?php

 class Animal{
        public $species;
        public function getspecies(){
            return $this->species;
        }
        public function setspecies($aspecies){
            $this->species=$aspecies;
        }

    }

    class Dog extends Animal{
        public $breed;
        public function getBreed(){
            return $this->breed;
        }
        public function setBreed($abreed){
            $this->breed=$abreed;
        }

    }
    class MyDog extends Dog{
        public $name;
        function __construct($aspecies,$abreed,$aname){
            $this->species=$aspecies;
            $this->breed=$abreed;
            $this->name=$aname;
        }
        public function showDog(){
            $species=$this->getSpecies();
            $breed=$this->getBreed();
            print "<p> my $this->species is a $this->breed ";
            print "named $this->name </p>";
        }
    }
$a=new MyDog("Dog","spaniel","zack");
$a->showDog();
$a->setBreed("collie");
// $a->showDog();
// $a->setSpecies("cat");
// $a->setBreed("white");
$a->showDog();
?>