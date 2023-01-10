<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<?php
    class FruitsConstructor{
        public $a;
        public $b;
        public $c;
        function __construct($x,$y,$z){
            $this->a=$x;
            $this->b=$y;
            $this->c=$z;
        }
        public function add(){
            return $this->a+$this->b+$this->c;
        }

    }

?>
</body>
</html>