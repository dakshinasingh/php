<!DOCTYPE html>
<html lang="en">
<head>
   <title>Document</title>
</head>
<body>
    <h2>My Unconsious Life</h2>
    <form name="form1" action= " <?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <p>Enter your Name:</p>
        <input type="text" name="name">

        <p>Enter your Age:</p>
        <input type="text" name="age">

        <p>Enter the number of hours you sleep at night:</p>
        <input type="text" name="hours">

        <br>
        <br>
        <input type="submit" value="Calculate">
        
    
   <?php 
    class Assgn{
        const HOURS=24;
        public $name;
        public $age;
        public $hoursSlept;
    public function __construct ($n,$a,$hs){
        $this->name=$n;
        $this->age=$a;
        $this->hoursSlept=$hs;
    }
    public function cal (){
        $sleptYears=($this->hoursSlept/self::HOURS)*$this->age;
        return $sleptYears;
    }
    public function display (){
        $sleptYears=$this->cal();
        echo "<p> Hey,$this->name you have slept $sleptYears years of your life away.</p>";
    }
    }

    if (!isset($_POST['name'])){

    }
    else{
            $postname=$_POST['name'];
            $postage=$_POST['age'];
            $posthour=$_POST['hours'];

        
            $A1=new Assgn($postname,$postage,$posthour);
            $A1->display();
        }
   ?>
    
    </form>
</body>
</html>