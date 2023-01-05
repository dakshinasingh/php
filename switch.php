<!DOCTYPE html>
<html>
    <head>
        <title>switch-statement</title>
    </head>
    <body>

        <?php
        $x="dog";
        switch($x){
            case "dog":
                echo "the value is dog";
                break;
            case "cat":
                echo "the value is cat";
                break;
            case "cow":
                echo "the value is cow";
                break;
            default:
                echo "the value is some animal";
                break;
        }
        ?>

    </body>
</html>