<!DOCTYPE html>
<html lang="en">
<head>
    <title>Class properties</title>
</head>
<body>
    <?php
        class ClassProp{
            public $radius=3;
            const PIE=3.14;
            public function cir(){
                $cir=2*self::PIE * $this->radius;
                return $cir;

            }
        }

        $c1=new ClassProp();
        $val=$c1->cir();
        print "the radius of $c1->radius is $val";
    ?>
</body>
</html>