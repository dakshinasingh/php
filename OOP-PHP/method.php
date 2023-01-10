<!DOCTYPE html>
<html lang="en">
<head>
    <title>methods</title>
</head>
<body>
    <?php
        class Sleep{
            public $hours=8;
            public $age=54;
            public function sleepYears($hours,$age){
                $sleepYears=($hours * $age)/24;
                return $sleepYears;

            }
        }
        $years1 = new Sleep();
        $val=$years1->sleepYears($years1->hours,$years1->age);
        print "You have slept $val years of your life away";
    ?>

</body>
</html>