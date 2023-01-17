<?php

$ch=curl_init();
// curl_setopt($ch,CURLOPT_URL,"https://www.google.com/");
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

//extra line
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt_array($ch,[
    CURLOPT_URL=> "https://randomuser.me/api",
    CURLOPT_RETURNTRANSFER=> true
]);

$response= curl_exec($ch);
curl_close($ch);
echo $response,"\n";
?>
