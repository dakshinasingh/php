<?php

    $link =mysql_connect('localhost','root','');
    if(!$link){
        die('Could not connect to mysql'.mysql_error());
    }
    echo "Connected"; mysql_close($link);
?>