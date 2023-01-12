<?php
    class Person{
        private $firstname;
        private $lastname;
        public function getFullName(){
            $fullname=$this->firstname." ".$this->lastname;
            return $fullname;
        }
        public function setFullName($a_firstname,$a_lastname){
            $this->firstname=$a_firstname;
            $this->lastname=$a_lastname;
        }
    }
    interface jobCode{
        const PAYROLL="01";
        const MANAGER="02";
        const RETAIL="03";
    }
    interface standard_functions{
        public function getJobTitle($a_jobCode);
        public function showFullName();
    }
    class Employee extends Person implements jobCode,standard_functions{
            private $employeeId;
            private $jobcode;
            public function __construct($a_firstName,$a_lastName,$a_empId,$a_jobCode){
                $this->setFullName($a_firstName,$a_lastName);
                $this->employeeId=$a_empId;
                $this->jobCode=$a_jobCode;
            }
            function getJobTitle($a_jobCode){
                $jobTitle=" ";
                if($a_jobCode==self::PAYROLL){
                    $jobTitle="Payroll clerk";
                }
                if($a_jobCode==self::MANAGER){
                    $jobTitle="Manager";
                }  
                if($a_jobCode==self::RETAIL){
                    $jobTitle="Retail clerk";
                } 
                return $jobTitle ;           
            }
            function showFullName(){
                $myFullName=$this->getFullName();
                print "<br> Hi $myFullName";
            }
        }
        $myEmployee=new Employee("steve","perry","333","03");
        $myFullName=$myEmployee->showFullName();
        $myjobTitle=$myEmployee->getJobTitle("03");
        print "<p> your job title is $myjobTitle </p>"
    
?> 