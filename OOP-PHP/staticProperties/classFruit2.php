<?php
class FruitStatic2{
    public static $apples=4;
    public static $oranges=4;
    public static $bananas=4;
    public static function addFruits($apple,$oranges,$bananas){
        $total=$apple+$oranges+$bananas;
        return $total;
    }
}
?>