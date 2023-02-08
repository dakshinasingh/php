<?php
    
    require dirname(__DIR__) . "/vendor/autoload.php";
    echo "ok";
    echo "<hr>";
    //rewritting the url of this page by .htaccess file
    //so that whatever url is given, the result will be shown of this page
    

    //to get the url of the page
    // echo $_SERVER["REQUEST_URI"];
    // echo "<hr>";
    
    //to get the array of the url
    $path= parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    $parts= explode("/", $path);
    // print_r($parts);
    // echo "<hr>";

//to get the resouces,id ,etc
    $resource =$parts[2];
    $id= $parts[3] ?? null;
    // echo $resource,", ", $id;
    // echo "<hr>";
    // echo $_SERVER["REQUEST_METHOD"], "\n";
    
    if($resource != "tasks"){
        // header("{$_SERVER['SERVER_PROTOCOL']}404 Not found");
        http_response_code(404);
        exit;
    }
    // require dirname(__DIR__) . "/src/taskController.php";
    $controller =new Taskcontroller;
    $controller->processRequest($_SERVER['REQUEST_METHOD'], $id);
?>