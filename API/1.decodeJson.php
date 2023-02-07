<?php

// $response=file_get_contents("https://randomuser.me/api");
// $data=json_decode($response,true);
// // var_dump($data);
// echo $data["results"][0]["name"]["first"]."\n";


if(!empty($_GET['name'])){
    $response=file_get_contents("https://api.agify.io?name={$_GET['name']}");
    $data=json_decode($response,true);
    $age=$data["age"];
}
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php if(isset($age)): ?>
        Age: <?= $age ?>
    <?php endif; ?>
    <form action="">
        <label for="name">name: </label>
        <input type="text" name="name" id="name">
        <button>guess age</button>
    </form>
</body>
</html>